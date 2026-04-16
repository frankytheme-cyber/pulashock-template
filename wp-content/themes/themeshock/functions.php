<?php
/**
 * Pulashock Theme Functions
 *
 * @package pulashock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ─── Theme Support ────────────────────────────────────────────────────────────

add_action( 'after_setup_theme', 'pulashock_setup' );

function pulashock_setup() {
	add_theme_support( 'custom-logo', [
		'height'               => 154,
		'width'                => 563,
		'flex-height'          => true,
		'flex-width'           => true,
		'unlink-homepage-logo' => true,
	] );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
	add_theme_support( 'editor-styles' );
}

// ─── Enqueue Assets ───────────────────────────────────────────────────────────

add_action( 'wp_enqueue_scripts', 'pulashock_enqueue_assets' );

function pulashock_enqueue_assets() {
	// Main stylesheet
	wp_enqueue_style(
		'pulashock-style',
		get_template_directory_uri() . '/assets/css/pulashock.css',
		[ 'wp-block-library' ],
		wp_get_theme()->get( 'Version' )
	);

	// Main script
	wp_enqueue_script(
		'pulashock-script',
		get_template_directory_uri() . '/assets/js/pulashock.js',
		[],
		wp_get_theme()->get( 'Version' ),
		[ 'strategy' => 'defer', 'in_footer' => true ]
	);
}

// ─── SEO: Meta Tags, Open Graph, Twitter Card, Geo ───────────────────────────

add_action( 'wp_head', 'pulashock_seo_head', 1 );

function pulashock_seo_head() {
	global $post;

	$site_name    = get_bloginfo( 'name' );
	$home_url     = home_url( '/' );
	$default_desc = 'Pulashock è il magazine italiano di recensioni hi-fi e musica. Amplificatori, giradischi, cuffie audiophile e recensioni di album ad alta fedeltà. Per audiofili e appassionati in tutta Italia.';
	$default_img  = get_template_directory_uri() . '/assets/images/logo-pulashock.png';

	// ── Canonical, title hint e description ──────────────────────────────────
	if ( is_singular() && isset( $post ) ) {
		$canonical   = get_permalink( $post->ID );
		$description = has_excerpt( $post->ID )
			? wp_strip_all_tags( get_the_excerpt( $post->ID ) )
			: wp_trim_words( wp_strip_all_tags( $post->post_content ), 28, '…' );
		$description = esc_attr( wp_strip_all_tags( $description ) );
		$og_title    = esc_attr( get_the_title( $post->ID ) . ' | ' . $site_name );
		$og_image    = has_post_thumbnail( $post->ID )
			? esc_url( get_the_post_thumbnail_url( $post->ID, 'large' ) )
			: $default_img;
		$og_type     = 'article';
	} elseif ( is_home() || is_front_page() ) {
		$canonical   = $home_url;
		$description = $default_desc;
		$og_title    = esc_attr( $site_name . ' — Recensioni Hi-Fi e Musica dall\'Italia' );
		$og_image    = $default_img;
		$og_type     = 'website';
	} else {
		$canonical   = get_pagenum_link();
		$description = $default_desc;
		$og_title    = esc_attr( $site_name );
		$og_image    = $default_img;
		$og_type     = 'website';
	}

	$og_url = esc_url( $canonical );
	?>
<meta name="description" content="<?php echo esc_attr( $description ); ?>">
<link rel="canonical" href="<?php echo esc_url( $canonical ); ?>">

<!-- Open Graph -->
<meta property="og:type" content="<?php echo esc_attr( $og_type ); ?>">
<meta property="og:title" content="<?php echo $og_title; ?>">
<meta property="og:description" content="<?php echo esc_attr( $description ); ?>">
<meta property="og:url" content="<?php echo $og_url; ?>">
<meta property="og:image" content="<?php echo esc_url( $og_image ); ?>">
<meta property="og:site_name" content="<?php echo esc_attr( $site_name ); ?>">
<meta property="og:locale" content="it_IT">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $og_title; ?>">
<meta name="twitter:description" content="<?php echo esc_attr( $description ); ?>">
<meta name="twitter:image" content="<?php echo esc_url( $og_image ); ?>">

<!-- Geo / Geotargeting Italia -->
<meta name="geo.region" content="IT">
<meta name="geo.placename" content="Italia">
<meta name="language" content="Italian">
<link rel="alternate" hreflang="it" href="<?php echo esc_url( $canonical ); ?>">
<link rel="alternate" hreflang="x-default" href="<?php echo esc_url( $canonical ); ?>">
	<?php
}

// ─── SEO: Structured Data (JSON-LD) ──────────────────────────────────────────

add_action( 'wp_head', 'pulashock_structured_data', 2 );

function pulashock_structured_data() {
	global $post;

	$site_name = get_bloginfo( 'name' );
	$home_url  = home_url( '/' );
	$logo_url  = get_template_directory_uri() . '/assets/images/logo-pulashock.png';

	if ( is_home() || is_front_page() ) {
		$schema = [
			'@context' => 'https://schema.org',
			'@graph'   => [
				[
					'@type'           => 'WebSite',
					'@id'             => $home_url . '#website',
					'url'             => $home_url,
					'name'            => $site_name,
					'description'     => 'Magazine italiano di recensioni hi-fi, amplificatori, cuffie audiophile e musica ad alta fedeltà',
					'inLanguage'      => 'it-IT',
					'potentialAction' => [
						'@type'       => 'SearchAction',
						'target'      => [
							'@type'       => 'EntryPoint',
							'urlTemplate' => $home_url . '?s={search_term_string}',
						],
						'query-input' => 'required name=search_term_string',
					],
				],
				[
					'@type'       => 'Organization',
					'@id'         => $home_url . '#organization',
					'name'        => $site_name,
					'url'         => $home_url,
					'logo'        => [
						'@type' => 'ImageObject',
						'url'   => $logo_url,
					],
					'sameAs'      => [
						'https://pulashock.it',
					],
					'areaServed'  => [
						'@type' => 'Country',
						'name'  => 'Italy',
					],
					'knowsAbout'  => [ 'Hi-Fi', 'Amplificatori', 'Giradischi', 'Cuffie audiophile', 'DAC', 'Recensioni album', 'Alta fedeltà', 'Vinile', 'Streaming musicale' ],
				],
			],
		];
	} elseif ( is_singular( [ 'post', 'recensioni' ] ) && isset( $post ) ) {
		$author_name = get_the_author_meta( 'display_name', $post->post_author );
		$pub_date    = get_the_date( 'c', $post );
		$mod_date    = get_the_modified_date( 'c', $post );
		$excerpt     = has_excerpt( $post->ID )
			? wp_strip_all_tags( get_the_excerpt( $post->ID ) )
			: wp_trim_words( wp_strip_all_tags( $post->post_content ), 28, '…' );
		$img         = has_post_thumbnail( $post->ID )
			? get_the_post_thumbnail_url( $post->ID, 'large' )
			: null;

		$schema_type = ( get_post_type( $post->ID ) === 'recensioni' ) ? 'Review' : 'Article';

		$schema = [
			'@context'         => 'https://schema.org',
			'@type'            => $schema_type,
			'headline'         => get_the_title( $post->ID ),
			'description'      => $excerpt,
			'url'              => get_permalink( $post->ID ),
			'datePublished'    => $pub_date,
			'dateModified'     => $mod_date,
			'inLanguage'       => 'it-IT',
			'author'           => [
				'@type' => 'Person',
				'name'  => $author_name,
			],
			'publisher'        => [
				'@type' => 'Organization',
				'name'  => $site_name,
				'logo'  => [
					'@type' => 'ImageObject',
					'url'   => $logo_url,
				],
			],
		];

		if ( $img ) {
			$schema['image'] = $img;
		}

		// BreadcrumbList
		$breadcrumb = [
			'@context'        => 'https://schema.org',
			'@type'           => 'BreadcrumbList',
			'itemListElement' => [
				[
					'@type'    => 'ListItem',
					'position' => 1,
					'name'     => 'Home',
					'item'     => $home_url,
				],
				[
					'@type'    => 'ListItem',
					'position' => 2,
					'name'     => get_the_title( $post->ID ),
					'item'     => get_permalink( $post->ID ),
				],
			],
		];

		echo '<script type="application/ld+json">' . wp_json_encode( $breadcrumb, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
	} else {
		return;
	}

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
}

// ─── Custom Post Type: Recensioni ─────────────────────────────────────────────

add_action( 'init', 'pulashock_register_recensioni' );

function pulashock_register_recensioni() {
	$labels = [
		'name'                  => _x( 'Recensioni', 'Post Type General Name', 'pulashock' ),
		'singular_name'         => _x( 'Recensione', 'Post Type Singular Name', 'pulashock' ),
		'menu_name'             => __( 'Recensioni', 'pulashock' ),
		'name_admin_bar'        => __( 'Recensione', 'pulashock' ),
		'archives'              => __( 'Archivio Recensioni', 'pulashock' ),
		'attributes'            => __( 'Attributi Recensione', 'pulashock' ),
		'parent_item_colon'     => __( 'Recensione Genitore:', 'pulashock' ),
		'all_items'             => __( 'Tutte le Recensioni', 'pulashock' ),
		'add_new_item'          => __( 'Aggiungi Nuova Recensione', 'pulashock' ),
		'add_new'               => __( 'Aggiungi Nuova', 'pulashock' ),
		'new_item'              => __( 'Nuova Recensione', 'pulashock' ),
		'edit_item'             => __( 'Modifica Recensione', 'pulashock' ),
		'update_item'           => __( 'Aggiorna Recensione', 'pulashock' ),
		'view_item'             => __( 'Visualizza Recensione', 'pulashock' ),
		'view_items'            => __( 'Visualizza Recensioni', 'pulashock' ),
		'search_items'          => __( 'Cerca Recensione', 'pulashock' ),
		'not_found'             => __( 'Non trovata.', 'pulashock' ),
		'not_found_in_trash'    => __( 'Non trovata nel cestino.', 'pulashock' ),
		'featured_image'        => __( 'Immagine in Evidenza', 'pulashock' ),
		'set_featured_image'    => __( 'Imposta immagine in evidenza', 'pulashock' ),
		'remove_featured_image' => __( 'Rimuovi immagine in evidenza', 'pulashock' ),
		'use_featured_image'    => __( 'Usa come immagine in evidenza', 'pulashock' ),
		'insert_into_item'      => __( 'Inserisci nella recensione', 'pulashock' ),
		'uploaded_to_this_item' => __( 'Caricato in questa recensione', 'pulashock' ),
		'items_list'            => __( 'Lista recensioni', 'pulashock' ),
		'items_list_navigation' => __( 'Navigazione lista recensioni', 'pulashock' ),
		'filter_items_list'     => __( 'Filtra lista recensioni', 'pulashock' ),
	];

	$args = [
		'label'               => __( 'Recensione', 'pulashock' ),
		'description'         => __( 'Recensioni di prodotti, album, film e altro.', 'pulashock' ),
		'labels'              => $labels,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'comments' ],
		'taxonomies'          => [ 'category', 'post_tag' ],
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-star-filled',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
		'rewrite'             => [ 'slug' => 'recensioni' ],
	];

	register_post_type( 'recensioni', $args );
}

// ─── Pattern Categories ───────────────────────────────────────────────────────

add_action( 'init', 'pulashock_register_pattern_categories' );

function pulashock_register_pattern_categories() {
	register_block_pattern_category(
		'pulashock_homepage',
		[ 'label' => __( 'Pulashock – Homepage', 'pulashock' ) ]
	);
	register_block_pattern_category(
		'pulashock_sections',
		[ 'label' => __( 'Pulashock – Sezioni', 'pulashock' ) ]
	);
}

// ─── Flush Rewrite Rules on Theme Activation ─────────────────────────────────

add_action( 'after_switch_theme', 'pulashock_flush_rewrite_rules' );

function pulashock_flush_rewrite_rules() {
	pulashock_register_recensioni();
	flush_rewrite_rules();
}
