<?php
/**
 * Template Name: Video Library Page
 *
 * A custom page template for video library pages.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AOI_Responsive
 */

 get_header(); ?>
 <div class="container">
   <div id="primary" class="content-area col-md-8">
     <main id="main" class="site-main" role="main">


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                <div id="post-<?php the_ID(); ?>">


                    <div class="entry-content">
                    <?php if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
                        <?php the_content(); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                        <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
                        <?php comments_template( '', true ); ?>

<?php endwhile; ?>
                        <div class="video-feed">
						<?php
						$videoCategories = get_post_meta( get_the_ID(), 'video_categories', true);

						?>
						<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
						<?php $video_query = new WP_Query('cat='.$videoCategories.'&posts_per_page=6&paged=' . $paged ); ?>
                        <?php if ($video_query->have_posts()) : ?>
                        <?php while ($video_query->have_posts()) : $video_query->the_post(); ?>
                            <a class="video-thumb" href="<?php the_permalink() ?>" rel="bookmark" title="Link to watch the video, <?php the_title_attribute(); ?>">
                              <div><img src="<?php video_thumbnail(); ?>" alt="<?php the_title_attribute(); ?>" /></div><span class="video-title"><?php the_title_attribute(); ?></span>
                              </a>
                          <?php endwhile; ?>
                        <div class="clear"></div>
                        <div id="nav-below" class="navigation">
                            <div class="nav-previous"><?php next_posts_link( 'Previous', $video_query->max_num_pages ); ?></div>
                            <div class="nav-next"><?php previous_posts_link( 'Next', $video_query->max_num_pages ); ?></div>
                        </div><!-- #nav-below -->
                        <?php else : ?>
                        <h2 class="center">Not Found</h2>
                        <p class="center">Sorry, but you are looking for something that isn't here.</p>
                        <?php endif; ?>
                        </div><!-- .video-feed -->

                      </main><!-- #main -->
                  	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
