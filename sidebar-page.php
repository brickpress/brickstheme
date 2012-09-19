<?php
/**
 * Template Name: Sidebar Page Template
 * Description: A Page Template that shows a page with a sidebar.
 *
 * Sidebar bar layout will be the same with the one selected on the
 * theme options admin page.
 *
 * @package Cubricks
 */
get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

			<?php bricks_before_article(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <?php edit_post_link( '<span class="edit-icon"></span>'. __( 'Edit', 'bricks' ), '<span class="edit-link">', '</span>' ); ?>
                <header class="entry-header">
                    <hgroup> 
                    <?php bricks_post_title(); ?>
                    </hgroup>          
                </header>
                <div class="clearfix"></div>
    
                <div class="entry-content">
                <?php bricks_before_entry_content();
				
				$post_format = strtolower( get_post_format() );
				
                    if( $post_format == 'chat' ) {
						echo bricks_chat_content();
					} elseif( has_post_format('link') ) {
						echo bricks_link_content();
					} elseif(  $post_format == 'quote' ) {
						echo bricks_quote_content();
					} elseif(  $post_format == 'status' ) {
						echo bricks_status_content();
					} else {	
						the_content();
					} ?>

                    <?php wp_link_pages( bricks_link_pages_args() ); ?>
                </div><!-- .entry-content -->
                <div class="clearfix"></div>
                
                <?php comments_template( '', true ); ?>
            
				<?php if( bricks_theme_option('article_container') == 'no-shadow' ) : ?>
                <div class="post-no-shadow"></div>
                <?php else : ?>
                <div class="left-post-shadow"></div>
                <div class="right-post-shadow"></div>
                <?php endif; ?>    
            </article><!-- #post-<?php the_ID(); ?> -->
            
            <?php bricks_after_single(); ?>
                
            <div class="clearfix"></div>
                
			<?php endwhile; // end of the loop. ?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>