<?php
/**
 * Theme functions
 *
 * Sets up the theme and provides some helper functions.
 *
 * @package prjt
 */



/* OEMBED SIZING
 ========================== */

if ( ! isset( $content_width ) )
	$content_width = 600;



/* THEME SETUP
 ========================== */

if ( ! function_exists( 'prjt_setup' ) ):
function prjt_setup() {

	// Add custom nav menu support
	register_nav_menu( 'primary', __( 'Primary Menu', 'prjt' ) );

	// Add featured image support
	add_theme_support( 'post-thumbnails' );

}
endif;
add_action( 'after_setup_theme', 'prjt_setup' );



/* ENQUEUE SCRIPTS & STYLES
 ========================== */
function prjt_scripts() {
	// theme style.css file
	$rand = rand( 1, 99999999999 );
	wp_enqueue_style( 'wpshout-style', get_stylesheet_uri(), '', $rand );

	// threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'prjt_scripts');

add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails');

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );



add_filter('body_class','add_category_to_single');

function add_category_to_single($classes) {
	if (!is_admin() && is_single() ) {
	  global $post;
	  foreach((get_the_category($post->ID)) as $category) {
	    // add category slug to the $classes array
	    $classes[] = $category->category_nicename;
	  }
	}
	// return the $classes array
	return $classes;
}
