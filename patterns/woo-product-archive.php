<?php
/**
 * Title: Product Archive
 * Slug: ts0001/woo-product-archive
 * Description: Product archive with sorting, product grid, and pagination.
 * Categories: ts0001/woo
 * Keywords: product, archive, woocommerce, grid
 * Template Types: archive-product
 * Inserter: false
 * Viewport Width: 1200
 *
 * @package ts0001
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","theme":"ts0001"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group">
	<!-- wp:woocommerce/breadcrumbs {"fontSize":"small"} /-->
	<!-- wp:query-title {"type":"archive","showPrefix":false,"fontSize":"large"} /-->
	<!-- wp:term-description {"fontSize":"small"} /-->
	<!-- wp:woocommerce/store-notices /-->

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:woocommerce/product-results-count {"fontSize":"small"} /-->
		<!-- wp:woocommerce/catalog-sorting /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/product-collection {"query":{"perPage":12,"postType":"product","order":"asc","orderBy":"title","inherit":true},"displayLayout":{"type":"flex","columns":3,"shrinkColumns":true}} -->
	<div class="wp-block-woocommerce-product-collection">
		<!-- wp:woocommerce/product-template -->
			<!-- wp:pattern {"slug":"ts0001/woo-product-card"} /-->
		<!-- /wp:woocommerce/product-template -->
		<!-- wp:woocommerce/product-collection-no-results -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">No products found.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:woocommerce/product-collection-no-results -->
		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:woocommerce/product-collection -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","theme":"ts0001"} /-->
