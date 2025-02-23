<?php
/**
 * Nav menu shortcode for the Custom Header style
 */

if ( ! class_exists( 'PdWP_Nav_Shortcode' ) ) {

	class PdWP_Nav_Shortcode {

		/**
		 * Start things up
		 *
		 * @since  1.0.0
		 */
		public function __construct() {
			add_shortcode( 'pdvs_nav', array( $this, 'nav_shortcode' ) );
		}

		/**
		 * Registers the function as a shortcode
		 *
		 * @since  1.0.0
		 */
		public function nav_shortcode( $atts, $content = null ) {

			// Extract attributes
			extract( shortcode_atts( array(
				'position' 		=> 'left',
			), $atts ) );

			// Add classes
			$classes 		= array( 'custom-header-nav', 'clr' );

			$classes[] 		= $position;
			$classes 		= implode( ' ', $classes ); ?>

			<div class="<?php echo esc_attr( $classes ); ?>">

				<?php
				// Menu
				get_template_part( 'partials/header/nav' );

				// Mobile menu
				get_template_part( 'partials/header/mobile-icon' ); ?>

			</div>

		<?php
		}

	}

}
new PdWP_Nav_Shortcode();