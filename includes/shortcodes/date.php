<?php
/**
 * Dynamic date shortcode
 */

if ( ! class_exists( 'PdWP_Date_Shortcode' ) ) {

	class PdWP_Date_Shortcode {

		/**
		 * Start things up
		 *
		 * @since  1.0.0
		 */
		public function __construct() {
			add_shortcode( 'pdwp_date', array( $this, 'date_shortcode' ) );
		}

		/**
		 * Registers the function as a shortcode
		 *
		 * @since  1.0.0
		 */
		public function date_shortcode( $atts, $content = null ) {

			// Extract attributes
			extract( shortcode_atts( array(
				'year' => '',
			), $atts ) );

			// Var
			$date = '';

			if ( '' != $year ) {
				$date .= $year . ' - ';
			}

			$date .= date( 'Y' );

			return esc_attr( $date );
		}

	}

}
new PdWP_Date_Shortcode();