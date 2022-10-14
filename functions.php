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
	 * @since Dark Pastel 1.0
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
	 * @since Dark Pastel 1.0
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

if ( ! function_exists( 'darkpastel_register_block_styles' ) ) {
	/**
	 * Register theme specific block styles.
	 * 
	 * @since Dark Pastel 1.0
	 * 
	 * @return void
	 */
	// TODO: Try to output the SVG to the site frontend, as it happens for Duotone.
	// Basically, similar to this: https://github.com/wordpress/gutenberg/blob/739f26f6814ba1a32576af5ae5f4c87206d55ff4/lib/block-supports/duotone.php#L354
	function darkpastel_register_block_styles() {
		register_block_style(
			'core/separator',
			array(
				'name'         => 'double-ornament',
				'label'        => __( 'Double Ornament', 'darkpastel' ),
				'inline_style' => '.wp-block-separator.is-style-double-ornament { width: 200px !important; height: 20px; background-color: green; clip-path: url(' . esc_url( get_template_directory_uri() ) . '/assets/images/test-svg.svg#svgPath); }',
			)
		);
	}
}

add_action( 'init', 'darkpastel_register_block_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
