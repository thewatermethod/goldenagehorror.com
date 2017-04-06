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

	// Category for home page
	$categories = get_terms( array(
		'taxonomy' => 'category',
		'hide_empty' => false,
		'fields' => 'id=>name'
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

}

add_action( 'customize_register', 'goldenagehorror_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function goldenagehorror_customize_preview_js() {
	wp_enqueue_script( 'goldenagehorror_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'goldenagehorror_customize_preview_js' );
