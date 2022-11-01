<?php
/**
 * Stacked title and date query loop block pattern
 */
return array(
	'title'      => __( 'Stacked title and date query loop', 'darkpastel' ),
	'categories' => array( 'darkpastel', 'query' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:separator {"backgroundColor":"primary","className":"is-style-double-ornament"} -->
                    <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-double-ornament"/>
                    <!-- /wp:separator -->

                    <!-- wp:query {"queryId":0,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2},"layout":{"type":"constrained","contentSize":"480px"}} -->
                    <div class="wp-block-query"><!-- wp:post-template {"align":"center"} -->
                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"bottom":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|tertiary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--tertiary);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"fontSize":"medium"} /-->

                    <!-- wp:post-date {"textAlign":"center","fontSize":"medium"} /--></div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"primary","className":"is-style-narrow-ornament"} -->
                    <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-narrow-ornament" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
                    <!-- /wp:separator -->

                    <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <!-- wp:query-pagination-previous {"label":"Previous"} /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next {"label":"Next"} /-->
                    <!-- /wp:query-pagination --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:query -->

                    <!-- wp:separator {"backgroundColor":"primary","className":"is-style-double-ornament-inverted"} -->
                    <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-double-ornament-inverted"/>
                    <!-- /wp:separator --></div>
                    <!-- /wp:group -->',
);
