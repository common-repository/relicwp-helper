var $j = jQuery.noConflict();

$j( document ).ready( function() {
	"use strict";
    // Match height elements
	pdwpInitMatchHeight();
} );

/* ==============================================
MATCH HEIGHTS
============================================== */
function pdwpInitMatchHeight() {
	"use strict"

	// Add match heights grid
	$j( '.match-height-grid .match-height-content' ).matchHeight({ property: 'min-height' });

	// Blog entries
	$j( '.blog-equal-heights .blog-entry-inner' ).matchHeight({ property: 'min-height' });

}