<?php
/**
 * Title: WooCommerce Order Confirmation
 * Slug: ts0001/woo-order-confirmation
 * Description: Order confirmation page using classic shortcode renderer.
 * Categories: ts0001/woo
 * Keywords: order, confirmation, woocommerce
 * Template Types: order-confirmation
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
	<!-- wp:post-title {"level":1} /-->
	<!-- wp:woocommerce/classic-shortcode {"shortcode":"order_review"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","theme":"ts0001"} /-->
