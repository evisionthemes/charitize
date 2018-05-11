<?php
/**
 * Charitize functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Charitize
 */

/**
 * Get the path for the file ( to support child theme )
 *
 * @since Charitize 1.0.0
 *
 * @param string $file_path, path from the theme
 * @return string full path of file inside theme
 *
 */
if( !function_exists('charitize_file_directory') ){
	function charitize_file_directory( $file_path ){

		if( file_exists( trailingslashit( get_stylesheet_directory() ) . $file_path) ){
			return trailingslashit( get_stylesheet_directory() ) . $file_path;
		}
		else{
			return trailingslashit( get_template_directory() ) . $file_path;
		}
	}
}

/**
 * require Charitize int.
 */
// require get_template_directory() . '/inc/init.php';
$Charitize_init_path = charitize_file_directory('inc/init.php');
require $Charitize_init_path;


if ( ! function_exists( 'charitize_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function charitize_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Charitize, use a find and replace
	 * to change 'charitize' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'charitize', get_template_directory() . '/languages' );

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

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_image_size/
	 */

	add_image_size( 'charitize-home-main-slider', 1366, 558, true );
	add_image_size( 'charitize-home-activities-image', 340, 231, true );
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'charitize' ),
		'footer' => esc_html__( 'Footer Menu', 'charitize' ),
		'social' => esc_html__( 'Social Menu', 'charitize' )
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
	add_theme_support( 'custom-background', apply_filters( 'charitize_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	/*implimenting new feature from 4.5*/
	add_theme_support( 'custom-logo', array(
	   'flex-width' => true,
	   'header-text' => array( 'site-title', 'site-description' ),
	) );

}
endif;
add_action( 'after_setup_theme', 'charitize_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function charitize_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'charitize_content_width', 640 );
}
add_action( 'after_setup_theme', 'charitize_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */

/*Google Fonts*/
function charitize_google_fonts() {
    global $charitize_customizer_all_values;
	$fonts_url = '';
	$fonts     = array();

	$charitize_font_family_h1_h6 = $charitize_customizer_all_values['charitize-font-family-title'];
	$charitize_font_family_site_identity = $charitize_customizer_all_values['charitize-font-family-site-identity'];
	$charitize_fonts = array();
	$charitize_fonts[]=$charitize_font_family_h1_h6;
	$charitize_fonts[]=$charitize_font_family_site_identity;

	$charitize_fonts_stylesheet = '//fonts.googleapis.com/css?family=';
	$i  = 0;
	for ($i=0; $i < count( $charitize_fonts ); $i++) { 
	    if ( 'off' !== sprintf( _x( 'on', '%s font: on or off', 'charitize' ), $charitize_fonts[$i] ) ) {
			$fonts[] = $charitize_fonts[$i];
		}
	}
	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
		), 'https://fonts.googleapis.com/css' );
	}
	return $fonts_url;
}

function charitize_scripts() {

	 	/*animation*/
	    wp_enqueue_style( 'wow-animate-css', get_template_directory_uri() . '/assets/frameworks/wow/css/animate.min.css', array(), '3.4.0' );/*added*/
		
	    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/frameworks/slick/slick.css', array(), '3.4.0' );/*added*/
		
	    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/frameworks/slick/slick-theme.css', array(), '3.4.0' );/*added*/
				
		wp_enqueue_style( 'charitize-style', get_stylesheet_uri() );

		wp_enqueue_style( 'charitize-google-fonts', charitize_google_fonts() );
	    
		// Script
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', array('jquery'), '2.8.3', true );
		
		wp_enqueue_script( 'navigation-js', get_template_directory_uri() . '/assets/js/menu2016.js', array(), '20120206', true );
		
		wp_enqueue_script('easing-js', get_template_directory_uri() . '/assets/frameworks/jquery.easing/jquery.easing.js', array('jquery'), '0.3.6', 1);

	    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/frameworks/wow/js/wow.min.js', array('jquery'), '1.1.2', 1);

	    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/frameworks/slick/slick.min.js', array('jquery'), '1.6.0', 1);

	    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/frameworks/waypoints/jquery.waypoints.min.js', array('jquery'), '4.0.0', 1);

		/*cycle2 slider*/
		wp_enqueue_script( 'cycle2-script', get_template_directory_uri() . '/assets/frameworks/cycle2/jquery.cycle2.min.js', array( 'jquery' ), '2.1.6', true );

		wp_enqueue_script( 'cycle2-script-swipe', get_template_directory_uri() . '/assets/frameworks/cycle2/jquery.cycle2.swipe.js', array( 'jquery' ), '20121120', true );
		
		/*custom slider*/
		wp_enqueue_script('evision-custom', get_template_directory_uri() . '/assets/js/evision-custom.js', array('jquery'), '1.0.1', 1);

		wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'charitize_scripts' );

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';
$Charitize_template_path = charitize_file_directory('inc/template-tags.php');
require $Charitize_template_path;

/**
 * Custom functions that act independently of the theme templates.
 */
// require get_template_directory() . '/inc/extras.php';
$Charitize_extras_path = charitize_file_directory('inc/extras.php');
require $Charitize_extras_path;

/**
 * Load Jetpack compatibility file.
 */
// require get_template_directory() . '/inc/jetpack.php';
$Charitize_jetpack_path = charitize_file_directory('inc/jetpack.php');
require $Charitize_jetpack_path;


/*update to pro link*/
// require_once( trailingslashit( get_template_directory() ) . 'trt-customize-pro/charitize/class-customize.php' );
$Charitize_trt_update_pro_path = charitize_file_directory('trt-customize-pro/charitize/class-customize.php');
require $Charitize_trt_update_pro_path;

/*breadcrum function*/

if ( ! function_exists( 'charitize_simple_breadcrumb' ) ) :

	/**
	 * Simple breadcrumb.
	 *
	 * @since 1.0.0
	 */
	function charitize_simple_breadcrumb() {

		if ( ! function_exists( 'breadcrumb_trail' ) ) {
			require_once get_template_directory() . '/assets/frameworks/breadcrumbs/breadcrumbs.php';
		}

		$breadcrumb_args = array(
			'container'   => 'div',
			'show_browse' => false,
		);
		breadcrumb_trail( $breadcrumb_args );

	}

endif;

