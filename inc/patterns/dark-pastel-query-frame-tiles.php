<?php
/**
 * Framed and tield query loop block pattern
 */
return array(
	'title'      => __( 'Framed and tiled query loop', 'darkpastel' ),
	'categories' => array( 'darkpastel', 'query' ),
	'content'    => '<!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"0"}}},"backgroundColor":"primary","className":"is-style-cutout-circle-down"} -->
                    <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-cutout-circle-down" style="margin-bottom:0"/>
                    <!-- /wp:separator -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background" style="margin-top:0"><!-- wp:separator {"backgroundColor":"background","className":"is-style-double-ornament"} -->
                    <hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-double-ornament"/>
                    <!-- /wp:separator -->

                    <!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
                    <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

                    <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"fontSize":"medium"} /-->

                    <!-- wp:post-date {"textAlign":"center","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"small"} /-->
                    <!-- /wp:post-template -->

                    <!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-background-color has-text-color has-link-color"><!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"background","className":"is-style-narrow-ornament"} -->
                    <hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-narrow-ornament" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
                    <!-- /wp:separator -->

                    <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <!-- wp:query-pagination-previous {"label":"Previous"} /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next {"label":"Next"} /-->
                    <!-- /wp:query-pagination --></div>
                    <!-- /wp:group -->

                    </div>
                    <!-- /wp:query -->

                    <!-- wp:separator {"backgroundColor":"background","className":"is-style-double-ornament-inverted"} -->
                    <hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-double-ornament-inverted"/>
                    <!-- /wp:separator --></div>
                    <!-- /wp:group -->

                    <!-- wp:separator {"style":{"spacing":{"margin":{"top":"0"}}},"backgroundColor":"primary","className":"is-style-cutout-circle-up"} -->
                    <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-cutout-circle-up" style="margin-top:0"/>
                    <!-- /wp:separator --></div>
                    <!-- /wp:group -->',
);