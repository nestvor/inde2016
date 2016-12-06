<?php
/**
 * Inde 2016 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Inde_2016
 */

if ( ! function_exists( 'inde2016_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function inde2016_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Inde 2016, use a find and replace
	 * to change 'inde2016' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'inde2016', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'inde2016' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'inde2016_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'inde2016_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function inde2016_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'inde2016_content_width', 640 );
}
add_action( 'after_setup_theme', 'inde2016_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function inde2016_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'inde2016' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Front page calendar widget area', 'inde2016' ),
		'id'            => 'fp-calendar-widgets',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'inde2016_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function inde2016_scripts() {
	/* Responsive grid (http://www.responsivegridsystem.com/) */
	wp_enqueue_style( 'responsive-grid-system-col', get_template_directory_uri() . '/css/col.css' );
	wp_enqueue_style( 'responsive-grid-system-2cols', get_template_directory_uri() . '/css/2cols.css' );
	wp_enqueue_style( 'responsive-grid-system-3cols', get_template_directory_uri() . '/css/3cols.css' );
	wp_enqueue_style( 'responsive-grid-system-4cols', get_template_directory_uri() . '/css/4cols.css' );
	wp_enqueue_style( 'responsive-grid-system-5cols', get_template_directory_uri() . '/css/5cols.css' );
	wp_enqueue_style( 'responsive-grid-system-6cols', get_template_directory_uri() . '/css/6cols.css' );
	wp_enqueue_style( 'responsive-grid-system-7cols', get_template_directory_uri() . '/css/7cols.css' );
	wp_enqueue_style( 'responsive-grid-system-8cols', get_template_directory_uri() . '/css/8cols.css' );
	wp_enqueue_style( 'responsive-grid-system-9cols', get_template_directory_uri() . '/css/9cols.css' );
	wp_enqueue_style( 'responsive-grid-system-10cols', get_template_directory_uri() . '/css/10cols.css' );
	wp_enqueue_style( 'responsive-grid-system-11cols', get_template_directory_uri() . '/css/11cols.css' );
	wp_enqueue_style( 'responsive-grid-system-12cols', get_template_directory_uri() . '/css/12cols.css' );
	
	/* font-awesome*/
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' );
	
	/* core template style */
	wp_enqueue_style( 'inde2016-style', get_stylesheet_uri() );
	
	//wp_enqueue_script( 'inde2016-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'inde2016-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	/* add the card actions ajax script */
	wp_enqueue_script( 'inde2016-card-actions', get_template_directory_uri() . '/js/card-actions.js', array('jquery'), '20160518', true );
	$php_array = array( 'admin_ajax' => admin_url( 'admin-ajax.php' ) );
	wp_localize_script( 'inde2016-card-actions', 'php_array', $php_array );
	
}
add_action( 'wp_enqueue_scripts', 'inde2016_scripts' );

function get_inde_post() {
	$post_id = $_REQUEST['post_id'];
	$args = array( 'p' =>  $post_id, 'post_type' => 'any');
	$the_query = new WP_Query( $args );
	
	if ( $the_query->have_posts() ) {
		$the_query->the_post();
		//echo the_content();	
		echo get_template_part( 'template-parts/card-expanded');
	}
	else {
		// no posts found
		echo 'Post not found';
	}
	
	/* Restore original Post Data */
	wp_reset_postdata();

	die();
}
add_action( 'wp_ajax_get_inde_post', 'get_inde_post' );
add_action( 'wp_ajax_nopriv_get_inde_post', 'get_inde_post' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
