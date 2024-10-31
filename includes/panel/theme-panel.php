<?php
/**
 * Theme Panel
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
class RelicWP_Helper_Theme_Panel {

    /**
     * Start things up
     */
    public function __construct() {

        // Add panel menu
        add_action('admin_menu', array('RelicWP_Helper_Theme_Panel', 'add_page'), 0);

        // Add panel submenu
        add_action('admin_menu', array('RelicWP_Helper_Theme_Panel', 'add_menu_subpage'));

        // Add custom CSS for the theme panel
        add_action('admin_enqueue_scripts', array('RelicWP_Helper_Theme_Panel', 'css'));

        // Register panel settings
        add_action('admin_init', array('RelicWP_Helper_Theme_Panel', 'register_settings'));

        // Load addon files
        self::load_addons();
    }

    /**
     * Return customizer panels
     *
     * @since  1.0.0
     */
    private static function get_panels() {

        $panels = array(
            'pt_general_panel' => array(
                'label' => esc_html__('General Panel', 'relicwp-helper'),
            ),
            'pt_typography_panel' => array(
                'label' => esc_html__('Typography Panel', 'relicwp-helper'),
            ),
            'pt_topbar_panel' => array(
                'label' => esc_html__('Top Bar Panel', 'relicwp-helper'),
            ),
            'pt_header_panel' => array(
                'label' => esc_html__('Header Panel', 'relicwp-helper'),
            ),
            'pt_blog_panel' => array(
                'label' => esc_html__('Blog Panel', 'relicwp-helper'),
            ),
            'pt_sidebar_panel' => array(
                'label' => esc_html__('Sidebar Panel', 'relicwp-helper'),
            ),
            'pt_footer_widgets_panel' => array(
                'label' => esc_html__('Footer Widgets Panel', 'relicwp-helper'),
            ),
            'pt_footer_bottom_panel' => array(
                'label' => esc_html__('Footer Bottom Panel', 'relicwp-helper'),
            ),
            'pt_custom_code_panel' => array(
                'label' => esc_html__('Custom CSS/JS Panel', 'relicwp-helper'),
            ),
        );

        // Apply filters and return
        return apply_filters('relicwp_theme_panels', $panels);
    }

    /**
     * Return customizer options
     *
     * @since  1.0.0
     */
    private static function get_options() {

        $options = array(
            'custom_logo' => array(
                'label' => esc_html__('Upload your logo', 'relicwp-helper'),
                'desc' => esc_html__('Add your own logo and retina logo used for retina screens.', 'relicwp-helper'),
            ),
            'site_icon' => array(
                'label' => esc_html__('Add your favicon', 'relicwp-helper'),
                'desc' => esc_html__('The favicon is used as a browser and app icon for your website.', 'relicwp-helper'),
            ),
            'pdvs_primary_color' => array(
                'label' => esc_html__('Choose your primary color', 'relicwp-helper'),
                'desc' => esc_html__('Replace the default primary and hover color by your own colors.', 'relicwp-helper'),
            ),
            'pdvs_typography_panel' => array(
                'label' => esc_html__('Choose your typography', 'relicwp-helper'),
                'desc' => esc_html__('Choose your own typography for any parts of your website.', 'relicwp-helper'),
                'panel' => true,
            ),
            'pdvs_top_bar' => array(
                'label' => esc_html__('Top bar options', 'relicwp-helper'),
                'desc' => esc_html__('Enable/Disable the top bar, add your own paddings and colors.', 'relicwp-helper'),
            ),
            'pdvs_header_style' => array(
                'label' => esc_html__('Header options', 'relicwp-helper'),
                'desc' => esc_html__('Choose the style, the height and the colors for your site header.', 'relicwp-helper'),
            ),
            'pdvs_footer_widgets' => array(
                'label' => esc_html__('Footer widgets options', 'relicwp-helper'),
                'desc' => esc_html__('Choose the columns number, paddings and colors for the footer widgets.', 'relicwp-helper'),
            ),
            'pdvs_footer_bottom' => array(
                'label' => esc_html__('Footer bottom options', 'relicwp-helper'),
                'desc' => esc_html__('Add your copyright, paddings and colors for the footer bottom.', 'relicwp-helper'),
            ),
            'pdwp_mailchimp_api_key' => array(
                'label' => esc_html__('Mailchimp options', 'relicwp-helper'),
                'desc' => esc_html__('Used for the MailChimp widget and the Newsletter widget of the Ocean Elementor Widgets extension.', 'relicwp-helper'),
            ),
        );

        // Apply filters and return
        return apply_filters('relicwp_customizer_options', $options);
    }

    /**
     * Registers a new menu page
     *
     * @since 1.0.0
     */
    public static function add_page() {
        add_menu_page(
                esc_html__('Theme Panel', 'relicwp-helper'), 'Theme Panel', // This menu cannot be translated because it's used for the $hook prefix
                apply_filters('pdvs_theme_panel_capabilities', 'manage_options'), 'relicwp-panel', '', 'dashicons-admin-generic', null
        );
    }

    /**
     * Registers a new submenu page
     *
     * @since 1.0.0
     */
    public static function add_menu_subpage() {
        add_submenu_page(
                'relicwp-general', esc_html__('General', 'relicwp-helper'), esc_html__('General', 'relicwp-helper'), apply_filters('pdvs_theme_panel_capabilities', 'manage_options'), 'relicwp-panel', array('RelicWP_Helper_Theme_Panel', 'create_admin_page')
        );
    }

    /**
     * Register a setting and its sanitization callback.
     *
     * @since 1.0.0
     */
    public static function register_settings() {
        register_setting('pt_panels_settings', 'pt_panels_settings', array('RelicWP_Helper_Theme_Panel', 'validate_panels'));
        register_setting('pdwp_options', 'pdwp_options', array('RelicWP_Helper_Theme_Panel', 'admin_sanitize_license_options'));
        //added by asad
        register_setting('owp_integrations', 'owp_integrations', array('RelicWP_Helper_Theme_Panel', 'sanitize_settings'));
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

    /**
     * Validate Settings Options
     * 
     * @since 1.0.0
     */
    public static function admin_sanitize_license_options($input) {
        if (current_user_can('manage_options')) {
            // filter to save all settings to database
            $pdwp_options = get_option('pdwp_options');
            if (isset($input['licenses']) && !empty($input['licenses'])) {
                foreach ($input['licenses'] as $key => $value) {
                    if ($pdwp_options['licenses'][$key]) {
                        if (strpos($value, "XXX") !== FALSE && isset($pdwp_options['licenses'][$key])) {
                            $input['licenses'][$key] = $pdwp_options['licenses'][$key];
                        }
                    }
                }
            }

            return $input;
        }
    }

    /**
     * Main Sanitization callback
     *
     * @since  1.0.0
     */
    public static function validate_panels($settings) {

        // Get panels array
        $panels = self::get_panels();
        if (current_user_can('manage_options') && isset($_POST['_wpnonce']) && wp_verify_nonce($_POST['_wpnonce'], 'pt_panels_settings-options')) {

            foreach ($panels as $key => $val) {

                $settings[$key] = !empty($settings[$key]) ? true : false;
            }
        } 

        // Return the validated/sanitized settings
        return $settings;
    }

    /**
     * Get settings.
     *
     * @since  1.0.0
     */
    public static function get_setting($option = '') {

        $defaults = self::get_default_settings();

        $settings = wp_parse_args(get_option('pt_panels_settings', $defaults), $defaults);

        return isset($settings[$option]) ? $settings[$option] : false;
    }

    /**
     * Get default settings value.
     *
     * @since  1.0.0
     */
    public static function get_default_settings() {

        // Get panels array
        $panels = self::get_panels();

        // Add array
        $default = array();

        foreach ($panels as $key => $val) {
            $default[$key] = 1;
        }

        // Return
        return apply_filters('relicwp_default_panels', $default);
    }

    /**
     * Settings page sidebar
     *
     * @since  1.0.0
     */
    public static function admin_page_sidebar() {

        // Image url
        //$facebook = RTHP_URL . 'includes/panel/assets/img/facebook.svg';
        $facebook = RTHP_URL . 'includes/panel/assets/img/Facebook.png';

        // Bundle link
        $bundle_link = 'https://relicwp.com/relicwp-extensions-bundle/';

        // If bundle box
        $class = '';
        if (true != apply_filters('pdwp_licence_tab_enable', false)) {
            $class = ' has-bundle';
        }

        // Setup Wizard button
        if (!get_option('owp_wizard')) {
            ?>

            <div class="pdwp-wizard">
                <!--<a href="<?php echo esc_url(admin_url('admin.php?page=owp_setup')); ?>" class="button owp-button"><?php esc_html_e('Run the Setup Wizard', 'relicwp-helper'); ?></a>-->
                <a href="<?php echo esc_url(admin_url('admin.php?page=owp_setup')); ?>" class="pdwp-btn ws"><?php esc_html_e('Run the Setup Wizard', 'relicwp-helper'); ?></a>
            </div>

            <?php
        }
        ?>

        <?php
        // if no premium extensions activated
        if (true != apply_filters('pdwp_licence_tab_enable', false)) {
        ?>
        <div class="pdwp-block pdwp-block_widget pdwp-text-center pdwp-mb-30">
            <p class="pdwp-text">
                <a href="<?php echo esc_url($bundle_link); ?>" class="pdwp-logo-text" target="_blank">RelicWP<span class="circle"></span></a>
            </p>
            <div class="content-wrap">
                <p class="content pdwp-mb-50"><?php echo sprintf(esc_html__('Unlock the true potential of RelicWP.%1$sPurchase all the premium extensions at once, %2$sClick here%3$s.', 'relicwp-helper'), '<br>', '<a href="' . esc_url($bundle_link) . '" target="_blank">', '</a>');
                    ?></p>
                <a href="<?php echo esc_url($bundle_link); ?>" class="pdwp-btn" target="_blank"><?php esc_html_e('Read More', 'relicwp-helper'); ?></a>
            </div>
        </div>
        <?php
        }
        ?>

        <div class="pdwp-block pdwp-block_facebook pdwp-text-center pdwp-mb-30">
            <p class="pdwp-img">
                <a href="https://www.facebook.com/groups/RelicWP/" target="_blank">
                    <img src="<?php echo esc_url($facebook); ?>" alt="Facebook Group">
                </a>
            </p>
            <div class="content-wrap">
                <p class="content pdwp-mb-50"><?php esc_html_e('Be a member of our elite Facebook group to get early access to all of our latest and greatest features. Converge with other members to know how to get the best out of RelicWP.', 'relicwp-helper'); ?></p>
                <a href="https://www.facebook.com/groups/relicwp/" class="pdwp-btn pdwp-btn__white" target="_blank"><?php esc_html_e('Join the Group', 'relicwp-helper'); ?></a>
            </div>
            <i class="dashicons dashicons-facebook-alt"></i>
        </div>
        <div class="pdwp-buttons">
            <!--<a href="https://www.youtube.com/c/RelicWP"
               class="pdwp-btn pdwp-video-btn  pdwp-inline-block pdwp-mb-25" target="_blank"><?php esc_html_e('Videos', 'relicwp-helper'); ?></a>-->
            <a href="https://relicwp.com/docs" class="pdwp-btn pdwp-doc-btn pdwp-inline-block pdwp-mb-25" target="_blank"><?php esc_html_e('Documentation', 'relicwp-helper'); ?></a>
            <a href="https://relicwp.com/support/" class="pdwp-btn pdwp-ticket-btn pdwp-block " target="_blank"><?php esc_html_e('Open a Support Ticket', 'relicwp-helper'); ?></a>
        </div>

        <?php
    }

    //added by asad

    /**
     * Get settings.
     *
     * @since  1.0.0
     */
    public static function get_settings() {

        $settings = array(
            'mailchimp_api_key' => get_option('owp_mailchimp_api_key'),
            'mailchimp_list_id' => get_option('owp_mailchimp_list_id'),
        );

        return apply_filters('pdvs_integrations_settings', $settings);
    }

    /**
     * Settings page output
     *
     * @since 1.0.0
     */
    public static function create_admin_page() {

        // Get panels array
        //$theme_panels = self::get_panels();

        // Get options array
        $options = self::get_options();

        //added by asad
        $settings = self::get_settings();
        ?>

        <div class="wrap pdwp-theme-panel clr">

            <h1><?php esc_html_e('Theme Panel', 'relicwp-helper'); ?></h1>

            <?php do_action('pdvs_theme_panel_before_content'); ?>

            <div class="pdwp-settings clr">

                    <?php do_action('relicwp_theme_panel_after'); ?>

                    <div class="pdwp-theme-options">

                        <div class="pdwp-container">
                            <header class="pdwp-section-title">
                                <h2 class="pdwp-title"><?php esc_html_e('Getting started', 'relicwp-helper'); ?></h2>
                                <p class="pdwp-desc"><?php esc_html_e('Take a look in the options of the Customizer and see yourself how easy and quick to customize your website as you wish.', 'relicwp-helper'); ?></p>
                            </header>
                        </div>

                        <div class="pdwp-container clr">
                            <div class="options-inner-left">
                                <div class="pdwp-flex-container">
                                    <?php
                                    // Loop through options
                                    foreach ($options as $key => $val) :

                                        // Var
                                        $label = isset($val['label']) ? $val['label'] : '';
                                        $desc = isset($val['desc']) ? $val['desc'] : '';
                                        $panel = isset($val['panel']) ? $val['panel'] : false;
                                        $id = $key;

                                        if (true == $panel) {
                                            $focus = 'panel';
                                        } else {
                                            $focus = 'control';
                                        }
                                        ?>

                                        <div class="pdwp-column-wrap">
                                            <div class="pdwp-column-inner pdwp-text-center">
                                                <div class="pdwp-inner-box">
                                                    <h3 class="pdwp-inner-title pdwp-mb-25"><?php echo esc_html($label); ?></h3>
                                                    <?php if ($desc) { ?>
                                                    <p class="pdwp-inner-desc pdwp-mb-40"><?php echo esc_html($desc); ?></p>
                                                    <?php }; ?>
                                                </div>
                                                <div class="pdwp-inner-link-box pdwp-inner-link__border-top">
                                                    <a class="pdwp-inner-option-link" href="<?php echo esc_url(admin_url('customize.php?autofocus[' . $focus . ']=' . $id . '')); ?>" target="_blank"><?php esc_html_e('Go to the option', 'relicwp-helper'); ?></a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php if (true != apply_filters('pdwp_theme_panel_sidebar_enabled', false)) { ?>
                            <div class="options-inner-right">
                                <?php self::admin_page_sidebar(); ?>
                                <?php do_action('relicwp_panels_sidebar_after'); ?>
                            </div>
                            <?php } ?>
                        </div><!-- .options-inner -->

                    </div>

            </div><!-- .pdwp-settings -->

            <?php do_action('pdvs_theme_panel_after_content'); ?>

        </div>

        <?php
    }

    /**
     * Include addons
     *
     * @since 1.0.0
     */
    private static function load_addons() {

        // Addons directory location
        $dir = RTHP_PATH . '/includes/panel/';

        if (is_admin()) {

            // Import/Export
            require_once( $dir . 'import-export.php' );

            /**
             * Since the SDK is initiated within the functions.php of the theme, make sure to check if the SDK is set only after the theme's setup.
             *
             * @author RelicWP
             */
            add_action( 'after_setup_theme', 'RelicWP_Helper_Theme_Panel::load_addons_after_theme_setup' );
        }

        // Scripts panel - if minimum PHP 5.6
        if (version_compare(PHP_VERSION, '5.6', '>=')) {
            require_once( $dir . 'scripts.php' );
        }
    }

    /**
     * Since the SDK is initiated within the functions.php of the theme, make sure to check if the SDK is set only after the theme's setup.
     *
     * @author RelicWP
     */
    public static function load_addons_after_theme_setup() {
        if ( function_exists( 'rel_fs' ) ) {
            // Don't add extensions and licenses when Freemius is in place.
            return;
        }

        // Addons directory location
        $dir = RTHP_PATH . '/includes/panel/';

        // Extensions
        require_once( $dir . 'extensions.php' );

        // Licenses
        require_once( $dir . 'licenses.php' );
    }

    /**
     * Theme panel CSS
     *
     * @since 1.0.0
     */
    public static function css($hook) {
		
        // Only load scripts when needed
        //if ('toplevel_page_relicwp-panel' != $hook) {
        if ('toplevel_page_relicwp-panel' != $hook) {
            return;
        }
		
        // CSS
        //wp_enqueue_style('pdwp-theme-panel', plugins_url('/assets/css/panel.min.css', __FILE__));
        wp_enqueue_style('pdwp-theme-panel', plugins_url('/assets/css/panel.css', __FILE__));
    }

}

new RelicWP_Helper_Theme_Panel();
