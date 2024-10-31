<?php

/**
 * Scripts Panel
 *
 * @package RelicWP_Helper
 * @category Core
 * @author PdWP
 */
use Leafo\ScssPhp\Compiler;

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Start Class
class RelicWP_Helper_Scripts_Panel {

    /**
     * Start things up
     */
    public function __construct() {

        if (is_admin()) {

            // Add panel menu
            add_action('admin_menu', array($this, 'add_page'), 10);

            // Add custom scripts
            add_action('admin_enqueue_scripts', array($this, 'admin_scripts'));

            // Register panel settings
            add_action('admin_init', array($this, 'register_settings'));
        } else {

            // Enqueue scripts
            add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'), 999);

            // Add body classes
            add_filter('body_class', array($this, 'body_classes'));
        }
    }

    /**
     * Return scripts
     *
     * @since  1.0.0
     */
    private static function get_scripts() {

        $scripts = array(
            'pt_customSelect_script' => array(
                'label' => esc_html__('Custom Select', 'relicwp-helper'),
                'desc' => esc_html__('This script uses the native select box and add overlays a stylable <span> element in order to acheive the desired look.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_dropDownSearch_script' => array(
                'label' => esc_html__('Drop Down Search', 'relicwp-helper'),
                'desc' => esc_html__('This script is for the drop down search style in your navigation.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_headerReplaceSearch_script' => array(
                'label' => esc_html__('Header Replace Search', 'relicwp-helper'),
                'desc' => esc_html__('This script is for the header replace search style in your navigation.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_overlaySearch_script' => array(
                'label' => esc_html__('Overlay Search', 'relicwp-helper'),
                'desc' => esc_html__('This script is for the overlay search style in your navigation.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_fitVids_script' => array(
                'label' => esc_html__('FitVids', 'relicwp-helper'),
                'desc' => esc_html__('This script is to achieve fluid width videos in your responsive web design, your videos looks good on all devices.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_fixedFooter_script' => array(
                'label' => esc_html__('Fixed Footer', 'relicwp-helper'),
                'desc' => esc_html__('This script adds a height to your content to keep your footer at the bottom of your page, the Fixed Footer option need to be activated in the customizer&rsquo;s Footer Widgets section.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_parallax_footer_script' => array(
                'label' => esc_html__('Parallax Footer', 'relicwp-helper'),
                'desc' => esc_html__('This script is used for the parallax footer effect.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_fullScreenMenu_script' => array(
                'label' => esc_html__('Full Screen Menu', 'relicwp-helper'),
                'desc' => esc_html__('This script is to open your menu in overlay for the full screen header style, you can disable this function if you do not use this header style.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_headerSearchForm_script' => array(
                'label' => esc_html__('Header Search Form', 'relicwp-helper'),
                'desc' => esc_html__('This script is to add a class to the search form to make the label disappear when text is inserted, used on some header style like medium or full screen and the full screen mobile menu style.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_infiniteScroll_script' => array(
                'label' => esc_html__('Infinite Scroll', 'relicwp-helper'),
                'desc' => esc_html__('This script create an infinite scrolling effect, used for the blog archives page if Infinite Scroll is selected as pagination style.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_isotope_script' => array(
                'label' => esc_html__('Isotope', 'relicwp-helper'),
                'desc' => esc_html__('This script is to filter & sort layouts, used for the masonry grid style of your blog and will be used in some extensions.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_lightbox_script' => array(
                'label' => esc_html__('Lightbox', 'relicwp-helper'),
                'desc' => esc_html__('This script enables you to overlay your images on the current page, used for the gallerie, single product and content images.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_matchHeight_script' => array(
                'label' => esc_html__('Match Height', 'relicwp-helper'),
                'desc' => esc_html__('This script is a responsive equal heights script makes the height of all selected elements exactly equal, used for the grid blog style.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_megaMenu_script' => array(
                'label' => esc_html__('Mega Menu', 'relicwp-helper'),
                'desc' => esc_html__('This script is to create the mega menus, so if you don&rsquo;t use mega menus at all on your website, you can disable this script.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_navNoClick_script' => array(
                'label' => esc_html__('Nav No Click', 'relicwp-helper'),
                'desc' => esc_html__('This script is to prevent clicking on your links, used for the "Disable link" field of your menu items.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_scrollEffect_script' => array(
                'label' => esc_html__('Scroll Effect', 'relicwp-helper'),
                'desc' => esc_html__('This script create an animation to your anchor links, mainly used for a one page site but also for some links like the comment link on your single posts.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_scrollTop_script' => array(
                'label' => esc_html__('Scroll Top', 'relicwp-helper'),
                'desc' => esc_html__('This script is to displays the scroll up button and brings you back to the top of your page when you click on it.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_sidr_script' => array(
                'label' => esc_html__('Sidr', 'relicwp-helper'),
                'desc' => esc_html__('This script is for easily creating responsive side menus, used for the Sidebar mobile menu style.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_dropdown_mobile_script' => array(
                'label' => esc_html__('Drop Down Mobile', 'relicwp-helper'),
                'desc' => esc_html__('This script is used for the Drop Down mobile menu style.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_fullscreen_mobile_script' => array(
                'label' => esc_html__('Full Screen Mobile', 'relicwp-helper'),
                'desc' => esc_html__('This script is used for the Full Screen mobile menu style.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_slick_script' => array(
                'label' => esc_html__('Slick', 'relicwp-helper'),
                'desc' => esc_html__('This script is used for all the carousel of your site, gallerie images, WooCommerce single product images and thumbnails.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_smoothScroll_script' => array(
                'label' => esc_html__('SmoothScroll', 'relicwp-helper'),
                'desc' => esc_html__('This script adds a smooth scrolling to the browser.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_superfish_script' => array(
                'label' => esc_html__('Superfish', 'relicwp-helper'),
                'desc' => esc_html__('This script adds usability enhancements to existing multi-level drop-down menus.', 'relicwp-helper'),
                'type' => 'js',
            ),
            'pt_wooAccountLinks_script' => array(
                'label' => esc_html__('WooCommerce Account Links', 'relicwp-helper'),
                'desc' => esc_html__('This script is to switch between login/register in your account page.', 'relicwp-helper'),
                'type' => 'js',
                'condition' => class_exists('WooCommerce'),
            ),
            'pt_wooGridList_script' => array(
                'label' => esc_html__('WooCommerce Grid/List Buttons', 'relicwp-helper'),
                'desc' => esc_html__('This script is to switch between grid and list view on your WooCommerce catalog products.', 'relicwp-helper'),
                'type' => 'js',
                'condition' => class_exists('WooCommerce'),
            ),
            'pt_wooQuantityButtons_script' => array(
                'label' => esc_html__('WooCommerce Quantity Buttons', 'relicwp-helper'),
                'desc' => esc_html__('This script is to add a up and down button for the quantity input number on your WooCommerce single products and cart pages.', 'relicwp-helper'),
                'type' => 'js',
                'condition' => class_exists('WooCommerce'),
            ),
            'pt_wooReviewsScroll_script' => array(
                'label' => esc_html__('WooCommerce Reviews Scroll', 'relicwp-helper'),
                'desc' => esc_html__('This script is to show and scroll down to your review tab to your WooCommerce single products when you click on the review link.', 'relicwp-helper'),
                'type' => 'js',
                'condition' => class_exists('WooCommerce'),
            ),
            // type css
            'pt_fontAwesome_style' => array(
                'label' => esc_html__('Font Awesome Icons', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the font awesome icons.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_simpleLineIcons_style' => array(
                'label' => esc_html__('Simple Line Icons', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the simple line icons.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_topBar_style' => array(
                'label' => esc_html__('Top Bar', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the top bar.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_header_style' => array(
                'label' => esc_html__('Header', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the header.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_transparentHeader_style' => array(
                'label' => esc_html__('Transparent Header', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the transparent header style.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_topHeader_style' => array(
                'label' => esc_html__('Top Header', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the top header style.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_fullScreenHeader_style' => array(
                'label' => esc_html__('Full Screen Header', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the full screen header style.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_centerHeader_style' => array(
                'label' => esc_html__('Center Header', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the center header style.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_mediumHeader_style' => array(
                'label' => esc_html__('Medium Header', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the medium header style.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_verticalHeader_style' => array(
                'label' => esc_html__('Vertical Header', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the vertical header style.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_customHeader_style' => array(
                'label' => esc_html__('Custom Header', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the custom header style.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_navigation_style' => array(
                'label' => esc_html__('Navigation', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the navigation of the principal menu.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_menu_links_effect_style' => array(
                'label' => esc_html__('Links Effect', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the links effect of the principal menu.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_socialMenu_style' => array(
                'label' => esc_html__('Social Icons Menu', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the social icons in the navigation of the header.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_pageHeader_style' => array(
                'label' => esc_html__('Page Header', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the page header (title).', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_blog_style' => array(
                'label' => esc_html__('Blog', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the blog and post formats.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_blogLarge_style' => array(
                'label' => esc_html__('Blog Large Style', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the blog large style.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_blogGrid_style' => array(
                'label' => esc_html__('Blog Grid Style', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the blog grid style.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_blogThumbnail_style' => array(
                'label' => esc_html__('Blog Thumbnail Style', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the blog thumbnail style.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_singlePostPrevNext_style' => array(
                'label' => esc_html__('Single Post Next/Prev Pagination', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the next/previous pagination on single post.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_singlePostAuthorBio_style' => array(
                'label' => esc_html__('Single Post Author Box', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the author box on single post.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_singlePostRelatedPosts_style' => array(
                'label' => esc_html__('Single Post Related Posts', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the related posts on single post.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_sidebar_style' => array(
                'label' => esc_html__('Sidebar', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the sidebar.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_comment_style' => array(
                'label' => esc_html__('Comment', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the comments.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_pagination_style' => array(
                'label' => esc_html__('Pagination', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the pagination.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_footerWidgets_style' => array(
                'label' => esc_html__('Footer Widgets', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the footer widgets area.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_footerBottom_style' => array(
                'label' => esc_html__('Footer Bottom', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the footer bottom area.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_searchResults_style' => array(
                'label' => esc_html__('Search Results', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the search results page.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_scrollTop_style' => array(
                'label' => esc_html__('Scroll Top Button', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the scroll top button.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_errorPage_style' => array(
                'label' => esc_html__('404 Page', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the 404 error page.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_responsive_style' => array(
                'label' => esc_html__('Responsive', 'relicwp-helper'),
                'desc' => esc_html__('This style is all the css for the responsive view.', 'relicwp-helper'),
                'type' => 'css',
            ),
            'pt_wooMenuCart_style' => array(
                'label' => esc_html__('WooCommerce Menu Cart', 'relicwp-helper'),
                'desc' => esc_html__('This style is to display and hide your WooCommerce cart drop down in the navigation.', 'relicwp-helper'),
                'type' => 'css',
                'condition' => class_exists('WooCommerce'),
            ),
            'pt_wooNav_style' => array(
                'label' => esc_html__('WooCommerce Navigation', 'relicwp-helper'),
                'desc' => esc_html__('This style is for the single product navigation.', 'relicwp-helper'),
                'type' => 'css',
                'condition' => class_exists('WooCommerce'),
            ),
            'pt_wooOffCanvas_style' => array(
                'label' => esc_html__('WooCommerce Off Canvas Filter', 'relicwp-helper'),
                'desc' => esc_html__('This style is for the off canvas filter.', 'relicwp-helper'),
                'type' => 'css',
                'condition' => class_exists('WooCommerce'),
            ),
            'pt_wooMobileCart_style' => array(
                'label' => esc_html__('WooCommerce Mobile Cart Sidebar', 'relicwp-helper'),
                'desc' => esc_html__('This style is for the mini cart sidebar on mobile.', 'relicwp-helper'),
                'type' => 'css',
                'condition' => class_exists('WooCommerce'),
            ),
            'pt_wooCategoriesWidget_style' => array(
                'label' => esc_html__('WooCommerce Categories Widget', 'relicwp-helper'),
                'desc' => esc_html__('This style is for the WooCommerce categories widget.', 'relicwp-helper'),
                'type' => 'css',
                'condition' => class_exists('WooCommerce'),
            ),
        );

        // Apply filters and return
        return apply_filters('relicwp_theme_scripts', $scripts);
    }

    /**
     * Add sub menu page
     *
     * @since  1.0.0
     */
    public function add_page() {
        add_submenu_page(
                'relicwp-panel', esc_html__('Scripts & Styles', 'relicwp-helper'), esc_html__('Scripts & Styles', 'relicwp-helper'), 'manage_options', 'relicwp-panel-scripts', array($this, 'create_admin_page')
        );
    }

    /**
     * Register a setting and its sanitization callback.
     *
     * @since  1.0.0
     */
    public static function register_settings() {
        register_setting('pt_scripts_settings', 'pt_scripts_settings', array('RelicWP_Helper_Scripts_Panel', 'validate_settings'));
    }

    /**
     * Main Sanitization callback
     *
     * @since  1.0.0
     */
    public static function validate_settings($settings) {

        // Get scripts array
        $scripts = self::get_scripts();
        if ( current_user_can('manage_options') && isset($_REQUEST['_wpnonce']) &&wp_verify_nonce($_REQUEST['_wpnonce'], 'pt_scripts_settings-options')){

            foreach ($scripts as $key => $val) {

                $settings[$key] = !empty($settings[$key]) ? true : false;
            }
        } 
       
        // Return the validated/sanitized settings
        return $settings;
    }

    /**
     * Get settings.
     *
     * @since  1.0.0
     */
    public static function get_setting($option = '') {

        $defaults = self::get_default_settings();

        $settings = wp_parse_args(get_option('pt_scripts_settings', $defaults), $defaults);

        return isset($settings[$option]) ? $settings[$option] : false;
    }

    /**
     * Get default settings value.
     *
     * @since  1.0.0
     */
    public static function get_default_settings() {

        // Get scripts array
        $scripts = self::get_scripts();

        // Add array
        $default = array();

        foreach ($scripts as $key => $val) {
            $default[$key] = 1;
        }

        // Return
        return apply_filters('relicwp_default_scripts', $default);
    }

    /**
     * Settings page output
     *
     * @since  1.0.0
     */
    public static function create_admin_page() {

        // If settings updated
        if ( isset($_GET['settings-updated']) && 'true' == sanitize_text_field( $_GET['settings-updated'] ) ) {
            self::generate_js();
            self::generate_css();
        }

        // Get scripts array
        $scripts = self::get_scripts();
        ?>
        <div class="wrap pdwp-scripts-panel pdwp-clr">

            <h1><?php esc_html_e('Scripts & Styles Panel', 'relicwp-helper'); ?></h1>

            <div class="pdwp-desc notice notice-warning">
                <p><?php esc_html_e('Disable scripts and styles that you do not need to improve the loading speed of your website.', 'relicwp-helper'); ?></p>
            </div>

            <form id="pdwp-scripts-panel-form" method="post" action="options.php">

                <?php settings_fields('pt_scripts_settings'); ?>
                <div class="pdwp-modules">

                    <div class="pdwp-filter-wrap">

                        <ul class="pdwp-filter btn-switcher">
                            <li class="active"><a href="#all">All</a></li>
                            <li><a href="#js">JS</a></li>
                            <li><a href="#css">CSS</a></li>
                        </ul>

                    </div>

                    <!--<div class="switcher-container modules-top clr7">
                        <ul class="btn-switcher clr">
                            <li class="active"><a href="#all"><?php esc_html_e('All', 'relicwp-helper'); ?></a></li>
                            <li><a href="#js"><?php esc_html_e('JS', 'relicwp-helper'); ?></a></li>
                            <li><a href="#css"><?php esc_html_e('CSS', 'relicwp-helper'); ?></a></li>
                        </ul>
                    </div>-->

                    <div class="modules-top clr">

                        <?php submit_button(); ?>

                        <div class="owp-all-wrap">
                            <p><?php esc_html_e('Switch to check or un-check every scripts:', 'relicwp-helper'); ?></p>
                            <div id="owp-switch">
                                <input type="checkbox" name="pt_scripts_settings[switch-all]" value="true" id="owp-switch-all" <?php checked(true); ?>>
                                <label for="owp-switch-all"></label>
                            </div>
                        </div>

                        <!--<ul class="btn-switcher clr">
                            <li class="active"><a href="#all"><?php esc_html_e('All', 'relicwp-helper'); ?></a></li>
                            <li><a href="#js"><?php esc_html_e('JS', 'relicwp-helper'); ?></a></li>
                            <li><a href="#css"><?php esc_html_e('CSS', 'relicwp-helper'); ?></a></li>
                        </ul>-->

                    </div>

                    <div class="modules-inner clr">

                        <?php
                        // Loop through scripts
                        foreach ($scripts as $key => $val) :

                            // Display setting?
                            $display = true;
                            if (isset($val['condition'])) {
                                $display = $val['condition'];
                            }

                            // Var
                            $label = isset($val['label']) ? $val['label'] : '';
                            $desc = isset($val['desc']) ? $val['desc'] : '';
                            $type = isset($val['type']) ? $val['type'] : '';

                            // Classes
                            $classes = 'column-wrap';
                            $classes .= !$display ? ' hidden' : '';

                            // Get settings
                            $settings = self::get_setting($key);
                            ?>

                            <div class="<?php echo esc_attr($classes); ?>" data-type="<?php echo esc_attr($type); ?>">

                                <?php if ($type) { ?>
                                    <div class="type <?php echo esc_attr($type); ?>"><?php echo esc_attr($type); ?></div>
                                <?php } ?>

                                <div class="column-inner clr">

                                    <h3 class="info"><?php echo esc_html($label); ?></h3>
                                    <?php if ($desc) { ?>
                                        <p class="desc"><?php echo esc_html($desc); ?></p>
                                    <?php } ?>

                                    <div class="bottom-column">
                                        <label for="pdwp-[<?php echo esc_attr($key); ?>]" class="title"><?php esc_html_e('Enable or Disable', 'relicwp-helper'); ?></label>
                                        <div id="owp-switch">
                                            <input type="checkbox" name="pt_scripts_settings[<?php echo esc_attr($key); ?>]" value="true" class="owp-checkbox" id="pdwp-[<?php echo esc_attr($key); ?>]" <?php checked($settings); ?>>
                                            <label for="pdwp-[<?php echo esc_attr($key); ?>]"></label>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    </div><!-- .modules-inner -->

                    <?php submit_button(); ?>

                </div><!-- .pdwp-modules -->

            </form>

        </div>

        <?php
    }

    /**
     * Admin Scripts
     *
     * @since  1.0.0
     */

    public static function admin_scripts($hook) {

        // Only load scripts when needed
        if (RTHP_ADMIN_PANEL_HOOK_PREFIX . '-scripts' != $hook) {
            return;
        }

		
        // CSS
        //wp_enqueue_style('pdwp-scripts-panel', plugins_url('/assets/css/scripts.min.css', __FILE__));
        wp_enqueue_style('pdwp-scripts-panel', plugins_url('/assets/css/scripts.css', __FILE__), '', time());

        // JS
        wp_enqueue_script('pdwp-scripts-panel', plugins_url('/assets/js/scripts.min.js', __FILE__), false, true);
    }

    /**
     * Returns all JS needed
     *
     * @since  1.0.0
     */
    public static function generate_js() {

        // Return if is not PdWP or not writable
        if (!class_exists('PDWP_Theme_Class') || !self::is_writable('js')) {
            return;
        }

        // Scripts
        $customSelect = self::get_setting('pt_customSelect_script');
        $dropDownSearch = self::get_setting('pt_dropDownSearch_script');
        $headerReplaceSearch = self::get_setting('pt_headerReplaceSearch_script');
        $overlaySearch = self::get_setting('pt_overlaySearch_script');
        $fitVids = self::get_setting('pt_fitVids_script');
        $fixedFooter = self::get_setting('pt_fixedFooter_script');
        $parallax_footer = self::get_setting('pt_parallax_footer_script');
        $fullScreenMenu = self::get_setting('pt_fullScreenMenu_script');
        $verticalHeader = self::get_setting('pt_verticalHeader_style');
        $headerSearchForm = self::get_setting('pt_headerSearchForm_script');
        $infiniteScroll = self::get_setting('pt_infiniteScroll_script');
        $isotope = self::get_setting('pt_isotope_script');
        $lightbox = self::get_setting('pt_lightbox_script');
        $matchHeight = self::get_setting('pt_matchHeight_script');
        $megaMenu = self::get_setting('pt_megaMenu_script');
        $navNoClick = self::get_setting('pt_navNoClick_script');
        $scrollEffect = self::get_setting('pt_scrollEffect_script');
        $scrollTop = self::get_setting('pt_scrollTop_script');
        $sidr = self::get_setting('pt_sidr_script');
        $dropdown_mobile = self::get_setting('pt_dropdown_mobile_script');
        $fullscreen_mobile = self::get_setting('pt_fullscreen_mobile_script');
        $slick = self::get_setting('pt_slick_script');
        $smoothScroll = self::get_setting('pt_smoothScroll_script');
        $superfish = self::get_setting('pt_superfish_script');
        $wooAccountLinks = self::get_setting('pt_wooAccountLinks_script');
        $wooGridList = self::get_setting('pt_wooGridList_script');
        $wooQuantityButtons = self::get_setting('pt_wooQuantityButtons_script');
        $wooReviewsScroll = self::get_setting('pt_wooReviewsScroll_script');

        // Get js directory uri
        $tDir = get_template_directory() . '/assets/js/';

        // If a script is disabled
        if (!$customSelect || !$dropDownSearch || !$headerReplaceSearch || !$overlaySearch || !$fitVids || !$fixedFooter || !$parallax_footer || !$fullScreenMenu || !$verticalHeader || !$headerSearchForm || !$infiniteScroll || !$isotope || !$lightbox || !$matchHeight || !$megaMenu || !$navNoClick || !$scrollEffect || !$scrollTop || !$sidr || !$dropdown_mobile || !$fullscreen_mobile || !$slick || !$smoothScroll || !$superfish || !$wooAccountLinks || !$wooGridList || !$wooQuantityButtons || !$wooReviewsScroll) {

            // Array
            $aFiles = array();

            // Load customSelect js
            if ($customSelect) {
                $aFiles[] = $tDir . 'devs/customselect.js';
                $aFiles[] = $tDir . 'core/customSelect.js';
            }

            // Load dropDownSearch js
            if ($dropDownSearch) {
                $aFiles[] = $tDir . 'core/dropDownSearch.js';
            }

            // Load headerReplaceSearch js
            if ($headerReplaceSearch) {
                $aFiles[] = $tDir . 'core/headerReplaceSearch.js';
            }

            // Load overlaySearch js
            if ($overlaySearch) {
                $aFiles[] = $tDir . 'core/overlaySearch.js';
            }

            // Load fitVids js
            if ($fitVids) {
                $aFiles[] = $tDir . 'devs/fitvids.js';
                $aFiles[] = $tDir . 'core/fitvids.js';
            }

            // Load fixedFooter js
            if ($fixedFooter) {
                $aFiles[] = $tDir . 'core/fixedFooter.js';
            }

            // Load parallax footer js
            if ($parallax_footer) {
                $aFiles[] = $tDir . 'core/parallaxFooter.js';
            }

            // Load fullScreenMenu js
            if ($fullScreenMenu) {
                $aFiles[] = $tDir . 'core/fullScreenMenu.js';
            }

            // Load verticalHeader js
            if ($verticalHeader) {
                $aFiles[] = $tDir . 'core/verticalHeader.js';
            }

            // Load headerSearchForm js
            if ($headerSearchForm) {
                $aFiles[] = $tDir . 'core/headerSearchForm.js';
            }

            // Load infiniteScroll js
            if ($infiniteScroll) {
                $aFiles[] = $tDir . 'third/infinitescroll.js';
                $aFiles[] = $tDir . 'core/infiniteScroll.js';
            }

            // Load isotope js
            if ($isotope) {
                $aFiles[] = $tDir . 'devs/isotope.js';
                $aFiles[] = $tDir . 'core/isotope.js';
            }

            // Load matchHeight js
            if ($matchHeight) {
                $aFiles[] = $tDir . 'devs/matchHeight.js';
                $aFiles[] = $tDir . 'core/matchHeight.js';
            }

            // Load megaMenu js
            if ($megaMenu) {
                $aFiles[] = $tDir . 'core/megaMenu.js';
            }

            // Load navnoclick js
            if ($navNoClick) {
                $aFiles[] = $tDir . 'core/navNoClick.js';
            }

            // Load scrollEffect js
            if ($scrollEffect) {
                $aFiles[] = $tDir . 'core/scrollEffect.js';
            }

            // Load scrollTop js
            if ($scrollTop) {
                $aFiles[] = $tDir . 'core/scrollTop.js';
            }

            // Load sidr js
            if ($sidr) {
                $aFiles[] = $tDir . 'devs/sidr.js';
                $aFiles[] = $tDir . 'core/sidr.js';
            }

            // Load dropdown_mobile js
            if ($dropdown_mobile) {
                $aFiles[] = $tDir . 'core/dropDownMobile.js';
            }

            // Load fullscreen_mobile js
            if ($fullscreen_mobile) {
                $aFiles[] = $tDir . 'core/fullScreenMobile.js';
            }

            // Load slick js
            if ($slick) {
                $aFiles[] = $tDir . 'devs/slick.js';
                $aFiles[] = $tDir . 'core/slick.js';
            }

            // Load smoothScroll js
            if ($smoothScroll) {
                $aFiles[] = $tDir . 'devs/smoothscroll.js';
            }

            // Load superfish js
            if ($superfish) {
                $aFiles[] = $tDir . 'devs/superfish.js';
                $aFiles[] = $tDir . 'core/superfish.js';
            }

            // If WooCommerce exist
            if (PDWP_WOOCOMMERCE_ACTIVE) {

                // Remove brackets from categories and filter widgets
                $aFiles[] = $tDir . 'third/woo/devs/wooWidgets.js';

                // Load wooAccountLinks js
                if ($wooAccountLinks) {
                    $aFiles[] = $tDir . 'third/woo/devs/wooAccountLinks.js';
                }

                // Load wooGridList js
                if ($wooGridList) {
                    $aFiles[] = $tDir . 'devs/cookie.js';
                    $aFiles[] = $tDir . 'third/woo/devs/wooGridList.js';
                }

                // Load wooQuantityButtons js
                if ($wooQuantityButtons) {
                    $aFiles[] = $tDir . 'third/woo/devs/wooQuantityButtons.js';
                }

                // Load wooReviewsScroll js
                if ($wooReviewsScroll) {
                    $aFiles[] = $tDir . 'third/woo/devs/wooReviewsScroll.js';
                }
            }

            // Check WP_Filesystem
            global $wp_filesystem;
            self::init_filesystem();

            // Get JS files content
            $strJS = '';
            foreach ($aFiles as $file) :
                $strJS .= $wp_filesystem->get_contents($file);
            endforeach;

            // Minifying JS files
            $jsMignifier = RelicWP_Helper_JSMin::minify($strJS);

            // Putting all the scripts into one JS file
            $wp_filesystem->put_contents(self::get_file('js', 'path'), $jsMignifier);
        } else {

            if (file_exists(self::get_file('js', 'path'))) {
                unlink(self::get_file('js', 'path'));
            }
        }
    }

    /**
     * Returns all CSS needed
     *
     * @since  1.0.0
     */
    public static function generate_css() {


        // Sass Compiler (vendor)
        require_once( RTHP_PATH . '/includes/panel/scssphp/scss.inc.php' );

        // Return if is not PdWP or not writable
        if (!class_exists('PDWP_Theme_Class') || !self::is_writable('css')) {
            return;
        }

        // Styles & scripts
        $customSelect = self::get_setting('pt_customSelect_script');
        $dropDownSearch = self::get_setting('pt_dropDownSearch_script');
        $headerReplaceSearch = self::get_setting('pt_headerReplaceSearch_script');
        $overlaySearch = self::get_setting('pt_overlaySearch_script');
        $megaMenu = self::get_setting('pt_megaMenu_script');
        $sidr = self::get_setting('pt_sidr_script');
        $dropdown_mobile = self::get_setting('pt_dropdown_mobile_script');
        $fullscreen_mobile = self::get_setting('pt_fullscreen_mobile_script');
        $slick = self::get_setting('pt_slick_script');
        $fontAwesome = self::get_setting('pt_fontAwesome_style');
        $simpleLineIcons = self::get_setting('pt_simpleLineIcons_style');
        $wooMenuCart = self::get_setting('pt_wooMenuCart_style');
        $wooNav = self::get_setting('pt_wooNav_style');
        $wooOffCanvas = self::get_setting('pt_wooOffCanvas_style');
        $wooMobileCart = self::get_setting('pt_wooMobileCart_style');
        $wooCategoriesWidget = self::get_setting('pt_wooCategoriesWidget_style');
        $wooQuantityButtons = self::get_setting('pt_wooQuantityButtons_script');
        $topBar = self::get_setting('pt_topBar_style');
        $header = self::get_setting('pt_header_style');
        $transparentHeader = self::get_setting('pt_transparentHeader_style');
        $topHeader = self::get_setting('pt_topHeader_style');
        $fullScreenHeader = self::get_setting('pt_fullScreenHeader_style');
        $centerHeader = self::get_setting('pt_centerHeader_style');
        $mediumHeader = self::get_setting('pt_mediumHeader_style');
        $verticalHeader = self::get_setting('pt_verticalHeader_style');
        $customHeader = self::get_setting('pt_customHeader_style');
        $navigation = self::get_setting('pt_navigation_style');
        $links_effect = self::get_setting('pt_menu_links_effect_style');
        $socialMenu = self::get_setting('pt_socialMenu_style');
        $pageHeader = self::get_setting('pt_pageHeader_style');
        $blog = self::get_setting('pt_blog_style');
        $blogLarge = self::get_setting('pt_blogLarge_style');
        $blogGrid = self::get_setting('pt_blogGrid_style');
        $blogThumbnail = self::get_setting('pt_blogThumbnail_style');
        $singlePostPrevNext = self::get_setting('pt_singlePostPrevNext_style');
        $singlePostAuthorBio = self::get_setting('pt_singlePostAuthorBio_style');
        $singlePostRelatedPosts = self::get_setting('pt_singlePostRelatedPosts_style');
        $sidebar = self::get_setting('pt_sidebar_style');
        $comment = self::get_setting('pt_comment_style');
        $pagination = self::get_setting('pt_pagination_style');
        $footerWidgets = self::get_setting('pt_footerWidgets_style');
        $footerBottom = self::get_setting('pt_footerBottom_style');
        $searchResults = self::get_setting('pt_searchResults_style');
        $scrollTop = self::get_setting('pt_scrollTop_style');
        $errorPage = self::get_setting('pt_errorPage_style');
        $responsive = self::get_setting('pt_responsive_style');

        // Get css directory uri
        $tSass = get_template_directory() . '/sass/';
        $tDir = $tSass . 'components/';
        $cssDir = get_template_directory() . '/assets/css/';

        // If a style is disabled
        if (!$customSelect || !$dropDownSearch || !$headerReplaceSearch || !$overlaySearch || !$megaMenu || !$sidr || !$dropdown_mobile || !$fullscreen_mobile || !$slick || !$fontAwesome || !$simpleLineIcons || !$wooMenuCart || !$wooNav || !$wooOffCanvas || !$wooMobileCart || !$wooCategoriesWidget || !$wooQuantityButtons || !$topBar || !$header || !$transparentHeader || !$topHeader || !$fullScreenHeader || !$centerHeader || !$mediumHeader || !$verticalHeader || !$customHeader || !$navigation || !$links_effect || !$socialMenu || !$pageHeader || !$blog || !$blogLarge || !$blogGrid || !$blogThumbnail || !$singlePostPrevNext || !$singlePostAuthorBio || !$singlePostRelatedPosts || !$sidebar || !$comment || !$pagination || !$footerWidgets || !$footerBottom || !$searchResults || !$scrollTop || !$errorPage || !$responsive) {

            // Array
            $aFiles = array();

            $aFiles[] = $tSass . '_config.scss';
            $aFiles[] = $tSass . '_mixins.scss';
            $aFiles[] = $tSass . 'base/_main.scss';
            $aFiles[] = $tSass . 'base/_normalize.scss';
            $aFiles[] = $tSass . '_layout.scss';
            $aFiles[] = $tSass . 'base/_shared.scss';
            $aFiles[] = $tSass . 'base/_typography.scss';
            $aFiles[] = $tSass . 'base/_form.scss';
            $aFiles[] = $tDir . 'plugins/_general.scss';

            // Load customSelect
            if ($customSelect) {
                $aFiles[] = $tDir . '_custom-selects.scss';
            }

            // Load dropDownSearch
            if ($dropDownSearch) {
                $aFiles[] = $tDir . 'header/_search-dropdown.scss';
            }

            // Load headerReplaceSearch
            if ($headerReplaceSearch) {
                $aFiles[] = $tDir . 'header/_search-replace.scss';
            }

            // Load overlaySearch
            if ($overlaySearch) {
                $aFiles[] = $tDir . 'header/_search-overlay.scss';
            }

            // Load megaMenu
            if ($megaMenu) {
                $aFiles[] = $tDir . 'header/_megamenu.scss';
            }

            // Load sidr
            if ($sidr) {
                $aFiles[] = $tDir . 'plugins/_sidr.scss';
            }

            // Load dropdown_mobile
            if ($dropdown_mobile) {
                $aFiles[] = $tDir . 'mobile/_dropdown-mobile.scss';
            }

            // Load fullscreen_mobile
            if ($fullscreen_mobile) {
                $aFiles[] = $tDir . 'mobile/_fullscreen-mobile.scss';
            }

            // Load slick
            if ($slick) {
                $aFiles[] = $tDir . 'plugins/_slick.scss';
            }

            // Load topBar
            if ($topBar) {
                $aFiles[] = $tDir . 'topbar/_topbar.scss';
                $aFiles[] = $tDir . 'topbar/_topbar-content.scss';
                $aFiles[] = $tDir . 'topbar/_topbar-menu.scss';
                $aFiles[] = $tDir . 'topbar/_topbar-social.scss';
            }

            // Load header
            if ($header) {
                $aFiles[] = $tDir . 'header/_header.scss';
            }

            // Load transparentHeader
            if ($transparentHeader) {
                $aFiles[] = $tDir . 'header/_header-transparent.scss';
            }

            // Load topHeader
            if ($topHeader) {
                $aFiles[] = $tDir . 'header/_header-top.scss';
            }

            // Load fullScreenHeader
            if ($fullScreenHeader) {
                $aFiles[] = $tDir . 'header/_header-fullscreen.scss';
            }

            // Load centerHeader
            if ($centerHeader) {
                $aFiles[] = $tDir . 'header/_header-center.scss';
            }

            // Load mediumHeader
            if ($mediumHeader) {
                $aFiles[] = $tDir . 'header/_header-medium.scss';
            }

            // Load verticalHeader
            if ($verticalHeader) {
                $aFiles[] = $tDir . 'header/_header-vertical.scss';
            }

            // Load customHeader
            if ($customHeader) {
                $aFiles[] = $tDir . 'header/_header-custom.scss';
            }

            // Load navigation
            if ($navigation) {
                $aFiles[] = $tDir . 'header/_navigation.scss';
            }

            // Load menu links effect
            if ($links_effect) {
                $aFiles[] = $tDir . 'header/_links_effect.scss';
            }

            // Load socialMenu
            if ($socialMenu) {
                $aFiles[] = $tDir . 'header/_socialmenu.scss';
            }

            // Load pageHeader
            if ($pageHeader) {
                $aFiles[] = $tDir . '_page-header.scss';
            }

            // Load blog
            if ($blog) {
                $aFiles[] = $tDir . 'blog/_blog-entries.scss';
                $aFiles[] = $tDir . 'blog/_blog-meta.scss';
                $aFiles[] = $tDir . 'blog/_gallery-format.scss';
                $aFiles[] = $tDir . 'blog/_link-format.scss';
                $aFiles[] = $tDir . 'blog/_quote-format.scss';
                $aFiles[] = $tDir . 'blog/_video-audio-formats.scss';
                $aFiles[] = $tDir . 'blog/_single-content.scss';
                $aFiles[] = $tDir . 'blog/_single-post.scss';
                $aFiles[] = $tDir . 'blog/_single-tags.scss';
            }

            // Load blogLarge
            if ($blogLarge) {
                $aFiles[] = $tDir . 'blog/_blog-large.scss';
            }

            // Load blogGrid
            if ($blogGrid) {
                $aFiles[] = $tDir . 'blog/_blog-grid.scss';
            }

            // Load blogThumbnail
            if ($blogThumbnail) {
                $aFiles[] = $tDir . 'blog/_blog-thumbnail.scss';
            }

            // Load singlePostPrevNext
            if ($singlePostPrevNext) {
                $aFiles[] = $tDir . 'blog/_single-next-prev.scss';
            }

            // Load singlePostAuthorBio
            if ($singlePostAuthorBio) {
                $aFiles[] = $tDir . 'blog/_single-author-bio.scss';
            }

            // Load singlePostRelatedPosts
            if ($singlePostRelatedPosts) {
                $aFiles[] = $tDir . 'blog/_single-related-posts.scss';
            }

            // Load sidebar
            if ($sidebar) {
                $aFiles[] = $tDir . 'sidebar/_sidebar.scss';
            }

            // Load comment
            if ($comment) {
                $aFiles[] = $tDir . '_comments.scss';
            }

            // Load pagination
            if ($pagination) {
                $aFiles[] = $tDir . '_pagination.scss';
            }

            // Load footerWidgets
            if ($footerWidgets) {
                $aFiles[] = $tDir . 'footer/_footer-widgets.scss';
            }

            // Load footerBottom
            if ($footerBottom) {
                $aFiles[] = $tDir . 'footer/_footer-bottom.scss';
            }

            // Load searchResults
            if ($searchResults) {
                $aFiles[] = $tDir . '_search.scss';
            }

            // Load scrollTop
            if ($scrollTop) {
                $aFiles[] = $tDir . 'footer/_scroll-top.scss';
            }

            // Load errorPage
            if ($errorPage) {
                $aFiles[] = $tDir . '_404.scss';
            }

            // Load responsive
            if ($responsive) {
                $aFiles[] = $tDir . '_responsive.scss';
            }

            // If WooCommerce exist
            if (PDWP_WOOCOMMERCE_ACTIVE) {

                // Load wooCommerce
                $aFiles[] = $tSass . 'woo/_woocommerce.scss';
                $aFiles[] = $tSass . 'woo/_woo-responsive.scss';

                // Load wooMenuCart
                if ($wooMenuCart) {
                    $aFiles[] = $tSass . 'woo-mini-cart.scss';
                }

                // Load wooNav
                if ($wooNav) {
                    $aFiles[] = $tSass . 'woo/_woo-nav.scss';
                }

                // Load wooOffCanvas
                if ($wooOffCanvas) {
                    $aFiles[] = $tSass . 'woo/_woo-off-canvas.scss';
                }

                // Load wooMobileCart
                if ($wooMobileCart) {
                    $aFiles[] = $tSass . 'woo/_woo-mobile-cart.scss';
                }

                // Load wooCategoriesWidget
                if ($wooCategoriesWidget) {
                    $aFiles[] = $tSass . 'woo/_woo-cat-widget.scss';
                }

                // Load wooQuantityButtons
                if ($wooQuantityButtons) {
                    $aFiles[] = $tSass . 'woo/_woo-quantity.scss';
                }
            }

            // Check WP_Filesystem
            global $wp_filesystem;
            self::init_filesystem();

            $scss = new Compiler();
            $scss->setFormatter('Leafo\ScssPhp\Formatter\Compressed');

            // Get files content
            $strCSS = '';
            foreach ($aFiles as $file) :
                $strCSS .= $wp_filesystem->get_contents($file);
            endforeach;

            // Compile the SCSS code
            $strCSS = $scss->compile($strCSS);

            // Putting all the styles into one CSS file
            $wp_filesystem->put_contents(self::get_file('css', 'path'), $strCSS);
        } else {

            if (file_exists(self::get_file('css', 'path'))) {
                unlink(self::get_file('css', 'path'));
            }
        }
    }

    /**
     * Enqueue scripts
     *
     * @since  1.0.0
     */
    public static function enqueue_scripts() {

        // Add filter to altering via child theme
        $enqueue_scripts = apply_filters('pdvs_enqueue_generated_files', true);

        // Return if enqueue_scripts is set to false through the filter
        if (!$enqueue_scripts) {
            return;
        }

        // Get current theme version
        $theme_version = wp_get_theme()->get('Version');

        // If script exist
        if (file_exists(self::get_file('js', 'path'))) {

            // Unregister default scripts
            wp_dequeue_script('pdwp-main');
            wp_deregister_script('pdwp-main');
            wp_dequeue_script('infinitescroll');
            wp_deregister_script('infinitescroll');
            if (PDWP_WOOCOMMERCE_ACTIVE) {
                wp_dequeue_script('pdwp-woocommerce');
                wp_deregister_script('pdwp-woocommerce');
            }

            // If the lightbox script is disabled
            if (!self::get_setting('pt_lightbox_script')) {
                wp_dequeue_script('magnific-popup');
                wp_deregister_script('magnific-popup');
                wp_dequeue_script('pdwp-lightbox');
                wp_deregister_script('pdwp-lightbox');
            }

            // Enqueue the JS
            wp_enqueue_script('pdwp-main', self::get_file('js', 'uri'), array('jquery'), $theme_version, true);

            // Localize array
            if (class_exists('PDWP_Theme_Class')) {
                wp_localize_script('pdwp-main', 'pdwpLocalize', PDWP_Theme_Class::localize_array());
            }
        }

        // If style exist
        if (file_exists(self::get_file('css', 'path'))) {

            // Unregister default styles
            wp_dequeue_style('pdwp-style');
            wp_deregister_style('pdwp-style');
            if (!self::get_setting('pt_fontAwesome_style')) {
                wp_dequeue_style('font-awesome');
                wp_deregister_style('font-awesome');
            }
            if (!self::get_setting('pt_simpleLineIcons_style')) {
                wp_dequeue_style('simple-line-icons');
                wp_deregister_style('simple-line-icons');
            }
            if (!self::get_setting('pt_slick_style')) {
                wp_dequeue_style('slick');
                wp_deregister_style('slick');
            }
            if (!self::get_setting('pt_lightbox_script')) {
                wp_dequeue_style('magnific-popup');
                wp_deregister_style('magnific-popup');
            }
            if (PDWP_WOOCOMMERCE_ACTIVE) {
                wp_dequeue_style('pdwp-woocommerce');
                wp_deregister_style('pdwp-woocommerce');
            }

            // Enqueue the CSS
            wp_enqueue_style('pdwp-style', self::get_file('css', 'uri'), false, $theme_version);
        }
    }

    /**
     * Add body classes
     *
     * @since  1.0.0
     */
    public static function body_classes($classes) {

        // If the isotope script is disabled
        if (!self::get_setting('pt_isotope_script')) {
            $classes[] = 'no-isotope';
        }

        // If the lightbox script is disabled
        if (!self::get_setting('pt_lightbox_script')) {
            $classes[] = 'no-lightbox';
        }

        // If the fitvids script is disabled
        if (!self::get_setting('pt_fitVids_script')) {
            $classes[] = 'no-fitvids';
        }

        // If the scroll up script is disabled
        if (!self::get_setting('pt_scrollTop_style')) {
            $classes[] = 'no-scroll-top';
        }

        // If the sidr script is disabled
        if (!self::get_setting('pt_sidr_script')) {
            $classes[] = 'no-sidr';
        }

        // If the carousel script is disabled
        if (!self::get_setting('pt_slick_script')) {
            $classes[] = 'no-carousel';
        }

        // If the match height script is disabled
        if (!self::get_setting('pt_matchHeight_script')) {
            $classes[] = 'no-matchheight';
        }

        // Return classes
        return $classes;
    }

    /**
     * Instantiates the WordPress filesystem
     *
     * @since  1.0.0
     */
    public static function init_filesystem() {

        // The Wordpress filesystem.
        global $wp_filesystem;

        if (empty($wp_filesystem)) {
            require_once( ABSPATH . '/wp-admin/includes/file.php' );
            WP_Filesystem();
        }

        return $wp_filesystem;
    }

    /**
     * Gets file path or url
     *
     * @since  1.0.0
     * @link http://aristath.github.io/blog/avoid-dynamic-css-in-head
     */
    private static function get_file($return = 'js', $target = 'path') {

        // Get the upload directory
        $upload_dir = wp_upload_dir();

        $js_file = 'main-scripts.js';
        $css_file = 'main-style.css';
        $folder_path = $upload_dir['basedir'] . DIRECTORY_SEPARATOR . 'relicwp';

        // The complete path to the files
        $js_path = $folder_path . DIRECTORY_SEPARATOR . $js_file;
        $css_path = $folder_path . DIRECTORY_SEPARATOR . $css_file;

        // Get the URL directory
        $uri_folder = $upload_dir['baseurl'];

        // Build the URL of the files
        $js_uri = trailingslashit($uri_folder) . 'relicwp/' . $js_file;
        $css_uri = trailingslashit($uri_folder) . 'relicwp/' . $css_file;

        // Return the JS path
        if ('js' == $return && 'path' == $target) {
            return $js_path;
        }

        // Return the CSS path
        elseif ('css' == $return && 'path' == $target) {
            return $css_path;
        }

        // Return the JS URL
        elseif ('js' == $return && 'uri' == $target) {
            return $js_uri;
        }

        // Return the CSS URL
        elseif ('css' == $return && 'uri' == $target) {
            return $css_uri;
        }
    }

    /**
     * Check if the file is writable
     *
     * @since  1.0.0
     * @link http://aristath.github.io/blog/avoid-dynamic-css-in-head
     */
    public static function is_writable($return = 'js') {

        // Get the upload directory
        $upload_dir = wp_upload_dir();

        $js_file = '/main-scripts.js';
        $css_file = '/main-style.css';
        $folder_path = $upload_dir['basedir'] . DIRECTORY_SEPARATOR . 'relicwp';

        // Check if the folder exist
        if (file_exists($folder_path)) {

            // If JS file
            if ('js' == $return) {

                // Check if the folder is writable
                if (!is_writable($folder_path)) {

                    // If the folder is not writable, check if the file is
                    if (!file_exists($folder_path . $js_file)) {
                        return false;
                    } else {
                        // Check if the file writable
                        if (!is_writable($folder_path . $js_file)) {
                            return false;
                        }
                    }
                } else {

                    // If the folder is writable, check if the file is
                    if (file_exists($folder_path . $js_file)) {
                        // Check if the file writable
                        if (!is_writable($folder_path . $js_file)) {
                            return false;
                        }
                    }
                }
            }

            // If CSS file
            elseif ('css' == $return) {

                // Check if the folder is writable
                if (!is_writable($folder_path)) {

                    // If the folder is not writable, check if the file is
                    if (!file_exists($folder_path . $css_file)) {
                        return false;
                    } else {
                        // Check if the file writable
                        if (!is_writable($folder_path . $css_file)) {
                            return false;
                        }
                    }
                } else {

                    // If the folder is writable, check if the file is
                    if (file_exists($folder_path . $css_file)) {
                        // Check if the file writable
                        if (!is_writable($folder_path . $css_file)) {
                            return false;
                        }
                    }
                }
            }
        } else {
            // Returns true or false
            return wp_mkdir_p($folder_path);
        }

        // If we passed all of the above tests, the file is writable.
        return true;
    }

}

new RelicWP_Helper_Scripts_Panel();
                