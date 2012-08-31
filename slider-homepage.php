<?php
/**
 * Template Name: Slider Homepage Template
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
                    <h1 class="headlines"><?php the_content(); ?></h1>
                </div>
            	<?php endwhile;
			endif; ?>
            
            </div><!-- #content -->
        <?php bricks_after_content(); ?>
        </div><!-- #primary -->

<?php get_sidebar('homepage'); ?>
<?php get_footer(); ?>