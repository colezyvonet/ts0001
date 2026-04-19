<?php
/**
 * Title: Single Product
 * Slug: ts0001/woo-single-product
 * Description: Single product page layout.
 * Categories: ts0001/woo
 * Keywords: product, single, woocommerce
 * Template Types: single-product
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

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:woocommerce/product-gallery {"hoverZoom":false} -->
			<div class="wp-block-woocommerce-product-gallery wc-block-product-gallery">
				<!-- wp:woocommerce/product-gallery-large-image -->
				<div class="wp-block-woocommerce-product-gallery-large-image wc-block-product-gallery-large-image__inner-blocks">
					<!-- wp:woocommerce/product-image {"showProductLink":false,"showSaleBadge":true} /-->
					<!-- wp:woocommerce/product-gallery-large-image-next-previous -->
					<div class="wp-block-woocommerce-product-gallery-large-image-next-previous"></div>
					<!-- /wp:woocommerce/product-gallery-large-image-next-previous -->
				</div>
				<!-- /wp:woocommerce/product-gallery-large-image -->
				<!-- wp:woocommerce/product-gallery-thumbnails /-->
			</div>
			<!-- /wp:woocommerce/product-gallery -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:post-title {"level":1,"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->
			<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true} /-->
			<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true,"fontSize":"small"} /-->
			<!-- wp:post-excerpt {"excerptLength":100,"fontSize":"small","__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->
			<!-- wp:woocommerce/add-to-cart-with-options /-->
			<!-- wp:woocommerce/product-stock-indicator {"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator /-->

	<!-- wp:woocommerce/product-details /-->

	<!-- wp:woocommerce/product-meta -->
	<div class="wp-block-woocommerce-product-meta">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:woocommerce/product-sku /-->
			<!-- wp:post-terms {"term":"product_cat","prefix":"Category: "} /-->
			<!-- wp:post-terms {"term":"product_tag","prefix":"Tags: "} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:woocommerce/product-meta -->

	<!-- wp:woocommerce/product-collection {"query":{"perPage":4,"postType":"product","order":"asc","orderBy":"title","inherit":false,"relatedBy":{"categories":true,"tags":true}},"collection":"woocommerce/product-collection/related","displayLayout":{"type":"flex","columns":4}} -->
	<div class="wp-block-woocommerce-product-collection">
		<!-- wp:heading {"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size">Related products</h2>
		<!-- /wp:heading -->
		<!-- wp:woocommerce/product-template -->
			<!-- wp:pattern {"slug":"ts0001/woo-product-card"} /-->
		<!-- /wp:woocommerce/product-template -->
	</div>
	<!-- /wp:woocommerce/product-collection -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","theme":"ts0001"} /-->
