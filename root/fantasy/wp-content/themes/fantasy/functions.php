<?php
/**
 * Fantasy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fantasy
 */

if ( ! function_exists( 'fantasy_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fantasy_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Fantasy, use a find and replace
		 * to change 'fantasy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fantasy', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'fantasy' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'fantasy_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'fantasy_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fantasy_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'fantasy_content_width', 640 );
}
add_action( 'after_setup_theme', 'fantasy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fantasy_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fantasy' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fantasy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fantasy_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fantasy_scripts() {
	wp_enqueue_style( 'fantasy-style', get_stylesheet_uri() );
	wp_enqueue_script( 'fantasy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'fantasy-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'light-gallery', get_template_directory_uri() . '/css/lightGallery.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.css');
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css');
	wp_enqueue_style( 'font-family-questrial', 'http://fonts.googleapis.com/css?family=Questrial');
	wp_enqueue_style( 'font-family-jura', 'http://fonts.googleapis.com/css?family=Jura:300,400,500,600');
	wp_enqueue_style( 'font-family-opensans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic');

	wp_enqueue_script( 'responsive-slides', get_template_directory_uri() . '/js/responsiveslides.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'light-gallery', get_template_directory_uri() . '/js/lightGallery.js', array('jquery'), '', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '', true );
	wp_enqueue_script( 'move-top', get_template_directory_uri() . '/js/move-top.js', array('jquery'), '', true );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/easing.js', array('jquery'), '', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true );
	wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDrg9foF2zDxnctiBJfdtfeTnf3fO-b67w', array(), '', true );
	wp_enqueue_script( 'google-map-init', get_template_directory_uri() . '/js/google-map.js', array('google-map', 'jquery'), '0.1', true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fantasy_scripts' );

function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyDrg9foF2zDxnctiBJfdtfeTnf3fO-b67w';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
