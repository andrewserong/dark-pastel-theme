<?php
/**
 * Title: Hidden Created With
 * Slug: darkpastel/hidden-created-with
 * Inserter: no
 */
?>

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">
	<?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'darkpastel' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Affectionately created with %1$s', 'darkpastel' ),
			$wordpress_link
		);
	?>
</p>
<!-- /wp:paragraph -->
