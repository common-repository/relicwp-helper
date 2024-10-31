var $j = jQuery.noConflict();

$j( document ).ready( function() {
    "use strict";
    // Auto lightbox
    pdwpAutoLightbox();
    // Lightbox
    pdwpInitLightbox();
} );

/* ==============================================
AUTO LIGHTBOX
============================================== */
function pdwpAutoLightbox() {
    "use strict"

    $j( 'body .entry-content a:has(img), body .entry a:has(img)' ).each( function() {

        // Make sure the lightbox is only used for image links and not for links to external pages
        var $image_formats = ['bmp', 'gif', 'jpeg', 'jpg', 'png', 'tiff', 'tif', 'jfif', 'jpe', 'svg', 'mp4', 'ogg', 'webm'],
            $image_formats_mask = 0;

        // Loop through the image extensions array to see if we have an image link
        for ( var $i = 0; $i < $image_formats.length; $i++ ) {
            $image_formats_mask += String( $j( this ).attr( 'href' ) ).indexOf( '.' + $image_formats[$i] );
        }

        // If no image extension was found add the no lightbox class
        if ( $image_formats_mask == -13 ) {
            $j( this ).addClass( 'no-lightbox' );
        }

        if ( ! $j( this ).hasClass( 'no-lightbox' )
            && ! $j( this ).hasClass( 'gallery-lightbox' )
            && ! $j( this ).parent().hasClass( 'gallery-icon' )
            && ! $j( this ).hasClass( 'woo-lightbox' )
            && ! $j( this ).hasClass( 'woo-thumbnail' ) ) {

            $j( this ).addClass( 'pdwp-lightbox' );

        }

        if ( ! $j( this ).hasClass( 'no-lightbox' )
            && $j( this ).parent().hasClass( 'gallery-icon' ) ) {

            $j( this ).addClass( 'gallery-lightbox' );

        }

    } );

}

/* ==============================================
LIGHTBOX
============================================== */
function pdwpInitLightbox( $context ) {
    "use strict"

    // Lightbox
    $j( 'body .site-content, body .entry' ).Chocolat( {
        imageSelector   : '.pdwp-lightbox'
    } );

    // Gallery lightbox
    $j( '.gallery-format, .gallery', $context ).Chocolat( {
        loop            : true,
        imageSelector   : '.gallery-lightbox:not(.slick-cloned)'
    } );

    // Product lightbox
    $j( '.product-images-slider' ).Chocolat( {
        loop            : true,
        imageSelector   : '.product-image:not(.slick-cloned) .woo-lightbox'
    } );

}