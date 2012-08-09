<?php
/** 
 * Bricks Slider Template
 *
 * @package Bricks Theme
 * @subpackage Functions
 */

function bricks_featured_slider() {
	
	global $theme_options, $post;
	
	$sticky = get_option( 'sticky_posts' );
	$slider_timer = bricks_theme_option( 'slider_timer' );
	$slider_items = bricks_theme_option( 'slider_items' );
	$slider_effects = bricks_theme_option( 'slider_effects' );
	
	?>
    <div id="bricks-slider-wrapper">
    <input type="hidden" id="slider_timer" name="slider_timer" value="<?php if( $slider_timer ) { echo $slider_timer; } else { echo '5'; } ?>"/>

        <div class="inner-slider">
            <div id="slider"><!-- nivoSlider -->
            <?php
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
                    $counter_slider = 0;
                    
                while ( $featured->have_posts() ) : $featured->the_post();		
                // Increase the counter.
                $counter_slider++; ?>
    
                <?php
				
				$medium_feature_width = bricks_theme_option('medium_feature_width');
				$medium_feature_height = bricks_theme_option('medium_feature_height');
                    
                if ( has_post_thumbnail() ) {
					
                   echo '<a href="' . the_permalink() . '" title="' . the_title_attribute('echo=0') . '" >';
				   
                   if( is_page_template('showcase.php') ) {
				       the_post_thumbnail($post->ID, 'bricks-slider-large', array( 'class' => 'large-slider' ) );
				   } else {
				       the_post_thumbnail($post->ID, array($medium_feature_width,$medium_feature_height), array( 'src' => '', 'class' => 'medium-slider' ) );
				   }
                   echo '</a>';
                }
                endwhile; ?>
                
                </div><!-- .nivoSlider -->
                <?php endif; // End check for sticky posts. ?>       
                        
                <script type="text/javascript"> 
                jQuery(window).load(function() {
                    jQuery('#slider').nivoSlider({ pauseTime: parseInt(jQuery('#slider_timer').val() * 2000), pauseOnHover: true, effect: '<?php echo $slider_effects; ?>', captionOpacity: 1, controlNav: true, controlNavThumbs:false, controlNavThumbsFromRel:true, boxCols:16, boxRows:8, afterLoad: function(){ 
                    //jQuery('#slider_loading').css('display', 'none');
                    //jQuery('#slider_wrapper').css('visibility', 'visible');
                    } });
                }); 
                </script>
            
            <?php endif; // End check for published posts. ?>
           
            <div class="clearfix"></div>
        </div><!-- .inner-slider -->
    </div><!-- #bricks-slider-wrapper -->
 	<?php
}     