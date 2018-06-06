<?php
/**
 * Theme Customizer Functions
 *
 * @package Bulmapress
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bulmapress_customize_register( $wp_customize ) {
	$wp_customize->remove_section("colors");
 	$wp_customize->remove_section("background_image");

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

}
add_action( 'customize_register', 'bulmapress_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bulmapress_customize_preview_js() {
	wp_enqueue_script( 'bulmapress_customizer', get_template_directory_uri() . '/js/main.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'bulmapress_customize_preview_js' );

function faww_customizer_register($wp_customize)
{
    $wp_customize->add_section('faww_home_section', array(
        'title' => 'Home',
        'priority' => 10,
    ));

    $wp_customize->add_setting('faww_home_setting', array());
    $wp_customize->add_control('faww_home_title_ctrl', array(
        'label' => 'Home donate description',
        'type' => 'textarea',
        'section' => 'faww_home_section',
        'settings' => 'faww_home_setting',
    ));

    $wp_customize->add_section('faww_camp_section', array(
        'title' => 'Campaigns',
        'priority' => 10,
    ));

    $wp_customize->add_setting('faww_camp_setting', array());
    $wp_customize->add_control('faww_camp_title_ctrl', array(
        'label' => 'Campaigns description',
        'type' => 'textarea',
        'section' => 'faww_camp_section',
        'settings' => 'faww_camp_setting',
    ));

    $wp_customize->add_section('faww_story_section', array(
        'title' => 'Stories',
        'priority' => 10,
    ));

    $wp_customize->add_setting('faww_story_setting', array());
    $wp_customize->add_control('faww_story_title_ctrl', array(
        'label' => 'Stories description',
        'type' => 'textarea',
        'section' => 'faww_story_section',
        'settings' => 'faww_story_setting',
    ));
}
add_action('customize_register','faww_customizer_register','panel');