<?php
/**
 * Creates a gallery metabox for WordPress
 *
 * @author    Daan Vos de Wael
 * @copyright Copyright (c) 2013, Daan Vos de Wael, http://www.daanvosdewael.com
 * @license   http://en.wikipedia.org/wiki/MIT_License The MIT License
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

// Start Class
if ( ! class_exists( 'PdWP_Gallery_Metabox' ) ) {
	class PdWP_Gallery_Metabox {
		private $dir;
		private $post_types;

		/**
		 * Initialize the class and set its properties.
		 *
		 * @since 1.0.0
		 */
		public function __construct() {

			// Call the register function
			add_action( 'load-post.php',     array( $this, 'register' ), 95 );
			add_action( 'load-post-new.php', array( $this, 'register' ), 95 );

		}

		/**
		 * Registration callback
		 *
		 * @since 1.0.0
		 */
		public function register() {

			// Post types to add the metabox to
			$this->post_types = apply_filters( 'pdvs_gallery_metabox_post_types', array(
				'post',
			) );

			// Add metabox to corresponding post types
			foreach( $this->post_types as $key => $val ) {
				add_action( 'add_meta_boxes_'. $val, array( $this, 'add_meta' ), 20 );
			}

			// Save metabox
			add_action( 'save_post', array( $this, 'save_meta' ) );

			// Load scripts and styles.
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		}

		/**
		 * Adds the gallery metabox
		 *
		 * @since 1.0.0
		 */
		public function add_meta( $post ) {
			add_meta_box(
				'pdwp-gallery-metabox',
				__( 'Image Gallery', 'relicwp-helper' ),
				array( $this, 'render' ),
				$post->post_type,
				'normal',
				'high'
			);
		}

		/**
		 * Load scripts and styles
		 *
		 * @since 1.0.0
		 */
		public function enqueue_scripts( $hook ) {

			// Only needed on these admin screens
			if ( $hook != 'edit.php' && $hook != 'post.php' && $hook != 'post-new.php' ) {
				return;
			}

			// Get global post
			global $post;

			// Return if post is not object
			if ( ! is_object( $post ) ) {
				return;
			}

			// Return if wrong post type
			if ( ! in_array( $post->post_type, $this->post_types ) ) {
				return;
			}

			// Enqueue the main script.
			wp_enqueue_script( 'pdwp-gallery-js', plugins_url( '/js/gallery-metabox.min.js', __FILE__ ), array( 'jquery' ), '', true );

			// Enqueue the main style.
			wp_enqueue_style( 'pdwp-gallery-css', plugins_url( '/css/gallery-metabox.min.css', __FILE__ ) );

		}

		/**
		 * Render the gallery metabox
		 *
		 * @since 1.0.0
		 */
		public function render() {
			global $post; ?>

			
			<p class="add-pdwp-gallery-images hide-if-no-js">
				<a class="gallery-add button-primary" href="#"><?php esc_html_e( 'Add Image(s)', 'relicwp-helper' ); ?></a>
			</p>

			<div class="pdwp-gallery-images-wrap">

		        <ul id="gallery-metabox-list">

		        	<?php
		        	wp_nonce_field( 'gallery_meta_nonce', 'gallery_meta_nonce' );
					$ids = get_post_meta( $post->ID, 'pdvs_gallery_id', true );

					if ( $ids ) : foreach ( $ids as $key => $value ) : $image = wp_get_attachment_image_src( $value ); ?>

						<li class="image">
							<div class="attachment-preview">
								<input type="hidden" name="pdvs_gallery_id[<?php echo esc_attr($key); ?>]" value="<?php echo esc_attr($value); ?>">
								<div class="thumb"><img class="image-preview" src="<?php echo esc_url($image[0]); ?>"></div>
								<a class="change-image button" href="#"><?php esc_html_e( 'Change image', 'relicwp-helper' ); ?></a>
								<a class="remove-image" href="#" title="<?php esc_html_e( 'Remove image', 'relicwp-helper' ); ?>"><i class="dashicons dashicons-no-alt"></i></a>
							</div>
						</li>

					<?php endforeach; endif; ?>

		        </ul>

	        </div>

	        <?php $checked = checked( get_post_meta( get_the_ID(), 'pdvs_gallery_link_images', true ), 'on', false ); ?>

	        <p>
				<label for="pdvs_gallery_link_images">
					<input type="checkbox" id="pdvs_gallery_link_images" value="on" name="pdvs_gallery_link_images"<?php echo esc_attr($checked); ?> /> <?php esc_html_e( 'Enable lightbox for this gallery?', 'relicwp-helper' )?>
				</label>
	        </p>

		<?php
		}

		/**
		 * Save the gallery metabox
		 *
		 * @since 1.0.0
		 */
		public static function save_meta( $post_id ) {

			// Check nonce
			if ( ! isset( $_POST['gallery_meta_nonce'] )
				|| ! wp_verify_nonce( $_POST[ 'gallery_meta_nonce' ], 'gallery_meta_nonce' ) ) {
				return;
			}

			// Check auto save
			if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
				return;
			}

			// Check user permissions
			if ( ! current_user_can( 'edit_post', $post_id ) ) {
				return;
			}

			if ( isset( $_POST[ 'pdvs_gallery_id' ] ) ) {
				update_post_meta( $post_id, 'pdvs_gallery_id', sanitize_text_field($_POST[ 'pdvs_gallery_id' ]) );
			} else {
				delete_post_meta ( $post_id, 'pdvs_gallery_id' );
			}

			// link to larger images
			if ( isset( $_POST[ 'pdvs_gallery_link_images' ] ) ) {
				update_post_meta( $post_id, 'pdvs_gallery_link_images', sanitize_text_field($_POST[ 'pdvs_gallery_link_images' ]) );
			} else {
				update_post_meta( $post_id, 'pdvs_gallery_link_images', 'off' );
			}

		}

	}
}

