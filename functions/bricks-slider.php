<?php
/** 
 * Cubricks Slider Template
 *
 * @package Cubricks Theme
 * @subpackage Functions
 */

/** 
 * Cubricks theme content slider powered by nivoSlider.
 *
 * @since 1.0.0
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
            <?php // Proceed only if sticky posts exist.
			
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
                $counter_slider++; 
    
				if ( has_post_thumbnail() ) {
					
                   echo '<a href="' .esc_url( get_permalink() ). '" title="' .esc_attr( the_title_attribute('echo=0') ). '">';
				   
                   if( is_page_template('showcase.php') ) {
				       the_post_thumbnail('bricks-large-slider');
				   } else {
				       the_post_thumbnail('bricks-medium-slider');
				   }
                   echo '</a>';
                }
                endwhile; ?>
                
                </div><!-- .nivoSlider -->
                <?php endif; // End check for sticky posts. ?>       
                        
                <script type="text/javascript">
				<!--//--><![CDATA[//><!--
                jQuery(window).load(function() {
                    jQuery('#slider').nivoSlider({ pauseTime: parseInt(jQuery('#slider_timer').val() * 1200), pauseOnHover: true, effect: '<?php echo $slider_effects; ?>', captionOpacity: 1, controlNav: true, controlNavThumbs:false, controlNavThumbsFromRel:true, boxCols:8, boxRows:4, manualAdvance: false, afterLoad: function(){ 
					jQuery('.inner-slider').css('visibility', 'visible');
                    } });
                });
				//--><!]]>
                </script>
            
            <?php endif; // End check for published posts. ?>
           
            <div class="clearfix"></div>
        </div><!-- .inner-slider -->
    </div><!-- #bricks-slider-wrapper -->
 	<?php
}     