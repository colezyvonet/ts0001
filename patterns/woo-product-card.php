<?php
/**
 * Title: Product Card
 * Slug: ts0001/woo-product-card
 * Description: Simple product card for use in product loops.
 * Categories: ts0001/woo
 * Keywords: product, card, woocommerce
 * Block Types: core/query/woocommerce/product-query
 * Inserter: false
 * Viewport Width: 600
 *
 * @package ts0001
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:woocommerce/product-image {"showSaleBadge":true,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->
	<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
	<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"small"} /-->
	<!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true} /-->
</div>
<!-- /wp:group -->
