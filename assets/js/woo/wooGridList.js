var $j = jQuery.noConflict();

$j( document ).ready( function() {
	"use strict";
    // Woo catalog view
    pdwpWooGridList();
} );

/* ==============================================
WOOCOMMERCE GRID LIST VIEW
============================================== */
function pdwpWooGridList() {
	"use strict"

	if ( $j( 'body' ).hasClass( 'has-grid-list' ) ) {

		$j( '#pdwp-grid' ).on( 'click', function() {
			$j( this ).addClass( 'active' );
			$j( '#pdwp-list' ).removeClass( 'active' );
			Cookies.set( 'gridcookie', 'grid', { path: '' } );
			$j( '.archive.woocommerce ul.products' ).fadeOut( 300, function() {
				$j( this ).addClass( 'grid' ).removeClass( 'list' ).fadeIn( 300 );
			} );
			return false;
		} );

		$j( '#pdwp-list' ).on( 'click', function() {
			$j( this ).addClass( 'active' );
			$j( '#pdwp-grid' ).removeClass( 'active' );
			Cookies.set( 'gridcookie', 'list', { path: '' } );
			$j( '.archive.woocommerce ul.products' ).fadeOut( 300, function() {
				$j( this ).addClass( 'list' ).removeClass( 'grid' ).fadeIn( 300 );
			} );
			return false;
		} );

		if ( Cookies.get( 'gridcookie' ) == 'grid' ) {
	        $j( '.pdwp-grid-list #pdwp-grid' ).addClass( 'active' );
	        $j( '.pdwp-grid-list #pdwp-list' ).removeClass( 'active' );
	        $j( '.archive.woocommerce ul.products' ).addClass( 'grid' ).removeClass( 'list' );
	    }

	    if ( Cookies.get( 'gridcookie' ) == 'list' ) {
	        $j( '.pdwp-grid-list #pdwp-list' ).addClass( 'active' );
	        $j( '.pdwp-grid-list #pdwp-grid' ).removeClass( 'active' );
	        $j( '.archive.woocommerce ul.products' ).addClass( 'list' ).removeClass( 'grid' );
	    }

	} else {

		Cookies.remove( 'gridcookie', { path: '' } );

	}

}