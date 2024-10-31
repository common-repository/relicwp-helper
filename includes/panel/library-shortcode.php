<?php
/**
 * My Library Shortcode
 *
 * @package 	RelicWP_Helper
 * @category 	Core
 * @author 		PdWP
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'PdWP_Library_Shortcode' ) ) {

	class PdWP_Library_Shortcode {

		/**
		 * Start things up
		 */
		public function __construct() {
			add_shortcode( 'relicwp_library', array( $this, 'library_shortcode' ) );
		}

		/**
		 * Registers the function as a shortcode
		 */
		public function library_shortcode( $atts, $content = null ) {

			// Attributes
			$atts = shortcode_atts( array(
				'id' => '',
			), $atts, 'relicwp_library' );

			ob_start();
			
			if ( $atts[ 'id' ] ) {

				// Check if the template is created with Elementor
				$elementor  = get_post_meta( $atts[ 'id' ], '_elementor_edit_mode', true );

			    // If Elementor
			    if ( class_exists( 'Elementor\Plugin' ) && $elementor ) {

			        echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $atts[ 'id' ] );

			    }

			    // If Beaver Builder
			    else if ( class_exists( 'FLBuilder' ) && ! empty( $atts[ 'id' ] ) ) {

			        echo do_shortcode( '[fl_builder_insert_layout id="' . $atts[ 'id' ] . '"]' );

			    }

			    // Else
			    else {

			    	// Get template content
			    	$content = $atts[ 'id' ];

					if ( ! empty( $content ) ) {

						$template = get_post( $content );

						if ( $template && ! is_wp_error( $template ) ) {
							$content = $template->post_content;
						}

					}

			        // Display template content
			        echo do_shortcode( $content );

			    }
			}
			
			return ob_get_clean();

		}

	}

}
new PdWP_Library_Shortcode();