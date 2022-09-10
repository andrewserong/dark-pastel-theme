<?php
/**
 * Ornament (large, dark) block pattern
 */
return array(
	'title'      => __( 'Ornament (large, dark)', 'darkpastel' ),
	'categories' => array( 'featured' ),
	'content'    => '<!-- wp:image {"align":"center","width":200,"sizeSlug":"large"} -->
					 <figure class="wp-block-image aligncenter size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/ornament-01.png" width="200"/></figure>
					 <!-- /wp:image -->',
);
