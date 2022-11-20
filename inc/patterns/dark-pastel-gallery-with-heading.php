<?php
/**
 * Gallery with heading block pattern
 */
return array(
	'title'      => __( 'Gallery with heading', 'darkpastel' ),
	'categories' => array( 'darkpastel' ),
	'content'    => '<!-- wp:heading {"textAlign":"center"} -->
					<h2 class="has-text-align-center">Recent artwork</h2>
					<!-- /wp:heading -->

					<!-- wp:gallery {"linkTo":"none"} -->
					<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":20,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/img-placeholder.png" alt="" class="wp-image-20"/></figure>
					<!-- /wp:image -->

					<!-- wp:image {"id":19,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/img-placeholder.png" alt="" class="wp-image-19"/></figure>
					<!-- /wp:image -->

					<!-- wp:image {"id":18,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/img-placeholder.png" alt="" class="wp-image-18"/></figure>
					<!-- /wp:image --></figure>
					<!-- /wp:gallery -->

					<!-- wp:separator {"backgroundColor":"primary","className":"is-style-narrow-ornament"} -->
					<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-narrow-ornament"/>
					<!-- /wp:separator -->',
);
