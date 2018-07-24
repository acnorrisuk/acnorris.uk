<?php 

if ( ! function_exists( 'acnorrisuk_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
*/

function acnorrisuk_setup() {

	/*
	 * Let WordPress manage the document title.
     */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails
     */
	add_theme_support( 'post-thumbnails' );

	/* 
     * Register menus 
     */
	register_nav_menus( array(
		'main_menu' => 'Main Navigation'
	) );

}
endif;
add_action( 'after_setup_theme', 'acnorrisuk_setup' );

/*
* Load styles and scripts
*/
function acnorrisuk_scripts() {
  wp_enqueue_style( 'acnorrisuk', get_stylesheet_uri(), null, filemtime(get_stylesheet_directory() . '/style.css') );

  if(is_single()) {
  	wp_enqueue_script( 'highlight-js', get_template_directory_uri() . '/js/vendor/highlight.pack.min.js', array(), false, true);
  }
}
add_action( 'wp_enqueue_scripts', 'acnorrisuk_scripts');

/*
* Disables all emoji actions
*/
function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

/*
* Disable Jetpack CSS
*/
add_filter( 'jetpack_implode_frontend_css', '__return_false' );

/*
* Disable Jetpack Retina Images
*/
function tj_dequeue_devicepx() {
    wp_dequeue_script( 'devicepx' );
}
add_action( 'wp_enqueue_scripts', 'tj_dequeue_devicepx' );