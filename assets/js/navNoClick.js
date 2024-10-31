var $j = jQuery.noConflict();

$j( document ).ready( function() {
	"use strict";
	// Nav no click
	pdwpNavNoClick();
} );

/* ==============================================
NAV NO CLICK
============================================== */
function pdwpNavNoClick() {
	"use strict"

	$j( 'li.nav-no-click > a, li.sidr-class-nav-no-click > a' ).on( 'click', function() {
		return false;
	} );

}