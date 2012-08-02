<?php
/**
 * Template Name: Showcase Template
 * Description: A Page Template that showcases Sticky Posts 
 *
 * The content slider template in Bricks consists of two sections. Each section can be customized
 * on the theme options admin panel. The first section showcases sticky posts as featured posts. The
 * second section contains recent posts, showing an excerpt of the latest post and a list of subsequent
 * posts in reverse chronological order.
 *
 * We are creating two queries to fetch the proper posts.
 *
 * @package Bricks
 * @subpackage Page Templates
 * @since Bricks 1.0.0
 */
get_header(); ?>

		<div id="primary" class="showcase">
			<div id="content" role="main">
				<h1 class="showcase-heading"><?php _e( 'Recent Posts', 'bricks' ); ?></h1>

				<?php
				// Display our recent posts, showing full content for the very latest, ignoring Aside posts.
				$recent_args = array(
					'order' => 'DESC',
					'posts_per_page' => 5,
					'post__not_in' => get_option( 'sticky_posts' ),
					'tax_query' => array(
						array(
							'taxonomy' => 'post_format',
							'terms' => array( 'post-format-aside', 'post-format-link', 'post-format-quote', 'post-format-status' ),
							'field' => 'slug',
							'operator' => 'NOT IN',
						),
					),
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
            <article id="post-<?php the_ID(); ?>" <?php post_class($article_container); ?> <?php if( $article_container == 'no-box' ) {
                echo 'style="padding: 0; border-radius: 0; -moz-border-radius: 0; -webkit-border-radius: 0; -khtml-border-radius: 0;"'; } ?>>

                <?php bricks_post_date(); ?>
                
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
                
    		<div class="left-post-shadow"></div>
            <div class="right-post-shadow"></div> 
            </article><!-- #post-<?php the_ID(); ?> -->
			<?php bricks_after_article(); 
			
				endwhile;
				endif;
				?>       
			</div><!-- #content -->
		</div><!-- #primary -->
        
<?php get_sidebar(); ?>
<?php get_footer(); ?>