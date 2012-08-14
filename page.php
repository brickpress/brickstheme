<?php
/**
 * The default template for displaying all pages.
 *
 * @package Bricks
 * @subpackage Bricks
 * @since Bricks 1.0.0
 */
get_header();

$article_container = bricks_theme_option('article_container'); ?>

		<div id="primary">
			<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

			<?php bricks_before_article(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class($article_container); ?> <?php if( $article_container == 'sharp-edges' ) {
                echo 'style="padding: 0; border-radius: 0; -moz-border-radius: 0; -webkit-border-radius: 0; -khtml-border-radius: 0;"'; } ?>>
                
                <?php $post_format = strtolower( get_post_format() ); ?>
                <header class="entry-header">
                    <hgroup> 
                    <?php bricks_post_title(); ?>
                    </hgroup>          
                </header>
                <div class="clearfix"></div>
    
                <div class="entry-content">
                <?php bricks_before_entry_content();
				
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

<?php if( bricks_theme_option( 'singular_sidebar' ) == 'sidebar' ) {
	      get_sidebar();
	  } ?>
<?php get_footer(); ?>