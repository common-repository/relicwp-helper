<?php

/**
 * Title         : Aqua Resizer
 * Description   : Resizes WordPress images on the fly
 * Version       : 1.2.1
 * Author        : Syamil MJ
 * Author URI    : http://aquagraphite.com
 * License       : WTFPL - http://sam.zoy.org/wtfpl/
 * Documentation : https://github.com/sy4mil/Aqua-Resizer/
 *
 * @param string  $url      - (required) must be uploaded using wp media uploader
 * @param int     $width    - (required)
 * @param int     $height   - (optional)
 * @param bool    $crop     - (optional) default to soft crop
 * @param bool    $single   - (optional) returns an array if false
 * @param bool    $upscale  - (optional) resizes smaller images
 * @uses  wp_upload_dir()
 * @uses  image_resize_dimensions()
 * @uses  wp_get_image_editor()
 *
 * @return str|array
 */

if ( ! class_exists( 'RelicWP_Helper_Resize' ) ) {
    class RelicWP_Helper_Exception extends Exception {}

    class RelicWP_Helper_Resize {
        /**
         * The singleton instance
         */
        static private $instance = null;

        /**
         * Should an RelicWP_Helper_Exception be thrown on error?
         * If false (default), then the error will just be logged.
         */
        public $throwOnError = false;

        /**
         * No initialization allowed
         */
        private function __construct() {}

        /**
         * No cloning allowed
         */
        private function __clone() {}

        /**
         * For your custom default usage you may want to initialize an RelicWP_Helper_Resize object by yourself and then have own defaults
         */
        static public function getInstance() {
            if(self::$instance == null) {
                self::$instance = new self;
            }

            return self::$instance;
        }

        /**
         * Run, forest.
         */
        public function process( $url, $width = null, $height = null, $crop = null, $single = true, $upscale = false ) {
            try {
                // Validate inputs.
                if (!$url)
                    throw new RelicWP_Helper_Exception('$url parameter is required');
                if (!$width)
                    throw new RelicWP_Helper_Exception('$width parameter is required');
                if (!$height)
                    throw new RelicWP_Helper_Exception('$height parameter is required');

                // Caipt'n, ready to hook.
                if ( true === $upscale ) add_filter( 'image_resize_dimensions', array($this, 'aq_upscale'), 10, 6 );

                // Define upload path & dir.
                $upload_info = wp_upload_dir();
                $upload_dir = $upload_info['basedir'];
                $upload_url = $upload_info['baseurl'];
                
                $http_prefix = "http://";
                $https_prefix = "https://";
                $relative_prefix = "//"; // The protocol-relative URL
                
                /* if the $url scheme differs from $upload_url scheme, make them match 
                   if the schemes differe, images don't show up. */
                if(!strncmp($url,$https_prefix,strlen($https_prefix))){ //if url begins with https:// make $upload_url begin with https:// as well
                    $upload_url = str_replace($http_prefix,$https_prefix,$upload_url);
                }
                elseif(!strncmp($url,$http_prefix,strlen($http_prefix))){ //if url begins with http:// make $upload_url begin with http:// as well
                    $upload_url = str_replace($https_prefix,$http_prefix,$upload_url);      
                }
                elseif(!strncmp($url,$relative_prefix,strlen($relative_prefix))){ //if url begins with // make $upload_url begin with // as well
                    $upload_url = str_replace(array( 0 => "$http_prefix", 1 => "$https_prefix"),$relative_prefix,$upload_url);
                }
                

                // Check if $img_url is local.
                if ( false === strpos( $url, $upload_url ) )
                    throw new RelicWP_Helper_Exception('Image must be local: ' . $url);

                // Define path of image.
                $rel_path = str_replace( $upload_url, '', $url );
                $img_path = $upload_dir . $rel_path;

                // Check if img path exists, and is an image indeed.
                if ( ! file_exists( $img_path ) or ! getimagesize( $img_path ) )
                    throw new RelicWP_Helper_Exception('Image file does not exist (or is not an image): ' . $img_path);

                // Get image info.
                $info = pathinfo( $img_path );
                $ext = $info['extension'];
                list( $orig_w, $orig_h ) = getimagesize( $img_path );

                // Get image size after cropping.
                $dims = image_resize_dimensions( $orig_w, $orig_h, $width, $height, $crop );
                $dst_w = $dims[4];
                $dst_h = $dims[5];

                // Return the original image only if it exactly fits the needed measures.
                if ( ! $dims && ( ( ( null === $height && $orig_w == $width ) xor ( null === $width && $orig_h == $height ) ) xor ( $height == $orig_h && $width == $orig_w ) ) ) {
                    $img_url = $url;
                    $dst_w = $orig_w;
                    $dst_h = $orig_h;
                } else {
                    // Use this to check if cropped image already exists, so we can return that instead.
                    $suffix = "{$dst_w}x{$dst_h}";
                    $dst_rel_path = str_replace( '.' . $ext, '', $rel_path );
                    $destfilename = "{$upload_dir}{$dst_rel_path}-{$suffix}.{$ext}";

                    if ( ! $dims || ( true == $crop && false == $upscale && ( $dst_w < $width || $dst_h < $height ) ) ) {
                        // Can't resize, so return false saying that the action to do could not be processed as planned.
                        throw new RelicWP_Helper_Exception('Unable to resize image because image_resize_dimensions() failed');
                    }
                    // Else check if cache exists.
                    elseif ( file_exists( $destfilename ) && getimagesize( $destfilename ) ) {
                        $img_url = "{$upload_url}{$dst_rel_path}-{$suffix}.{$ext}";
                    }
                    // Else, we resize the image and return the new resized image url.
                    else {

                        $editor = wp_get_image_editor( $img_path );

                        if ( is_wp_error( $editor ) || is_wp_error( $editor->resize( $width, $height, $crop ) ) ) {
                            throw new RelicWP_Helper_Exception('Unable to get WP_Image_Editor: ' . 
                                                   $editor->get_error_message() . ' (is GD or ImageMagick installed?)');
                        }

                        $resized_file = $editor->save();

                        if ( ! is_wp_error( $resized_file ) ) {
                            $resized_rel_path = str_replace( $upload_dir, '', $resized_file['path'] );
                            $img_url = $upload_url . $resized_rel_path;
                        } else {
                            throw new RelicWP_Helper_Exception('Unable to save resized image file: ' . $editor->get_error_message());
                        }

                    }
                }

                // Okay, leave the ship.
                if ( true === $upscale ) remove_filter( 'image_resize_dimensions', array( $this, 'aq_upscale' ) );

                // Return the output.
                if ( $single ) {
                    // str return.
                    $image = $img_url;
                } else {
                    // array return.
                    $image = array (
                        0 => $img_url,
                        1 => $dst_w,
                        2 => $dst_h
                    );
                }

                return $image;
            }
            catch (RelicWP_Helper_Exception $ex) {
                error_log('RelicWP_Helper_Resize.process() error: ' . $ex->getMessage());

                if ($this->throwOnError) {
                    // Bubble up exception.
                    throw $ex;
                }
                else {
                    // Return false, so that this patch is backwards-compatible.
                    return false;
                }
            }
        }

        /**
         * Callback to overwrite WP computing of thumbnail measures
         */
        function aq_upscale( $default, $orig_w, $orig_h, $dest_w, $dest_h, $crop ) {
            if ( ! $crop ) return null; // Let the wordpress default function handle this.

            // Here is the point we allow to use larger image size than the original one.
            $aspect_ratio = $orig_w / $orig_h;
            $new_w = $dest_w;
            $new_h = $dest_h;

            if ( ! $new_w ) {
                $new_w = intval( $new_h * $aspect_ratio );
            }

            if ( ! $new_h ) {
                $new_h = intval( $new_w / $aspect_ratio );
            }

            $size_ratio = max( $new_w / $orig_w, $new_h / $orig_h );

            $crop_w = round( $new_w / $size_ratio );
            $crop_h = round( $new_h / $size_ratio );

            $s_x = floor( ( $orig_w - $crop_w ) / 2 );
            $s_y = floor( ( $orig_h - $crop_h ) / 2 );

            return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
        }
    }
}

