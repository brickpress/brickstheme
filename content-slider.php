<?php
/**
 * Template Name: Content Slider Template
 * Description: A Page Template that showcases Sticky Posts using nivoSlider.
 *
 * The content slider template in Bricks works the same way as the default blog post
 * template. The only difference is that it displays sticky posts in a slider instead of
 * displaying them as individual posts.
 *
 * Compared to the Showcase Template, the Content Slider Template's width is set by the content width.
 * The content slider's location is fixed while that of the Showcase template is customizable.
 *
 * We are creating two queries to fetch the proper posts.
 *
 * @package Bricks
 * @subpackage Page Templates
 * @since Bricks 1.0.0
 */
get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
            
				<?php bricks_featured_slider(); ?>
                
                <h1 class="showcase-heading"><?php _e( 'Recent Posts', 'bricks' ); ?></h1>

				<?php
				$showcase_recent_posts = bricks_theme_option('showcase_recent_posts');
				// Display our recent posts, showing full content for the very latest, ignoring Aside posts.
				$recent_args = array(
					'order' => 'DESC',
					'posts_per_page' => $showcase_recent_posts,
					'post__not_in' => get_option( 'sticky_posts' ),
					'no_found_rows' => true,
				);

				// Our new query for the Recent Posts section.
				$recent = new WP_Query( $recent_args );

				// The first Recent post is displayed normally
				if ( $recent->have_posts() ) : $recent->the_post();

				while ( $recent->have_posts() ) : $recent->the_post();
					// Set $more to 0 in order to only get the first part of the post.
					global $more;
					$more = 0;
					    
                get_template_part( 'content', 'posts' ); ?>
            
            <?php endwhile; ?>
            
            <?php bricks_content_nav(); ?>
					
            <?php endif; ?>

            </div><!-- #content -->
        <?php bricks_after_content(); ?>
    
        </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>