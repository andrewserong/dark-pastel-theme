<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Default footer', 'twentytwentytwo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"1rem","bottom":"4rem"},"blockGap":"0.5em"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group alignwide" style="padding-top:1rem;padding-bottom:4rem"><!-- wp:site-title {"level":0,"textAlign":"center"} /-->
					<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#676782","size":"has-normal-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
					<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"service":"wordpress"} /-->
					<!-- wp:social-link {"service":"twitter"} /-->
					<!-- wp:social-link {"service":"instagram"} /-->
					<!-- wp:social-link {"service":"tumblr"} /--></ul>
					<!-- /wp:social-links -->
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center"> ' .
					sprintf(
						/* Translators: WordPress link. */
						esc_html__( 'Proudly powered by %s', 'darkpastel' ),
						'<a href="' . esc_url( __( 'https://wordpress.org', 'darkpastel' ) ) . '" rel="nofollow">WordPress</a>'
					) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group -->',
);



