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

<!-- Do not remove the text within the hidden tag below. -->
	<div class="hidden">
	  	<span class="vcard p-author author author_name"><span class="fn"><?php the_author(); ?></span></span>
	  	<span class="post-date updated"><?php the_date(); ?></span>
	  </div>


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
