<?php
/** 
 * Bricks Slider Template
 *
 * @package Bricks Theme
 * @subpackage Functions
 */
function bricks_featured_slider() {
	
	global $theme_options;
	
	$featured_image_width = bricks_theme_option( 'page_width' );
	$large_feature_height = bricks_theme_option( 'large_feature_height' );
	$slider_items = bricks_theme_option( 'slider_items' );
	$slider_effects = bricks_theme_option( 'slider_effects' );
	$slider_timer = bricks_theme_option( 'slider_timer' );
			
	$sticky = get_option( 'sticky_posts' );	
	
	if ( ! empty( $sticky ) ) :
		$featured_args = array(
							'post__in' => $sticky,
							'post_status' => 'publish',
							'posts_per_page' => 10,
							'no_found_rows' => true,
						);
	
		// The Featured Posts query.
		$featured = new WP_Query( $featured_args );
	
		// Proceed only if published posts exist
		if ( $featured->have_posts() ) :
	
		$counter_slider = 0;
	
		$header_image_width = bricks_theme_option('header_image_width');
						
		while ( $featured->have_posts() ) : $featured->the_post();
		
		// Increase the counter.
		$counter_slider++;
		$feature_class = 'feature-text';
	
		//if ( has_post_thumbnail() ) {
			
			get_the_image($args = array('width' => '1024'));
			
			/*
	
			// ... but if it has a featured image let's add some class
			$feature_class = 'feature-image small';
	
			// Hang on. Let's check this here image out.
	
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( $header_image_width, $header_image_width ) );
			// Is it bigger than or equal to our header?
			if ( $image[1] >= $header_image_width ) {
	
				// If bigger, let's add a BIGGER class. It's EXTRA classy now.
				$feature_class = 'feature-image large';
			} */
		//}
		?>
        
        <div id="slider">
		<section class="featured-post <?php echo $feature_class; ?>" id="featured-post-<?php echo $counter_slider; ?>">

		<?php /*
				if ( has_post_thumbnail() ) {
					if ( $image[1] >= $header_image_width ) {
						$thumbnail_size = 'large-feature';	
					} else {
						$thumbnail_size = 'small-feature';
					}
					?>
					<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_post_thumbnail( $thumbnail_size ); ?></a>
					<?php
				}*/
			?>
            
           <?php global $feature_class;

	bricks_before_article(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( $feature_class ); ?>>
        
			<header class="entry-header">
            	<hgroup>
					<?php bricks_post_title(); ?> 
				</hgroup>       
			</header>
            <div class="clearfix"></div>

			<div class="entry-summary">
                <?php the_excerpt(); ?>
			</div><!-- .entry-content -->
			<div class="clearfix"></div>
		
		</article><!-- #post-<?php the_ID(); ?> -->
        <?php bricks_after_article(); ?>
        
			<?php //get_template_part( 'content', 'featured' ); ?>
				<?php endwhile;	?>

				</div><!-- #slider .nivoSlider -->
                <div class="clearfix"></div>
                <br />
                
				<?php endif; // End check for published posts. ?>
				<?php endif; // End check for sticky posts. ?>
                
	<script type="text/javascript"> 
    jQuery(window).load(function() {
        jQuery('#slider').nivoSlider({ pauseTime: parseInt(jQuery('#slider_timer').val() * 1000), pauseOnHover: true, effect: '<?php echo $slider_effects; ?>', captionOpacity: 1, controlNav: true, controlNavThumbs:false, controlNavThumbsFromRel:true, boxCols:8, boxRows:4, afterLoad: function(){ 
            //jQuery('#slider_loading').css('display', 'none');
            //jQuery('#slider_wrapper').css('visibility', 'visible');
        } });
    });
    </script>
  
<?php }