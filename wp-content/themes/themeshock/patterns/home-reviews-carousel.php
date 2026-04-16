<?php
/**
 * Title: Carosello Recensioni
 * Slug: pulashock/home-reviews-carousel
 * Categories: pulashock_homepage
 * Description: Carosello recensioni (custom post type).
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","className":"pulashock-section pulashock-reviews-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"0","right":"0"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull pulashock-section pulashock-reviews-section has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--70);padding-left:0">

	<!-- wp:group {"className":"pulashock-section-header","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group pulashock-section-header" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:heading {"className":"pulashock-section-title"} -->
		<h2 class="wp-block-heading pulashock-section-title">Recensioni</h2>
		<!-- /wp:heading -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"pulashock-btn-outline","style":{"border":{"width":"1px"},"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
			<div class="wp-block-button pulashock-btn-outline"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="/recensioni" style="border-width:1px;font-size:0.75rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase">Tutte le recensioni →</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"pulashock-carousel-wrapper","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group pulashock-carousel-wrapper" style="padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)">

		<!-- wp:query {"queryId":20,"query":{"perPage":8,"postType":"recensioni","orderBy":"date","order":"desc","inherit":false}} -->
		<div class="wp-block-query">

			<!-- wp:post-template {"className":"pulashock-carousel-track","layout":{"type":"grid","columnCount":4}} -->

				<!-- wp:group {"className":"pulashock-review-card","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group pulashock-review-card">

					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

					<!-- wp:group {"className":"pulashock-review-card-body","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"card","layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group pulashock-review-card-body has-card-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">

						<!-- wp:post-terms {"term":"category","className":"pulashock-post-category","style":{"typography":{"fontSize":"0.6rem","fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"accent-primary"} /-->

						<!-- wp:post-title {"isLink":true,"level":4,"style":{"typography":{"fontSize":"clamp(0.9rem,1.5vw,1.05rem)","lineHeight":"1.25"}},"textColor":"text"} /-->

						<!-- wp:post-excerpt {"moreText":"","excerptLength":12,"style":{"typography":{"fontSize":"0.8rem","lineHeight":"1.5"}},"textColor":"text-muted"} /-->

						<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
						<div class="wp-block-group">
							<!-- wp:post-date {"format":"d M Y","style":{"typography":{"fontSize":"0.7rem"}},"textColor":"text-muted"} /-->
						</div>
						<!-- /wp:group -->

					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:group -->

			<!-- /wp:post-template -->

			<!-- wp:query-no-results -->
				<!-- wp:paragraph {"textColor":"text-muted"} -->
				<p class="has-text-muted-color has-text-color">Nessuna recensione pubblicata.</p>
				<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->

		</div>
		<!-- /wp:query -->

		<!-- wp:html -->
		<div class="pulashock-carousel-controls" aria-label="Controlli carosello">
			<button class="pulashock-carousel-prev" aria-label="Precedente" type="button"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 19L8 12L15 5" stroke="currentColor" stroke-width="2.5" stroke-linecap="square"/></svg></button>
			<button class="pulashock-carousel-next" aria-label="Successivo" type="button"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2.5" stroke-linecap="square"/></svg></button>
		</div>
		<!-- /wp:html -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