if ( ! function_exists( 'pdvs_extra_resize' ) ) {

    /**
     * This is just a tiny wrapper function for the class above so that there is no
     * need to change any code in your own WP themes. Usage is still the same :)
     */
    function pdvs_extra_resize( $url, $width = null, $height = null, $crop = null, $single = true, $upscale = false ) {
        /* WPML Fix */
        if ( defined( 'ICL_SITEPRESS_VERSION' ) ){
            global $sitepress;
            $url = $sitepress->convert_url( $url, $sitepress->get_default_language() );
        }
        /* WPML Fix */

        $pdvs_extra_resize = RelicWP_Helper_Resize::getInstance();
        return $pdvs_extra_resize->process( $url, $width, $height, $crop, $single, $upscale );
    }
}

if ( ! function_exists( 'pdvs_extra_image_attributes' ) ) {

    /**
     * Build our image attributes
     */
    function pdvs_extra_image_attributes( $og_width = '', $og_height = '', $new_width = '', $new_height = '' ) {
        $ignore_crop = array( '', '0', '9999' );
    
        $img_atts = array();
        
        $img_atts = array(
            'width'     => ( in_array( $new_width, $ignore_crop ) ) ? 9999 : intval( $new_width ),
            'height'    => ( in_array( $new_height, $ignore_crop ) ) ? 9999 : intval( $new_height ),
            'crop'      => ( in_array( $new_width, $ignore_crop ) || in_array( $new_height, $ignore_crop ) ) ? false : true
        );
        
        // If there's no height or width, empty the array
        if ( 9999 == $img_atts[ 'width' ]
            && 9999 == $img_atts[ 'height' ] ) {
            $img_atts = array();
        }
        
        if ( ! empty( $img_atts ) ) :
            // Is our width larger than the OG img and not proportional?
            $width_upscale          = $img_atts[ 'width' ] > $og_width && $img_atts[ 'width' ] < 9999 ? true : false;
            
            // Is our height larger than the OG img and not proportional?
            $height_upscale         = $img_atts[ 'height' ] > $og_height && $img_atts[ 'height' ] < 9999 ? true : false;
            
            // If both the height and width are larger than the OG image, upscale
            $img_atts[ 'upscale' ]  = $width_upscale && $height_upscale ? true : false;
            
            // If the width is larger than the OG img and the height isn't proportional, upscale
            $img_atts[ 'upscale' ]  = $width_upscale && $img_atts[ 'height' ] < 9999 ? true : $img_atts[ 'upscale' ];

            // If the height is larger than the OG image and width isn't proportional, upscale
            $img_atts[ 'upscale' ]  = $height_upscale && $img_atts[ 'width' ] < 9999 ? true : $img_atts[ 'upscale' ];
            
            // If we're upscaling, set crop to true
            $img_atts[ 'crop' ]     = $img_atts[ 'upscale' ] ? true : $img_atts[ 'crop' ];
            
            // If one of our sizes is upscaling but the other is proportional, show the full image
            if ( $width_upscale
                && $img_atts[ 'height' ] == 9999
                || $height_upscale
                && $img_atts[ 'width' ] == 9999 ) {
                $img_atts = array();
            }
        endif;
        
        return apply_filters( 'pdvs_extra_image_attributes', $img_atts );
    }
}