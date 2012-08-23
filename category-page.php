<?php
/**
 * Template Name: Category Page Template
 * Description: A Page Template that shows posts from a single category.
 *
 * @package Bricks
 * @subpackage Page Templates
 * @since Bricks 1.0.0
 */
get_header();

$article_container = bricks_theme_option('article_container'); ?>

		<div id="primary">
			<div id="content" role="main">

			<?php
			
			$page_id = get_the_ID();
			
			/* Get the meta key. */
			$meta_key = page_category_field_meta_key();
		
			if (is_page() ) {
				/* Get the meta value of the custom field key. */
				$category = get_post_meta( $page_id, $meta_key, true );
			}

			$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$post_per_page = 10;            // -1 shows all posts
			$do_not_show_stickies = 1;     // 0 to show stickies
			
			$args = array(
				'category__in'        => array($category),
				'orderby'             => 'date',
				'order'               => 'DESC',
				'paged'               => $paged,
				'posts_per_page'      => $post_per_page,
				'offset'              => '-1',
				'ignore_sticky_posts' => $do_not_show_stickies
			);
			
			$temp = $wp_query;              // assign orginal query to temp variable for later use  
			$wp_query = null;
			$wp_query = new WP_Query($args); 
			
			if( have_posts() ) : 
			
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            
                <?php get_template_part( 'content', 'posts' ); ?>
            
            	<?php endwhile; ?>
            
            	<?php bricks_content_nav(); ?>
          
            <?php endif; ?>
            
			<?php $wp_query = $temp; //reset back to original query ?>
	
			</div><!-- #content -->
       		<?php bricks_after_content(); ?>

		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>