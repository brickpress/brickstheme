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

// Enqueue script for the slider
//wp_enqueue_script( 'nivo-slider', trailingslashit( BRICKS_JS ) . 'jquery.nivo.slider.js', array( 'jquery' ), BRICKS_VERSION );
//wp_enqueue_style( 'nivo-slider-style', trailingslashit( BRICKS_CSS ) . 'nivo-slider.css' );
//wp_enqueue_style( 'page-style', trailingslashit( BRICKS_CSS ) . 'page.css' );

wp_enqueue_style( 'nivo-slider-style', trailingslashit( BRICKS_CSS ) . 'bricks-nivo-slider.css' );
wp_enqueue_style( 'page-templates', trailingslashit( BRICKS_CSS ) . 'page-templates.css' );
wp_enqueue_script( 'nivo-slider', trailingslashit( BRICKS_CSS ) . 'jquery.nivo.slider.js', array( 'jquery' ), BRICKS_VERSION );

get_header();


?>
		<div id="primary" class="showcase">
			<div id="content" role="main">
				
  
			<!--<section class="recent-posts">- -->
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

					get_template_part( 'content', 'posts' );

					//echo '<ol class="other-recent-posts">';

				
endwhile;
endif; ?>
                
			</div><!-- #content -->
		</div><!-- #primary -->
        
<?php get_sidebar(); ?>
<?php get_footer(); ?>