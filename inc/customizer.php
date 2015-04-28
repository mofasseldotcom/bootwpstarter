<?php
/**
 * Boot WP Framework Theme Customizer
 *
 * @package Boot WP Framework
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bootwp_framework_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Sections
	$wp_customize -> add_section('general_section', array(
		'title' => 'General Settings',
		'priority' => 40,
	));

	// Fields
	$wp_customize -> add_setting('site_logo', array(
		'default' => '',
		'transport' => 'refresh',
	));

	$wp_customize -> add_control(
		new WP_Customize_Image_Control($wp_customize, 'site_logo', array(
			'section' => 'general_section',
			'label' => 'Upload logo',
			'settings' => 'site_logo',
		))
	);

	// Fields
	$wp_customize -> add_setting('copyright_text', array(
		'default' => '',
		'transport' => 'postMessage',
	));

	$wp_customize -> add_control('copyright_text', array(
		'section' => 'general_section',
		'label' => 'Copyright Text',
		'type' => 'text',
	));

}
add_action( 'customize_register', 'bootwp_framework_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bootwp_framework_customize_preview_js() {
	wp_enqueue_script( 'bootwp_framework_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'bootwp_framework_customize_preview_js' );


