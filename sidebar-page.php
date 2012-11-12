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

			<?php cubricks_before_article(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="entry-header">
                    <hgroup> 
                    <?php cubricks_post_title(); ?>
                    </hgroup>          
                </header>
                <div class="clearfix"></div>
    
                <div class="entry-content">
                <?php cubricks_before_entry_content();
				
				$post_format = strtolower( get_post_format() );
				
                    if( $post_format == 'chat' ) {
						echo cubricks_chat_content();
					} elseif( has_post_format('gallery') ) {
						echo cubricks_gallery_content();
					} elseif( has_post_format('link') ) {
						echo cubricks_link_content();
					} elseif(  $post_format == 'quote' ) {
						echo cubricks_quote_content();
					} elseif(  $post_format == 'status' ) {
						echo cubricks_status_content();
					} else {	
						the_content();
					} ?>

                    <?php wp_link_pages( cubricks_link_pages_args() ); ?>
                </div><!-- .entry-content -->
                <div class="clearfix"></div>
                
                <footer class="entry-meta">
                    <?php edit_post_link( '<span class="edit-icon"></span>'. __( 'Edit', 'cubricks' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-meta -->
                
                <?php comments_template( '', true ); ?>
            
				<?php if( cubricks_theme_option('article_container') == 'no-shadow' ) : ?>
                <div class="post-no-shadow"></div>
                <?php else : ?>
                <div class="left-post-shadow"></div>
                <div class="right-post-shadow"></div>
                <?php endif; ?>    
            </article><!-- #post-<?php the_ID(); ?> -->
            
            <?php cubricks_after_single(); ?>
                
            <div class="clearfix"></div>
                
			<?php endwhile; // end of the loop. ?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>