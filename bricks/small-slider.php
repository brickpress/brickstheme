<?php
/**
 * Template Name: Small Slider
 *
 * @package Bricks
 * @subpackage Bricks
 * @since Bricks 1.0.0
 */
global $theme_options, $post;

// Enqueue script for the slider
wp_enqueue_script( 'nivo-slider', trailingslashit( BRICKS_CSS ) . 'jquery.nivo.slider.js', array( 'jquery' ), BRICKS_VERSION );
wp_enqueue_style( 'nivo-slider-style', trailingslashit( BRICKS_CSS ) . 'bricks-nivo-slider.css' );
wp_enqueue_style( 'page-style', trailingslashit( BRICKS_CSS ) . 'page-templates.css' );

$article_container = bricks_theme_option('article_container');

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <div class="one">
					<div class="slideshow">
						<!-- COLUMNS CONTAINER STARTS-->
						<div class="one-third">
							<!--COLUMN STARTS -->
							<h4>This is an image slider page template.</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat nunc ut nibh interdum tempus. Donec at lorem eget sapien iaculis porttitor id quis ligula feugiat nunc ut nibh justo eget elit aliquet interdum tempus.
							</p>
							<p>
								Donec at lorem eget sapien iaculis porttitor id quis ligula feugiat nunc ut nibh justo eget elit aliquet interdum tempus.Lorem ipsum dolor sit ametLaetare quod una non dum Suam in rei completo litusIussit sed dominum in deinde Animae tuae lacrimis non potentiae.Praestetur cubiculo forma non dum Palpat venas tanquam vero quo Neminem habere homo tu illumTunc Stet consequat eiusdem ea.
							</p>
							<a href="#" class="blue">KEEP READING</a>
						</div>
						<!-- COLUMN ENDS-->
						<div id="slider-small">
							<div class="slides_container small-slider">
								<!-- SLIDER STARTS-->
								<!-- SLIDER CONTENT STARTS-->
								<img src="<?php trailingslashit( BRICKS_CSS ) . 'images/slide-small-01.jpg'; ?>
" alt=" " width="620" height="350"/>
								<img src="<?php trailingslashit( BRICKS_CSS ) . 'images/slide-small-02.jpg'; ?>" alt=" " width="620" height="350"/>
								<img src="<?php trailingslashit( BRICKS_CSS ) . 'images/slide-small-03.jpg'; ?>" alt=" " width="620" height="350"/>
								<img src="<?php trailingslashit( BRICKS_CSS ) . 'images/slide-small-04.jpg'; ?>" alt=" " width="620" height="350"/>
							</div>
							<!-- SLIDESHOW CONTAINER ENDS-->
						</div>
					</div>
					<!-- SLIDESHOW ENDS-->
				</div>
                
                	<script type="text/javascript"> 
    jQuery(window).load(function() {
        jQuery('#slider').nivoSlider({ pauseTime: parseInt(jQuery('#slider_timer').val() * 1000), pauseOnHover: true, effect: '<?php echo $slider_effects; ?>', captionOpacity: 1, controlNav: true, controlNavThumbs:false, controlNavThumbsFromRel:true, boxCols:8, boxRows:4, afterLoad: function(){ 
            jQuery('#slider_loading').css('display', 'none');
            jQuery('#slider_wrapper').css('visibility', 'visible');
        } });
    });
    </script> 
                
                <?php $post_format = strtolower( get_post_format() ); ?>
                <header class="entry-header">
                    <hgroup> 
                    <?php bricks_post_title(); ?>
                    </hgroup>          
                </header>
                <div class="clearfix"></div>
    
                <div class="entry-content">
                    <?php bricks_before_entry_content(); ?>
                    						<div id="slider-small">
							<div class="slides_container small-slider"><?php
                    
					$category_name = 'fashion';
                    $cat_posts = get_posts( array( 'numberposts' => 5, 'offset'=> 1 ) );
                   
foreach( $cat_posts as $post ) :	setup_postdata($post);
	if ( has_post_thumbnail()) {
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
   //echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
   echo '<a href="' . the_permalink() . '" title="' . the_title_attribute('echo=0') . '" >';
   echo get_the_post_thumbnail($post->ID, 'bricks-slider-medium' );
   echo the_title();
   echo '</a>';
 } ?>
	
<?php endforeach; ?>

                		<div id="slider-small">
							<div class="slides_container small-slider">
                            
                    <div class="entry-content">
                        <?php the_content(); ?>
                        <?php wp_link_pages( bricks_link_pages_args() ); ?>
                    </div><!-- .entry-content -->
                    
                <footer class="entry-meta">
                    <?php edit_post_link( __( 'Edit', 'bricks' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-meta -->
            </article><!-- #post-<?php the_ID(); ?> -->

				<?php comments_template( '', true ); ?>
                
			<?php endwhile; // end of the loop. ?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>