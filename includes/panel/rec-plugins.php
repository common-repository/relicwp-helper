<?php
/**
 * Recommended Plugins
 *
 * @package 	RelicWP_Helper
 * @category 	Core
 * @author 		PdWP
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Start Class
class RelicWP_Helper_Recommended_Plugins {

	/**
	 * Start things up
	 */
	public function __construct() {
		include_once( RTHP_PATH .'/includes/panel/assets/class-plugin-installer.php' );
		add_action( 'admin_menu', array( $this, 'add_page' ), 999 );
	}

	/**
	 * Add sub menu page
	 *
	 * @since 1.0.0
	 */
	public function add_page() {
		add_submenu_page(
			'relicwp-panel',
			esc_html__( 'Rec. Plugins', 'relicwp-helper' ),
			esc_html__( 'Rec. Plugins', 'relicwp-helper' ),
			'manage_options',
			'relicwp-panel-rec-plugins',
			array( $this, 'create_admin_page' )
		);
	}

	/**
	 * Settings page output
	 *
	 * @since 1.0.0
	 */
	public function create_admin_page() {

		// Theme branding
		if ( function_exists( 'pdwp_theme_branding' ) ) {
			$brand = pdwp_theme_branding();
		} else {
			$brand = 'RelicWP';
		}

		// Free extensions
		$free_plugins = array(   			
			array(
				'slug' => 'elementor',
			),
			array(
				'slug' => 'easy-digital-downloads',
			),
			array(
				'slug' => 'woocommerce',
			),
			array(
				'slug' => 'contact-form-7',
			),
			array(
				'slug' => 'weglot',
			),
			array(
				'slug' => 'wordpress-seo',
			),
			array(
				'slug' => 'ultimate-member',
			),
			array(
				'slug' => 'mailoptin',
			),
			array(
				'slug' => 'smart-slider-3',
			),
			array(
				'slug' => 'types',
			),
			array(
				'slug' => 'modula-best-grid-gallery',
			),
			array(
				'slug' => 'widget-options',
			),
			array(
				'slug' => 'jilt-for-woocommerce',
			),
		);

		// Premium extensions
		$premium_plugins = array(
			array(
				'slug' 			=> 'wp-rocket',
				'full_url' 		=> 'https://wp-rocket.me/',
				'name' 			=> esc_html__( 'WP Rocket', 'relicwp-helper' ),
				'description' 	=> esc_html__( 'Caching creates an ultra-fast load time, essential for improving Search Engine Optimization. When you turn on WP Rocket, page caching is immediately activated.', 'relicwp-helper' ),
				'icons' 		=> plugins_url( '/assets/img/rec-plugins/wp-rocket-icon.png', __FILE__ ),
				'author' 		=> esc_html__( 'WP Rocket', 'relicwp-helper' ),
				'author_url' 	=> 'https://wp-rocket.me/',
			),
			array(
				'slug' 			=> 'affiliatewp',
				'full_url' 		=> 'https://affiliatewp.com/',
				'name' 			=> esc_html__( 'AffiliateWP', 'relicwp-helper' ),
				'description' 	=> esc_html__( 'This plugin provides a complete affiliate management system for your WordPress website that seamlessly integrates with all major WordPress e-commerce and membership platforms.', 'relicwp-helper' ),
				'icons' 		=> plugins_url( '/assets/img/rec-plugins/affiliatewp-icon.png', __FILE__ ),
				'author' 		=> esc_html__( 'AffiliateWP, LLC', 'relicwp-helper' ),
				'author_url' 	=> 'https://affiliatewp.com/',
			),
			array(
				'slug' 			=> 'gravity-forms',
				'full_url' 		=> 'http://www.gravityforms.com/',
				'name' 			=> esc_html__( 'Gravity Forms', 'relicwp-helper' ),
				'description' 	=> esc_html__( 'Build and publish your forms in just minutes. Select your fields, configure your options and easily embed forms on your WordPress powered site using the built-in tools.', 'relicwp-helper' ),
				'icons' 		=> plugins_url( '/assets/img/rec-plugins/gravity-forms-icon.png', __FILE__ ),
				'author' 		=> esc_html__( 'rocketgenius', 'relicwp-helper' ),
				'author_url' 	=> 'http://www.rocketgenius.com/',
			),
		); ?>

		<div id="pdwp-rec-plugins-wrap" class="wrap">
				
			<h2><?php echo esc_html( $brand ); ?> - <?php esc_html_e( 'Recommended Plugins', 'relicwp-helper' ); ?></h2>

			<div class="pdwp-desc notice notice-warning">
				<p><?php esc_html_e( 'Below you will find plugins I personally like and recommend. None of these plugins are required for the theme to work, they simply add additional functionality.', 'relicwp-helper' ); ?></p>
			</div>
			
			<div class="pt-plugin-installer">
				<?php
				if ( class_exists( 'RelicWP_Helper_Plugin_Installer' ) ) {
					RelicWP_Helper_Plugin_Installer::init( $free_plugins );
					RelicWP_Helper_Plugin_Installer::init_premium( $premium_plugins );
				} ?>
			</div>

			<div class="pdwp-callout">
				<p><strong><?php esc_html_e( 'Disclosure:', 'relicwp-helper' ); ?></strong> <?php esc_html_e( 'This page contains external affiliate links that may result in I receive a commission if you choose to purchase said product. I receive no payment for speaking well of plugins or list them on this page.', 'relicwp-helper' ); ?></p>
			</div>

		</div>
			
	<?php
	}
}
new RelicWP_Helper_Recommended_Plugins();