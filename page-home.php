<?php
/**
 * Template Name: Page Home
 *
 * A custom page template for Full width no side bar pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AOI_Responsive
 */
	get_header(); ?>

	<div class="container">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php

	get_footer();
