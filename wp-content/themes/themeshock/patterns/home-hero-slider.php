<?php
/**
 * Title: Hero Slider
 * Slug: pulashock/home-hero-slider
 * Categories: pulashock_homepage
 * Description: Hero slider editoriale con 3 slide.
 * Inserter: true
 */

$_pls_slide1_id  = attachment_url_to_postid( content_url( 'uploads/2026/04/slide1.jpg' ) ) ?: 32;
$_pls_slide1_url = wp_get_attachment_url( $_pls_slide1_id ) ?: content_url( 'uploads/2026/04/slide1.jpg' );
$_pls_slide2_id  = attachment_url_to_postid( content_url( 'uploads/2026/04/slide2.jpg' ) ) ?: 33;
$_pls_slide2_url = wp_get_attachment_url( $_pls_slide2_id ) ?: content_url( 'uploads/2026/04/slide2.jpg' );
$_pls_slide3_id  = attachment_url_to_postid( content_url( 'uploads/2026/04/slide3.jpg' ) ) ?: 34;
$_pls_slide3_url = wp_get_attachment_url( $_pls_slide3_id ) ?: content_url( 'uploads/2026/04/slide3.jpg' );
?>

<!-- wp:group {"align":"full","className":"pulashock-hero-wrap","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull pulashock-hero-wrap" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

	<!-- wp:group {"align":"full","className":"pulashock-slider","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull pulashock-slider" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

		<!-- wp:group {"align":"full","className":"pulashock-slides-track","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull pulashock-slides-track" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

			<!-- wp:cover {"url":"<?php echo esc_url( $_pls_slide1_url ); ?>","id":<?php echo (int) $_pls_slide1_id; ?>,"dimRatio":70,"minHeight":78,"minHeightUnit":"vh","align":"full","className":"pulashock-slide"} -->
			<div class="wp-block-cover alignfull pulashock-slide has-custom-min-height" style="min-height:78vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-dim-70"></span><img class="wp-block-cover__image-background wp-image-<?php echo (int) $_pls_slide1_id; ?>" alt="" src="<?php echo esc_url( $_pls_slide1_url ); ?>" data-object-fit="cover"/>
			<div class="wp-block-cover__inner-container">

				<!-- wp:group {"className":"pulashock-slide-body","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"820px","justifyContent":"left"}} -->
				<div class="wp-block-group pulashock-slide-body">
					<!-- wp:paragraph {"className":"pulashock-slide-kicker","style":{"typography":{"fontSize":"0.7rem","fontWeight":"700","letterSpacing":"0.18em","textTransform":"uppercase"}},"textColor":"accent-primary"} -->
					<p class="pulashock-slide-kicker has-accent-primary-color has-text-color" style="font-size:0.7rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase">● Musica &nbsp;/&nbsp; 10 Aprile 2025</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":1,"className":"pulashock-slide-title","fontFamily":"bebas-neue","style":{"typography":{"fontSize":"clamp(2.75rem,6vw,5.5rem)","lineHeight":"0.93","letterSpacing":"0.01em"}},"textColor":"text-light"} -->
					<h1 class="wp-block-heading pulashock-slide-title has-text-light-color has-text-color has-bebas-neue-font-family" style="font-size:clamp(2.75rem,6vw,5.5rem);line-height:0.93;letter-spacing:0.01em">I Migliori Album del 2025: La Nostra Selezione</h1>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"pulashock-slide-desc","style":{"typography":{"fontSize":"clamp(0.9rem,1.2vw,1.05rem)","lineHeight":"1.6"}},"textColor":"text-light"} -->
					<p class="pulashock-slide-desc has-text-light-color has-text-color" style="font-size:clamp(0.9rem,1.2vw,1.05rem);line-height:1.6">Un viaggio tra i dischi che hanno segnato il 2025, tra nuovi artisti emergenti e ritorni inaspettati.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"pulashock-slide-cta","style":{"typography":{"fontSize":"0.8rem","fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"accent-primary"} -->
					<p class="pulashock-slide-cta has-accent-primary-color has-text-color" style="font-size:0.8rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><a href="/i-migliori-album-del-2025-la-nostra-selezione/" class="pulashock-editorial-link">Leggi l'articolo →</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div></div>
			<!-- /wp:cover -->

			<!-- wp:cover {"url":"<?php echo esc_url( $_pls_slide2_url ); ?>","id":<?php echo (int) $_pls_slide2_id; ?>,"dimRatio":70,"minHeight":78,"minHeightUnit":"vh","align":"full","className":"pulashock-slide"} -->
			<div class="wp-block-cover alignfull pulashock-slide has-custom-min-height" style="min-height:78vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-dim-70"></span><img class="wp-block-cover__image-background wp-image-<?php echo (int) $_pls_slide2_id; ?>" alt="" src="<?php echo esc_url( $_pls_slide2_url ); ?>" data-object-fit="cover"/>
			<div class="wp-block-cover__inner-container">

				<!-- wp:group {"className":"pulashock-slide-body","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"820px","justifyContent":"left"}} -->
				<div class="wp-block-group pulashock-slide-body">
					<!-- wp:paragraph {"className":"pulashock-slide-kicker","style":{"typography":{"fontSize":"0.7rem","fontWeight":"700","letterSpacing":"0.18em","textTransform":"uppercase"}},"textColor":"accent-primary"} -->
					<p class="pulashock-slide-kicker has-accent-primary-color has-text-color" style="font-size:0.7rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase">● Recensione &nbsp;/&nbsp; 9 Aprile 2025</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":2,"className":"pulashock-slide-title","fontFamily":"bebas-neue","style":{"typography":{"fontSize":"clamp(2.75rem,6vw,5.5rem)","lineHeight":"0.93","letterSpacing":"0.01em"}},"textColor":"text-light"} -->
					<h2 class="wp-block-heading pulashock-slide-title has-text-light-color has-text-color has-bebas-neue-font-family" style="font-size:clamp(2.75rem,6vw,5.5rem);line-height:0.93;letter-spacing:0.01em">Daft Punk – Random Access Memories (10th Anniversary)</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"pulashock-slide-desc","style":{"typography":{"fontSize":"clamp(0.9rem,1.2vw,1.05rem)","lineHeight":"1.6"}},"textColor":"text-light"} -->
					<p class="pulashock-slide-desc has-text-light-color has-text-color" style="font-size:clamp(0.9rem,1.2vw,1.05rem);line-height:1.6">Il capolavoro dei Daft Punk rivive in una versione rimasterizzata che celebra dieci anni di un album senza tempo.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"pulashock-slide-cta","style":{"typography":{"fontSize":"0.8rem","fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"accent-primary"} -->
					<p class="pulashock-slide-cta has-accent-primary-color has-text-color" style="font-size:0.8rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><a href="/recensioni/daft-punk-random-access-memories-10th-anniversary/" class="pulashock-editorial-link">Leggi la recensione →</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div></div>
			<!-- /wp:cover -->

			<!-- wp:cover {"url":"<?php echo esc_url( $_pls_slide3_url ); ?>","id":<?php echo (int) $_pls_slide3_id; ?>,"dimRatio":70,"minHeight":78,"minHeightUnit":"vh","align":"full","className":"pulashock-slide"} -->
			<div class="wp-block-cover alignfull pulashock-slide has-custom-min-height" style="min-height:78vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-dim-70"></span><img class="wp-block-cover__image-background wp-image-<?php echo (int) $_pls_slide3_id; ?>" alt="" src="<?php echo esc_url( $_pls_slide3_url ); ?>" data-object-fit="cover"/>
			<div class="wp-block-cover__inner-container">

				<!-- wp:group {"className":"pulashock-slide-body","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"820px","justifyContent":"left"}} -->
				<div class="wp-block-group pulashock-slide-body">
					<!-- wp:paragraph {"className":"pulashock-slide-kicker","style":{"typography":{"fontSize":"0.7rem","fontWeight":"700","letterSpacing":"0.18em","textTransform":"uppercase"}},"textColor":"accent-primary"} -->
					<p class="pulashock-slide-kicker has-accent-primary-color has-text-color" style="font-size:0.7rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase">● Speciale &nbsp;/&nbsp; 8 Aprile 2025</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":2,"className":"pulashock-slide-title","fontFamily":"bebas-neue","style":{"typography":{"fontSize":"clamp(2.75rem,6vw,5.5rem)","lineHeight":"0.93","letterSpacing":"0.01em"}},"textColor":"text-light"} -->
					<h2 class="wp-block-heading pulashock-slide-title has-text-light-color has-text-color has-bebas-neue-font-family" style="font-size:clamp(2.75rem,6vw,5.5rem);line-height:0.93;letter-spacing:0.01em">Festival Estivi 2025: La Guida Definitiva agli Eventi</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"pulashock-slide-desc","style":{"typography":{"fontSize":"clamp(0.9rem,1.2vw,1.05rem)","lineHeight":"1.6"}},"textColor":"text-light"} -->
					<p class="pulashock-slide-desc has-text-light-color has-text-color" style="font-size:clamp(0.9rem,1.2vw,1.05rem);line-height:1.6">Dalle rassegne cinematografiche ai concerti all'aperto, la guida definitiva ai festival dell'estate 2025.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"pulashock-slide-cta","style":{"typography":{"fontSize":"0.8rem","fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"accent-primary"} -->
					<p class="pulashock-slide-cta has-accent-primary-color has-text-color" style="font-size:0.8rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><a href="/festival-estivi-2025-la-guida-completa-agli-eventi/" class="pulashock-editorial-link">Leggi l'articolo →</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div></div>
			<!-- /wp:cover -->

		</div>
		<!-- /wp:group -->

		<!-- wp:html -->
		<div class="pulashock-slider-nav" aria-label="Controlli slider">
			<button class="pulashock-slider-prev" aria-label="Slide precedente" type="button"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 19L8 12L15 5" stroke="currentColor" stroke-width="2.5" stroke-linecap="square"/></svg></button>
			<div class="pulashock-slider-dots" role="tablist"></div>
			<button class="pulashock-slider-next" aria-label="Slide successiva" type="button"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2.5" stroke-linecap="square"/></svg></button>
		</div>
		<!-- /wp:html -->

		<!-- wp:html -->
		<div class="pulashock-slider-progress" aria-hidden="true"><div class="pulashock-slider-progress-bar"></div></div>
		<!-- /wp:html -->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"pulashock-ticker","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"backgroundColor":"accent-primary","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignfull pulashock-ticker has-accent-primary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

		<!-- wp:paragraph {"className":"pulashock-ticker-label","style":{"typography":{"fontSize":"0.65rem","fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase"}},"textColor":"background"} -->
		<p class="pulashock-ticker-label has-background-color has-text-color" style="font-size:0.65rem;font-weight:700;letter-spacing:0.15em;text-transform:uppercase">Ultime Notizie</p>
		<!-- /wp:paragraph -->

		<!-- wp:query {"queryId":5,"query":{"perPage":4,"postType":"post","orderBy":"date","order":"desc","inherit":false}} -->
		<div class="wp-block-query">
			<!-- wp:post-template {"className":"pulashock-ticker-items","layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<!-- wp:post-title {"isLink":true,"level":3,"className":"pulashock-ticker-title","style":{"typography":{"fontSize":"0.78rem","fontWeight":"600"}},"textColor":"background"} /-->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
