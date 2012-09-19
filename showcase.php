<?php
/**
 * Template Name: Showcase Template
 * Description: A Page Template that showcases Sticky Posts using nivoSlider.
 *
 * The showcase template consists of two sections. The first section displays a full width slideshow of
 * featured posts. The position of the slides can be customized on the theme options admin panel. The
 * second section contains a list of posts in reverse chronological order. The number of posts to show on
 * this page can also be customized on the theme options admin panel.
 *
 * @package Cubricks
 * @subpackage Page Templates
 * @since Cubricks 1.0.0
 */
get_header(); ?>

		<div id="primary" class="showcase">
			<div id="content" role="main">
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
					
			bricks_before_article(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php bricks_post_date_graphic(); ?>
                
                <header class="entry-header">
                    <hgroup> 
                    <?php bricks_post_title(); ?>
                    </hgroup>          
                </header>
                
                <?php bricks_post_format_icon(); ?>
                
                <div class="clearfix"></div>
      
                <div class="entry-content">
                    <?php bricks_before_entry_content(); ?>
                    <?php the_excerpt(); ?>
                    <?php bricks_after_entry_content(); ?>
                </div><!-- .entry-content -->
                
                <footer class="entry-meta">
                    <?php bricks_post_footer(); ?>
                    <?php bricks_comments_link(); ?>
                    <?php edit_post_link( '<span class="edit-icon"></span>'. __( 'Edit', 'bricks' ), '<span class="edit-link">', '</span>' ); ?>
                </footer>
                <div class="clearfix"></div>
                
				<?php if( bricks_theme_option('article_container') == 'no-shadow' ) : ?>
                <div class="post-no-shadow"></div>
                <?php else : ?>
                <div class="left-post-shadow"></div>
                <div class="right-post-shadow"></div>
                <?php endif; ?>
            </article><!-- #post-<?php the_ID(); ?> -->
			<?php bricks_after_article(); ?>
            
            <?php endwhile; ?>
            
            <?php bricks_content_nav(); ?>
                
            <?php endif; ?>

            </div><!-- #content -->
        <?php bricks_after_content(); ?>
    
        </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>