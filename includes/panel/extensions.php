<?php
/**
 * Extensions
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
class RelicWP_Helper_Extensions {

	/**
	 * Start things up
	 */
	public function __construct() {
		// Add panel menu
		add_action( 'admin_menu', array( $this, 'add_page' ), 9999 );

		// Add custom scripts
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
	}

	/**
	 * Add sub menu page
	 *
	 * @since 1.0.0
	 */
	public function add_page() {
		// If no premium extensions
		if ( apply_filters( 'pdwp_licence_tab_enable', false ) ) {
			return;
		}

		add_submenu_page(
			'relicwp-panel',
			esc_html__( 'Extensions', 'relicwp-helper' ),
			'<span class="dashicons dashicons-star-filled" style="font-size: 16px; color: #ec4848;"></span> <span style="color: #ec4848">' . esc_html__( 'Extensions', 'relicwp-helper' ) . '</span>',
			'manage_options',
			'relicwp-panel-extensions',
			array( $this, 'create_admin_page' )
		);
	}

	/**
	 * Redirect to the extensions page
	 *
	 * @since 1.0.0
	 */
	public static function create_admin_page() {

		// Extensions
		$plugins = array(
			'sticky-header' 	=> array(
				'description' 	=> esc_html__( 'A must-have plugin, attach your header at the top of your screen with style.', 'relicwp-helper' ),
			),
			'elementor-widgets' => array(
				'description' 	=> esc_html__( 'Add many extra widgets to the popular free page builder Elementor.', 'relicwp-helper' ),
			),
			'cookie-notice' => array(
				'description' 	=> esc_html__( 'Inform users that you are using cookies to comply with the EU cookie law GDPR regulations.', 'relicwp-helper' ),
			),
			'footer-callout' 	=> array(
				'description' 	=> esc_html__( 'Add some relevant information about your company or product in your footer.', 'relicwp-helper' ),
			),
			'full-screen' 	=> array(
				'description' 	=> esc_html__( 'A simple and easy way to create a fullscreen scrolling website.', 'relicwp-helper' ),
			),
			'popup-login' 		=> array(
				'description' 	=> esc_html__( 'A plugin to add a popup login, register and lost password form where you want.', 'relicwp-helper' ),
			),
			'instagram' 		=> array(
				'description' 	=> esc_html__( 'Fetch and customize your Instagram feed to display in a beautiful way.', 'relicwp-helper' ),
			),
			'portfolio' 		=> array(
				'description' 	=> esc_html__( 'A complete extension to display your portfolio and work in a beautiful way.', 'relicwp-helper' ),
			),
			'side-panel' 		=> array(
				'description' 	=> esc_html__( 'Add a responsive side panel with your preferred widgets inside.', 'relicwp-helper' ),
			),
			'hooks' 			=> array(
				'description' 	=> esc_html__( 'Add content throughout various areas of RelicWP without using child theme.', 'relicwp-helper' ),
			),
			'sticky-footer' 	=> array(
				'description' 	=> esc_html__( 'A simple extension to attach the footer at the bottom of your screen.', 'relicwp-helper' ),
			),
			'woo-popup' 		=> array(
				'description' 	=> esc_html__( 'Display a popup when a product is added to the cart, perfect to increase conversion.', 'relicwp-helper' ),
			),
			'white-label' 		=> array(
				'description' 	=> esc_html__( 'A plugin that allows you to replace the theme name by your own brand name.', 'relicwp-helper' ),
			),
		);

		// If affiliate ref
		$ref_url = '';
		$aff_ref = apply_filters( 'pdvs_affiliate_ref', $ref_url );

		// Add & is has referal link
		if ( $aff_ref ) {
			$if_ref = '&';
		} else {
			$if_ref = '?';
		} ?>

		<div class="wrap pdwp-extensions-panel pdwp-clr">

			<h2><?php esc_html_e( 'Take your website to the next level with our premium extensions', 'relicwp-helper' ); ?></h2>

			<p class="pdwp-desc"><?php esc_html_e( 'From blog to eCommerce site, there is no limit to what you can do with RelicWP.', 'relicwp-helper' ); ?></p>

			<ul class="extensions-wrap">

				<?php
				// Loop through extensions
				foreach ( $plugins as $key => $val ) :

					// Add source
					$utm = $if_ref . 'utm_source=dash&utm_medium=extension&utm_campaign='. $key;

					// Plugin name
					$title = str_replace( '-', ' ', $key );
					$title = ucwords( $title ); ?>

					<li>
						<a href="https://relicwp.com/extension/pdvs-<?php echo esc_attr( $key ); ?><?php echo $utm; ?>" class="owp-card-top" target="_blank">
							<div class="owp-img">
								<img src="<?php echo esc_url( plugins_url( '/assets/img/plugins/'. esc_attr( $key ) .'.png', __FILE__ ) ); ?>" alt="">
							</div>
							<div class="owp-text">
								<h3><?php esc_html_e( 'Relic', 'relicwp-helper' ); ?> <?php echo esc_html( $title ); ?></h3>
								<div class="owp-description">
									<p><?php echo esc_html( $val['description'] ); ?></p>
								</div>
							</div>
						</a>
						<a href="https://relicwp.com/extension/pdvs-<?php echo esc_attr( $key ); ?>" class="owp-card-btn" target="_blank">
							<?php esc_html_e( 'More Details >', 'relicwp-helper' ); ?>
						</a>
					</li>

				<?php endforeach; ?>

			</ul>

		</div>

	<?php
	}

	/**
	 * Admin Scripts
	 *
	 * @since 1.0.0
	 */
	public static function admin_scripts( $hook ) {

		// Only load extensions when needed
		if ( RTHP_ADMIN_PANEL_HOOK_PREFIX . '-extensions' != $hook ) {
			return;
		}

		// CSS
		wp_enqueue_style( 'pdwp-extensions-panel', plugins_url( '/assets/css/extensions.min.css', __FILE__ ) );

	}
}
new RelicWP_Helper_Extensions();