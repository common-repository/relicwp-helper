var $j = jQuery.noConflict();

$j( document ).ready( function() {
	"use strict";
	// Mobile menu
	pdwpMobileMenu();
} );

/* ==============================================
MOBILE SCRIPT
============================================== */
function pdwpMobileMenu( event ) {
	"use strict"

	if ( typeof pdwpLocalize.sidrSource !== 'undefined' ) {

		// Add sidr
		$j( '.mobile-menu' ).sidr( {
			name     : 'sidr',							// Name for the 'sidr'
			source   : pdwpLocalize.sidrSource,		// Override the source of the content
			side     : pdwpLocalize.sidrSide,     	// Accepts 'left' or 'right'
			displace : pdwpLocalize.sidrDisplace, 	// Displace the body content or not
			speed    : 300,            					// Accepts standard jQuery effects speeds (i.e. fast, normal or milliseconds)
			renaming : true,							// The ids and classes will be prepended with a prefix when loading existent content
			onOpen   : function() {

				// Declare useful vars
				var $hasChildren = $j( '.sidr-class-menu-item-has-children' );

				// Add dropdown toggle (plus)
				$hasChildren.children( 'a' ).append( '<span class="sidr-class-dropdown-toggle"></span>' );

				// Toggle dropdowns
				var $sidrDropdownTarget = $j( '.sidr-class-dropdown-toggle' );

				// Check localization
				if ( pdwpLocalize.sidrDropdownTarget == 'link' ) {
					$sidrDropdownTarget = $j( '.sidr-class-sf-with-ul' );
				}

				// Add toggle click event
				$sidrDropdownTarget.on( 'click', function( event ) {

					// Define toggle vars
					if ( pdwpLocalize.sidrDropdownTarget == 'link' ) {
						var $toggleParentLi = $j( this ).parent( 'li' );
					} else {
						var $toggleParentLink = $j( this ).parent( 'a' ),
							$toggleParentLi   = $toggleParentLink.parent( 'li' );
					}

					// Get parent items and dropdown
					var $allParentLis = $toggleParentLi.parents( 'li' ),
						$dropdown     = $toggleParentLi.children( 'ul' );

					// Toogle items
					if ( ! $toggleParentLi.hasClass( 'active' ) ) {
						$hasChildren.not( $allParentLis ).removeClass( 'active' ).children( 'ul' ).slideUp( 'fast' );
						$toggleParentLi.addClass( 'active' ).children( 'ul' ).slideDown( 'fast' );
					} else {
						$toggleParentLi.removeClass( 'active' ).children( 'ul' ).slideUp( 'fast' );
					}

					// Return false
					return false;

				} );

				// Add light overlay to content
				$j( 'body' ).append( '<div class="pdwp-sidr-overlay"></div>' );
				$j( '.pdwp-sidr-overlay' ).fadeIn( 300 );

				// Close sidr when clicking overlay
				$j( '.pdwp-sidr-overlay' ).on( 'click', function() {
					$j.sidr( 'close', 'sidr' );
					return false;
				} );

				// Close on resize
				$window.resize( function() {
					if ( $window.width() >= 960 ) {
						$j.sidr( 'close', 'sidr' );
					}
				} );

			},
			onClose : function() {

				// Remove active dropdowns
				$j( '.sidr-class-menu-item-has-children.active' ).removeClass( 'active' ).children( 'ul' ).hide();

				// FadeOut overlay
				$j( '.pdwp-sidr-overlay' ).fadeOut( 300, function() {
					$j( this ).remove();
				} );
			}

		} );

        // Replace sidr class in the icons classes
		$j( '#sidr li.sidr-class-menu-item a i[class*="sidr-class-icon"]' ).each( function() {
			var old_class = $j( this ).attr( 'class' ),
				old_class = old_class.replace( 'sidr-class-icon-', 'icon-' );
			$j( this ).attr( 'class', old_class );
		} );

		// Close sidr when clicking on close button
		$j( 'a.sidr-class-toggle-sidr-close' ).on( 'click', function() {
			$j.sidr( 'close', 'sidr' );
			return false;
		} );

		// Close when clicking local scroll link
		$j( 'li.sidr-class-local-scroll > a' ).on( 'click', function() {
			$j.sidr( 'close', 'sidr' );
			pdwpScrollEffect();
			return false;
		} );

	}

}