<?php
/**
 * Template Name: Homepage with Slider Template
 * Description: A static Page Template with a featured slider and optional sidebar widgets.
 *
 * @package Cubricks
 * @subpackage Page Templates
 * @since Cubricks 1.0.1
 */
get_header(); ?>

		<div id="primary" class="showcase">
			<div id="content" role="main">
            <?php if($post->post_content != '') : ?>
            
		 		<?php while ( have_posts() ) : the_post(); ?>
            
                <div id="headline-container">
                    <?php the_content(); ?>
                </div>
            	<?php 
				endwhile;
			endif; ?>
            
            </div><!-- #content -->  
        </div><!-- #primary -->

<?php get_sidebar('homepage'); ?>
<?php get_footer(); ?>