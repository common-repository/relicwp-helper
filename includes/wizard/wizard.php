<?php
/**
 * Theme Wizard
 *
 * @package RelicWP_Helper
 * @category Core
 * @author PdWP
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('RelicWP_Helper_Theme_Wizard')):

    // Start Class
    class RelicWP_Helper_Theme_Wizard {

        /**
         * Current step
         *
         * @var string
         */
        private $step = '';

        /**
         * Steps for the setup wizard
         *
         * @var array
         */
        private $steps = array();

        public function __construct() {
            $this->includes();
            add_action('admin_menu', array($this, 'add_pdvs_wizard_menu'));
            add_action('admin_init', array($this, 'pdvs_wizard_setup'), 99);
            add_action('wp_loaded', array($this, 'remove_notice'));
            add_action('admin_print_styles', array($this, 'add_notice'));
            add_action("add_second_notice", array($this, "install"));
        }

        public static function install() {
            if (!get_option("owp_wizard")) {
                update_option("owp_wizard", "un-setup");
                (wp_safe_redirect(admin_url('admin.php?page=owp_setup')));
            }
            else{
                // first run for automatic message after first 24 hour
                if (!get_option("automatic_2nd_notice")) {
                    update_option("automatic_2nd_notice", "second-time");

                } else {
                    // clear cronjob after second 24 hour
                    wp_clear_scheduled_hook('add_second_notice');
                    delete_option("automatic_2nd_notice");
                    delete_option("2nd_notice");
                    delete_option("owp_wizard");
                    wp_safe_redirect(admin_url());
                    exit;
                }

            }
        }

        // clear cronjob when deactivate plugin
        public static function uninstall() {
            wp_clear_scheduled_hook('add_second_notice');
            delete_option("automatic_2nd_notice");
            delete_option("2nd_notice");
            delete_option("owp_wizard");
        }

        public function remove_notice() {
            if (isset($_GET['owp_wizard_hide_notice']) && sanitize_text_field( $_GET['owp_wizard_hide_notice'] ) == "install") { // WPCS: input var ok, CSRF ok.
                // when finish install
                delete_option("owp_wizard");
                //clear cronjob when finish install
                wp_clear_scheduled_hook('add_second_notice');
                delete_option("2nd_notice");
                if (isset($_GET['show'])) {
                    wp_safe_redirect(home_url());
                    exit;
                }
            } else if( isset($_GET['owp_wizard_hide_notice']) && sanitize_text_field( $_GET['owp_wizard_hide_notice'] ) == "2nd_notice" ) { // WPCS: input var ok, CSRF ok.
                //when skip install
                delete_option("owp_wizard");
                if (!get_option("2nd_notice")) {
                    update_option("2nd_notice", "second-time");
                    $timezone_string = get_option( 'timezone_string' );
                    if ( ! $timezone_string ) {
                        return false;
                    }
                    date_default_timezone_set($timezone_string);

                    // set time for next day
                    $new_time_format = time() + (24 * 60 * 60 );
                    //add "add_second_notice" cronjob
                    if (!wp_next_scheduled('add_second_notice')) {
                        wp_schedule_event($new_time_format, 'daily', 'add_second_notice');
                    }
                } else {
                    //clear cronjob when skip for second time
                    wp_clear_scheduled_hook('add_second_notice');
                }
                if(isset($_GET['show'])){
                    wp_safe_redirect(home_url());
                    exit;
                } else {
                    wp_safe_redirect(admin_url());
                    exit;
                }
            }
        }

        public function add_notice() {
            if ((get_option("owp_wizard") == "un-setup") && (empty($_GET['page']) || 'owp_setup' !== sanitize_text_field( $_GET['page'] ))) {
                if (!get_option("2nd_notice")&&!get_option("automatic_2nd_notice")) {?>
                    <div class="updated notice-success owp-extra-notice">
                        <div class="notice-inner">
                            <div class="notice-content">
                                <p><?php _e('<strong>Welcome to RelicWP</strong> - Are you ready to create an amazing website?', 'relicwp-helper'); ?></p>
                                <p class="submit">
                                    <a href="<?php echo esc_url(admin_url('admin.php?page=owp_setup')); ?>" class="btn button-primary"><?php _e('Run the Setup Wizard', 'relicwp-helper'); ?></a>
                                    <a class="btn button-secondary" href="<?php echo esc_url((add_query_arg('owp_wizard_hide_notice', '2nd_notice'))); ?>"><?php _e('Skip setup', 'relicwp-helper'); ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

                <style type="text/css">
                    .owp-extra-notice.updated { border-color: #13aff0; }
                    .owp-extra-notice .button-primary { background: #13aff0; border-color: #1e9bd0; box-shadow: inset 0 1px 0 rgba(255,255,255,.25), 0 1px 0 #1e9bd0; color: #fff; text-shadow: 0 -1px 1px #1e9bd0, 1px 0 1px #1e9bd0, 0 1px 1px #1e9bd0, -1px 0 1px #1e9bd0; }

                    .owp-extra-notice.owp-contest-notice { position: relative; border: none; padding: 0; }
                    .owp-extra-notice.owp-contest-notice:after { content: ''; display: block; visibility: hidden; clear: both; zoom: 1; height: 0; }
                    .owp-extra-notice.owp-contest-notice { position: relative; }
                    .owp-extra-notice.owp-contest-notice span.icon-side { color: #fff; position: absolute; top: 0; left: 0; display: -webkit-box; display: -ms-flexbox; display: flex; -webkit-box-pack: center; -ms-flex-pack: center; justify-content: center; -webkit-box-align: center; -webkit-align-items: center; -moz-align-items: center; align-items: center; font-size: 30px; width: 60px; height: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
                    .owp-extra-notice.owp-contest-notice span.dashicons-heart { background-color: #13aff0; }
                    .owp-extra-notice.owp-contest-notice { padding: 10px 40px 15px 74px; }
                    .owp-extra-notice.owp-contest-notice p { font-size: 14px; }
                    .owp-extra-notice.owp-contest-notice p:first-child { margin-top: 0; }
                    .owp-extra-notice.owp-contest-notice p:last-child { margin-bottom: 0; }
                    .owp-extra-notice.owp-contest-notice a { text-decoration: none; -webkit-box-shadow: none !important; box-shadow: none !important; }
                    .owp-extra-notice.owp-contest-notice a.btn { height: auto; font-size: 12px; line-height: 1; background-color: #13aff0; color: #fff; border: 1px solid #13aff0; padding: 10px 18px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.4px; text-shadow: none; transition: all .3s ease; -webkit-transition: all .3s ease; -moz-transition: all .3s ease; -o-transition: all .3s ease; -ms-transition: all .3s ease; }
                    .owp-extra-notice.owp-contest-notice a.btn:hover { background-color: #0b7cac; border-color: #0b7cac; }
                    .owp-extra-notice.owp-contest-notice a.btn.button-secondary { background-color: #f2f2f2; color: #666; border-color: #dadada; margin-left: 10px; }
                    .owp-extra-notice.owp-contest-notice a.btn.button-secondary:hover { background-color: #e6e6e6; border-color: #e6e6e6; }
                    .owp-extra-notice.owp-contest-notice a.dismiss { position: absolute; top: 10px; right: 10px; text-decoration: none; color: #13aff0; -webkit-box-shadow: none !important; box-shadow: none !important; }

                    /* Rating notice */
                    .owp-extra-notice.pt-rating-notice.owp-contest-notice span.dashicons-star-filled { background-color: #ffb900; }
                    .owp-extra-notice.pt-rating-notice.owp-contest-notice p:last-child { margin-top: 20px; }
                    .owp-extra-notice.pt-rating-notice.owp-contest-notice a.btn { background-color: #ffb900; border-color: #ffb900; }
                    .owp-extra-notice.pt-rating-notice.owp-contest-notice a.btn:hover { background-color: #e6a803; border-color: #e6a803; }
                    .owp-extra-notice.pt-rating-notice.owp-contest-notice a.btn.button-secondary { background-color: #f2f2f2; color: #666; border-color: #dadada; }
                    .owp-extra-notice.pt-rating-notice.owp-contest-notice a.btn.button-secondary:hover { background-color: #e6e6e6; border-color: #e6e6e6; }
                    .owp-extra-notice.pt-rating-notice.owp-contest-notice a span { vertical-align: middle; }
                    .owp-extra-notice.pt-rating-notice.owp-contest-notice a span.dashicons { font-size: 1.4em; padding-right: 5px; height: auto; }
                    .owp-extra-notice.pt-rating-notice.owp-contest-notice a.dismiss { color: #ffb900; }

                    body.rtl .owp-extra-notice.owp-contest-notice span.dashicons-heart { right: 0; left: auto; }
                    body.rtl .owp-extra-notice.owp-contest-notice { padding-right: 74px; padding-left: 40px; }
                    body.rtl .owp-extra-notice.owp-contest-notice a.btn.button-secondary { margin-right: 10px; margin-left: 0; }
                    body.rtl .owp-extra-notice.owp-contest-notice a.dismiss { left: 10px; right: auto; }

                    @media screen and ( max-width: 480px ) {
                        .owp-extra-notice.owp-contest-notice span.dashicons-heart { display: none; }
                        .owp-extra-notice.owp-contest-notice { padding-left: 14px;  }
                        body.rtl .owp-extra-notice.owp-contest-notice { padding-right: 14px; }
                    }
                </style>

            <?php
            }
        }

        private function includes() {
            require_once( RTHP_PATH . '/includes/wizard/classes/QuietSkin.php' );
            require_once( RTHP_PATH . '/includes/wizard/classes/WizardAjax.php' );
        }

        public function add_pdvs_wizard_menu() {
            add_dashboard_page('', '', 'manage_options', 'owp_setup', '');
        }

        public function pdvs_wizard_setup() {
			if (!current_user_can('manage_options'))
                return;
            if (empty($_GET['page']) || 'owp_setup' !== sanitize_text_field( $_GET['page'] )) { // WPCS: CSRF ok, input var ok.
                return;
            }
            $default_steps = array(
                'welcome' => array(
                    'name' => __('Welcome', 'relicwp-helper'),
                    'view' => array($this, 'pdvs_welcome'),
                ),
                'demo' => array(
                    'name' => __('Choosing Demo', 'relicwp-helper'),
                    'view' => array($this, 'pdvs_demo_setup'),
                ),
                'customize' => array(
                    'name' => __('Customize', 'relicwp-helper'),
                    'view' => array($this, 'pdvs_customize_setup'),
                ),
                'ready' => array(
                    'name' => __('Ready', 'relicwp-helper'),
                    'view' => array($this, 'pdvs_ready_setup'),
                )
            );
            $this->steps = apply_filters('owp_setup_wizard_steps', $default_steps);
            $this->step = isset($_GET['step']) ? sanitize_key($_GET['step']) : current(array_keys($this->steps)); // WPCS: CSRF ok, input var ok.
            // CSS
            wp_enqueue_style('owp-wizard-style', plugins_url('/assets/css/style.min.css', __FILE__));

            // RTL
            if (is_RTL()) {
                wp_enqueue_style('owp-wizard-rtl', plugins_url('/assets/css/rtl.min.css', __FILE__));
            }

            // JS
            wp_enqueue_script('owp-wizard-js', plugins_url('/assets/js/wizard.min.js', __FILE__), array('jquery', 'wp-util', 'updates'));

            wp_localize_script('owp-wizard-js', 'owpDemos', array(
                'ajaxurl' => admin_url('admin-ajax.php'),
                'demo_data_nonce' => wp_create_nonce('get-demo-data'),
                'owp_import_data_nonce' => wp_create_nonce('owp_import_data_nonce'),
                'content_importing_error' => esc_html__('There was a problem during the importing process resulting in the following error from your server:', 'relicwp-helper'),
                'button_activating' => esc_html__('Activating', 'relicwp-helper') . '&hellip;',
                'button_active' => esc_html__('Active', 'relicwp-helper'),
            ));

            global $current_screen, $hook_suffix, $wp_locale;
            if (empty($current_screen))
                set_current_screen();
            $admin_body_class = preg_replace('/[^a-z0-9_-]+/i', '-', $hook_suffix);

            ob_start();
            ?>
            <!DOCTYPE html>
            <html <?php language_attributes(); ?>>
                <head>
                    <meta name="viewport" content="width=device-width" />
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    <title><?php esc_html_e('RelicWP &rsaquo; Setup Wizard', 'relicwp-helper'); ?></title>
                    <script type="text/javascript">
                        addLoadEvent = function (func) {
                            if (typeof jQuery != "undefined")
                                jQuery(document).ready(func);
                            else if (typeof wpOnload != 'function') {
                                wpOnload = func;
                            } else {
                                var oldonload = wpOnload;
                                wpOnload = function () {
                                    oldonload();
                                    func();
                                }
                            }
                        };
                        var ajaxurl = '<?php echo admin_url('admin-ajax.php', 'relative'); ?>',
                                pagenow = '<?php echo $current_screen->id; ?>',
                                typenow = '<?php echo $current_screen->post_type; ?>',
                                adminpage = '<?php echo $admin_body_class; ?>',
                                thousandsSeparator = '<?php echo addslashes($wp_locale->number_format['thousands_sep']); ?>',
                                decimalPoint = '<?php echo addslashes($wp_locale->number_format['decimal_point']); ?>',
                                isRtl = <?php echo (int) is_rtl(); ?>;
                    </script>
					<?php
					//include demos script
					wp_print_scripts('owp-wizard-js');

					//include custom scripts in specifiec steps
					if ($this->step == 'demo' || $this->step == "welcome" || $this->step == 'customize') {
						wp_print_styles('themes');
						wp_print_styles('buttons');
						wp_print_styles('dashboard');
						wp_print_styles('common');
					}

					if ($this->step == 'customize') {
						wp_print_styles('media');
						wp_enqueue_media();
						wp_enqueue_style('wp-color-picker');
						wp_enqueue_script('wp-color-picker');
					}

					//add admin styles
					do_action('admin_print_styles');

					do_action('admin_head');
					?>
                </head>
                <body class="owp-setup wp-core-ui">
					<?php $logo = apply_filters('pdwp_setup_wizard_logo', '<a href="https://relicwp.com/?utm_source=dash&utm_medium=wizard&utm_campaign=logo">RelicWP<span class="circle"></span></a>'); ?>
                    <div id="owp-logo"><?php echo wp_kses_post( $logo ); ?></div>
                    <?php
                    $this->setup_wizard_steps();
                    $this->setup_wizard_content();
                    _wp_footer_scripts();
                    do_action('admin_footer');
                    ?>
                </body>
            </html>
            <?php
            exit;
        }

        /**
         * Output the steps.
         */
        public function setup_wizard_steps() {
            $output_steps = $this->steps;
            ?>
            <ol class="owp-setup-steps">
				<?php
				foreach ($output_steps as $step_key => $step) {
					$is_completed = array_search($this->step, array_keys($this->steps), true) > array_search($step_key, array_keys($this->steps), true);

					if ($step_key === $this->step) {
						?>
							<li class="active"><?php echo esc_html($step['name']); ?></li>
							<?php
						} elseif ($is_completed) {
							?>
							<li class="done">
								<a href="<?php echo esc_url(add_query_arg('step', $step_key, remove_query_arg('activate_error'))); ?>"><?php echo esc_html($step['name']); ?></a>
							</li>
						<?php
					} else {
						?>
							<li><?php echo esc_html($step['name']); ?></li>
							<?php
						}
				}?>
            </ol>
            <?php
        }

		/**
		 * Output the content for the current step.
		 */
		public function setup_wizard_content() {
			echo '<div class="owp-setup-content">';
			if (!empty($this->steps[$this->step]['view'])) {
				call_user_func($this->steps[$this->step]['view'], $this);
			}
			echo '</div>';
		}

		/**
		 * Get Next Step
		 * @param type $step
		 * @return string
		 */
		public function get_next_step_link($step = '') {
			if (!$step) {
				$step = $this->step;
			}

			$keys = array_keys($this->steps);
			if (end($keys) === $step) {
				return admin_url();
			}

			$step_index = array_search($step, $keys, true);
			if (false === $step_index) {
				return '';
			}

			return add_query_arg('step', $keys[$step_index + 1], remove_query_arg('activate_error'));
		}

		/**
		 * Get Previous Step
		 * @param type $step
		 * @return string
		 */
		public function get_previous_step_link($step = '') {

			if (!$step) {
				$step = $this->step;
			}

			$keys = array_keys($this->steps);

			$step_index = array_search($step, $keys, true);

			if (false === $step_index) {
				return '';
			}
			$url = FALSE;

			if (isset($keys[$step_index - 1])) {
				$url = add_query_arg('step', $keys[$step_index - 1], remove_query_arg('activate_error'));
			}
			return $url;
		}

		/**
		 * Helper method to retrieve the current user's email address.
		 *
		 * @return string Email address
		 */
		protected function get_current_user_email() {
			$current_user = wp_get_current_user();
			$user_email = $current_user->user_email;

			return $user_email;
		}

		/**
		 * Step 1 Welcome
		 */
		public function pdvs_welcome() {
			// Image
			$img = plugins_url('/assets/img/jack.png', __FILE__);

			// Button icon
			if (is_RTL()) {
				$icon = 'left';
			} else {
				$icon = 'right';
			}
			?>

			<div class="owp-welcome-wrap owp-wrap">
				<h2><?php esc_html_e("Setup Wizard", 'relicwp-helper'); ?></h2>
				<h1><?php esc_html_e("Welcome!", 'relicwp-helper'); ?></h1>
				<div class="owp-thumb">
					<img src="<?php echo esc_url($img); ?>" width="425" height="290" alt="Jack the Shark" />
				</div>
				<p><?php esc_html_e("Thank you for choosing RelicWP, in this quick setup wizard we'll take you through the 2 essential steps for you to get started building your dream website. Make sure to go through it to the end, where we also included a little bonus as well.", 'relicwp-helper'); ?></p>
				<div class="owp-wizard-setup-actions">
					<a class="skip-btn continue" href="<?php echo $this->get_next_step_link(); ?>"><?php esc_html_e("Get started", 'relicwp-helper'); ?><i class="dashicons dashicons-arrow-<?php echo esc_attr($icon); ?>-alt"></i></a>
				</div>
				<a class="owp-setup-footer-links" href="<?php echo esc_url(( add_query_arg(array('owp_wizard_hide_notice' => '2nd_notice'), admin_url()))); ?>"><?php esc_html_e("Skip Setup Wizard", 'relicwp-helper'); ?></a>
			</div>
		<?php
		}

        /**
         * Step 2 list demo
         */
        public function pdvs_demo_setup() {
            $demos = PdWP_Demos::get_demos_data();

            // Button icon
            if (is_RTL()) {
                $icon = 'left';
            } else {
                $icon = 'right';
            }
            ?>

            <div class="owp-demos-wrap owp-wrap">
                <div class="demo-import-loader preview-all"></div>
                <div class="demo-import-loader preview-icon"><i class="custom-loader"></i></div>

                <div class="owp-demo-wrap">
                    <h1><?php esc_html_e("Selecting your demo template", 'relicwp-helper'); ?></h1>
                    <p><?php
                        echo
                        sprintf(__('Clicking %1$sLive Preview%2$s will open the demo in a new window for you to decide which template to use. Then %1$sSelect%2$s the demo you want and click %1$sInstall Demo%2$s in the bottom.', 'relicwp-helper'), '<strong>', '</strong>'
                        );
                        ?></p>
                    <div class="theme-browser rendered">

                        <?php $categories = PdWP_Demos::get_demo_all_categories($demos); ?>

						<?php if (!empty($categories)) : ?>
                            <div class="owp-header-bar">
                                <nav class="owp-navigation">
                                    <ul>
                                        <li class="active"><a href="#all" class="owp-navigation-link"><?php esc_html_e('All', 'relicwp-helper'); ?></a></li>
                                        <?php foreach ($categories as $key => $name) : ?>
                                            <li><a href="#<?php echo esc_attr($key); ?>" class="owp-navigation-link"><?php echo esc_html($name); ?></a></li>
										<?php endforeach; ?>
                                    </ul>
                                </nav>
                            </div>
						<?php endif; ?>

                        <div class="themes wp-clearfix">

                            <?php
                            // Loop through all demos
                            foreach ($demos as $demo => $key) {

                                // Vars
                                $item_categories = PdWP_Demos::get_demo_item_categories($key);
                                ?>

                                <div class="theme-wrap" data-categories="<?php echo esc_attr($item_categories); ?>" data-name="<?php echo esc_attr(strtolower($demo)); ?>">

                                    <div class="theme owp-open-popup" data-demo-id="<?php echo esc_attr($demo); ?>">

                                        <div class="theme-screenshot">
											<img src="<?php echo RTHP_URL . 'includes/panel/demos/' . esc_attr( $demo ); ?>.jpg" />
                                        </div>

                                        <div class="theme-id-container">

                                            <h2 class="theme-name" id="<?php echo esc_attr($demo); ?>"><span><?php echo ucwords($demo); ?></span></h2>
                                            <div class="theme-actions">
                                                <a class="button button-primary" href="https://demo.relicwp.com/<?php echo esc_attr($demo); ?>/" target="_blank"><?php _e('Live Preview', 'relicwp-helper'); ?></a>
                                                <span class="button button-secondary"><?php _e('Select', 'relicwp-helper'); ?></span>
                                            </div>
                                        </div>

                                    </div>

                                </div>

							<?php } ?>

                        </div>
                        <div class="owp-wizard-setup-actions">
                            <button class="install-demos-button disabled" disabled data-next_step="<?php echo $this->get_next_step_link(); ?>"><?php esc_html_e("Install Demo", 'relicwp-helper'); ?></button>
                            <a class="skip-btn" href="<?php echo $this->get_next_step_link(); ?>"><?php esc_html_e("Skip Step", 'relicwp-helper'); ?></a>
                        </div>
                    </div>

                </div>

                <div class="owp-wizard-setup-actions wizard-install-demos-buttons-wrapper final-step">
                    <a class="skip-btn continue" href="<?php echo $this->get_next_step_link(); ?>"><?php esc_html_e("Next Step", 'relicwp-helper'); ?><i class="dashicons dashicons-arrow-<?php echo esc_attr($icon); ?>-alt"></i></a>
                </div>
            </div>
            <?php
        }

        /**
         * Step 3 customize step
         */
        public function pdvs_customize_setup() {

            if (isset($_POST['save_step']) && !empty($_POST['save_step'])) {
                $this->save_pdvs_customize();
            }

            // Button icon
            if (is_RTL()) {
                $icon = 'left';
            } else {
                $icon = 'right';
            }
            ?>

            <div class="owp-customize-wrap owp-wrap">
                <form method="POST" name="owp-customize-form">
                    <?php wp_nonce_field('owp_customize_form'); ?>
                    <div class="field-group">
                        <?php
                        $custom_logo = get_theme_mod("custom_logo");
                        $display = "none";
                        $url = "";

                        if ($custom_logo) {
                            $display = "inline-block";
                            if (!($url = wp_get_attachment_image_url($custom_logo))) {
                                $custom_logo = "";
                                $display = "none";
                            }
                        }
                        ?>
                        <h1><?php esc_html_e("Logo", 'relicwp-helper'); ?></h1>
                        <p><?php esc_html_e("Please add your logo below.", 'relicwp-helper'); ?></p>
                        <div class="upload">
                            <img  src="<?php echo $url; ?>"  width="115px" height="115px" id="pdvs-logo-img" style="display:<?php echo $display; ?>;"/>
                            <div>
                                <input type="hidden" name="pdvs-logo" id="pdvs-logo" value="<?php echo $custom_logo; ?>" />
                                <button type="submit" data-name="pdvs-logo" class="upload_image_button button"><?php esc_html_e("Upload", 'relicwp-helper'); ?></button>
                                <button  style="display:<?php echo $display; ?>;" type="submit" data-name="pdvs-logo" class="remove_image_button button">&times;</button>
                            </div>
                        </div>

                    </div>

                    <div class="field-group">

                        <?php
                        $pdvs_retina_logo = get_theme_mod("pdvs_retina_logo");
                        $display = "none";
                        $url = "";

                        if ($pdvs_retina_logo) {
                            $display = "inline-block";
                            $url = wp_get_attachment_image_url($pdvs_retina_logo);
                            if (!($url = wp_get_attachment_image_url($pdvs_retina_logo))) {
                                $pdvs_retina_logo = "";
                                $display = "none";
                            }
                        }
                        ?>
                        <h1><?php esc_html_e("Retina Logo", 'relicwp-helper'); ?></h1>
                        <p><?php esc_html_e("Please add your Retina Logo below.", 'relicwp-helper'); ?></p>
                        <div class="upload">
                            <img src="<?php echo $url; ?>" width="115px" height="115px" id="pdvs-retina-logo-img" style="display:<?php echo $display; ?>;"/>
                            <div>
                                <input type="hidden" name="pdvs-retina-logo" id="pdvs-retina-logo" value="<?php echo $pdvs_retina_logo; ?>" />
                                <button type="submit" data-name="pdvs-retina-logo" class="upload_image_button button"><?php esc_html_e("Upload", 'relicwp-helper'); ?></button>
                                <button  style="display:<?php echo $display; ?>;" type="submit" data-name="pdvs-retina-logo" class="remove_image_button button">&times;</button>
                            </div>
                        </div>

                    </div>

                    <div class="field-group">
                        <h1><?php esc_html_e("Site Title", 'relicwp-helper'); ?></h1>
                        <p><?php esc_html_e("Please add your Site Title below.", 'relicwp-helper'); ?></p>
                        <input type="text" name="pdvs-site-title" id="pdvs-site-title" class="pdvs-input" value="<?php echo get_option("blogname"); ?>">
                    </div>

                    <div class="field-group">
                        <h1><?php esc_html_e("Tagline", 'relicwp-helper'); ?></h1>
                        <p><?php esc_html_e("Please add your Tagline below.", 'relicwp-helper'); ?></p>
                        <input type="text" name="pdvs-tagline" id="pdvs-tagline" class="pdvs-input" value="<?php echo get_option("blogdescription"); ?>">
                    </div>

                    <div class="field-group">

                        <?php
                        $favicon = get_option("site_icon");
                        $display = "none";
                        $url = "";

                        if ($favicon) {
                            $display = "inline-block";
                            $url = wp_get_attachment_image_url($favicon);
                            if (!($url = wp_get_attachment_image_url($favicon))) {
                                $favicon = "";
                                $display = "none";
                            }
                        }
                        ?>
                        <h1><?php esc_html_e("Site Icon", 'relicwp-helper'); ?></h1>
                        <p><?php esc_html_e("Site Icons are what you see in browser tabs, bookmark bars, and within the WordPress mobile apps. Upload one here! Site Icons should be square and at least 512 × 512 pixels.", 'relicwp-helper'); ?></p>
                        <div class="upload">
                            <img src="<?php echo $url; ?>" width="115px" height="115px" id="pdvs-favicon-img" style="display:<?php echo $display; ?>;"/>
                            <div>
                                <input type="hidden" name="pdvs-favicon" id="pdvs-favicon" value="<?php echo $favicon; ?>" />
                                <button type="submit" data-name="pdvs-favicon" class="upload_image_button button"><?php esc_html_e("Upload", 'relicwp-helper'); ?></button>
                                <button  style="display:<?php echo $display; ?>;" type="submit" data-name="pdvs-favicon" class="remove_image_button button">&times;</button>
                            </div>
                        </div>

                    </div>

                    <div class="field-group">
                        <h1><?php esc_html_e("Primary Color", 'relicwp-helper'); ?></h1>
                        <p><?php esc_html_e("Please add your Primary Color below.", 'relicwp-helper'); ?></p>
                        <div class="upload">
                            <input name="pdvs-primary-color" id="pdvs-primary-color" class="color-picker-field" value="<?php echo get_theme_mod("pdvs_primary_color"); ?>">
                        </div>
                    </div>

                    <div class="field-group">
                        <h1><?php esc_html_e("Hover Primary Color", 'relicwp-helper'); ?></h1>
                        <p><?php esc_html_e("Please add your Hover Primary Color below.", 'relicwp-helper'); ?></p>
                        <div class="upload">
                            <input name="pdvs-hover-primary-color" id="pdvs-hover-primary-color" class="color-picker-field" value="<?php echo get_theme_mod("pdvs_hover_primary_color"); ?>">
                        </div>
                    </div>

                    <div class="field-group">
                        <h1><?php esc_html_e("Main Border Color", 'relicwp-helper'); ?></h1>
                        <p><?php esc_html_e("Please add your Main Border Color below.", 'relicwp-helper'); ?></p>
                        <div class="upload">
                            <input name="pdvs-main-border-color" id="pdvs-main-border-color" class="color-picker-field" value="<?php echo get_theme_mod("pdvs_main_border_color"); ?>">
                        </div>
                    </div>

                    <div class="field-group">
                        <h1><?php esc_html_e("Links Color", 'relicwp-helper'); ?></h1>
                        <p><?php esc_html_e("Please add your Links Color below.", 'relicwp-helper'); ?></p>
                        <div class="upload">
                            <input name="pdvs-links-color" id="pdvs-links-color" class="color-picker-field" value="<?php echo get_theme_mod("pdvs_links_color"); ?>">
                        </div>
                    </div>

                    <div class="field-group">
                        <h1><?php esc_html_e("Links Hover Color", 'relicwp-helper'); ?></h1>
                        <p><?php esc_html_e("Please add your Links Hover Color below.", 'relicwp-helper'); ?></p>
                        <div class="upload">
                            <input name="pdvs-links-hover-color" id="pdvs-links-hover-color" class="color-picker-field" value="<?php echo get_theme_mod("pdvs_links_color_hover"); ?>">
                        </div>
                    </div>

                    <div class="owp-wizard-setup-actions">
                        <input type="hidden" name="save_step" value="save_step"/>
                        <button class="continue" type="submit" ><?php esc_html_e("Continue", 'relicwp-helper'); ?><i class="dashicons dashicons-arrow-<?php echo esc_attr($icon); ?>-alt"></i></button>
                        <a class="skip-btn" href="<?php echo $this->get_next_step_link(); ?>"><?php esc_html_e("Skip Step", 'relicwp-helper'); ?></a>
                    </div>
                </form>
            </div>
            <?php
        }

        /**
         * Save Info In Step3
         */
        public function save_pdvs_customize() {

            if ( current_user_can('manage_options') && isset($_REQUEST['_wpnonce']) &&wp_verify_nonce($_REQUEST['_wpnonce'], 'owp_customize_form')){
                if (isset($_POST['pdvs-logo']))
                set_theme_mod('custom_logo', sanitize_text_field($_POST['pdvs-logo']));

            if (isset($_POST['pdvs-retina-logo']))
                set_theme_mod('pdvs_retina_logo', sanitize_text_field($_POST['pdvs-retina-logo']));

            if (isset($_POST['pdvs-site-title']))
                update_option('blogname', sanitize_text_field($_POST['pdvs-site-title']));

            if (isset($_POST['pdvs-tagline']))
                update_option('blogdescription', sanitize_text_field($_POST['pdvs-tagline']));

            if (isset($_POST['pdvs-favicon']))
                update_option('site_icon', sanitize_text_field($_POST['pdvs-favicon']));

            if (isset($_POST['pdvs-primary-color']))
                set_theme_mod('pdvs_primary_color', sanitize_text_field($_POST['pdvs-primary-color']));

            if (isset($_POST['pdvs-hover-primary-color']))
                set_theme_mod('pdvs_hover_primary_color', sanitize_hex_color( $_POST['pdvs-hover-primary-color'] ));

            if (isset($_POST['pdvs-main-border-color']))
                set_theme_mod('pdvs_main_border_color', sanitize_text_field($_POST['pdvs-main-border-color']));

            if (isset($_POST['pdvs-links-color']))
                set_theme_mod('pdvs_links_color', sanitize_hex_color($_POST['pdvs-links-color']));

            if (isset($_POST['pdvs-links-hover-color']))
                set_theme_mod('pdvs_links_color_hover', sanitize_hex_color($_POST['pdvs-links-hover-color']));

            wp_safe_redirect($this->get_next_step_link());
            exit;
        }else
        {
            print  'Your are not authorized to submit this form';
            exit;
        }
        }

        /**
         * Step 4 ready step
         */
        public function pdvs_ready_setup() {
			$user_email = $this->get_current_user_email();
			?>

			<div class="owp-ready-wrap owp-wrap">
				<h2><?php esc_html_e("Your website is ready", 'relicwp-helper'); ?></h2>

				<div class="owp-wizard-setup-actions">
					<a class="button button-next button-large" href="<?php echo esc_url(( add_query_arg(array('owp_wizard_hide_notice' => '2nd_notice', 'show' => '1',), admin_url()))); ?>"><?php esc_html_e('View Your Website', 'relicwp-helper'); ?></a>
				</div>
			</div>
			<?php
        }

        /**
         * Define cronjob
         */
        public static function cronjob_activation() {
            $timezone_string = get_option( 'timezone_string' );
            if ( ! $timezone_string ) {
                return false;
            }
            date_default_timezone_set($timezone_string);
            $new_time_format = time() + (24 * 60 * 60 );
            if (!wp_next_scheduled('add_second_notice')) {
                wp_schedule_event($new_time_format, 'daily', 'add_second_notice');
            }
        }

        /**
         * Delete cronjob
         */
        public static function cronjob_deactivation() {
            wp_clear_scheduled_hook('add_second_notice');

        }

    }

    new RelicWP_Helper_Theme_Wizard();

    register_activation_hook(RTHP_FILE_PATH, "RelicWP_Helper_Theme_Wizard::install");
    // when deactivate plugin
    register_deactivation_hook(RTHP_FILE_PATH, "RelicWP_Helper_Theme_Wizard::uninstall");
    //when activate plugin for automatic second notice
    register_activation_hook(RTHP_FILE_PATH, array("RelicWP_Helper_Theme_Wizard", "cronjob_activation"));
    register_deactivation_hook(RTHP_FILE_PATH, array("RelicWP_Helper_Theme_Wizard", "cronjob_deactivation"));
endif;