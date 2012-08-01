<?php
/**
 * The main template file.
 *
 * @package Bricks
 * @since Bricks 1.0.0
 */
get_header(); ?>

		<div id="primary">
 
        <?php bricks_before_content(); ?>
			<div id="content" role="main">
			
			<?php if ( have_posts() ) : ?>
            
            <?php while ( have_posts() ) : the_post(); ?>
            
                <?php get_template_part( 'content', 'posts' ); ?>
            
            <?php endwhile; ?>
            
            <?php bricks_content_nav(); ?>
          
            <?php else : ?>
        
            	<?php bricks_no_posts(); ?>
            
            <?php endif; ?>

			</div><!-- #content -->
       		<?php bricks_after_content(); ?>

		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>