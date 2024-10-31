<?php
/**
 * Display shortcodes in front end
 *
 * @package RelicWP_Helper
 * @category Core
 * @author PdWP
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Shortcode before the top bar
if ( ! function_exists( 'pdwp_shortcode_before_top_bar' ) ) {
	function pdwp_shortcode_before_top_bar() {

		if ( $meta = get_post_meta( pdwp_post_id(), 'pdvs_shortcode_before_top_bar', true ) ) {
			echo wp_kses_post( do_shortcode( $meta ) );
		}

	}
	add_action( 'pdvs_before_top_bar', 'pdwp_shortcode_before_top_bar', 10 );
}

// Shortcode after the top bar
if ( ! function_exists( 'pdwp_shortcode_after_top_bar' ) ) {
	function pdwp_shortcode_after_top_bar() {

		if ( $meta = get_post_meta( pdwp_post_id(), 'pdvs_shortcode_after_top_bar', true ) ) {
			echo wp_kses_post( do_shortcode( $meta ) );
		}

	}
	add_action( 'pdvs_after_top_bar', 'pdwp_shortcode_after_top_bar', 10 );
}

// Shortcode before the header
if ( ! function_exists( 'pdwp_shortcode_before_header' ) ) {
	function pdwp_shortcode_before_header() {

		if ( $meta = get_post_meta( pdwp_post_id(), 'pdvs_shortcode_before_header', true ) ) {
			echo wp_kses_post( do_shortcode( $meta ) );
		}

	}
	add_action( 'pdvs_before_header', 'pdwp_shortcode_before_header', 10 );
}

// Shortcode after the header
if ( ! function_exists( 'pdwp_shortcode_after_header' ) ) {
	function pdwp_shortcode_after_header() {

		if ( $meta = get_post_meta( pdwp_post_id(), 'pdvs_shortcode_after_header', true ) ) {
			echo wp_kses_post( do_shortcode( $meta ) );
		}

	}
	add_action( 'pdvs_after_header', 'pdwp_shortcode_after_header', 10 );
}

// Shortcode before the title
if ( ! function_exists( 'pdwp_shortcode_before_title' ) ) {
	function pdwp_shortcode_before_title() {

		if ( $meta = get_post_meta( pdwp_post_id(), 'pdvs_has_shortcode', true ) ) {
			echo wp_kses_post( do_shortcode( $meta ) );
		}

	}
	add_action( 'pdvs_before_page_header', 'pdwp_shortcode_before_title', 10 );
}

// Shortcode after the title
if ( ! function_exists( 'pdwp_shortcode_after_title' ) ) {
	function pdwp_shortcode_after_title() {

		if ( $meta = get_post_meta( pdwp_post_id(), 'pdvs_shortcode_after_title', true ) ) {
			echo wp_kses_post( do_shortcode( $meta ) );
		}

	}
	add_action( 'pdvs_after_page_header', 'pdwp_shortcode_after_title', 10 );
}

// Shortcode before the footer widgets
if ( ! function_exists( 'pdwp_shortcode_before_footer_widgets' ) ) {
	function pdwp_shortcode_before_footer_widgets() {

		if ( $meta = get_post_meta( pdwp_post_id(), 'pdvs_shortcode_before_footer_widgets', true ) ) {
			echo wp_kses_post( do_shortcode( $meta ) );
		}

	}
	add_action( 'pdvs_before_footer_widgets', 'pdwp_shortcode_before_footer_widgets', 10 );
}

// Shortcode after the footer widgets
if ( ! function_exists( 'pdwp_shortcode_after_footer_widgets' ) ) {
	function pdwp_shortcode_after_footer_widgets() {

		if ( $meta = get_post_meta( pdwp_post_id(), 'pdvs_shortcode_after_footer_widgets', true ) ) {
			echo wp_kses_post( do_shortcode( $meta ) );
		}

	}
	add_action( 'pdvs_after_footer_widgets', 'pdwp_shortcode_after_footer_widgets', 10 );
}

// Shortcode before the footer bottom
if ( ! function_exists( 'pdwp_shortcode_before_footer_bottom' ) ) {
	function pdwp_shortcode_before_footer_bottom() {

		if ( $meta = get_post_meta( pdwp_post_id(), 'pdvs_shortcode_before_footer_bottom', true ) ) {
			echo wp_kses_post( do_shortcode( $meta ) );
		}

	}
	add_action( 'pdvs_before_footer_bottom', 'pdwp_shortcode_before_footer_bottom', 10 );
}

// Shortcode after the footer bottom
if ( ! function_exists( 'pdwp_shortcode_after_footer_bottom' ) ) {
	function pdwp_shortcode_after_footer_bottom() {

		if ( $meta = get_post_meta( pdwp_post_id(), 'pdvs_shortcode_after_footer_bottom', true ) ) {
			echo wp_kses_post( do_shortcode( $meta ) );
		}

	}
	add_action( 'pdvs_after_footer_bottom', 'pdwp_shortcode_after_footer_bottom', 10 );
}