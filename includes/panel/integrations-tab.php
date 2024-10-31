<?php
/**
 * Integrations page in Theme Panel
 *
 * @package RelicWP_Helper
 * @category Core
 * @author PdWP
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Start Class
class RelicWP_Integrations {

    /**
     * Start things up
     */
    public function __construct() {
        add_action('pdvs_theme_panel_after_tab', array($this, 'tab'));
        add_action('admin_init', array($this, 'register_settings'));
        add_action('pdvs_theme_panel_after_content', array($this, 'content'));
    }

    /**
     * Integrations tab
     *
     * @since  1.0.0
     */
    public static function tab() {
        //Get current tab
        $curr_tab = !empty($_GET['tab']) ? sanitize_text_field( $_GET['tab'] ) : 'features';

        // Integrations url
        $integrations_url = add_query_arg(
            array(
				'page' => 'relicwp-panel',
				'tab' => 'integrations',
            ), 'admin.php'
        );
        ?>

        <a href="<?php echo esc_url($integrations_url); ?>" class="nav-tab <?php echo $curr_tab == 'integrations' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e('Integrations', 'relicwp-helper'); ?></a>

        <?php
    }

    /**
     * Get settings.
     *
     * @since  1.0.0
     */
    public static function get_settings() {

        $settings = array(
            'mailchimp_api_key' => get_theme_mod('pdwp_mailchimp_api_key'),
            'mailchimp_list_id' => get_theme_mod('pdwp_mailchimp_list_id'),
        );

        return apply_filters('pdvs_integrations_settings', $settings);
    }

    /**
     * Integrations content
     *
     * @since  1.0.0
     */
    public static function content() {
        //Get current tab
        $curr_tab = !empty($_GET['tab']) ? sanitize_text_field( $_GET['tab'] ) : 'features';

        // Get settings
        $settings = self::get_settings();
        ?>

        <div class="pdwp-settings clr" <?php echo $curr_tab == 'integrations' ? '' : 'style="display:none;"'; ?>>

            <?php if (true != apply_filters('pdwp_theme_panel_sidebar_enabled', false)) { ?>

                <div class="pdwp-sidebar right clr">

                    <?php RelicWP_Helper_Theme_Panel::admin_page_sidebar(); ?>

                </div>

            <?php } ?>

            <div class="left clr">

                <form method="post" action="options.php">
                    <?php settings_fields('owp_integrations'); ?>

                    <div class="pdwp-panels clr">

                        <h2 id="mailchimp"><?php esc_html_e('MailChimp', 'relicwp-helper'); ?></h2>
                        <p class="description">
                            <?php
                            echo
                            sprintf(
                                    esc_html__('Used for the MailChimp widget and the Newsletter widget of the RelicWP Elementor Widgets extension. %1$sFollow this article%2$s to get your API Key and List ID.', 'relicwp-helper'), '<a href="https://relicwp/docs/get-your-mailchimp-api-key-and-list-id" target="_blank">', '</a>'
                            );
                            ?>
                        </p>

                        <table class="form-table">
                            <tbody>
                                <tr id="owp_mailchimp_api_key_tr">
                                    <th scope="row">
                                        <label for="owp_mailchimp_api_key"><?php esc_html_e('API Key', 'relicwp-helper'); ?></label>
                                    </th>
                                    <td>
                                        <input name="owp_integrations[mailchimp_api_key]" type="text" id="owp_mailchimp_api_key" value="<?php echo esc_attr($settings['mailchimp_api_key']); ?>" class="regular-text">
                                    </td>
                                </tr>
                                <tr id="owp_mailchimp_list_id_tr">
                                    <th scope="row">
                                        <label for="owp_mailchimp_list_id"><?php esc_html_e('List ID', 'relicwp-helper'); ?></label>
                                    </th>
                                    <td>
                                        <input name="owp_integrations[mailchimp_list_id]" type="text" id="owp_mailchimp_list_id" value="<?php echo esc_attr($settings['mailchimp_list_id']); ?>" class="regular-text">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <?php do_action('pdvs_integrations_after_content'); ?>

                        <?php submit_button(); ?>

                    </div>

                </form>

            </div>

        </div><!-- .pdwp-settings -->

        <?php
    }

    /**
     * Register a setting and its sanitization callback.
     *
     * @since  1.0.0
     */
    public function register_settings() {
        register_setting('owp_integrations', 'owp_integrations', array($this, 'sanitize_settings'));
    }

    /**
     * Main Sanitization callback
     *
     * @since  1.0.0
     */
    public static function sanitize_settings() {

        // Get settings
        $settings = self::get_settings();
        if (current_user_can('manage_options') && isset($_REQUEST['_wpnonce']) && wp_verify_nonce($_REQUEST['_wpnonce'], 'owp_integrations-options')) {
            foreach ($settings as $key => $setting) {
                if (isset($_POST['owp_integrations'][$key])) {
                    update_option('owp_' . $key, sanitize_text_field(wp_unslash($_POST['owp_integrations'][$key])));
                }
            }
        }

    }

}

new RelicWP_Integrations();
