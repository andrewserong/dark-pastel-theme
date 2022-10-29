<?php
/**
 * Image frame block pattern
 */
return array(
	'title'      => __( 'Image frame', 'darkpastel' ),
	'categories' => array( 'darkpastel' ),
	'content'    => '<!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                    
                    <!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"0"}}},"backgroundColor":"primary","className":"is-style-cutout-circle-down"} -->
                    <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-cutout-circle-down" style="margin-bottom:0"/>
                    <!-- /wp:separator -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background" style="margin-top:0"><!-- wp:separator {"backgroundColor":"background","className":"is-style-double-ornament"} -->
                    <hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-double-ornament"/>
                    <!-- /wp:separator -->

                    <!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/img-placeholder.png" alt=""/></figure>
                    <!-- /wp:image -->

                    <!-- wp:separator {"backgroundColor":"background","className":"is-style-double-ornament-inverted"} -->
                    <hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-double-ornament-inverted"/>
                    <!-- /wp:separator --></div>
                    <!-- /wp:group -->

                    <!-- wp:separator {"style":{"spacing":{"margin":{"top":"0"}}},"backgroundColor":"primary","className":"is-style-cutout-circle-up"} -->
                    <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-cutout-circle-up" style="margin-top:0"/>
                    <!-- /wp:separator -->
                    
                    </div>
                    <!-- /wp:group -->',                    
);
