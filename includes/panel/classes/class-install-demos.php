<?php
/**
 * Install demos page
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
class RelicWP_Install_Demos {

	/**
	 * Start things up
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'add_page' ), 999 );
	}

	/**
	 * Add sub menu page for the custom CSS input
	 *
	 * @since 1.0.0
	 */
	public function add_page() {

		// If Pro Demos activated
		if ( class_exists( 'Pd_Pro_Demos' ) ) {
			$title = '<span style="color: #36c786">' . esc_html__( 'Install Demos', 'relicwp-helper' ) . '</span>';
		} else {
			$title = esc_html__( 'Install Demos', 'relicwp-helper' );
		}

		add_submenu_page(
			'relicwp-panel',
			esc_html__( 'Install Demos', 'relicwp-helper' ),
			$title,
			'manage_options',
			'relicwp-panel-install-demos',
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
		$brand = pdwp_theme_branding(); ?>

		<div class="owp-demo-wrap wrap">

			<h2><?php echo esc_html( $brand ); ?> - <?php esc_html_e( 'Install Demos', 'relicwp-helper' ); ?></h2>

			<div class="theme-browser rendered">

				<?php
				// Vars
				$demos = PdWP_Demos::get_demos_data();
				$categories = PdWP_Demos::get_demo_all_categories( $demos ); ?>

				<?php if ( ! empty( $categories ) ) : ?>
					<div class="owp-header-bar">
						<nav class="owp-navigation">
							<ul>
								<li class="active"><a href="#all" class="owp-navigation-link"><?php esc_html_e( 'All', 'relicwp-helper' ); ?></a></li>
								<?php foreach ( $categories as $key => $name ) : ?>
									<li><a href="#<?php echo esc_attr( $key ); ?>" class="owp-navigation-link"><?php echo esc_html( $name ); ?></a></li>
								<?php endforeach; ?>
							</ul>
						</nav>
						<div clas="owp-search">
							<input type="text" class="owp-search-input" name="owp-search" value="" placeholder="<?php esc_html_e( 'Search demos...', 'relicwp-helper' ); ?>">
						</div>
					</div>
				<?php endif; ?>

				<div class="themes wp-clearfix">

					<?php
					// Loop through all demos
					foreach ( $demos as $demo => $key ) {
						// Vars
						$item_categories = PdWP_Demos::get_demo_item_categories( $key ); ?>

						<div class="theme-wrap" data-categories="<?php echo esc_attr( $item_categories ); ?>" data-name="<?php echo esc_attr( strtolower( $demo ) ); ?>">

							<div class="theme<?php if ( empty( $key['is_premium'] ) ) :?> owp-open-popup<?php endif;?>" <?php if ( !empty( $key['is_premium'] ) ) :?> style="cursor: default" <?php endif;?> data-demo-id="<?php echo esc_attr( $demo ); ?>">
                        <?php if ( !empty( $key['is_premium'] ) ) :?><span class="pro-badge">Pro</span><?php endif;?>
								<div class="theme-screenshot">
									<img src="<?php echo esc_url(RTHP_URL) . 'includes/panel/demos/' . esc_attr( $demo ); ?>.jpg" />

									<div class="demo-import-loader preview-all preview-all-<?php echo esc_attr( $demo ); ?>"></div>

									<div class="demo-import-loader preview-icon preview-<?php echo esc_attr( $demo ); ?>"><i class="custom-loader"></i></div>
								</div>

								<div class="theme-id-container">
		
									<h2 class="theme-name" id="<?php echo esc_attr( $demo ); ?>"><span><?php echo ucwords( $demo ); ?></span></h2>

									<div class="theme-actions">

										<a class="button button-primary" href="https://demo.relicwp.com/<?php echo esc_attr($demo); ?>/" target="_blank"><?php _e('Live Preview', 'relicwp-helper'); ?></a>

                                        <?php if ( !empty( $key['is_premium'] ) ) : ?>
                                            <a class="button button-primary buyNow" href="https://<?php echo esc_attr( $demo ); ?>.relicwp.com/" target="_blank"><?php _e( 'Buy Now', 'relicwp-helper' ); ?></a>
                                        <?php endif;?>
									</div>

								</div>

							</div>

						</div>

					<?php } ?>

				</div>

			</div>

		</div>

	<?php }
}
new RelicWP_Install_Demos();