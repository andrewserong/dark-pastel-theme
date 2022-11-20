<?php
/**
 * Dark Pastel: Block Patterns
 *
 * @since Dark Pastel 0.1
 */

/**
 * Registers block patterns and categories.
 *
 * @since Dark Pastel 0.1
 *
 * @return void
 */
function darkpastel_register_block_patterns() {
	$block_pattern_categories = array(
		'featured' => array( 'label' => __( 'Featured', 'darkpastel' ) ),
		'pages'   => array( 'label' => __( 'Pages', 'darkpastel' ) ),
		'query'    => array( 'label' => __( 'Query', 'darkpastel' ) ),
		'darkpastel' => array( 'label' => __( 'Dark Pastel', 'darkpastel' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Dark Pastel 0.1
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'darkpastel_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'dark-pastel-gallery-frame',
		'dark-pastel-gallery-rounded-frame',
		'dark-pastel-gallery-with-heading',
		'dark-pastel-image-frame',
		'dark-pastel-image-rounded-frame',
		'dark-pastel-newsletter-banner',
		'dark-pastel-two-column-frame',
		'dark-pastel-three-columns',
		'dark-pastel-query-frame-tiles',
		'dark-pastel-query-tiled-title-date',
		'dark-pastel-query-stacked-title-date',
		'dark-pastel-about-page',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Dark Pastel 0.1
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'darkpastel_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'darkpastel/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'darkpastel_register_block_patterns', 9 );
