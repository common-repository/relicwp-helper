var $j 					= jQuery.noConflict(),
	$window 			= $j( window ),
	$lastWindowWidth 	= $window.width(),
	$lastWindowHeight 	= $window.height();

$window.on( 'load', function() {
	"use strict";
	// Fixed footer
	pdwpFixedFooter();
} );

$window.resize( function() {
	"use strict";

	var $windowWidth  = $window.width(),
		$windowHeight = $window.height();

    if ( $lastWindowWidth !== $windowWidth
    	|| $lastWindowHeight !== $windowHeight ) {
        pdwpFixedFooter();
    }

} );

/* ==============================================
FIXED FOOTER
============================================== */
function pdwpFixedFooter() {
	"use strict"

    if ( ! $j( 'body' ).hasClass( 'has-fixed-footer' ) ) {
        return;
    }

    // Set main vars
    var $mainHeight 		= $j( '#main' ).outerHeight(),
    	$htmlHeight 		= $j( 'html' ).height(),
    	$adminbarHeight		= pdwpGetAdminbarHeight(),
    	$minHeight 			= $mainHeight + ( $window.height() - $htmlHeight - $adminbarHeight );

    // Add min height
    $j( '#main' ).css( 'min-height', $minHeight );

}