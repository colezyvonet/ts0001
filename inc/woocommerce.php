<?php
/**
 * WooCommerce functions for ts0001.
 *
 * @package ts0001
 */

namespace ts0001;

if ( class_exists( 'WooCommerce' ) ) {

	add_action( 'init', __NAMESPACE__ . '\unregister_woocommerce_block_patterns', 999 );
	add_filter( 'woocommerce_admin_features', __NAMESPACE__ . '\disable_pattern_toolkit' );

} else {

	add_filter( 'get_block_templates', __NAMESPACE__ . '\filter_woocommerce_templates', 10, 3 );
	add_action( 'init', __NAMESPACE__ . '\unregister_ts0001_woocommerce_patterns', 999 );

}


/**
 * Filter out WooCommerce templates when WooCommerce is not active.
 */
function filter_woocommerce_templates( $query_result, $query, $template_type ) {
	if ( 'wp_template' !== $template_type ) {
		return $query_result;
	}

	$woo_templates = array(
		'archive-product',
		'coming-soon',
		'order-confirmation',
		'page-cart',
		'page-checkout',
		'product-search-results',
		'single-product',
	);

	return array_filter(
		$query_result,
		function ( $template ) use ( $woo_templates ) {
			return ! in_array( $template->slug, $woo_templates, true );
		}
	);
}


/**
 * Unregister theme WooCommerce patterns when WooCommerce is not active.
 */
function unregister_ts0001_woocommerce_patterns() {
	$registry = \WP_Block_Patterns_Registry::get_instance();

	foreach ( $registry->get_all_registered() as $pattern ) {
		if ( strpos( $pattern['name'], 'ts0001/woo-' ) === 0 ) {
			unregister_block_pattern( $pattern['name'] );
		}
	}
}


/**
 * Unregister WooCommerce's default block patterns.
 */
function unregister_woocommerce_block_patterns() {
	foreach ( \WP_Block_Patterns_Registry::get_instance()->get_all_registered() as $pattern ) {
		if ( isset( $pattern['name'] ) && strpos( $pattern['name'], 'woocommerce-blocks' ) === 0 ) {
			unregister_block_pattern( $pattern['name'] );
		}
	}
}


/**
 * Disable the WooCommerce Pattern Toolkit Full Composability feature.
 */
function disable_pattern_toolkit( $features ) {
	$key = array_search( 'pattern-toolkit-full-composability', $features );

	if ( false !== $key ) {
		unset( $features[ $key ] );
	}

	return $features;
}
