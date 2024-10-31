<?php
/**
 * Licenses
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
class RelicWP_Helper_Licenses {

	/**
	 * Start things up
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'add_page' ), 99999 );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
	}

	/**
	 * Add sub menu page
	 *
	 * @since 1.0.0
	 */
	public function add_page() {
		// If no premium extensions
		if ( true != apply_filters( 'pdwp_licence_tab_enable', false ) ) {
			return;
		}

		add_submenu_page(
			'relicwp-panel',
			esc_html__( 'Licenses', 'relicwp-helper' ),
			esc_html__( 'Licenses', 'relicwp-helper' ),
			'manage_options',
			'relicwp-panel-licenses',
			array( $this, 'create_admin_page' )
		);
	}

	/**
	 * Admin page
	 *
	 * @since 1.0.0
	 */
	public function create_admin_page() { ?>

		<div class="wrap pdwp-scripts-panel pdwp-clr">

			<h1><?php esc_html_e( 'Licenses Settings', 'relicwp-helper' ); ?></h1>

			<p><?php echo sprintf(
				__( 'Enter your extension license keys here to receive updates for purchased extensions. If your license key has expired, please %1$srenew your license%2$s.', 'relicwp-helper' ),
				'<a href="http://relicwp.com/docs/article/26-license-renewal" target="_blank" title="License renewal FAQ">',
				'</a>'
			); ?></p>

			<form id="pdwp-license-form" method="post" action="options.php">
				<?php settings_fields( 'pdwp_options' ); ?>

				<?php do_action( 'pdwp_licenses_tab_top' ); ?>

				<table id="pdwp-licenses" class="form-table">
					<tbody>
						<?php do_action( 'pdwp_licenses_tab_fields' ); ?>
					</tbody>
				</table>

				<p class="submit"><input type="submit" name="pdwp_licensekey_activateall" id="submit" class="button button-primary" value="<?php esc_attr_e( 'Save Changes', 'relicwp-helper' ); ?>"></p>
			</form>

		</div>

	<?php
	}

	/**
	 * Admin Scripts
	 *
	 * @since 1.0.0
	 */
	public static function admin_scripts( $hook ) {

		// Only load scripts when needed
		if ( RTHP_ADMIN_PANEL_HOOK_PREFIX . '-licenses' != $hook ) {
			return;
		}

		// CSS
		wp_enqueue_style( 'pdwp-licenses-panel', plugins_url( '/assets/css/licenses.min.css', __FILE__ ) );

	}
}
new RelicWP_Helper_Licenses();