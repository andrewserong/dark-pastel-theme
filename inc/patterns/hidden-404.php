<?php
/**
 * 404 content.
 */
return array(
	'title'    => __( '404 content', 'darkpastel' ),
	'inserter' => false,
	'content'  => '<!-- wp:group {"layout":{"type":"default"}} -->
					<div class="wp-block-group"><!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"0"}}},"backgroundColor":"primary","className":"is-style-cutout-circle-down"} -->
					<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-cutout-circle-down" style="margin-bottom:0"/>
					<!-- /wp:separator -->

					<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
					<div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background" style="margin-top:0">

					<!-- wp:spacer {"height":"1rem"} -->
					<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:heading {"textAlign":"center"} -->
					<h2 class="has-text-align-center">' . esc_html( _x( 'Alas, this is not a real page.', 'Heading for a webpage that is not found.', 'darkpastel' ) ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}}} -->
					<p class="has-text-align-center" style="margin-top:0">' . __( 'Perhaps it could be found via a search?', 'darkpastel' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:search {"label":"' . esc_html_x( 'Search', 'label', 'darkpastel' ) . '","showLabel":false,"width":75,"widthUnit":"%","buttonText":"' . esc_html__( 'Search', 'darkpastel' ) . '","buttonUseIcon":true,"align":"center","style":{"border":{"width":"0px","style":"none"}},"backgroundColor":"background","textColor":"primary"} /-->

					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html( _x( '404', 'Error code for a webpage that is not found.', 'darkpastel' ) ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:separator {"backgroundColor":"background","className":"is-style-narrow-ornament"} -->
					<hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-narrow-ornament"/>
					<!-- /wp:separator --></div>
					<!-- /wp:group -->

					<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","className":"is-style-cutout-circle-up"} -->
					<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-cutout-circle-up" style="margin-top:0;margin-bottom:0"/>
					<!-- /wp:separator --></div>
					<!-- /wp:group -->',
);
