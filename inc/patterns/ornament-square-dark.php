<?php
/**
 * Ornament (square, dark) block pattern
 */
return array(
	'title'      => __( 'Ornament (square, dark)', 'darkpastel' ),
	'categories' => array( 'featured' ),
	'content'    => '<!-- wp:image {"align":"center","width":100,"sizeSlug":"large"} -->
					 <figure class="wp-block-image aligncenter size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/ornament-03.png" width="100"/></figure>
					 <!-- /wp:image -->',
);
