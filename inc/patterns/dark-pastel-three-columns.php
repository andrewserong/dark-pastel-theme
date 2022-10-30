<?php
/**
 * Three columns block pattern
 */
return array(
	'title'      => __( 'Three columns', 'darkpastel' ),
	'categories' => array( 'darkpastel' ),
	'content'    => '<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group"><!-- wp:heading {"textAlign":"center"} -->
					<h2 class="has-text-align-center">' . __( 'A heading', 'darkpastel' ) . '</h2>
					<!-- /wp:heading -->
					
					<!-- wp:separator {"backgroundColor":"primary","className":"is-style-ornament-left"} -->
					<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-ornament-left"/>
					<!-- /wp:separator -->
					
					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p id="block-c58771e1-7d0a-450f-ae16-2847298f03e6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec urna fringilla, tristique turpis at, varius felis. Proin eu auctor orci. </p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph -->
					<p id="block-c58771e1-7d0a-450f-ae16-2847298f03e6">Vivamus rutrum tempor ligula sed suscipit. Donec sed volutpat massa, id rhoncus sem. Integer et eleifend leo.</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph -->
					<p id="block-3f9ad0a9-e02f-4e30-8ee4-fe1ff684eb1c">Ut accumsan ex nulla. Mauris sagittis massa at arcu lobortis, molestie ullamcorper tortor suscipit.</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->
					
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p id="block-c58771e1-7d0a-450f-ae16-2847298f03e6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec urna fringilla, tristique turpis at, varius felis. Proin eu auctor orci. </p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph -->
					<p>Vivamus rutrum tempor ligula sed suscipit. Donec sed volutpat massa, id rhoncus sem. Integer et eleifend leo.</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph -->
					<p id="block-3f9ad0a9-e02f-4e30-8ee4-fe1ff684eb1c">Ut accumsan ex nulla. Mauris sagittis massa at arcu lobortis, molestie ullamcorper tortor suscipit.</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->
					
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p id="block-c58771e1-7d0a-450f-ae16-2847298f03e6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec urna fringilla, tristique turpis at, varius felis. Proin eu auctor orci. </p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph -->
					<p id="block-c58771e1-7d0a-450f-ae16-2847298f03e6">Vivamus rutrum tempor ligula sed suscipit. Donec sed volutpat massa, id rhoncus sem. Integer et eleifend leo.</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph -->
					<p id="block-3f9ad0a9-e02f-4e30-8ee4-fe1ff684eb1c">Ut accumsan ex nulla. Mauris sagittis massa at arcu lobortis, molestie ullamcorper tortor suscipit.</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->
					
					<!-- wp:separator {"backgroundColor":"primary","className":"is-style-ornament-right"} -->
					<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-ornament-right"/>
					<!-- /wp:separator --></div>
					<!-- /wp:group -->',
);
