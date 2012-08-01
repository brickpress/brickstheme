<?php
/**
 * The default template for displaying all pages.
 *
 * @package Bricks
 * @subpackage Bricks
 * @since Bricks 1.0.0
 */
global $theme_options;

$article_container = bricks_theme_option('article_container');

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <?php $post_format = strtolower( get_post_format() ); ?>
                <header class="entry-header">
                    <hgroup> 
                    <?php bricks_post_title(); ?>
                    </hgroup>          
                </header>
                <div class="clearfix"></div>
    
                <div class="entry-content">
                    <?php bricks_before_entry_content(); ?>
                
                    <div class="entry-content">
                        <?php the_content(); ?>
                        <?php wp_link_pages( bricks_link_pages_args() ); ?>
                    </div><!-- .entry-content -->
                    
                <footer class="entry-meta">
                    <?php edit_post_link( '<span class="edit-icon"></span>'. __( 'Edit', 'bricks' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-meta -->
                
                <div class="clearfix"></div>
                
                <?php comments_template( '', true ); ?>
            
            <div class="left-post-shadow"></div>
            <div class="right-post-shadow"></div>    
            </article><!-- #post-<?php the_ID(); ?> -->
            
            <?php bricks_after_single(); ?>
                
            <div class="clearfix"></div>
                
			<?php endwhile; // end of the loop. ?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php if( bricks_theme_option( 'page_sidebar' ) == 'page-sidebar' ) {
	      get_sidebar();
	  } ?>
<?php get_footer(); ?>