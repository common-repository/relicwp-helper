<?php
/**
 * Import/Export
 *
 * @package RelicWP_Helper
 * @category Core
 * @author PdWP
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Start Class
class RelicWP_Helper_Import_Export {

	/**
	 * Start things up
	 */
	public function __construct() {
		add_action( 'admin_menu', 				array( $this, 'add_page' ), 11 );
		add_action( 'admin_enqueue_scripts',	array( $this, 'css' ) );
		add_action( 'admin_init', 				array( $this, 'register_settings' ) );
		add_action( 'admin_notices', 			array( $this, 'register_notices' ) );
		add_action( 'load-theme-panel_page_relicwp-panel-import-export', array( $this, 'send_export_file' ) );
		add_action( 'load-theme-panel_page_relicwp-panel-import-export', array( $this, 'upload_import_file' ) );
	}

	/**
	 * Add sub menu page
	 *
	 * @since  1.0.0
	 */
	public function add_page() {
		add_submenu_page(
			'relicwp-panel',
			esc_html__( 'Import/Export', 'relicwp-helper' ),
			esc_html__( 'Import/Export', 'relicwp-helper' ),
			'manage_options',
			'relicwp-panel-import-export',
			array( $this, 'create_admin_page' )
		);
	}

	/**
	 * Register setting
	 *
	 * @since  1.0.0
	 */
	public static function register_settings() {
		register_setting( 'pdwp_import_setting', 'pdwp_import_setting', array( 'PdWP_Import_Export', 'import_data' ) );
	}

	/**
	 * Register all messages
	 *
	 * @since  1.0.0
	 */
	public static function register_notices() {
		settings_errors( 'pdwp-import-notices' );
	}

	/**
	 * Send export file to user
	 *
	 * @since  1.0.0
	 */
	public static function send_export_file() {

		// Export requested
		if ( ! empty( $_GET['export'] ) ) {

			$mods		= get_theme_mods();
			$data		= array(
				'mods'	  	=> $mods ? $mods : array(),
				'options' 	=> array()
			);

			// Build filename
			$site_url = site_url( '', 'http' );
			$site_url = trim( $site_url, '/\\' ); // remove trailing slash
			$filename = str_replace( 'http://', '', $site_url ); // remove http://
			$filename = str_replace( array( '/', '\\' ), '-', $filename ); // replace slashes with -
			$filename .= '-pdwp-export'; // append
			$filename = apply_filters( 'pdvs_export_filename', $filename );
				
			foreach ( $mods as $key => $value ) {

				// Don't save widget data.
				if ( 'widget_' === substr( strtolower( $key ), 0, 7 ) ) {
					continue;
				}

				// Don't save sidebar data.
				if ( 'sidebars_' === substr( strtolower( $key ), 0, 9 ) ) {
					continue;
				}

				$data['options'][ $key ] = $value;
			}

			if ( function_exists( 'wp_get_custom_css_post' ) ) {
				$data['wp_css'] = wp_get_custom_css();
			}

			// Set the download headers.
			header( 'Content-disposition: attachment; filename=' . $filename . '.dat' );
			header( 'Content-Type: application/octet-stream; charset=' . get_option( 'blog_charset' ) );

			// Serialize the export data.
			echo serialize( $data );

			// Start the download.
			die();

		}

	}

	/**
	 * Upload import file
	 *
	 * @since  1.0.0
	 */
	public static function upload_import_file() {

		// Check nonce for security since form was posted
		if ( ! empty( $_POST ) && ! empty( $_FILES['pdwp_import_file'] )
			&& check_admin_referer( 'pdwp_import', 'pdwp_import_nonce' ) ) { // check_admin_referer prints fail page and dies

			// Check and move file to uploads dir, get file data
			// Will show die with WP errors if necessary (file too large, quota exceeded, etc.)
			$template	 = get_template();
			$overrides   = array( 'test_form' => false, 'test_type' => false, 'mimes' => array( 'dat' => 'text/plain' ) );
			$file        = wp_handle_upload( $_FILES['pdwp_import_file'], $overrides );
			if ( isset( $file['error'] ) ) {
				wp_die(
					$file['error'],
					'',
					array( 'back_link' => true )
				);
			}

			// Process import file
			self::process_import_file( $file['file'] );

		}

	}

	/**
	 * Process import file
	 *
	 * @since  1.0.0
	 */
	public static function process_import_file( $file ) {

		// File exists?
		if ( ! file_exists( $file ) ) {
			wp_die(
				esc_html__( 'Import file could not be found. Please try again.', 'relicwp-helper' ),
				'',
				array( 'back_link' => true )
			);
		}

		// Get file contents and decode
		$raw  = file_get_contents( $file );
		$data = @unserialize( $raw );

		// Delete import file
		unlink( $file );

		// If wp_css is set then import it.
		if ( function_exists( 'wp_update_custom_css_post' ) && isset( $data['wp_css'] ) && '' !== $data['wp_css'] ) {
			wp_update_custom_css_post( $data['wp_css'] );
		}

		// Import data
		self::import_data( $data['mods'] );

	}

	/**
	 * Sanitization callback
	 *
	 * @since  1.0.0
	 */
	public static function import_data( $file ) {

		$msg  = null;
		$type = null;

		// Import the file
		if ( ! empty( $file ) ) {

			if ( '0' == json_last_error() ) {

				// Loop through mods and add them
				foreach ( $file as $mod => $value ) {
					set_theme_mod( $mod, $value );
				}

				// Success message
				$msg  = esc_html__( 'Settings imported successfully.', 'relicwp-helper' );
				$type = 'updated';

			}

			// Display invalid json data error
			else {

				$msg  = esc_html__( 'Invalid Import Data.', 'relicwp-helper' );
				$type = 'error';

			}

		}

		// No json data entered
		else {
			$error_msg = esc_html__( 'No import data found.', 'relicwp-helper' );
			$error_type = 'error';
		}

		// Display notice
		add_settings_error( 'pdwp-import-notices', esc_attr( 'settings_updated' ), $msg, $type );

		// Return file
		return $file;

	}

	/**
	 * Settings page output
	 *
	 * @since  1.0.0
	 */
	public static function create_admin_page() {

		// Theme branding
		if ( function_exists( 'pdwp_theme_branding' ) ) {
			$brand = pdwp_theme_branding();
		} else {
			$brand = 'RelicWP';
		} ?>

		<div class="wrap pdwp-import-export">

			<h2><?php echo esc_html( $brand ); ?> <?php esc_html_e( 'Importer & Exporter', 'relicwp-helper' ); ?></h2>

			<?php
			// Display notices
			settings_fields( 'pdwp_import_setting' ); ?>

			<div class="metabox-holder clr">

				<div class="postbox pdwp-import pdwp-bloc col-2 clr">

					<h3 class="hndle"><?php esc_html_e( 'Import Settings', 'relicwp-helper' ); ?></h3>

					<div class="inside">
						<p><?php echo wp_kses( __( 'Please select a <b>.dat</b> file generated by the export button.', 'relicwp-helper' ), array( 'b' => array() ) ); ?></p>

						<form method="post" enctype="multipart/form-data">

							<?php wp_nonce_field( 'pdwp_import', 'pdwp_import_nonce' ); ?>

							<input type="file" name="pdwp_import_file" id="pdwp-import-file" />

							<p class="submit">
								<input type="submit" class="button button-primary" value="<?php esc_attr_e( 'Import Settings', 'relicwp-helper' ) ?>" />
							</p>

						</form>

					</div>

				</div>

				<div class="postbox pdwp-export pdwp-bloc col-2 second clr">

					<h3 class="hndle"><?php esc_html_e( 'Export Settings', 'relicwp-helper' ); ?></h3>

					<div class="inside">
						<p><?php esc_html_e( 'This will export all theme_mods that means if other plugins are adding settings in the customizer it will export those as well.', 'relicwp-helper' ); ?></p>

						<p><?php echo wp_kses( __( 'Click below to generate a <b>.dat</b> file for all settings.', 'relicwp-helper' ), array( 'b' => array() ) ); ?></p>

						<p class="submit">
							<a href="<?php echo esc_url( admin_url( basename( $_SERVER['PHP_SELF'] ) . '?page=' . sanitize_text_field($_GET['page']) . '&export=1' ) ); ?>" id="pdwp-export-button" class="button button-primary"><?php echo esc_html_e( 'Export Settings', 'relicwp-helper' ); ?></a>
						</p>

					</div>

				</div>

			</div>

		</div>

	<?php }

	/**
	 * Load css
	 *
	 * @since 1.0.0
	 */
	public static function css( $hook ) {

		// Only load scripts when needed
		if ( RTHP_ADMIN_PANEL_HOOK_PREFIX . '-import-export' != $hook ) {
			return;
		}

		// CSS
		wp_enqueue_style( 'pdwp-import-export', plugins_url( '/assets/css/import-export.min.css', __FILE__ ) );

	}

}
new RelicWP_Helper_Import_Export();