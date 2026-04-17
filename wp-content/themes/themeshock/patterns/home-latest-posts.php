<?php
/**
 * Title: Ultimi Articoli — Magazine Grid
 * Slug: pulashock/home-latest-posts
 * Categories: pulashock_homepage
 * Description: Griglia editoriale magazine: featured hero + side posts + bottom row.
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","className":"pulashock-section pulashock-posts-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull pulashock-section pulashock-posts-section" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"className":"pulashock-section-header","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group pulashock-section-header">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":2,"className":"pulashock-section-title"} -->
			<h2 class="wp-block-heading pulashock-section-title">Articoli</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"pulashock-section-count","style":{"typography":{"fontSize":"0.7rem","fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"text-muted"} -->
			<p class="pulashock-section-count has-text-muted-color has-text-color" style="font-size:0.7rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase">Ultimi aggiornamenti</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"pulashock-btn-outline","style":{"border":{"width":"1px"},"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
			<div class="wp-block-button pulashock-btn-outline"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="/blog" style="border-width:1px;font-size:0.75rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase">Tutti gli articoli →</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":10,"query":{"perPage":6,"postType":"post","orderBy":"date","order":"desc","offset":4,"sticky":"","inherit":false},"align":"wide"} -->
	<div class="wp-block-query alignwide">

		<!-- wp:post-template {"className":"pulashock-magazine-grid","layout":{"type":"grid","columnCount":3}} -->

			<!-- wp:group {"className":"pulashock-post-card","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group pulashock-post-card">

				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

				<!-- wp:group {"className":"pulashock-post-card-body","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group pulashock-post-card-body" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">

					<!-- wp:post-terms {"term":"category","className":"pulashock-post-category","style":{"typography":{"fontSize":"0.65rem","fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"accent-primary"} /-->

					<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"lineHeight":"1.2"}},"textColor":"text"} /-->

					<!-- wp:post-excerpt {"moreText":"","excerptLength":20,"style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.55"}},"textColor":"text-muted"} /-->

					<!-- wp:group {"className":"pulashock-card-footer","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
					<div class="wp-block-group pulashock-card-footer">
						<!-- wp:post-date {"format":"d M Y","style":{"typography":{"fontSize":"0.72rem"}},"textColor":"text-muted"} /-->
						<!-- wp:post-author {"showAvatar":false,"showBio":false,"bylinePrefix":"","style":{"typography":{"fontSize":"0.72rem"}},"textColor":"text-muted"} /-->
					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"textColor":"text-muted"} -->
			<p class="has-text-muted-color has-text-color">Nessun articolo pubblicato.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
