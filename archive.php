<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Cubricks already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Cubricks
 * @since Cubricks 1.0.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">
        
			<?php cubricks_archive_header(); ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="entry-header">
                <?php $post_format = strtolower( get_post_format() );
                if( $post_format == '' || $post_format == 'gallery' || $post_format == 'audio' || $post_format == 'chat' || $post_format == 'status' )
                    cubricks_post_title(); ?>
                </header>

                <div class="entry-content">
					<?php cubricks_entry_content(); ?>
                    <?php wp_link_pages( cubricks_link_pages_args() ); ?>
                </div><!-- .entry-content -->        
                <div class="clear"></div>
                
                <footer class="entry-meta">
                    <?php cubricks_entry_meta(); ?>
                    <?php cubricks_comments_link(); ?>
                    <?php edit_post_link( '<span class="edit-icon"></span>'. __( 'Edit', 'cubricks' ), '<span class="edit-link">', '</span>' ); ?>
                </footer>
                <div class="clear"></div>
    
                <div class="left-post-shadow"></div>
                <div class="right-post-shadow"></div>
            </article><!-- #post-<?php the_ID(); ?> -->

		<?php endwhile;

			cubricks_content_nav( 'nav-below' ); ?>

		<?php else : ?>
			<?php cubricks_no_posts(); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>