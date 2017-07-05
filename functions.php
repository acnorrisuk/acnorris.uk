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