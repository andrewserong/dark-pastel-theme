<?php
/**
 * Dark Pastel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Dark_Pastel
 * @since Dark Pastel 1.0
 */

if ( ! function_exists( 'darkpastel_support' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function darkpastel_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

}

add_action( 'after_setup_theme', 'darkpastel_support' );

if ( ! function_exists( 'darkpastel_styles' ) ) {

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function darkpastel_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'darkpastel-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'darkpastel-style' );

	}

}

add_action( 'wp_enqueue_scripts', 'darkpastel_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
