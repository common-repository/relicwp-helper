<?php
/**
 * Plugin Name:			RelicWP Helper
 * Plugin URI:			https://wordpress.org/plugins/relicwp-helper/
 * Description:			Use RelicWP helper to activate features like widgets, import/export, metaboxes, and a panel to activate other premium addons.
 * Version:				1.0.0
 * Author:				RelicWP
 * Author URI:			https://relicwp.com/
 * Requires at least:	5.3
 * Tested up to:		5.7
 *
 * Text Domain: relicwp-helper
 * Domain Path: /languages
 *
 * @package RelicWP_Helper
 * @category Core
 * @author RelicWP
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Returns the main instance of RelicWP_Helper to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object RelicWP_Helper
 */
function RelicWP_Helper() {
	return RelicWP_Helper::instance();
} // End RelicWP_Helper()

RelicWP_Helper();

/**
 * Main RelicWP_Helper Class
 *
 * @class RelicWP_Helper
 * @version	1.0.0
 * @since 1.0.0
 * @package	RelicWP_Helper
 */
final class RelicWP_Helper {
	/**
	 * RelicWP_Helper The single instance of RelicWP_Helper.
	 * @var 	object
	 * @access  private
	 * @since 	1.0.0
	 */
	private static $_instance = null;

	/**
	 * The token.
	 * @var     string
	 * @access  public
	 * @since   1.0.0
	 */
	public $token;

	/**
	 * The version number.
	 * @var     string
	 * @access  public
	 * @since   1.0.0
	 */
	public $version;

	// Admin - Start
	/**
	 * The admin object.
	 * @var     object
	 * @access  public
	 * @since   1.0.0
	 */
	public $admin;

	/**
	 * Constructor function.
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function __construct( $widget_areas = array() ) {
		/*set menu*/
		
		//$allowed_html = wp_kses_allowed_html( 'post' );
		//echo '<pre>';
		//print_r($allowed_html);
		//echo '</pre>';
		
		$locations = get_theme_mod('nav_menu_locations');
		
		$terms = get_terms( array(
			'taxonomy' => 'nav_menu',
			'hide_empty' => true,
		) );
		
		if( !empty( $terms ) ){
			foreach($terms as $trm) {
				if($trm->slug == 'primary-menu') {
					if( isset( $locations['main_menu'] ) && $locations['main_menu'] !== $trm->term_id ){
						$locations['main_menu'] = $trm->term_id;
						set_theme_mod( 'nav_menu_locations', $locations );
					}
				}
			}
		}
		
		/*set menu end*/

		
		$this->token 			= 'relicwp-helper';
		$this->plugin_url 		= plugin_dir_url( __FILE__ );
		$this->plugin_path 		= plugin_dir_path( __FILE__ );
		$this->version 			= '1.0.0';

		define( 'RTHP_URL', $this->plugin_url );
		define( 'RTHP_PATH', $this->plugin_path );
		define( 'RTHP_VERSION', $this->version );
        define( 'RTHP_FILE_PATH', __FILE__ );
		define( 'RTHP_ADMIN_PANEL_HOOK_PREFIX', 'theme-panel_page_relicwp-panel' );

		// WPForms partner ID
		add_filter( 'wpforms_upgrade_link', array( $this, 'wpforms_upgrade_link' ) );

		register_activation_hook( __FILE__, array( $this, 'install' ) );

		add_action( 'init', array( $this, 'load_plugin_textdomain' ) );

		// Setup all the things
		add_action( 'init', array( $this, 'setup' ) );

		// Menu icons
		$theme = wp_get_theme();
		if ( 'RelicWP' == $theme->name || 'relicwp' == $theme->template ) {
			require_once( RTHP_PATH .'/includes/panel/theme-panel.php' );
			require_once( RTHP_PATH .'/includes/menu-icons/menu-icons.php' );
			require_once( RTHP_PATH .'/includes/wizard/wizard.php' );
			require_once( RTHP_PATH .'/includes/ctp.php' );

			// Outputs custom JS to the footer
			add_action( 'wp_footer', array( $this, 'custom_js' ), 9999 );

			// Register Custom JS file
			add_action( 'init', array( $this, 'register_custom_js' ) );

			// Move the Custom CSS section into the Custom CSS/JS section
			add_action( 'customize_register', array( $this, 'customize_register' ), 11 );

			// Remove customizer unnecessary sections
			add_action( 'customize_register', array( $this, 'remove_customize_sections' ), 11 );

			// Load custom widgets
			add_action( 'widgets_init', array( $this, 'custom_widgets' ), 10 );

			// Add meta tags
			add_filter( 'wp_head', array( $this, 'meta_tags' ), 1 );
		}

