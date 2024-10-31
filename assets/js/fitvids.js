var $j = jQuery.noConflict();

$j( document ).ready( function() {
	"use strict";
    // Responsive Video
	pdwpInitFitVids();
} );

/* ==============================================
RESPONSIVE VIDEOS
============================================== */
function pdwpInitFitVids() {
	"use strict"

	$j( '.responsive-video-wrap, .responsive-audio-wrap' ).fitVids();

}