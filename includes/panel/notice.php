<?php
/**
 * Admin notice
 *
 * @package RelicWP_Helper
 * @category Core
 * @author PdWP
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// The Notice class
if ( ! class_exists( 'RelicWP_Helper_Admin_Notice' ) ) {

    class RelicWP_Helper_Admin_Notice {

        /**
         * Admin constructor
         */
        public function __construct() {
            add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
            add_action( 'admin_notices', array( $this, 'rating_notice' ) );
            add_action( 'admin_init', array( $this, 'dismiss_rating_notice' ) );
            add_action( 'admin_enqueue_scripts', array( $this, 'rating_notice_scripts' ) );
        }

        /**
         * Style
         *
         * @since  1.0.0
         */
        public static function admin_scripts() {

            if ( self::get_installed_time() > strtotime( '-24 hours' )
                || class_exists( 'Ocean_White_Label' )
                || '1' === get_option( 'pdvs_extra_dismiss_notice' )
                || ! current_user_can( 'manage_options' )
                || apply_filters( 'pdvs_show_sticky_notice', false ) ) {
                return;
            }

            // CSS
            wp_enqueue_style( 'pt-admin-notice', plugins_url( '/assets/css/notice.min.css', __FILE__ ) );

        }

        /**
         * Display rating notice
         *
         * @since  1.0.0
         */
        public static function rating_notice() {
            // Show notice after 240 hours from installed time.
            if ( self::get_installed_time() > strtotime( '-240 hours' )
                || class_exists( 'Ocean_White_Label' )
                || '1' === get_option( 'pdvs_extra_dismiss_rating_notice' )
                || ! current_user_can( 'manage_options' )
                || apply_filters( 'pdvs_show_sticky_notice', false ) ) {
                return;
            }

            $no_thanks  = wp_nonce_url( add_query_arg( 'pdvs_extra_rating_notice', 'no_thanks_rating_btn' ), 'no_thanks_rating_btn' );
            $dismiss    = wp_nonce_url( add_query_arg( 'pdvs_extra_rating_notice', 'dismiss_rating_btn' ), 'dismiss_rating_btn' ); ?>

            <div class="notice notice-success pdt-helper-notice pt-rating-notice">
                <div class="notice-inner">
                    <span class="dashicons dashicons-star-filled icon-side"></span>
                    <div class="notice-content">
                        <p><?php echo sprintf(
                            esc_html__( 'Hello! We&rsquo;re really grateful that you&rsquo;re now a part of the RelicWP family. We hope you&rsquo;re happy with everything this theme has to offer.%1$sIf you can spare a minute, please help us by leaving a 5-star rating on WordPress.org. By spreading the love, we can continue to develop new amazing features in the future, for free!', 'relicwp-helper' ),
                            '<br/>'
                            ); ?></p>
                        <p><a href="https://wordpress.org/support/theme/relicwp/reviews/?filter=5#new-post" class="btn button-primary" target="_blank"><span class="dashicons dashicons-external"></span><span><?php _e( 'Ok, you deserve it', 'relicwp-helper' ); ?></span></a><a href="<?php echo $no_thanks; ?>" class="btn button-secondary" target="_blank"><span class="dashicons dashicons-calendar"></span><span><?php _e( 'Nope, maybe later', 'relicwp-helper' ); ?></span></a><a href="<?php echo $no_thanks; ?>" class="btn button-secondary"><span class="dashicons dashicons-smiley"></span><span><?php _e( 'I already did', 'relicwp-helper' ); ?></span></a></p>
                    </div>
                    <a href="<?php echo esc_url($dismiss); ?>" class="dismiss"><span class="dashicons dashicons-dismiss"></span></a>
                </div>
            </div>
        <?php
        }

        /**
         * Dismiss rating notice
         *
         * @since  1.0.0
         */
        public static function dismiss_rating_notice() {
            if ( ! current_user_can('manage_options') )
                return;
            if ( ! isset( $_GET['pdvs_extra_rating_notice'] ) ) {
                return;
            }

            if ( 'dismiss_rating_btn' === sanitize_text_field( $_GET['pdvs_extra_rating_notice'] ) ) {
                check_admin_referer( 'dismiss_rating_btn' );
                update_option( 'pdvs_extra_dismiss_rating_notice', '1' );
            }

            if ( 'no_thanks_rating_btn' === sanitize_text_field( $_GET['pdvs_extra_rating_notice'] ) ) {
                check_admin_referer( 'no_thanks_rating_btn' );
                update_option( 'pdvs_extra_dismiss_rating_notice', '1' );
            }

            wp_redirect( remove_query_arg( 'pdvs_extra_rating_notice' ) );
            exit;
        }

        /**
         * Style
         *
         * @since  1.0.0
         */
        public static function rating_notice_scripts() {

            if ( self::get_installed_time() > strtotime( '-240 hours' )
                || class_exists( 'Ocean_White_Label' )
                || '1' === get_option( 'pdvs_extra_dismiss_rating_notice' )
                || ! current_user_can( 'manage_options' )
                || apply_filters( 'pdvs_show_sticky_notice', false ) ) {
                return;
            }

            // CSS
            wp_enqueue_style( 'pt-rating-notice', plugins_url( '/assets/css/notice.min.css', __FILE__ ) );

        }

        /**
         * Installed time
         *
         * @since  1.0.0
         */
        private static function get_installed_time() {
            $installed_time = get_option( 'pdvs_extra_installed_time' );
            if ( ! $installed_time ) {
                $installed_time = time();
                update_option( 'pdvs_extra_installed_time', $installed_time );
            }
            return $installed_time;
        }

    }

    new RelicWP_Helper_Admin_Notice();
}