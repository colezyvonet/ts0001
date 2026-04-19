<?php
/**
 * Theme functions for ts0001.
 *
 * @package ts0001
 */

namespace ts0001;

/**
 * Theme setup.
 */
function setup() {
	add_editor_style( 'style.css' );
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );


/**
 * Enqueue the theme stylesheet.
 */
function enqueue_style_sheet() {
	wp_enqueue_style(
		'ts0001',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_style_sheet' );


/**
 * Register pattern categories.
 */
function pattern_categories() {
	$categories = array(
		'ts0001/header'  => array( 'label' => __( 'Header', 'ts0001' ) ),
		'ts0001/footer'  => array( 'label' => __( 'Footer', 'ts0001' ) ),
		'ts0001/woo'     => array( 'label' => __( 'WooCommerce', 'ts0001' ) ),
	);

	foreach ( $categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', __NAMESPACE__ . '\pattern_categories', 9 );


/**
 * Hide last separator on single-page post lists with no pagination.
 */
function hide_last_separator_when_no_pagination() {
	global $wp_query;
	if ( $wp_query->max_num_pages < 2 ) {
		echo '<style>.blog .wp-block-post-template .wp-block-post:last-child .wp-block-separator,.archive .wp-block-post-template .wp-block-post:last-child .wp-block-separator,.search .wp-block-post-template .wp-block-post:last-child .wp-block-separator{display:none}</style>';
	}
}
add_action( 'wp_head', __NAMESPACE__ . '\hide_last_separator_when_no_pagination' );


/**
 * Load WooCommerce-specific functions.
 */
require_once get_template_directory() . '/inc/woocommerce.php';
