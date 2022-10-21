<?php

if ( ! function_exists( 'darkpastel_generate_block_style_mask_rules' ) ) {
	/**
	 * Generate an inline CSS rule to be used when registering block styles.
	 * 
	 * These are opinionated styles that set an explicit width and height,
	 * and a maximum width of `100%`. The assumption is that the mask
	 * will always be `100%` in size, with no repeat.
	 * 
	 * @since Dark Pastel 1.0
	 * 
	 * @param string $selector The selector for the style.
	 * @param string $url      The url to be injected.
	 * @param string $width    The width for the element.
	 * @param string $width    The height for the element.
	 * 
	 * @return string The generated CSS rule.
	 */
	function darkpastel_generate_block_style_mask_rules( $selector, $url, $width, $height ) {

		// TODO: Add base colour.

		$output  = "$selector {";
		$output .= "width: $width !important;";
		$output .= "height: $height !important;";
		$output .= "max-width: 100% !important;";
		$output .= '-webkit-mask-image: url("' . esc_url( get_template_directory_uri() ) . $url . '");';
		$output .= 'mask-image: url("' . esc_url( get_template_directory_uri() ) . $url . '");';
		$output .= '-webkit-mask-size: 100%;';
		$output .= 'mask-size: 100%;';
		$output .= '-webkit-mask-repeat: no-repeat;';
		$output .= '}';

		return $output;
	}
}

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
				'inline_style' => darkpastel_generate_block_style_mask_rules(
					'.wp-block-separator.is-style-narrow-ornament',
					'/assets/images/separator-ornament-narrow-optimized.svg',
					'160px',
					'60px'
				)
			)
		);

		register_block_style(
			'core/separator',
			array(
				'name'         => 'double-ornament',
				'label'        => __( 'Double Ornament', 'darkpastel' ),
				'inline_style' => darkpastel_generate_block_style_mask_rules(
					'.wp-block-separator.is-style-double-ornament',
					'/assets/images/separator-ornament-double-optimized.svg',
					'442px',
					'46px'
				)
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