// Class needed only in the admin
if ( is_admin() ) {
	$pdwp_gallery_metabox = new PdWP_Gallery_Metabox;
}

/**
 * Check if the post has a gallery
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'pdwp_post_has_gallery' ) ) {

	function pdwp_post_has_gallery( $post_id = '' ) {

		$post_id = $post_id ? $post_id : get_the_ID();

		if ( get_post_meta( $post_id, 'pdvs_gallery_id', true ) ) {
			return true;
		}

	}

}

/**
 * Retrieve attachment IDs
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'pdwp_get_gallery_ids' ) ) {

	function pdwp_get_gallery_ids( $post_id = '' ) {

		$post_id = $post_id ? $post_id : get_the_ID();
		$attachment_ids = get_post_meta( $post_id, 'pdvs_gallery_id', true );

		if ( $attachment_ids ) {
			return $attachment_ids;
		}

	}

}

/**
 * Retrieve attachment data
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'pdwp_get_attachment' ) ) {

	function pdwp_get_attachment( $id ) {

		$attachment = get_post( $id );

		return array(
			'alt'         => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
			'caption'     => $attachment->post_excerpt,
			'description' => $attachment->post_content,
			'href'        => get_permalink( $attachment->ID ),
			'src'         => $attachment->guid,
			'title'       => $attachment->post_title,
		);

	}

}

/**
 * Return gallery count
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'pdwp_gallery_count' ) ) {

	function pdwp_gallery_count() {

		$ids = pdwp_get_gallery_ids();
		return count( $ids );

	}

}

/**
 * Check if lightbox is enabled
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'pdwp_gallery_is_lightbox_enabled' ) ) {

	function pdwp_gallery_is_lightbox_enabled() {

		if ( 'on' == get_post_meta( get_the_ID(), 'pdvs_gallery_link_images', true ) ) {
			return true;
		}

	}

}