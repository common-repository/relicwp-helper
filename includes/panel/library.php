<?php
/**
 * My Library
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
class RelicWP_Helper_My_Library {

	/**
	 * Start things up
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'library_post_type' ) );

		if ( is_admin() ) {
			add_action( 'admin_menu', array( $this, 'add_page' ), 1 );
			add_filter( 'pdvs_main_metaboxes_post_types', array( $this, 'add_metabox' ), 20 );
			add_action( 'add_meta_boxes_relicwp_library', array( $this, 'shortcode_metabox' ) );
			add_filter( 'manage_edit-relicwp_library_columns', array( $this, 'edit_columns' ) );
			add_action( 'manage_relicwp_library_posts_custom_column', array( $this, 'custom_columns' ), 10, 2 );
		}

		add_action( 'template_redirect', array( $this, 'block_template_frontend' ) );
	}

	/**
	 * Add sub menu page
	 *
	 * @since  1.0.0
	 */
	public function add_page() {

		// Name
		$name = esc_html__( 'My Library', 'relicwp-helper' );
		$name = apply_filters( 'pdvs_my_library_text', $name );

		add_submenu_page(
			'relicwp-panel',
			esc_html__( 'My Library', 'relicwp-helper' ),
			$name,
			'manage_options',
			'edit.php?post_type=relicwp_library'
		);

	}

	/**
	 * Register library post type
	 *
	 * @since  1.0.0
	 */
	public static function library_post_type() {

		// Name
		$name = esc_html__( 'My Library', 'relicwp-helper' );
		$name = apply_filters( 'pdvs_my_library_text', $name );

		// Register the post type
		register_post_type( 'relicwp_library', apply_filters( 'pdvs_library_args', array(
			'labels' => array(
				'name' 					=> $name,
				'singular_name' 		=> esc_html__( 'Template', 'relicwp-helper' ),
				'add_new' 				=> esc_html__( 'Add New', 'relicwp-helper' ),
				'add_new_item' 			=> esc_html__( 'Add New Template', 'relicwp-helper' ),
				'edit_item' 			=> esc_html__( 'Edit Template', 'relicwp-helper' ),
				'new_item' 				=> esc_html__( 'Add New Template', 'relicwp-helper' ),
				'view_item' 			=> esc_html__( 'View Template', 'relicwp-helper' ),
				'search_items' 			=> esc_html__( 'Search Template', 'relicwp-helper' ),
				'not_found' 			=> esc_html__( 'No Templates Found', 'relicwp-helper' ),
				'not_found_in_trash' 	=> esc_html__( 'No Templates Found In Trash', 'relicwp-helper' ),
				'menu_name' 			=> esc_html__( 'My Library', 'relicwp-helper' ),
			),
			'public' 					=> true,
			'hierarchical'          	=> false,
			'show_ui'               	=> true,
			'show_in_menu' 				=> false,
			'show_in_nav_menus'     	=> false,
			'can_export'            	=> true,
			'exclude_from_search'   	=> true,
			'capability_type' 			=> 'post',
			'rewrite' 					=> false,
			'supports' 					=> array( 'title', 'editor', 'thumbnail', 'author', 'elementor' ),
		) ) );

	}

	/**
	 * Add the PdWP Settings metabox into the custom post type
	 *
	 * @since  1.0.0
	 */
	public static function add_metabox( $types ) {
		$types[] = 'relicwp_library';
		return $types;
	}

	/**
	 * Make the post type inaccessible
	 *
	 * @since  1.0.0
	 */
	public static function block_template_frontend() {
		if ( is_singular( 'relicwp_library' ) && ! self::is_current_user_can_edit() ) {
			wp_redirect( site_url(), 301 );
			die;
		}
	}

	/**
	 * If the current user can edit
	 *
	 * @since  1.0.0
	 */
	public static function is_current_user_can_edit( $post_id = 0 ) {
		if ( empty( $post_id ) ) {
			$post_id = get_the_ID();
		}

		if ( 'trash' === get_post_status( $post_id ) ) {
			return false;
		}

		$post_type_object = get_post_type_object( get_post_type( $post_id ) );
		if ( empty( $post_type_object ) ) {
			return false;
		}

		if ( ! isset( $post_type_object->cap->edit_post ) ) {
			return false;
		}

		$edit_cap = $post_type_object->cap->edit_post;
		if ( ! current_user_can( $edit_cap, $post_id ) ) {
			return false;
		}

		if ( get_option( 'page_for_posts' ) === $post_id ) {
			return false;
		}

		return true;
	}

	/**
	 * Add shorcode metabox
	 * The $this variable is not used to get the display_meta_box() function because it doesn't work on older PHP version.
	 *
	 * @since  1.0.0
	 */
	public static function shortcode_metabox( $post ) {

		add_meta_box(
			'library-shortcode-metabox',
			esc_html__( 'Shortcode', 'relicwp-helper' ),
			array( 'RelicWP_Helper_My_Library', 'display_metabox' ),
			'relicwp_library',
			'side',
			'low'
		);

	}

	/**
	 * Add shorcode metabox
	 *
	 * @since  1.0.0
	 */
	public static function display_metabox( $post ) { ?>

		<input type="text" class="widefat" value='[relicwp_library id="<?php echo esc_attr($post->ID); ?>"]' readonly />

	<?php
	}

	/**
	 * Add the shortcode column
	 *
	 * @since  1.0.0
	 */
	public static function edit_columns( $columns ) {
		$columns['relicwp_library_shortcode'] = esc_html__( 'Shortcode', 'relicwp-helper' );
		return $columns;
	}

	/**
	 * Display the shortcode column
	 *
	 * @since  1.0.0
	 */
	public static function custom_columns( $column, $post_id ) {

		switch ( $column ) :

			// Display the shortcode in the column view
			case 'relicwp_library_shortcode':

				$shortcode = esc_attr( sprintf( '[relicwp_library id="%d"]', $post_id ) );
				printf( '<input type="text" value="%s" readonly style="min-width: 200px;" />', $shortcode );

			break;

		endswitch;

	}

}
new RelicWP_Helper_My_Library();