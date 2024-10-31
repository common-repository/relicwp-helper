<?php
/**
 * RelicWP plugin strings
 *
 * @package RelicWP WordPress theme
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

//if( is_plugin_active( 'custom-post-type-ui/custom-post-type-ui.php' ) ) {
	// Plugin is active

	if ( ! function_exists( 'cptui_register_my_cpts' ) ) {

		function cptui_register_my_cpts() {

			/**
			 * Post Type: Portfolios.
			 */

			$labels = [
				"name" => __( "Portfolios", "relicwp-helper" ),
				"singular_name" => __( "Portfolio", "relicwp-helper" ),
			];

			$args = [
				"label" => __( "Portfolios", "relicwp-helper" ),
				"labels" => $labels,
				"description" => __( "Create a post for the portfolio section", "relicwp-helper" ),
				"public" => true,
				"publicly_queryable" => true,
				"show_ui" => true,
				"show_in_rest" => true,
				"rest_base" => "",
				"rest_controller_class" => "WP_REST_Posts_Controller",
				"has_archive" => false,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"delete_with_user" => false,
				"exclude_from_search" => false,
				"capability_type" => "post",
				"map_meta_cap" => true,
				"hierarchical" => false,
				"rewrite" => [ "slug" => "portfolio", "with_front" => true ],
				"query_var" => true,
				"supports" => [ "title", "editor", "thumbnail", "excerpt", "author" ],
			];

			register_post_type( "portfolio", $args );
		}

	}

	add_action( 'init', 'cptui_register_my_cpts' );

	if ( ! function_exists( 'cptui_register_my_taxes' ) ) {

		function cptui_register_my_taxes() {

			/**
			 * Taxonomy: Portfolio Categories.
			 */

			$labels = [
				"name" => __( "Portfolio Categories", "relicwp-helper" ),
				"singular_name" => __( "Portfolio Category", "relicwp-helper" ),
			];

			$args = [
				"label" => __( "Portfolio Categories", "relicwp-helper" ),
				"labels" => $labels,
				"public" => true,
				"publicly_queryable" => true,
				"hierarchical" => false,
				"show_ui" => true,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"query_var" => true,
				"rewrite" => [ 'slug' => 'portfolio_category', 'with_front' => true, ],
				"show_admin_column" => false,
				"show_in_rest" => true,
				"rest_base" => "portfolio_category",
				"rest_controller_class" => "WP_REST_Terms_Controller",
				"show_in_quick_edit" => false,
			];
			register_taxonomy( "portfolio_category", [ "portfolio" ], $args );
		}

	}

	add_action( 'init', 'cptui_register_my_taxes' );
	
	
//}