		// Allow shortcodes in text widgets
		add_filter( 'widget_text', 'do_shortcode' );

		// Allow for the use of shortcodes in the WordPress excerpt
		add_filter( 'the_excerpt', 'shortcode_unautop' );
		add_filter( 'the_excerpt', 'do_shortcode' );
	}

	/**
	 * Main RelicWP_Helper Instance
	 *
	 * Ensures only one instance of RelicWP_Helper is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 * @static
	 * @see RelicWP_Helper()
	 * @return Main RelicWP_Helper instance
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) )
			self::$_instance = new self();
		return self::$_instance;
	} // End instance()

	/**
	 * WPForms partner ID
	 *
	 * @since 1.0.0
	 */
	public function wpforms_upgrade_link() {
		$url = 'https://wpforms.com/lite-upgrade/?discount=LITEUPGRADE&amp;utm_source=WordPress&amp;utm_medium=' . sanitize_key( apply_filters( 'wpforms_upgrade_link_medium', 'link' ) ) . '&amp;utm_campaign=liteplugin';

		// Build final URL
		$final_url = sprintf( 'http://www.shareasale.com/r.cfm?B=837827&U=%s&M=64312&urllink=%s', '1591020', $url );

		// Return URL.
		return esc_url( $final_url );
	}

	/**
	 * Load the localisation file.
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function load_plugin_textdomain() {
		load_plugin_textdomain( 'relicwp-helper', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}

	/**
	 * Cloning is forbidden.
	 *
	 * @since 1.0.0
	 */
	public function __clone() {
		_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?' ), '1.0.0' );
	}

	/**
	 * Unserializing instances of this class is forbidden.
	 *
	 * @since 1.0.0
	 */
	public function __wakeup() {
		_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?' ), '1.0.0' );
	}

	/**
	 * Installation.
	 * Runs on activation. Logs the version number and assigns a notice message to a WordPress option.
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function install() {
		$this->_log_version_number();
	}

	/**
	 * Log the plugin version number.
	 * @access  private
	 * @since   1.0.0
	 * @return  void
	 */
	private function _log_version_number() {
		// Log the version number.
		update_option( $this->token . '-version', $this->version );
	}

	/**
	 * All theme functions hook into the pdwp_footer_js filter for this function.
	 *
	 * @since  1.0.0
	 */
	public static function custom_js( $output = NULL ) {

		// Add filter for adding custom js via other functions
		$output = apply_filters( 'pdvs_footer_js', $output );

		// Minify and output JS in the wp_footer
		if ( ! empty( $output ) ) { ?>

			<script type="text/javascript">

				/* PdWP JS */
				<?php echo RelicWP_Helper_JSMin::minify( $output ); ?>

			</script>

		<?php
		}

	}

	/**
	 * Adds customizer options
	 *
	 * @since  1.0.0
	 */
	public function register_custom_js() {

		// Var
		$dir = RTHP_PATH .'/includes/';

		// File
		if ( RelicWP_Helper_Theme_Panel::get_setting( 'pt_custom_code_panel' ) ) {
			require_once( $dir . 'custom-code.php' );
		}

	}

	/**
	 * Move the Custom CSS section into the Custom CSS/JS section
	 *
	 * @since  1.0.0
	 */
	public static function customize_register( $wp_customize ) {

		// Move custom css setting
		$wp_customize->get_control( 'custom_css' )->section = 'pdvs_custom_code_panel';

	}

	/**
	 * Remove customizer unnecessary sections
	 *
	 * @since 1.0.0
	 */
	public static function remove_customize_sections( $wp_customize ) {

		// Remove core sections
		$wp_customize->remove_section( 'colors' );
		$wp_customize->remove_section( 'themes' );
		$wp_customize->remove_section( 'background_image' );

		// Remove core controls
		$wp_customize->remove_control( 'header_textcolor' );
		$wp_customize->remove_control( 'background_color' );
		$wp_customize->remove_control( 'background_image' );
		$wp_customize->remove_control( 'display_header_text' );

		// Remove default settings
		$wp_customize->remove_setting( 'background_color' );
		$wp_customize->remove_setting( 'background_image' );

	}

	/**
	 * Setup all the things.
	 * Only executes if RelicWP or a child theme using RelicWP as a parent is active and the extension specific filter returns true.
	 * @return void
	 */
	public function setup() {
		$theme = wp_get_theme();
        $pt_scripts_settings = get_option('pt_scripts_settings');
        
		if ( 'RelicWP' == $theme->name || 'relicwp' == $theme->template ) {
			require_once( RTHP_PATH .'/includes/metabox/butterbean/butterbean.php' );
			require_once( RTHP_PATH .'/includes/metabox/metabox.php' );
			require_once( RTHP_PATH .'/includes/metabox/shortcodes.php' );
			require_once( RTHP_PATH .'/includes/metabox/gallery-metabox/gallery-metabox.php' );
			require_once( RTHP_PATH .'/includes/shortcodes/shortcodes.php' );
			require_once( RTHP_PATH .'/includes/image-resizer.php' );
			require_once( RTHP_PATH .'/includes/jsmin.php' );
			require_once( RTHP_PATH .'/includes/panel/notice.php' );
			require_once( RTHP_PATH .'/includes/walker.php' );
			require_once( RTHP_PATH .'/includes/dashboard.php' );
			require_once( RTHP_PATH .'/includes/panel/demos.php' );

			add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ), 999 );
		}
	}

	/**
	 * Include flickr widget class
	 *
	 * @since   1.0.0
	 */
	public static function custom_widgets() {

		if ( ! version_compare( PHP_VERSION, '5.6', '>=' ) ) {
			return;
		}

		// Define array of custom widgets for the theme
		$widgets = apply_filters( 'pdvs_custom_widgets', array(
			'about-me',
			'contact-info',
			'custom-links',
			'custom-menu',
			'facebook',
			'flickr',
			'instagram',
			'mailchimp',
			'recent-posts',
			'social',
			'social-share',
			'tags',
			'twitter',
			'video',
			'custom-header-logo',
			'custom-header-nav',
		) );

		// Loop through widgets and load their files
		if ( $widgets && is_array( $widgets ) ) {
			foreach ( $widgets as $widget ) {
				$file = RTHP_PATH .'/includes/widgets/' . $widget .'.php';
				if ( file_exists ( $file ) ) {
					require_once( $file );
				}
			}
		}

	}

	/**
	 * Add meta tags
	 *
	 * @since  1.0.0
	 */
	public static function meta_tags() {

		// Return if disabled or if Yoast SEO enabled as they have their own meta tags
		if ( false == get_theme_mod( 'pdvs_open_graph', false )
			|| defined( 'WPSEO_VERSION' )
			|| defined( 'RANK_MATH_FILE' ) ) {
			return;
		}

		// Facebook URL
		$facebook_url = get_theme_mod( 'pdvs_facebook_page_url' );

		// Disable Jetpack's Open Graph tags
		add_filter( 'jetpack_enable_opengraph', '__return_false', 99 );
		add_filter( 'jetpack_enable_open_graph', '__return_false', 99 );
		add_filter( 'jetpack_disable_twitter_cards', '__return_true', 99 );

		// Type
		if ( is_front_page() || is_home() ) {
			$type = 'website';
		} else if ( is_singular() ) {
			$type = 'article';
		} else {
			// We use "object" for archives etc. as article doesn't apply there.
			$type = 'object';
		}

		// Title
		if ( is_singular() ) {
			$title = get_the_title();
		} else {
			$title = pdwp_title();
		}

		// Description
		if ( is_category() || is_tag() || is_tax() ) {
			$description = strip_shortcodes( wp_strip_all_tags( term_description() ) );
		} else {
			$description = html_entity_decode( htmlspecialchars_decode( pdwp_excerpt( 40 ) ) );
		}

		// Image
		$image = '';
		$has_img = false;
		if ( PDWP_WOOCOMMERCE_ACTIVE
			&& is_product_category() ) {
		    global $wp_query;
		    $cat = $wp_query->get_queried_object();
		    $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
		    $get_image = wp_get_attachment_url( $thumbnail_id );
		    if ( $get_image ) {
				$image = $get_image;
				$has_img = true;
			}
		} else {
			$get_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
			$image = $get_image[0];
			$has_img = true;
		}

		// Post author
		if ( $facebook_url ) {
			$author = $facebook_url;
		}

		// Facebook publisher URL
		if ( ! empty( $facebook_url ) ) {
			$publisher = $facebook_url;
		}

		// Facebook APP ID
		$facebook_appid = get_theme_mod( 'pdvs_facebook_appid' );
		if ( ! empty( $facebook_appid ) ) {
			$fb_app_id = $facebook_appid;
		}

		// Twiiter handle
		$twitter_handle = '@' . str_replace( '@' , '' , get_theme_mod( 'pdvs_twitter_handle' ) );

		// Output
		$output = self::opengraph_tag( 'property', 'og:type', trim( $type ) );
		$output .= self::opengraph_tag( 'property', 'og:title', trim( $title ) );

		if ( isset( $description ) && ! empty( $description ) ) {
			$output .= self::opengraph_tag( 'property', 'og:description', trim( $description ) );
		}

		if ( has_post_thumbnail( pdwp_post_id() ) && true == $has_img ) {
			$output .= self::opengraph_tag( 'property', 'og:image', trim( $image ) );
			$output .= self::opengraph_tag( 'property', 'og:image:width', absint( $get_image[1] ) );
			$output .= self::opengraph_tag( 'property', 'og:image:height', absint( $get_image[2] ) );
		}

		$output .= self::opengraph_tag( 'property', 'og:url', trim( get_permalink() ) );
		$output .= self::opengraph_tag( 'property', 'og:site_name', trim( get_bloginfo( 'name' ) ) );

		if ( is_singular() && ! is_front_page() ) {

			if ( isset( $author ) && ! empty( $author ) ) {
				$output .= self::opengraph_tag( 'property', 'article:author', trim( $author ) );
			}

			if ( is_singular( 'post' ) ) {
				$output .= self::opengraph_tag( 'property', 'article:published_time', trim( get_post_time( 'c' ) ) );
				$output .= self::opengraph_tag( 'property', 'article:modified_time', trim( get_post_modified_time( 'c' ) ) );
				$output .= self::opengraph_tag( 'property', 'og:updated_time', trim( get_post_modified_time( 'c' ) ) );
			}

		}

		if ( is_singular() ) {

			$tags = get_the_tags();
			if ( ! is_wp_error( $tags ) && ( is_array( $tags ) && $tags !== array() ) ) {
				foreach ( $tags as $tag ) {
					$output .= self::opengraph_tag( 'property', 'article:tag', trim( $tag->name ) );
				}
			}

			$terms = get_the_category();
			if ( ! is_wp_error( $terms ) && ( is_array( $terms ) && $terms !== array() ) ) {
				// We can only show one section here, so we take the first one.
				$output .= self::opengraph_tag( 'property', 'article:section', trim( $terms[0]->name ) );
			}

		}

		if ( isset( $publisher ) && ! empty( $publisher ) ) {
			$output .= self::opengraph_tag( 'property', 'article:publisher', trim( $publisher ) );
		}

		if ( isset( $fb_app_id ) && ! empty( $fb_app_id ) ) {
			$output .= self::opengraph_tag( 'property', 'fb:app_id', trim( $fb_app_id ) );
		}

		// Twitter
		$output .= self::opengraph_tag( 'name', 'twitter:card', 'summary_large_image' );
		$output .= self::opengraph_tag( 'name', 'twitter:title', trim( $title ) );

		if ( isset( $description ) && ! empty( $description ) ) {
			$output .= self::opengraph_tag( 'name', 'twitter:description', trim( $description ) );
		}

		if ( has_post_thumbnail( get_the_ID() ) && true == $has_img ) {
			$output .= self::opengraph_tag( 'name', 'twitter:image', trim( $image ) );
		}

		if ( isset( $twitter_handle ) && ! empty( $twitter_handle ) ) {
			$output .= self::opengraph_tag( 'name', 'twitter:site', trim( $twitter_handle ) );
			$output .= self::opengraph_tag( 'name', 'twitter:creator', trim( $twitter_handle ) );
		}

		echo wp_kses( $output, array( 'meta'=>array() ) );

	}

	/**
	 * Get meta tags
	 *
	 * @since  1.0.0
	 */
	public static function opengraph_tag( $attr, $property, $content ) {
		echo '<meta ', esc_attr( $attr ), '="', esc_attr( $property ), '" content="', esc_attr( $content ), '" />', "\n";
	}

	/**
	 * Enqueue scripts
	 *
	 * @since   1.0.0
	 */
	public function scripts() {

		// Load main stylesheet
		wp_enqueue_style( 'pt-widgets-style', plugins_url( '/assets/css/widgets.css', __FILE__ ) );

		// If rtl
		if ( is_RTL() ) {
			wp_enqueue_style( 'pt-widgets-style-rtl', plugins_url( '/assets/css/rtl.css', __FILE__ ) );
		}

	}

} // End Class