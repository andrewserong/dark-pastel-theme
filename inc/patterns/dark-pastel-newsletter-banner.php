<?php
/**
 * Newsletter banner block pattern
 */
return array(
	'title'      => __( 'Newsletter banner', 'darkpastel' ),
	'categories' => array( 'darkpastel' ),
	'content'    => '<!-- wp:group {"layout":{"type":"default"}} -->
					<div class="wp-block-group"><!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"0"}}},"backgroundColor":"primary","className":"is-style-cutout-circle-down"} -->
					<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-cutout-circle-down" style="margin-bottom:0"/>
					<!-- /wp:separator -->

					<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
					<div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background" style="margin-top:0">

					<!-- wp:spacer {"height":"1rem"} -->
					<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:heading {"textAlign":"center"} -->
					<h2 class="has-text-align-center">' . __( 'Sign up to our newsletter', 'darkpastel' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}}} -->
					<p class="has-text-align-center" style="margin-top:0">' . __( 'Click below to sign up', 'darkpastel' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"primary"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button">' . __( 'Sign up', 'darkpastel' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons -->

					<!-- wp:separator {"backgroundColor":"background","className":"is-style-narrow-ornament"} -->
					<hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-narrow-ornament"/>
					<!-- /wp:separator --></div>
					<!-- /wp:group -->

					<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","className":"is-style-cutout-circle-up"} -->
					<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-cutout-circle-up" style="margin-top:0;margin-bottom:0"/>
					<!-- /wp:separator --></div>
					<!-- /wp:group -->',
);
