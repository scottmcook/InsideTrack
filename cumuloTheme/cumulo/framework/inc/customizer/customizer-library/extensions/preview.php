<?php
/**
 * Customizer Utility Functions
 *
 * @package 	Customizer_Library
 * @author		Devin Price, The Theme Foundry
 */

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function customizer_library_customize_preview_js() {

	$path = CMO_FRAMEWORK_URI . '/inc/customizer/customizer-library';

	wp_enqueue_script( 'customizer_library_customizer', $path . '/js/customizer.js', array( 'customize-preview' ), '1.0.0', true );

}
add_action( 'customize_preview_init', 'customizer_library_customize_preview_js' );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
/*
function customizer_library_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'border' )->transport = 'postMessage';
}
add_action( 'customize_register', 'customizer_library_customize_register' );*/