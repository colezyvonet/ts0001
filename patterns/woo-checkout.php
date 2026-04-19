<?php
/**
 * Title: WooCommerce Checkout
 * Slug: ts0001/woo-checkout
 * Description: Checkout page using classic shortcode renderer.
 * Categories: ts0001/woo
 * Keywords: checkout, woocommerce
 * Template Types: page-checkout
 * Inserter: false
 * Viewport Width: 1200
 *
 * @package ts0001
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","theme":"ts0001"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group">
	<!-- wp:woocommerce/store-notices /-->
	<!-- wp:woocommerce/breadcrumbs {"fontSize":"small"} /-->
	<!-- wp:post-title {"level":1} /-->
	<!-- wp:woocommerce/classic-shortcode {"shortcode":"checkout"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","theme":"ts0001"} /-->
