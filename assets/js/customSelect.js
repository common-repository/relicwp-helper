var $j = jQuery.noConflict();

$j( document ).ready( function() {
	"use strict";
	// Custom select
	pdwpCustomSelects();
} );

/* ==============================================
CUSTOM SELECT
============================================== */
function pdwpCustomSelects() {
	"use strict"

	$j( pdwpLocalize.customSelects ).customSelect( {
		customClass: 'theme-select'
	} );

}