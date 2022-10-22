<?php

if ( ! function_exists( 'darkpastel_register_block_styles' ) ) {
	/**
	 * Register theme specific block styles.
	 *
	 * @since Dark Pastel 1.0
	 *
	 * @return void
	 */
	function darkpastel_register_block_styles() {
		register_block_style(
			'core/separator',
			array(
				'name'         => 'narrow-ornament',
				'label'        => __( 'Narrow Ornament', 'darkpastel' ),
			)
		);

		register_block_style(
			'core/separator',
			array(
				'name'         => 'double-ornament',
				'label'        => __( 'Double Ornament', 'darkpastel' ),
			)
		);

		register_block_style(
			'core/separator',
			array(
				'name'         => 'star-ornament',
				'label'        => __( 'Star Ornament', 'darkpastel' ),
			)
		);		

		register_block_style(
			'core/separator',
			array(
				'name'         => 'double-ornament-inverted',
				'label'        => __( 'Double Ornament (inverted)', 'darkpastel' ),
			)
		);		

		register_block_style(
			'core/separator',
			array(
				'name'         => 'cutout-circle-up',
				'label'        => __( 'Cutout circle (up)', 'darkpastel' ),
			)
		);

		register_block_style(
			'core/separator',
			array(
				'name'         => 'cutout-circle-down',
				'label'        => __( 'Cutout circle (down)', 'darkpastel' ),
			)
		);

		register_block_style(
			'core/separator',
			array(
				'name'         => 'diamond',
				'label'        => __( 'Diamond', 'darkpastel' ),
				'inline_style' => ".wp-block-separator.is-style-diamond { width: 125px !important; height: 125px !important; border: none !important; clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%); }",
			)
		);		
	}
}

add_action( 'init', 'darkpastel_register_block_styles' );
