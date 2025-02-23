<?php
/**
 * About
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
class RelicWP_Helper_About {

	/**
	 * Get things started
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'admin_menu', 				array( $this, 'add_page' ), 99 );
		add_action( 'admin_enqueue_scripts', 	array( $this, 'css' ) );
	}

	/**
	 * Add sub menu page
	 *
	 * @since 1.0.0
	 */
	public function add_page() {
		add_submenu_page(
			'relicwp-panel',
			esc_html__( 'About RelicWP', 'relicwp-helper' ),
			esc_html__( 'About RelicWP', 'relicwp-helper' ),
			'manage_options',
			'relicwp-panel-about',
			array( $this, 'create_admin_page' )
		);
	}

	/**
	 * Render about page
	 *
	 * @since 1.0.0
	 */
	public function create_admin_page() { ?>

		<div class="wrap pdwp-about-panel about-wrap">

			<?php
			// Get theme version #
			$theme_data    = wp_get_theme();
			$theme_version = $theme_data->get( 'Version' );

			// Affiliate link
			$ref_url = '';
			$aff_ref = apply_filters( 'pdvs_affiliate_ref', $ref_url ); ?>

			<div class="title-wrap clr">

				<h1 class="pdwp-title"><?php esc_html_e( 'RelicWP', 'relicwp-helper' ); ?><sup class="version"><?php echo esc_html( $theme_version ); ?></sup></h1>

				<ul class="social-wrap clr">
					<li><a href="https://twitter.com/RelicWP" class="twitter" title="<?php esc_html_e( 'Join us on Twitter', 'relicwp-helper' ); ?>" target="_blank"><i class="dashicons dashicons-twitter"></i></a></li>
					<li><a href="https://www.facebook.com/RelicWP" class="facebook" title="<?php esc_html_e( 'Join us on Facebook', 'relicwp-helper' ); ?>" target="_blank"><i class="dashicons dashicons-facebook-alt"></i></a></li>
					<li><a href="https://github.com/relicwp" class="github" title="<?php esc_html_e( 'Find us on GitHub', 'relicwp-helper' ); ?>" target="_blank"><i class="dashicons dashicons-admin-plugins"></i></a></li>
				</ul>

			</div>

			<div class="pdwp-content">

				<div class="pdwp-bloc">

					<h2 class="bloc-title"><?php esc_html_e( 'Thank you for using RelicWP', 'relicwp-helper' ); ?></h2>

					<p><?php esc_html_e( 'RelicWP is the perfect theme for your project. Lightweight and highly extendible, it will enable you to create almost any type of site with a beautiful & professional design. There are several options to personalise your website, multiple widget regions, a responsive design and much more. Developers will love his extensible codebase making it a joy to customise and extend.', 'relicwp-helper' ); ?></p>

					<p><strong><?php esc_html_e( 'The perfect theme to use with your favorite page builder!', 'relicwp-helper' ); ?></strong></p>

				</div>

				<div class="pdwp-bloc blue">

					<h2 class="bloc-title"><?php esc_html_e( 'Extend his functionalities with our extensions', 'relicwp-helper' ); ?></h2>

					<p><?php esc_html_e( 'Check our free and premium extensions that extend RelicWP&rsquo;s functionality and make it more powerful.', 'relicwp-helper' ); ?></p>

					<ul class="pdwp-list clr">
						<li>
							<a href="https://wordpress.org/plugins/relicwp-helper/<?php echo esc_attr( $aff_ref ); ?>" target="_blank"><?php esc_html_e( 'RelicWP Helper', 'relicwp-helper' ); ?> - <span class="price"><?php esc_html_e( 'free', 'relicwp-helper' ); ?></span></a>
							<p><?php esc_html_e( 'Add extra features like metaboxes, import/export and a panel to activate the extensions.', 'relicwp-helper' ); ?></p>
						</li>
						<li>
							<a href="https://relicwp.com/extension/pdvs-elementor-widgets/<?php echo esc_attr( $aff_ref ); ?>" target="_blank"><?php esc_html_e( 'Elementor Widgets', 'relicwp-helper' ); ?> - <span class="price">$39</span></a>
							<p><?php esc_html_e( 'Add some awesome new widgets to the popular free page builder Elementor.', 'relicwp-helper' ); ?></p>
						</li>
						<li>
							<a href="https://relicwp.com/extension/pdvs-custom-sidebar/<?php echo esc_attr( $aff_ref ); ?>" target="_blank"><?php esc_html_e( 'Custom Sidebar', 'relicwp-helper' ); ?> - <span class="price"><?php esc_html_e( 'free', 'relicwp-helper' ); ?></span></a>
							<p><?php esc_html_e( 'Generates an unlimited number of sidebars and place them on any page or post.', 'relicwp-helper' ); ?></p>
						</li>
						<li>
							<a href="https://relicwp.com/extension/pdvs-sticky-header/<?php echo esc_attr( $aff_ref ); ?>" target="_blank"><?php esc_html_e( 'Sticky Header', 'relicwp-helper' ); ?> - <span class="price">$29</span></a>
							<p><?php esc_html_e( 'A simple extension to attach the header at the top of your screen with an animation.', 'relicwp-helper' ); ?></p>
						</li>
						<li>
							<a href="https://relicwp.com/extension/pdvs-footer-callout/<?php echo esc_attr( $aff_ref ); ?>" target="_blank"><?php esc_html_e( 'Footer Callout', 'relicwp-helper' ); ?> - <span class="price">$29</span></a>
							<p><?php esc_html_e( 'Add some relevant/important information about your company or product in your footer.', 'relicwp-helper' ); ?></p>
						</li>
						<li>
							<a href="https://relicwp.com/extension/pdvs-side-panel/<?php echo esc_attr( $aff_ref ); ?>" target="_blank"><?php esc_html_e( 'Side Panel', 'relicwp-helper' ); ?> - <span class="price">$29</span></a>
							<p><?php esc_html_e( 'Display a panel on the right or left with your favorite widgets by clicking on an icon in the menu.', 'relicwp-helper' ); ?></p>
						</li>
						<li>
							<a href="https://relicwp.com/extension/pdvs-demo-import/<?php echo esc_attr( $aff_ref ); ?>" target="_blank"><?php esc_html_e( 'Demo Import', 'relicwp-helper' ); ?> - <span class="price"><?php esc_html_e( 'free', 'relicwp-helper' ); ?></span></a>
							<p><?php esc_html_e( 'Import the RelicWP demo content, widgets and customizer settings with one click.', 'relicwp-helper' ); ?></p>
						</li>
						<li>
							<a href="https://relicwp.com/extension/pdvs-social-sharing/<?php echo esc_attr( $aff_ref ); ?>" target="_blank"><?php esc_html_e( 'Social Sharing', 'relicwp-helper' ); ?> - <span class="price"><?php esc_html_e( 'free', 'relicwp-helper' ); ?></span></a>
							<p><?php esc_html_e( 'A simple extension to add your prefered social sharing buttons to your single posts.', 'relicwp-helper' ); ?></p>
						</li>
					</ul>

					<div class="pdwp-btn">
						<a href="https://relicwp.com/extensions/<?php echo esc_attr( $aff_ref ); ?>" class="pdwp-button" target="_blank"><?php esc_html_e( 'View all RelicWP extensions', 'relicwp-helper' ); ?> &rarr;</a>
					</div>

				</div>

				<div class="pdwp-bloc">

					<h2 class="bloc-title"><?php esc_html_e( 'Create your WordPress site quickly with Themecloud', 'relicwp-helper' ); ?></h2>

					<p><strong><?php esc_html_e( 'What is Themecloud?', 'relicwp-helper' ); ?></strong> <?php esc_html_e( 'It&rsquo;s a better way to build WordPress websites, instant setup, no coding required. They are removed all of the technical hurdles standing between you and your ideal site. Don’t worry about installations, configurations, migrations and maintenance. Focus on creating stellar content – and watch your business skyrocket! Not convinced yet?', 'relicwp-helper' ); ?> <a href="https://www.wpkube.com/create-wordpress-sites-quickly-themecloud/" target="_blank"><?php esc_html_e( 'Look at this great review from WPKube', 'relicwp-helper' ); ?></a></p>

					<p class="themecloud-price"><?php esc_html_e( 'From $9.90/mo', 'relicwp-helper' ); ?> <span class="small-text"><?php esc_html_e( '( 15-day free trial, no credit card required )', 'relicwp-helper' ); ?></span></p>

					<div class="pdwp-btn">
						<a href="http://www.themecloud.io/#_l_4a" class="pdwp-button" target="_blank"><?php esc_html_e( 'Learn more about Themecloud', 'relicwp-helper' ); ?> &rarr;</a>
					</div>

				</div>

				<?php if ( current_user_can( 'customize' ) ) { ?>

					<div class="pdwp-bloc customize">

						<h2 class="bloc-title"><?php esc_html_e( 'Getting started with RelicWP', 'relicwp-helper' ); ?></h2>

						<p><?php esc_html_e( 'Take a look in the options of the Customizer and see yourself how easy and quick to customize the theme as you wish.', 'relicwp-helper' ); ?></p>

						<ul class="pdwp-list clr">
							<li>
								<span class="option-title"><?php esc_html_e( 'Upload your logo', 'relicwp-helper' ); ?></span>
								<p><?php esc_html_e( 'Add your own logo and retina logo used for the mobile design.', 'relicwp-helper' ); ?></p>
								<a class="option-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=custom_logo' ) ); ?>" target="_blank"><?php esc_html_e( 'Go to the option', 'relicwp-helper' ); ?></a>
							</li>
							<li>
								<span class="option-title"><?php esc_html_e( 'Add your favicon', 'relicwp-helper' ); ?></span>
								<p><?php esc_html_e( 'The favicon is used as a browser and app icon for your website.', 'relicwp-helper' ); ?></p>
								<a class="option-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=site_icon' ) ); ?>" target="_blank"><?php esc_html_e( 'Go to the option', 'relicwp-helper' ); ?></a>
							</li>
							<li>
								<span class="option-title"><?php esc_html_e( 'Choose your primary color', 'relicwp-helper' ); ?></span>
								<p><?php esc_html_e( 'Replace the default primary and hover color by your own colors.', 'relicwp-helper' ); ?></p>
								<a class="option-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=pdvs_primary_color' ) ); ?>" target="_blank"><?php esc_html_e( 'Go to the option', 'relicwp-helper' ); ?></a>
							</li>
							<li>
								<span class="option-title"><?php esc_html_e( 'Change the links color', 'relicwp-helper' ); ?></span>
								<p><?php esc_html_e( 'Choose the color and hover color of your links for the entire site.', 'relicwp-helper' ); ?></p>
								<a class="option-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=pdvs_links_color' ) ); ?>" target="_blank"><?php esc_html_e( 'Go to the option', 'relicwp-helper' ); ?></a>
							</li>
							<li>
								<span class="option-title"><?php esc_html_e( 'Choose your typography', 'relicwp-helper' ); ?></span>
								<p><?php esc_html_e( 'Choose your own typography for any parts of your website.', 'relicwp-helper' ); ?></p>
								<a class="option-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=pdvs_typography_panel' ) ); ?>" target="_blank"><?php esc_html_e( 'Go to the option', 'relicwp-helper' ); ?></a>
							</li>
							<li>
								<span class="option-title"><?php esc_html_e( 'Top bar options', 'relicwp-helper' ); ?></span>
								<p><?php esc_html_e( 'Enable/Disable the top bar, add your own paddings and colors.', 'relicwp-helper' ); ?></p>
								<a class="option-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=pdvs_top_bar' ) ); ?>" target="_blank"><?php esc_html_e( 'Go to the option', 'relicwp-helper' ); ?></a>
							</li>
							<li>
								<span class="option-title"><?php esc_html_e( 'Header options', 'relicwp-helper' ); ?></span>
								<p><?php esc_html_e( 'Choose the style, the height and the colors for your site header.', 'relicwp-helper' ); ?></p>
								<a class="option-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=pdvs_header_style' ) ); ?>" target="_blank"><?php esc_html_e( 'Go to the option', 'relicwp-helper' ); ?></a>
							</li>
							<li>
								<span class="option-title"><?php esc_html_e( 'Footer bottom options', 'relicwp-helper' ); ?></span>
								<p><?php esc_html_e( 'Add your copyright, paddings and colors for the footer bottom.', 'relicwp-helper' ); ?></p>
								<a class="option-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=pdvs_footer_bottom' ) ); ?>" target="_blank"><?php esc_html_e( 'Go to the option', 'relicwp-helper' ); ?></a>
							</li>
						</ul>

						<?php
						// Customizer url
						if ( isset( $_SERVER['REQUEST_URI'] ) ) {
							$customize_url = add_query_arg(
								array(
									'return' => urlencode( esc_url_raw( wp_unslash( $_SERVER['REQUEST_URI'] ) ) ),
								),
								'customize.php'
							);
						} ?>
						<div class="pdwp-btn">
							<a href="<?php echo esc_url( $customize_url ); ?>" class="pdwp-button load-customize hide-if-no-customize"><?php esc_html_e( 'Customize Your Site', 'relicwp-helper' ); ?> &rarr;</a>
						</div>

					</div>

				<?php } ?>

				<div class="pdwp-bloc col-2">

					<h2 class="bloc-title"><?php esc_html_e( 'Contribute to RelicWP', 'relicwp-helper' ); ?></h2>

					<p><?php esc_html_e( 'You&rsquo;ve found a bug? Want to contribute a patch, create a new feature or extension?', 'relicwp-helper' ); ?>
					<a class="github-link" href="https://github.com/relicwp/" target="_blank"><?php esc_html_e( 'GitHub is the place to go!', 'relicwp-helper' ); ?></a></p>

				</div>

				<div class="pdwp-bloc col-2 second">

					<h2 class="bloc-title"><?php esc_html_e( 'Get support', 'relicwp-helper' ); ?></h2>

					<p><?php esc_html_e( 'You can find a wide range of information on how to use and customise RelicWP in our', 'relicwp-helper' ); ?> <a href="http://relicwp.com/docs" target="_blank"><?php esc_html_e( 'documentation', 'relicwp-helper' ); ?></a>. <?php esc_html_e( 'If you need help?', 'relicwp-helper' ); ?> <a href="https://relicwp.com/support/<?php echo esc_attr( $aff_ref ); ?>" target="_blank"><?php esc_html_e( 'open a support ticket', 'relicwp-helper' ); ?></a>.</p>

				</div>

				<div class="pdwp-bloc">

					<h2 class="bloc-title"><?php esc_html_e( 'Recommended plugins', 'relicwp-helper' ); ?></h2>

					<p><?php esc_html_e( 'Below you will find links to plugins I personally like and recommend. None of these plugins are required for your theme to work, they simply add additional functionality.', 'relicwp-helper' ); ?></p>

					<ul class="pdwp-list clr">
						<li><a href="http://wordpress.org/plugins/contact-form-7/" target="_blank">Contact Form 7 - <span class="price"><?php esc_html_e( 'free', 'relicwp-helper' ); ?></span></a>
						<p><?php esc_html_e( 'Manage multiple contact forms and customize the form and the mail contents with markups.', 'relicwp-helper' ); ?></p></li>
						<li><a href="http://www.gravityforms.com/" target="_blank">Gravity Forms - <span class="price">$39</span></a>
						<p><?php esc_html_e( 'Gravity Forms is the easiest tool to create advanced forms for your WordPress powered website.', 'relicwp-helper' ); ?></p></li>
						<li><a href="https://wordpress.org/plugins/elementor/" target="_blank">Elementor - <span class="price"><?php esc_html_e( 'free', 'relicwp-helper' ); ?></span></a>
						<p><?php esc_html_e( 'The most advanced frontend drag & drop page builder. Create high-end, pixel perfect websites.', 'relicwp-helper' ); ?></p></li>
						<li><a href="https://wordpress.org/plugins/beaver-builder-lite-version/" target="_blank">Beaver Builder - <span class="price"><?php esc_html_e( 'free', 'relicwp-helper' ); ?></span></a>
						<p><?php esc_html_e( 'A drag and drop WordPress Page Builder. Create with ease beautiful & professional pages.', 'relicwp-helper' ); ?></p></li>
						<li><a href="https://codecanyon.net/item/visual-composer-page-builder-for-wordpress/242431?ref=RelicWP" target="_blank">Visual Composer - <span class="price">$34</span></a>
						<p><?php esc_html_e( 'Visual Composer is the ultimate plugin for building every WordPress site without coding.', 'relicwp-helper' ); ?></p></li>
						<li><a href="https://codecanyon.net/item/slider-revolution-responsive-wordpress-plugin/2751380?ref=RelicWP" target="_blank">Slider Revolution - <span class="price">$19</span></a>
						<p><?php esc_html_e( 'It&rsquo;s not just a slider, build modern & mobile friendly presentations for your website in no time.', 'relicwp-helper' ); ?></p></li>
						<li><a href="https://wordpress.org/plugins/ultimate-member/" target="_blank">Ultimate Member - <span class="price"><?php esc_html_e( 'free', 'relicwp-helper' ); ?></span></a>
						<p><?php esc_html_e( 'A powerful and flexible plugin that makes it a breeze for users to sign-up and become members.', 'relicwp-helper' ); ?></p></li>
						<li><a href="https://wordpress.org/plugins/woocommerce/" target="_blank">WooCommerce - <span class="price"><?php esc_html_e( 'free', 'relicwp-helper' ); ?></span></a>
						<p><?php esc_html_e( 'WooCommerce is a free eCommerce plugin that allows you to sell anything, beautifully.', 'relicwp-helper' ); ?></p></li>
					</ul>

					<div class="pdwp-btn">
						<a href="https://relicwp.com/recommended-plugins/<?php echo esc_attr( $aff_ref ); ?>" class="pdwp-button" target="_blank"><?php esc_html_e( 'More Recommended Plugins', 'relicwp-helper' ); ?> &rarr;</a>
					</div>

				</div>

			</div>

		</div><!-- .wrap about-wrap -->


		<?php
	}

	/**
	 * Load about css
	 *
	 * @since 1.0.0
	 */
	public function css( $hook ) {
		
		// Only load scripts when needed
		if ( RTHP_ADMIN_PANEL_HOOK_PREFIX . '-about' != $hook ) {
			return;
		}

		wp_enqueue_style( 'pdwp-about', plugins_url( '/assets/css/about.min.css', __FILE__ ) );

	}
	
}
new RelicWP_Helper_About();