<?php
/**
 * Registers block pattern categories.
 *
 * @since Dark Pastel 0.1
 *
 * @return void
 */
function darkpastel_register_block_pattern_categories() {
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
}
add_action( 'init', 'darkpastel_register_block_pattern_categories', 9 );
