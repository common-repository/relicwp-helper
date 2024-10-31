<?php
/**
 * Plugin Installer
 *
 * @package 	RelicWP_Helper
 * @category 	Core
 * @author 		Darren Cooney
 * @link     	https://github.com/dcooney/wordpress-plugin-installer
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Start Class
class RelicWP_Helper_Plugin_Installer {

	public function start() {
		add_action( 'wp_ajax_relicwp_plugin_installer', 				array( $this, 'relicwp_plugin_installer' ) );
		add_action( 'wp_ajax_relicwp_plugin_activation', 			array( $this, 'relicwp_plugin_activation' ) );
		add_action( 'wp_ajax_relicwp_premium_plugin_activation', 	array( $this, 'relicwp_premium_plugin_activation' ) );
		add_action( 'admin_enqueue_scripts', 					array( $this, 'enqueue_scripts' ) );
	}

	/**
	 * Initialize the display of the free plugins
	 *
	 * @since 1.0.0
	 */
	public static function init( $plugins ) { ?>

		<?php
	    require_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );

	    foreach( $plugins as $plugin ) :

	   		$button_classes 	= 'install button';
	   		$button_text 		= __( 'Install Now', 'relicwp-helper' );

			$api = plugins_api( 'plugin_information',
				array(
					'slug' 		=> sanitize_file_name( $plugin['slug'] ),
					'fields' 	=> array(
						'short_description' => true,
						'sections' 			=> false,
						'requires' 			=> false,
						'downloaded' 		=> true,
						'last_updated' 		=> false,
						'added' 			=> false,
						'tags' 				=> false,
						'compatibility' 	=> false,
						'homepage' 			=> false,
						'donate_link' 		=> false,
						'icons' 			=> true,
						'banners' 			=> true,
					),
				)
			);

			if ( ! is_wp_error( $api ) ) { // confirm error free

				$main_plugin_file = RelicWP_Helper_Plugin_Installer::get_plugin_file( $plugin['slug'] ); // Get main plugin file

				if ( self::check_file_extension( $main_plugin_file ) ) { // check file extension
					if ( is_plugin_active( $main_plugin_file ) ) {
						// plugin activation, confirmed!
						$button_classes = 'button disabled';
						$button_text 	= __('Activated', 'relicwp-helper');
					} else {
						// It's installed, let's activate it
						$button_classes = 'activate button button-primary';
						$button_text 	= __('Activate', 'relicwp-helper');
					}
				}

				// Send plugin data to template
				self::render_template( $plugin, $api, $button_text, $button_classes );

			}

		endforeach; ?>

	<?php
	}

	/**
	 * Render display template for each free plugin
	 *
	 * @since 1.0.0
	 */
	public static function render_template( $plugin, $api, $button_text, $button_classes ) { ?>

		<div class="plugin">
			<div class="plugin-wrap">
				<img src="<?php echo esc_url($api->icons['1x']); ?>" alt="">
				<h2><?php echo esc_html( $api->name ); ?></h2>
				<p><?php echo wp_kses_post( $api->short_description ); ?></p>

				<p class="plugin-author"><?php _e( 'By', 'relicwp-helper' ); ?> <?php echo esc_html($api->author); ?></p>
			</div>

			<ul class="activation-row">
				<li>
					<a class="<?php echo esc_attr( $button_classes ); ?>" data-slug="<?php echo esc_attr( $api->slug ); ?>" data-name="<?php echo esc_attr( $api->name ); ?>" href="<?php echo get_admin_url(); ?>update.php?action=install-plugin&amp;plugin=<?php echo esc_attr( $api->slug ); ?>&amp;_wpnonce=<?php echo wp_create_nonce('install-plugin_'. $api->slug) ?>"><?php echo esc_html( $button_text ); ?></a>
				</li>
				<li>
					<a href="https://wordpress.org/plugins/<?php echo esc_attr($api->slug); ?>/" target="_blank"><?php _e( 'More Details', 'relicwp-helper' ); ?></a>
				</li>
			</ul>
		</div>

	<?php
	}

	/**
	 * Initialize the display of the premium plugins
	 *
	 * @since 1.0.0
	 */
	public static function init_premium( $plugins ) { ?>

	 	<?php
	 	foreach( $plugins as $plugin ) :

	   		$button_classes 	= '';
	   		$button_text 		= '';

			$api = array(
				'slug' 			=> isset( $plugin['slug'] ) 		? $plugin['slug'] : '',
				'url' 			=> isset( $plugin['url'] ) 			? $plugin['url'] : '',
				'full_url' 		=> isset( $plugin['full_url'] ) 	? $plugin['full_url'] : '',
				'name' 			=> isset( $plugin['name'] ) 		? $plugin['name'] : '',
				'description' 	=> isset( $plugin['description'] ) 	? $plugin['description'] : '',
				'icons' 		=> isset( $plugin['icons'] ) 		? $plugin['icons'] : '',
				'author' 		=> isset( $plugin['author'] ) 		? $plugin['author'] : '',
				'author_url' 	=> isset( $plugin['author_url'] ) 	? $plugin['author_url'] : '',
			);

			if ( ! is_wp_error( $api ) ) { // confirm error free

				$main_plugin_file = RelicWP_Helper_Plugin_Installer::get_plugin_file( $plugin['slug'] ); // Get main plugin file

				if ( self::check_file_extension( $main_plugin_file ) ) { // check file extension
					if ( is_plugin_active( $main_plugin_file ) ) {
						// plugin activation, confirmed!
						$button_classes = 'button disabled';
						$button_text 	= __('Activated', 'relicwp-helper');
					} else {
						// It's installed, let's activate it
						$button_classes = 'activate button button-primary premium-activation';
						$button_text 	= __('Activate', 'relicwp-helper');
					}
				}

				// Send plugin data to template
				self::render_premium_template( $plugin, $api, $button_text, $button_classes );

			}

		endforeach; ?>

	<?php
	}

	/**
	 * Render display template for each premium plugin
	 *
	 * @since 1.0.0
	 */
	public static function render_premium_template( $plugin, $api, $button_text, $button_classes ) {

		// Var
		$slug 			= $api['slug'];
		$url 			= $api['url'];
		$full_url 		= $api['full_url'];
		$name			= $api['name'];
		$description 	= $api['description'];
		$icons 			= $api['icons'];
		$author 		= $api['author'];
		$author_url 	= $api['author_url'];

		// Affiliate link
		$ref_url = '';
		$aff_ref = apply_filters( 'pdvs_affiliate_ref', $ref_url );

		// Add & is has referal link
		if ( $aff_ref ) {
			$if_ref = '&';
		} else {
			$if_ref = '?';
		} ?>

		<div class="plugin">
			<div class="plugin-wrap">

				<?php
				if ( $icons ) { ?>
					<img src="<?php echo esc_url($icons); ?>" alt="<?php echo esc_attr($name); ?>" />
				<?php
				}

				if ( $name ) { ?>
					<h2><?php echo esc_html($name); ?></h2>
				<?php
				}

				if ( $description ) { ?>
					<p><?php echo wp_kses_post( $description ); ?></p>
				<?php
				}

				if ( $author ) { ?>
					<p class="plugin-author"><?php _e( 'By', 'relicwp-helper' ); ?> <a href="<?php echo esc_url($author_url); ?>"><?php echo esc_html($author); ?></a></p>
				<?php
				} ?>
			</div>

			<ul class="activation-row">
				<li>
					<?php
					// Get main plugin file
					$main_plugin_file = RelicWP_Helper_Plugin_Installer::get_plugin_file( $plugin['slug'] );

					// If the plugin is installed
					if ( self::check_file_extension( $main_plugin_file ) ) { ?>

						<a class="<?php echo esc_attr($button_classes); ?>" data-slug="<?php echo esc_attr($slug); ?>" data-name="<?php echo esc_attr($name); ?>" href="<?php echo get_admin_url(); ?>update.php?action=install-plugin&amp;plugin=<?php echo esc_attr($slug); ?>&amp;_wpnonce=<?php echo wp_create_nonce('install-plugin_'. $slug) ?>"><?php echo esc_html($button_text); ?></a>

					<?php
					// If the plugin is not installed
					} else {

						// If full url, used for the rec. plugins tab
						if ( $full_url ) { ?>
							<a class="button premium-link" href="<?php echo esc_url($full_url); ?>" target="_blank"><?php _e( 'Get This Plugin', 'relicwp-helper' ); ?></a>
						<?php
						} else { ?>
							<a class="button premium-link" href="<?php echo esc_url($url); ?><?php echo esc_attr($slug); ?>/<?php echo esc_attr( $aff_ref ); ?><?php echo esc_attr($if_ref); ?>utm_source=admin-extensions&utm_medium=extension&utm_campaign=OWP-extensions-page&utm_content=<?php echo esc_attr($name); ?>" target="_blank"><?php _e( 'Get This Add On', 'relicwp-helper' ); ?></a>
						<?php
						}

					} ?>
				</li>
				<li>
					<?php
					// If full url, used for the rec. plugins tab
					if ( $full_url ) { ?>
						<a href="<?php echo esc_url($full_url); ?>" target="_blank"><?php _e( 'More Details', 'relicwp-helper' ); ?></a>
					<?php
					} else { ?>
						<a href="<?php echo esc_url($url); ?><?php echo esc_attr($slug); ?>/<?php echo esc_attr( $aff_ref ); ?><?php echo esc_attr($if_ref); ?>utm_source=admin-extensions&utm_medium=extension&utm_campaign=OWP-extensions-page&utm_content=<?php echo esc_attr($name); ?>" target="_blank"><?php _e( 'More Details', 'relicwp-helper' ); ?></a>
					<?php
					} ?>
				</li>
				<li class="ribbon">
					<?php _e( 'Premium', 'relicwp-helper' ); ?>
				</li>
			</ul>
		</div>

	<?php
	}

	/**
	 * An Ajax method for installing plugin
	 *
	 * @since 1.0.0
	 */
	public function relicwp_plugin_installer() {

		if ( ! current_user_can('install_plugins') ) {
			wp_die( __( 'Sorry, you are not allowed to install plugins on this site.', 'relicwp-helper' ) );
		}

		$nonce 	= sanitize_text_field( $_POST["nonce"] );
		$plugin = sanitize_text_field( $_POST["plugin"] );

		// Check our nonce, if they don't match then bounce!
		if ( ! wp_verify_nonce( $nonce, 'pt_installer_nonce' ) ) {
			wp_die( __( 'Error - unable to verify nonce, please try again.', 'relicwp-helper') );
		}

		// Include required libs for installation
		require_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );
		require_once( ABSPATH . 'wp-admin/includes/class-wp-upgrader.php' );
		require_once( ABSPATH . 'wp-admin/includes/class-wp-ajax-upgrader-skin.php' );
		require_once( ABSPATH . 'wp-admin/includes/class-plugin-upgrader.php' );

		// Get Plugin Info
		$api = plugins_api( 'plugin_information',
			array(
				'slug' 		=> $plugin,
				'fields' 	=> array(
					'short_description' 	=> false,
					'sections' 				=> false,
					'requires' 				=> false,
					'rating' 				=> false,
					'ratings' 				=> false,
					'downloaded' 			=> false,
					'last_updated' 			=> false,
					'added' 				=> false,
					'tags' 					=> false,
					'compatibility' 		=> false,
					'homepage' 				=> false,
					'donate_link' 			=> false,
				),
			)
		);

		$skin     = new WP_Ajax_Upgrader_Skin();
		$upgrader = new Plugin_Upgrader( $skin );
		$upgrader->install( $api->download_link );

		if ( $api->name ) {
			$status = 'success';
			$msg 	= $api->name .' successfully installed.';
		} else {
			$status = 'failed';
			$msg 	= 'There was an error installing '. $api->name .'.';
		}

		$json = array(
			'status' 	=> $status,
			'msg' 		=> $msg,
		);

		wp_send_json( $json );

	}

	/**
	 * Activate plugin via Ajax
	 *
	 * @since 1.0.0
	 */
	public function relicwp_plugin_activation() {

		if ( ! current_user_can( 'install_plugins' ) ) {
			wp_die( __( 'Sorry, you are not allowed to activate plugins on this site.', 'relicwp-helper' ) );
		}

		$nonce 	= sanitize_text_field( $_POST["nonce"] );
		$plugin = sanitize_text_field( $_POST["plugin"] );

		// Check our nonce, if they don't match then bounce!
		if ( ! wp_verify_nonce( $nonce, 'pt_installer_nonce' ) ) {
			die( __( 'Error - unable to verify nonce, please try again.', 'relicwp-helper' ) );
		}


		// Include required libs for activation
		require_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );
		require_once( ABSPATH . 'wp-admin/includes/class-wp-upgrader.php' );
		require_once( ABSPATH . 'wp-admin/includes/class-plugin-upgrader.php' );


		// Get Plugin Info
		$api = plugins_api( 'plugin_information',
			array(
				'slug' 		=> $plugin,
				'fields' 	=> array(
					'short_description' 	=> false,
					'sections' 				=> false,
					'requires' 				=> false,
					'rating' 				=> false,
					'ratings' 				=> false,
					'downloaded' 			=> false,
					'last_updated' 			=> false,
					'added' 				=> false,
					'tags' 					=> false,
					'compatibility' 		=> false,
					'homepage' 				=> false,
					'donate_link' 			=> false,
				),
			)
		);

		if ( $api->name ) {
			$main_plugin_file = RelicWP_Helper_Plugin_Installer::get_plugin_file( $plugin );
			$status = 'success';
			if ( $main_plugin_file ) {
				activate_plugin( $main_plugin_file );
				$msg = $api->name .' successfully activated.';
			}
		} else {
			$status = 'failed';
			$msg 	= 'There was an error activating '. $api->name .'.';
		}

		$json = array(
			'status' 	=> $status,
			'msg' 		=> $msg,
		);

		wp_send_json( $json );

	}

	/**
	 * Activate premium plugin via Ajax
	 *
	 * @since 1.0.0
	 */
	public function relicwp_premium_plugin_activation() {

		if ( ! current_user_can( 'install_plugins' ) ) {
			wp_die( __( 'Sorry, you are not allowed to activate plugins on this site.', 'relicwp-helper' ) );
		}

		$nonce 	= sanitize_text_field( $_POST["nonce"] );
		$plugin = sanitize_text_field( $_POST["plugin"] );

		// Check our nonce, if they don't match then bounce!
		if ( ! wp_verify_nonce( $nonce, 'pt_installer_nonce' ) ) {
			die( __( 'Error - unable to verify nonce, please try again.', 'relicwp-helper' ) );
		}


		// Include required libs for activation
		require_once( ABSPATH . 'wp-admin/includes/class-wp-upgrader.php' );
		require_once( ABSPATH . 'wp-admin/includes/class-plugin-upgrader.php' );


		// Get Plugin Info
		$api = array(
			'slug' 	=> $plugin,
			'name' 	=> $plugin['name'],
		);

		if ( $api['name'] ) {
			$main_plugin_file = RelicWP_Helper_Plugin_Installer::get_plugin_file( $plugin );
			$status = 'success';
			if ( $main_plugin_file ) {
				activate_plugin( $main_plugin_file );
				$msg = $api['name'] .' successfully activated.';
			}
		} else {
			$status = 'failed';
			$msg 	= 'There was an error activating '. $api['name'] .'.';
		}

		$json = array(
			'status' 	=> $status,
			'msg' 		=> $msg,
		);

		wp_send_json( $json );

	}

	/**
	 * A method to get the main plugin file
	 *
	 * @since 1.0.0
	 */
	public static function get_plugin_file( $plugin_slug ) {
		require_once( ABSPATH . '/wp-admin/includes/plugin.php' ); // Load plugin lib

		$plugins = get_plugins();

		foreach( $plugins as $plugin_file => $plugin_info ) {

			// Get the basename of the plugin e.g. [askismet]/askismet.php
			$slug = dirname( plugin_basename( $plugin_file ) );

			if( $slug ) {
				if ( $slug == $plugin_slug ) {
					return $plugin_file; // If $slug = $plugin_name
				}
			}
		}

		return null;
	}

	/**
	 * A helper to check file extension
	 *
	 * @since 1.0.0
	 */
	public static function check_file_extension( $filename ) {
		if ( substr( strrchr( $filename, '.' ), 1 ) === 'php' ) {
			// has .php exension
			return true;
		} else {
			// ./wp-content/plugins
			return false;
		}
	}

	/**
	 * Load scripts
	 *
	 * @since 1.0.0
	 */
	public static function enqueue_scripts( $hook ) {

		// Only load scripts when needed
		if ( RTHP_ADMIN_PANEL_HOOK_PREFIX . '-extensions' != $hook
			&& RTHP_ADMIN_PANEL_HOOK_PREFIX . '-rec-plugins' != $hook ) {
			return;
		}

		// JS
		wp_enqueue_script( 'pdwp-installer', plugins_url( '/js/installer.min.js', __FILE__ ), array( 'jquery' ) );

		wp_localize_script( 'pdwp-installer', 'pt_installer_localize', array(
           'ajax_url' 		=> admin_url( 'admin-ajax.php' ),
           'admin_nonce' 	=> wp_create_nonce( 'pt_installer_nonce' ),
           'install_now' 	=> __( 'Are you sure you want to install this plugin?', 'relicwp-helper' ),
           'install_btn' 	=> __( 'Install Now', 'relicwp-helper' ),
           'activate_btn' 	=> __( 'Activate', 'relicwp-helper' ),
           'installed_btn' 	=> __( 'Activated', 'relicwp-helper' )
        ) );

		// CSS
		wp_enqueue_style( 'pdwp-installer', plugins_url( '/css/installer.min.css', __FILE__ ) );

	}

}

// initialize
$pdvs_extra_plugin_installer = new RelicWP_Helper_Plugin_Installer();
$pdvs_extra_plugin_installer->start();