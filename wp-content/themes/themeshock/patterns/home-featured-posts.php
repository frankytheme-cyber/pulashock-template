<?php
/**
 * Title: Articoli in Evidenza — Layout Editoriale
 * Slug: pulashock/home-featured-posts
 * Categories: pulashock_homepage
 * Description: Layout editoriale con articolo hero a sinistra e lista laterale.
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","className":"pulashock-section pulashock-featured-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull pulashock-section pulashock-featured-section" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"className":"pulashock-section-header","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group pulashock-section-header">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":2,"className":"pulashock-section-title"} -->
			<h2 class="wp-block-heading pulashock-section-title">In Evidenza</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"pulashock-section-count","style":{"typography":{"fontSize":"0.7rem","fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"text-muted"} -->
			<p class="pulashock-section-count has-text-muted-color has-text-color" style="font-size:0.7rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase">Da non perdere</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"pulashock-btn-outline","style":{"border":{"width":"1px"},"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
			<div class="wp-block-button pulashock-btn-outline"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="/blog" style="border-width:1px;font-size:0.75rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase">Leggi tutto →</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"className":"pulashock-featured-layout","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns pulashock-featured-layout">

		<!-- wp:column {"width":"58%","className":"pulashock-featured-hero-col"} -->
		<div class="wp-block-column pulashock-featured-hero-col" style="flex-basis:58%">

			<!-- wp:query {"queryId":20,"query":{"perPage":1,"postType":"post","orderBy":"date","order":"desc","offset":0,"sticky":"","inherit":false},"align":"wide"} -->
			<div class="wp-block-query alignwide">

				<!-- wp:post-template {"className":"pulashock-featured-hero-list"} -->

					<!-- wp:group {"className":"pulashock-featured-hero-card","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group pulashock-featured-hero-card">

						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"pulashock-featured-hero-image"} /-->

						<!-- wp:group {"className":"pulashock-featured-hero-body","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group pulashock-featured-hero-body" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

							<!-- wp:post-terms {"term":"category","className":"pulashock-post-category","style":{"typography":{"fontSize":"0.65rem","fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"accent-primary"} /-->

							<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontSize":"clamp(1.4rem, 2.5vw, 1.8rem)","fontWeight":"700","lineHeight":"1.15"}},"textColor":"text","fontFamily":"barlow-condensed"} /-->

							<!-- wp:post-excerpt {"moreText":"","excerptLength":35,"style":{"typography":{"fontSize":"0.9rem","lineHeight":"1.65"}},"textColor":"text-muted"} /-->

							<!-- wp:group {"className":"pulashock-card-footer","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
							<div class="wp-block-group pulashock-card-footer">
								<!-- wp:post-author {"showAvatar":false,"showBio":false,"bylinePrefix":"","style":{"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"textColor":"text-muted"} /-->
								<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"}},"textColor":"text-muted"} -->
								<p class="has-text-muted-color has-text-color" style="font-size:0.75rem">·</p>
								<!-- /wp:paragraph -->
								<!-- wp:post-date {"format":"d M Y","style":{"typography":{"fontSize":"0.75rem"}},"textColor":"text-muted"} /-->
							</div>
							<!-- /wp:group -->

						</div>
						<!-- /wp:group -->

					</div>
					<!-- /wp:group -->

				<!-- /wp:post-template -->

			</div>
			<!-- /wp:query -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"42%","className":"pulashock-featured-side-col"} -->
		<div class="wp-block-column pulashock-featured-side-col" style="flex-basis:42%">

			<!-- wp:query {"queryId":21,"query":{"perPage":3,"postType":"post","orderBy":"date","order":"desc","offset":1,"sticky":"","inherit":false},"align":"wide"} -->
			<div class="wp-block-query alignwide">

				<!-- wp:post-template {"className":"pulashock-featured-side-list"} -->

					<!-- wp:group {"className":"pulashock-featured-side-item","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
					<div class="wp-block-group pulashock-featured-side-item">

						<!-- wp:post-featured-image {"isLink":true,"width":"120px","aspectRatio":"1","className":"pulashock-featured-side-thumb"} /-->

						<!-- wp:group {"className":"pulashock-featured-side-body","style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"left":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group pulashock-featured-side-body" style="padding-left:var(--wp--preset--spacing--30)">
							<!-- wp:post-terms {"term":"category","className":"pulashock-post-category","style":{"typography":{"fontSize":"0.6rem","fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"accent-primary"} /-->
							<!-- wp:post-title {"isLink":true,"level":4,"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700","lineHeight":"1.25"}},"fontFamily":"barlow-condensed"} /-->
							<!-- wp:post-excerpt {"moreText":"","excerptLength":15,"style":{"typography":{"fontSize":"0.8rem","lineHeight":"1.5"}},"textColor":"text-muted"} /-->
							<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
							<div class="wp-block-group">
								<!-- wp:post-author {"showAvatar":false,"showBio":false,"bylinePrefix":"","style":{"typography":{"fontSize":"0.7rem"}},"textColor":"text-muted"} /-->
								<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem"}},"textColor":"text-muted"} -->
								<p class="has-text-muted-color has-text-color" style="font-size:0.7rem">·</p>
								<!-- /wp:paragraph -->
								<!-- wp:post-date {"format":"d M Y","style":{"typography":{"fontSize":"0.7rem"}},"textColor":"text-muted"} /-->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->

					</div>
					<!-- /wp:group -->

				<!-- /wp:post-template -->

			</div>
			<!-- /wp:query -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
