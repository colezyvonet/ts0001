<?php
/**
 * Title: WooCommerce Cart
 * Slug: ts0001/woo-cart
 * Description: Cart page layout.
 * Categories: ts0001/woo
 * Keywords: cart, woocommerce
 * Template Types: page-cart
 * Inserter: false
 * Viewport Width: 1200
 *
 * @package ts0001
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","theme":"ts0001"} /-->

<!-- wp:woocommerce/page-content-wrapper {"page":"cart"} -->
	<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
	<main class="wp-block-group">
		<!-- wp:woocommerce/store-notices /-->
		<!-- wp:woocommerce/breadcrumbs {"fontSize":"small"} /-->
		<!-- wp:post-title /-->
		<!-- wp:post-content /-->
	</main>
	<!-- /wp:group -->
<!-- /wp:woocommerce/page-content-wrapper -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","theme":"ts0001"} /-->
