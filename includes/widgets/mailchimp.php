<?php
/**
 * MailChimp Widget.
 *
 * @package PdWP WordPress theme
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('RelicWP_Helper_MailChimp_Widget')) {

    class RelicWP_Helper_MailChimp_Widget extends WP_Widget {

        /**
         * Register widget with WordPress.
         *
         * @since 1.0.0
         */
        public function __construct() {
            parent::__construct(
                    'pdvs_mailchimp', esc_html__('&raquo; MailChimp', 'relicwp-helper'), array(
                'classname' => 'widget-pdwp-mailchimp mailchimp-widget',
                'description' => esc_html__('Displays mailchimp subscription form.', 'relicwp-helper'),
                'customize_selective_refresh' => true,
                    )
            );

            add_action( 'wp_enqueue_scripts', array( $this, 'pdvs_extra_mailchimp_js' ) );
            add_filter( 'pdvs_localize_array', array( $this, 'localize_array' ) );

            add_action('wp_ajax_pdwp_mailchimp_request', array($this, 'pdwp_mailchimp_request_callback'));
            add_action('wp_ajax_nopriv_pdwp_mailchimp_request', array($this, 'pdwp_mailchimp_request_callback'));
        }

        public function pdwp_mailchimp_request_callback() {

            $api_key     = get_theme_mod( 'pdwp_mailchimp_api_key' );
            $list_id    = get_theme_mod( 'pdwp_mailchimp_list_id' );

            $email      = ( isset( $_POST['email'] ) ) ? sanitize_email( $_POST['email'] ) : '';
            $res_status     = FALSE;

            if ( $email && $api_key && $list_id ) {

                $status = 'subscribed'; // unsubscribed, subscribed, cleaned, pending

                $args = array(
                    'method' => 'PUT',
                    'headers' => array(
                        'Authorization' => 'Basic ' . base64_encode( 'user:'. $api_key )
                    ),
                    'body' => json_encode(array(
                        'email_address' => $email,
                        'status'        => $status
                    ))
                );
                $response = wp_remote_post( 'https://' . substr($api_key,strpos($api_key,'-')+1) . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . md5(strtolower($email)), $args );

                $body = json_decode( $response['body'] );

                if ( $response['response']['code'] == 200 && $body->status == $status ) {
                    $res_status = TRUE;
                }


            }

            wp_send_json( array( 'status' => $res_status ) );
        }

        /**
         * Front-end display of widget.
         *
         * @see WP_Widget::widget()
         * @since 1.0.0
         *
         * @param array $args     Widget arguments.
         * @param array $instance Saved values from database.
         */
        public function widget($args, $instance) {

            $title = isset($instance['title']) ? apply_filters('widget_title', $instance['title']) : '';
            $subscribe_text = isset($instance['subscribe_text']) ? $instance['subscribe_text'] : '';
            $mailchimp_gdpr_label = isset($instance['mailchimp_gdpr_label']) ? $instance['mailchimp_gdpr_label'] : '';
            $width = isset($instance['width']) ? $instance['width'] : '';
            $height = isset($instance['height']) ? $instance['height'] : '';
            $placeholder = isset($instance['placeholder']) ? $instance['placeholder'] : '';
            $submit_text = isset($instance['submit_text']) ? $instance['submit_text'] : '';

            // Sanitize vars
            $width = $width ? $width : '';
            $height = $height ? $height : '';

            // Inline style
            $form_style = '';
            $input_style = '';
            if ($width) {
                $form_style .= 'width:' . esc_attr($width) . ';';
            }
            if ($height) {
                $input_style .= 'height:' . esc_attr($height) . ';';
            }
            if ($form_style) {
                $form_style = ' style="' . esc_attr($form_style) . '"';
            }
            if ($input_style) {
                $input_style = ' style="' . esc_attr($input_style) . '"';
            }

            // Before widget WP hook
            echo $args['before_widget'];

            // Show widget title
            if ($title) {
                echo $args['before_title'] . esc_html($title) . $args['after_title'];
            } ?>

            <div class="pdwp-newsletter-form clr">

                <div class="pdwp-newsletter-form-wrap">

                    <?php if ($subscribe_text) { ?>

                        <div class="pdwp-mail-text"><?php echo wp_kses_post( do_shortcode($subscribe_text) ); ?></div>

                    <?php } ?>

                    <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate<?php echo wp_kses_post($form_style); ?>>

                        <div class="email-wrap elem-wrap">
                            <input type="email" placeholder="<?php echo esc_attr($placeholder); ?>" onfocus="if (this.value == this.defaultValue)this.value = '';" onblur="if (this.value == '')this.value = this.defaultValue;" name="EMAIL" class="required email"<?php echo wp_kses_post($input_style); ?>>

                            <?php if ($submit_text) { ?>
                                <button type="submit" value="" name="subscribe" class="button">
                                    <?php echo esc_html($submit_text); ?>
                                </button>
                            <?php } ?>
                        </div>
                        <span class="email-err err-msg req" style="display:none;"><?php _e("Email is required.", "pdt-helper"); ?></span>
                        <span class="email-err err-msg not-valid" style="display:none;"><?php _e("Email not valid.", "pdt-helper"); ?></span>

                        <?php if ($mailchimp_gdpr_label) { ?>
                            <div class="gdpr-wrap elem-wrap">
                                <label><input type="checkbox" name="GDPR" value="1" class="gdpr required"><?php echo esc_html($mailchimp_gdpr_label); ?></label>
                                <span class="gdpr-err err-msg" style="display:none;"><?php _e("This field is required", "pdt-helper"); ?></span>
                            </div>
                        <?php } ?>

                        <div class="success res-msg" style="display:none;"><?php _e("Thanks for your subscription.", "pdt-helper"); ?></div>
                        <div class="failed  res-msg" style="display:none;"><?php _e("Failed to subscribe, please contact admin.", "pdt-helper"); ?></div>
                    </form>

                </div><!--.pdwp-newsletter-form-wrap-->

            </div><!-- .pdwp-newsletter-form -->

            <?php
            // After widget WP hook
            echo $args['after_widget'];
        }

        /**
         * Sanitize widget form values as they are saved.
         *
         * @see WP_Widget::update()
         * @since 1.0.0
         *
         * @param array $new_instance Values just sent to be saved.
         * @param array $old_instance Previously saved values from database.
         *
         * @return array Updated safe values to be saved.
         */
        public function update($new_instance, $old_instance) {
            $instance = $old_instance;
            $instance['title'] = !empty($new_instance['title']) ? strip_tags($new_instance['title']) : '';
            $instance['subscribe_text'] = !empty($new_instance['subscribe_text']) ? strip_tags($new_instance['subscribe_text']) : '';
            $instance['mailchimp_gdpr_label'] = !empty($new_instance['mailchimp_gdpr_label']) ? strip_tags($new_instance['mailchimp_gdpr_label']) : '';
            $instance['width'] = !empty($new_instance['width']) ? strip_tags($new_instance['width']) : '';
            $instance['height'] = !empty($new_instance['height']) ? strip_tags($new_instance['height']) : '';
            $instance['placeholder'] = !empty($new_instance['placeholder']) ? strip_tags($new_instance['placeholder']) : '';
            $instance['submit_text'] = !empty($new_instance['submit_text']) ? strip_tags($new_instance['submit_text']) : '';
            return $instance;
        }

        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         * @since 1.0.0
         *
         * @param array $instance Previously saved values from database.
         */
        public function form($instance) {

            // Parse arguments
            $instance = wp_parse_args((array) $instance, array(
                'title' => esc_attr__('Newsletter', 'relicwp-helper'),
                'subscribe_text' => esc_html__('Get all latest content delivered to your email a few times a month. Updates and news about all categories will send to you.', 'relicwp-helper'),
                'mailchimp_gdpr_label' => esc_attr__('Accept GDPR Terms', 'relicwp-helper'),
                'width' => '',
                'height' => '',
                'placeholder' => esc_html__('Your Email', 'relicwp-helper'),
                'submit_text' => esc_html__('Go', 'relicwp-helper'),
            ));

            // If no API KEy and List ID
            if ( ! get_theme_mod( 'pdwp_mailchimp_api_key' )
                || ! get_theme_mod( 'pdwp_mailchimp_list_id' ) ) { ?>
                <p>
                    <?php echo sprintf(
                        __( 'You need to set your Api Key & List Id on the %1$ssettings page%2$s', 'relicwp-helper' ),
                        '<a href="' . add_query_arg( array( 'page' => 'relicwp-panel&tab=features#mailchimp', ), esc_url( admin_url( 'admin.php' ) ) ) . '" target="_blank">',
                        '</a>' ); ?>
                </p>
            <?php } ?>

            <p>
                <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'relicwp-helper'); ?>:</label>
                <input class="widefat" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($instance['title']); ?>" />
            </p>

            <p>
                <label for="<?php echo esc_attr($this->get_field_id('subscribe_text')); ?>">
                    <?php esc_html_e('Text', 'relicwp-helper'); ?></label>
                <textarea rows="15" id="<?php echo esc_attr($this->get_field_id('subscribe_text')); ?>" name="<?php echo esc_attr($this->get_field_name('subscribe_text')); ?>" class="widefat" style="height: 100px;"><?php
                    if (!empty($instance['subscribe_text'])) {
                        echo esc_textarea($instance['subscribe_text']);
                    }
                    ?></textarea>
            </p>

            <p>
                <label for="<?php echo esc_attr($this->get_field_id('mailchimp_gdpr_label')); ?>"><?php esc_html_e('GDPR Field Label', 'relicwp-helper'); ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('mailchimp_gdpr_label')); ?>" name="<?php echo esc_attr($this->get_field_name('mailchimp_gdpr_label')); ?>" type="text" value="<?php echo esc_attr($instance['mailchimp_gdpr_label']); ?>" />
            </p>

            <p>
                <label for="<?php echo esc_attr($this->get_field_id('width')); ?>"><?php esc_html_e('Input Width (px)', 'relicwp-helper'); ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('width')); ?>" name="<?php echo esc_attr($this->get_field_name('width')); ?>" type="text" value="<?php echo esc_attr($instance['width']); ?>" />
            </p>

            <p>
                <label for="<?php echo esc_attr($this->get_field_id('height')); ?>"><?php esc_html_e('Input Height (px)', 'relicwp-helper'); ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('height')); ?>" name="<?php echo esc_attr($this->get_field_name('height')); ?>" type="text" value="<?php echo esc_attr($instance['height']); ?>" />
            </p>

            <p>
                <label for="<?php echo esc_attr($this->get_field_id('placeholder')); ?>"><?php esc_html_e('Placeholder', 'relicwp-helper'); ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('placeholder')); ?>" name="<?php echo esc_attr($this->get_field_name('placeholder')); ?>" type="text" value="<?php echo esc_attr($instance['placeholder']); ?>" />
            </p>

            <p>
                <label for="<?php echo esc_attr($this->get_field_id('submit_text')); ?>"><?php esc_html_e('Submit Text', 'relicwp-helper'); ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('submit_text')); ?>" name="<?php echo esc_attr($this->get_field_name('submit_text')); ?>" type="text" value="<?php echo esc_attr($instance['submit_text']); ?>" />
            </p>

            <?php
        }

        /**
         * Upload the Javascripts for mailchimp
         */
        public function pdvs_extra_mailchimp_js() {
            // Load only if the widget is used
            if ( is_active_widget( '', '', 'pdvs_mailchimp' ) ) {
                wp_enqueue_script('pt-mailchimp-script', RTHP_URL . 'includes/widgets/js/mailchimp.min.js', array('jquery'), false, true);
            }
        }

        /**
         * Localize array.
         */
        public function localize_array( $array ) {
            $array['ajax_url'] = admin_url( 'admin-ajax.php' );
            return $array;
        }

    }

}
register_widget('RelicWP_Helper_MailChimp_Widget');
