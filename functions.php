<?php
/**
 * Boot WP Framework functions and definitions
 *
 * @package Boot WP Framework
 */

/**
 * The content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'bootwp_framework_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bootwp_framework_setup() {

	/*
	 * This theme available for translation.
	 */
	load_theme_textdomain( 'bootwp-framework', get_template_directory() . '/languages' );

	// Default posts and comments RSS feed links added to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// Register Custom Navigation Walker
	require_once('inc/wp_bootstrap_navwalker.php');

	// This theme uses wp_nav_menu() in two location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'bootwp-framework' ),
		'footer-links' => __( 'Footer Links', 'bootwp-framework' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Support for Post Formats.
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// The WordPress core custom background feature set up .
	add_theme_support( 'custom-background', apply_filters( 'bootwp_framework_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // bootwp_framework_setup
add_action( 'after_setup_theme', 'bootwp_framework_setup' );

/**
 * Register widget area.
 */
function bootwp_framework_widgets_init() {

	function create_bootwp_framework_widget($name, $id, $description){
		register_sidebar( array(
			'name'          => $name,
			'id'            => $id,
			'description'   => $description,
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );	
	}
	//Copy and paste our custom function bellow to generate new widgets.
	create_bootwp_framework_widget('Default Sidebar', 'default', 'Default sidebar for blog and page');
	create_bootwp_framework_widget('Blog Sidebar', 'blog', 'Sidebar for blog only');
	create_bootwp_framework_widget('Front Page Blog Sidebar', 'front', 'Sidebar for front page blog only');
	create_bootwp_framework_widget('Left Sidebar', 'left', 'Sidebar for left sidebar page template only');
	create_bootwp_framework_widget('Footer Left Widget', 'footer_left', 'Content display able in footer left widget area only');
	create_bootwp_framework_widget('Footer Middle Widget', 'footer_mid', 'Content display able in footer middle widget area only');
	create_bootwp_framework_widget('Footer Right Widget', 'footer_right', 'Content display able in footer right widget area only');

}
add_action( 'widgets_init', 'bootwp_framework_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bootwp_framework_scripts() {

	wp_enqueue_style('bootwp-framework-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

	wp_enqueue_style('bootwp-framework-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	
	wp_enqueue_style( 'bootwp-framework-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootwp-framework-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'bootwp-framework-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script('bootwp-framework-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.4', true);
	
	wp_enqueue_script( 'bootwp-framework-customjs', get_template_directory_uri() . '/js/custom.min.js', array(), '20150422', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bootwp_framework_scripts' );


// Function 'bootwp_framework_add_editor_style' starts
function bootwp_framework_add_editor_style() {

	add_editor_style( get_stylesheet_uri() );

} 
// Function 'bootwp_framework_add_editor_style' ends

add_action( 'init', 'bootwp_framework_add_editor_style' );
// Hook into the 'init' action


/**
 * The Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Function 'bootwp_framework_excerpt_more' starts
function bootwp_framework_excerpt_more( $more ) {
	return ' <a class="read-more btn btn-info pull-right" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'bootwp_framework') . '</a>';
}
add_filter( 'excerpt_more', 'bootwp_framework_excerpt_more' );
// Hook into the 'excerpt_more' filter

// Function 'bootwp_framework_excerpt_length' starts
function bootwp_framework_excerpt_length( $length ) {
	return 55;
}
// Function 'bootwp_framework_excerpt_length' ends

add_filter( 'excerpt_length', 'bootwp_framework_excerpt_length', 999 );
// Hook into the 'excerpt_length' filter
