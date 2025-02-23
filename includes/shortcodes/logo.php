<?php
/**
 * Logo shortcode for the Custom Header style
 */

if ( ! class_exists( 'PdWP_Logo_Shortcode' ) ) {

	class PdWP_Logo_Shortcode {

		/**
		 * Start things up
		 *
		 * @since  1.0.0
		 */
		public function __construct() {
			add_shortcode( 'pdvs_logo', array( $this, 'logo_shortcode' ) );
		}

		/**
		 * Registers the function as a shortcode
		 *
		 * @since  1.0.0
		 */
		public function logo_shortcode( $atts, $content = null ) {

			// Extract attributes
			extract( shortcode_atts( array(
				'position' 		=> 'left',
			), $atts ) );

			// Add classes
			$classes 		= array( 'custom-header-logo', 'clr' );
			$classes[] 		= $position;
			$classes 		= implode( ' ', $classes ); ?>

			<div class="<?php echo esc_attr( $classes ); ?>">

				<?php
				// Logo
				get_template_part( 'partials/header/logo' ); ?>

			</div>

		<?php
		}

	}

}
new PdWP_Logo_Shortcode();