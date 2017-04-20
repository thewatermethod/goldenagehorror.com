<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * The Golden Age Horror Podcast Theme Customizer
 *
 * @package The_Golden_Age_Horror_Podcast
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function goldenagehorror_customize_register( $wp_customize ) {
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section( 'goldenagehorror_settings' , array(
		'title'      => 'Theme Options',
		'priority'   => 30,
	) );


	$wp_customize->add_setting( 'homepagelink', array(
		'default'           => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' 				=> 'theme_mod'
	) );

	$wp_customize->add_control( 'homepagelink', array(
		'label'    => 'Home Page Link',
		'section'  => 'goldenagehorror_settings',
		'type'     => 'text',
		'priority' => 0
	) );


	$wp_customize->add_setting( 'homepagelinktext', array(
		'default'           => 'New Listener? -- Start here',
		'sanitize_callback' => 'sanitize_text_field',
		'type' 				=> 'theme_mod'
	) );

	$wp_customize->add_control( 'homepagelinktext', array(
		'label'    => 'Home Page Link Text',
		'section'  => 'goldenagehorror_settings',
		'type'     => 'text',
		'priority' => 0
	) );


	// Category for home page
	$categories = get_terms( array(
		'taxonomy' => 'category',
		'hide_empty' => false,
		'fields' => 'id=>name'
	) );

	$wp_customize->add_setting( 'featured_category_text', array(
		'default'           => 'Latest Episode',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'featured_category_text', array(
		'label'    => 'Featured Category Text',
		'section'  => 'goldenagehorror_settings',
		'type'     => 'text',
		'priority' => 1
	) );


	$categories = array( 0 => '-- Select a category --' ) + $categories;

	$wp_customize->add_setting( 'featured_category', array(
		'default'           => 0,
		'sanitize_callback' => 'absint',
		'type' 				=> 'theme_mod'
	) );

	$wp_customize->add_control( 'featured_category', array(
		'label'    => 'Category Featured on Home Page',
		'section'  => 'goldenagehorror_settings',
		'type'     => 'select',
		'choices' => $categories,
		'priority' => 2
	) );


	$wp_customize->add_setting( 'itunes', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type' 				=> 'theme_mod'
	) );

	$wp_customize->add_control( 'itunes', array(
		'label'    => 'iTunes Link',
		'section'  => 'goldenagehorror_settings',
		'type'     => 'text',
		'priority' => 3
	) );

	$wp_customize->add_setting( 'google_play', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type' 				=> 'theme_mod'
	) );

	$wp_customize->add_control( 'google_play', array(
		'label'    => 'Google Play Link',
		'section'  => 'goldenagehorror_settings',
		'type'     => 'text',
		'priority' => 4
	) );

	$wp_customize->add_setting( 'stitcher', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type' 				=> 'theme_mod'
	) );

	$wp_customize->add_control( 'stitcher', array(
		'label'    => 'Stitcher Link',
		'section'  => 'goldenagehorror_settings',
		'type'     => 'text',
		'priority' => 4
	) );

	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'colors' );

}

add_action( 'customize_register', 'goldenagehorror_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function goldenagehorror_customize_preview_js() {
	wp_enqueue_script( 'goldenagehorror_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'goldenagehorror_customize_preview_js' );
