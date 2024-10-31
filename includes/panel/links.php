<?php
/**
 * Links
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
class RelicWP_Helper_Links {

	/**
	 * Start things up
	 */
	public function __construct() {
		add_action( 'admin_menu', 		array( $this, 'add_page' ), 12 );
		add_action( 'admin_footer', 	array( $this, 'links_blank' ) );
	}

	/**
	 * Add sub menu page
	 *
	 * @since 1.0.0
	 */
	public function add_page() {
		global $submenu;

		// Affiliate link
		$ref_url = '';
		$aff_ref = apply_filters( 'pdvs_affiliate_ref', $ref_url );

	    $submenu[ 'relicwp-panel' ][] = array( '<div class="pdwp-link">' . esc_html__( 'Documentation', 'relicwp-helper' ) . '</div>', 'manage_options', 'http://relicwp.com/docs' );
	    $submenu[ 'relicwp-panel' ][] = array( '<div class="pdwp-link">' . esc_html__( 'Support', 'relicwp-helper' ) . '</div>', 'manage_options', 'https://relicwp.com/support/'. $aff_ref .'' );
	}

	/**
	 * Open links in new window
	 *
	 * @since 1.0.0
	 */
	public function links_blank() { ?>
	    <script type="text/javascript">
		    jQuery( document ).ready( function($) {
		        $( '.pdwp-link' ).parent().attr( 'target', '_blank' );
		    });
	    </script>
    <?php
	}

}
new RelicWP_Helper_Links();