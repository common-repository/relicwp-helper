var $j = jQuery.noConflict();

$j( document ).ready( function() {
	"use strict";
	// Superfish menus
	pdwpSuperFish();
} );

/* ==============================================
SUPERFISH MENUS
============================================== */
function pdwpSuperFish() {
	"use strict"

	$j( 'ul.sf-menu' ).superfish( {
		delay: 600,
		animation: {
			opacity: 'show'
		},
		animationOut: {
			opacity: 'hide'
		},
		speed: 'fast',
		speedOut: 'fast',
		cssArrows: false,
		disableHI: false,
	} );

}