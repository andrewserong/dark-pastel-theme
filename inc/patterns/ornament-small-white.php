<?php
/**
 * Ornament (small, white) block pattern
 */
return array(
	'title'      => __( 'Ornament (small, white)', 'darkpastel' ),
	'categories' => array( 'featured' ),
	'content'    => '<!-- wp:image {"align":"center","width":150,"sizeSlug":"large"} -->
					 <figure class="wp-block-image aligncenter size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/ornament-02-white.png" width="150"/></figure>
					 <!-- /wp:image -->',
);
