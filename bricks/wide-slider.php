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
wp_enqueue_script( 'nivo-slider', trailingslashit( BRICKS_JS ) . 'jquery.nivo.slider.js', array( 'jquery' ), BRICKS_VERSION );
wp_enqueue_style( 'nivo-slider-style', trailingslashit( BRICKS_CSS ) . 'nivo-slider.css' );
wp_enqueue_style( 'page-style', trailingslashit( BRICKS_CSS ) . 'page.css' );

get_header();

$slider_timer = bricks_theme_option( 'slider_timer' ); ?>

<input type="hidden" id="slider_timer" name="slider_timer" value="<?php if( $slider_timer ) { echo $slider_timer; } else { echo '5'; } ?>"/>

		<div id="primary" class="showcase">
			<div id="content" role="main">
				
                <div id="slider">     
				<?php
				/**
					 * Begin the featured posts section.
					 *
					 * See if we have any sticky posts and use them to create our featured posts.
					 * We limit the featured posts at ten.
					 */
					$sticky = get_option( 'sticky_posts' );
					$featured_image_width = bricks_theme_option( 'page_width' );
					$large_feature_height = bricks_theme_option( 'large_feature_height' );
					$slider_items = bricks_theme_option( 'slider_items' );
					$slider_effects = bricks_theme_option( 'slider_effects' );

					// Proceed only if sticky posts exist.
					if ( ! empty( $sticky ) ) :

					$featured_args = array(
						'post__in' => $sticky,
						'post_status' => 'publish',
						'posts_per_page' => $slider_items,
						'no_found_rows' => true,
					);

					// The Featured Posts query.
					$featured = new WP_Query( $featured_args );

					// Proceed only if published posts exist
					if ( $featured->have_posts() ) :

					/**
					 * We will need to count featured posts starting from zero
					 * to create the slider navigation.
					 */
					$counter_slider = -1;

		$header_image_width = bricks_theme_option('header_image_width');
		$header_image_height = bricks_theme_option('header_image_height');
						
		while ( $featured->have_posts() ) : $featured->the_post();
		
		// Increase the counter.
		$counter_slider++;
		$feature_class = 'feature-text';
	
		//if ( has_post_thumbnail() ) {
			
			//get_the_image($args = array('size' => 'large'));
			
			//if ( has_post_thumbnail()) : ?>
   <!--<a href="<?php //the_permalink(); ?>" title="<?php //the_title_attribute(); ?>" >
   <?php //the_post_thumbnail('medium'); ?>
   </a> -->
 <?php //endif;

					//if ( has_post_thumbnail() ) {
						// ... but if it has a featured image let's add some class
						$feature_class = 'feature-image small';

						// Hang on. Let's check this here image out.
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( $header_image_width, $header_image_height ) );

						// Is it bigger than or equal to our header?
						if ( $image[1] >= $header_image_width ) {
							// If bigger, let's add a BIGGER class. It's EXTRA classy now.
							$feature_class = 'feature-image large';
						}
					//}
					?>

					<section class="featured-post <?php echo $feature_class; ?>" id="featured-post-<?php echo $counter_slider; ?>">

						<?php
							/**
							 * If the thumbnail is as big as the header image
							 * make it a large featured post, otherwise render it small
							 */
							if ( has_post_thumbnail() ) {
								
								set_post_thumbnail_size( 640, 360, true );
								//if ( $image[1] >= $header_image_width )
								//	$thumbnail_size = 'large';
							//	else
							//		$thumbnail_size = 'small-feature';
							
								get_template_part( 'content', 'featured' );
								
								?>
								<a class="caption-vars" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'bricks' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
								<?php
								
								
							}
						?>
						
					</section>
				<?php endwhile;	?>

				</div><!-- #slider .nivoSlider -->
                <div class="clearfix"></div>
                <br />
                
				<?php endif; // End check for published posts. ?>
				<?php endif; // End check for sticky posts. ?>
                
	<script type="text/javascript"> 
    jQuery(window).load(function() {
        jQuery('#slider').nivoSlider({ pauseTime: parseInt(jQuery('#slider_timer').val() * 1000), pauseOnHover: true, effect: '<?php echo $slider_effects; ?>', captionOpacity: 1, controlNav: true, controlNavThumbs:false, controlNavThumbsFromRel:true, boxCols:8, boxRows:4, afterLoad: function(){ 
            jQuery('#slider_loading').css('display', 'none');
            jQuery('#slider_wrapper').css('visibility', 'visible');
        } });
    });
    </script> 

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