<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Cubricks
 * @since Cubricks 1.0.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
            <?php cubricks_entry_header(); ?>
            
            <div class="clear"></div> 
                <div class="entry-content">
                    <?php
                        if( has_post_format('chat') ) {
                            echo cubricks_chat_content();
                        } elseif( has_post_format('gallery') ) {
                            echo cubricks_gallery_content();
                        } elseif( has_post_format('link') ) {
                            echo cubricks_link_content();
                        } elseif(  has_post_format('quote') ) {
                            echo cubricks_quote_content();
                        } else {
                            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>' ) );
                        }
                    ?>
                    <?php wp_link_pages( cubricks_link_pages_args() ); ?>
                </div><!-- .entry-content -->        
                <div class="clear"></div>
                
                <footer class="entry-meta">
                    <?php edit_post_link( '<span class="edit-icon"></span>'. __( 'Edit', 'cubricks' ), '<span class="edit-link">', '</span>' ); ?>
                </footer>
                <div class="clear"></div>
    
                <div class="left-post-shadow"></div>
                <div class="right-post-shadow"></div>
		</article><!-- #post-<?php the_ID(); ?> -->
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>