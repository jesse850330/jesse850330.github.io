<?php
/**
 * Scripts & Styles
 *
 * @package Bulmapress
 */

/**
 * Enqueue scripts and styles.
 */
function bulmapress_scripts() {
	wp_enqueue_style( 'bulmapress-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bulmapress-fontawesome', get_template_directory_uri() . '/frontend/fontawesome/css/font-awesome.min.css' );

	wp_enqueue_style( 'bulmapress-bulma-style', get_template_directory_uri() . '/style.css' );

	wp_enqueue_script( 'bulmapress-navigation', get_template_directory_uri() . '/frontend/js/main.js');

	wp_enqueue_script( 'bulmapress-skip-link-focus-fix', get_template_directory_uri() . '/frontend/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bulmapress_scripts' );
