<?php
/**
 * Post presenter for posts post type.
 *
 * @package Bricks
 * @since 1.0.0
 */
global $theme_options;

$article_container = bricks_theme_option('article_container');
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class($article_container); ?> <?php if( $article_container == 'no-box' ) {
                echo 'style="border-radius: 0; -moz-border-radius: 0; -webkit-border-radius: 0; -khtml-border-radius: 0;"'; } ?>>
        
        <?php $post_format = strtolower( get_post_format() ); ?>
        <?php if( $post_format == '' || $post_format == 'gallery' ) : ?>
			<header class="entry-header">
            	<hgroup>
					<?php bricks_post_title(); ?>
				</hgroup>       
			</header>
        <?php endif; ?>
        <div class="clearfix"></div>
            
            <?php if ( is_search() || is_archive() || is_category() || is_tag() ) : ?> 
            <div class="entry-summary">
				<?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
			
            <?php else : ?>
            
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
						the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>' ) );
					} ?>
                
                <?php wp_link_pages( bricks_link_pages_args() ); ?>
                
                <?php bricks_after_entry_content(); ?>
            </div><!-- .entry-content -->
            
            <?php endif; ?>
			<div class="clearfix"></div>
            
			<footer class="entry-meta">
				<?php bricks_post_footer(); ?>
                <?php bricks_comments_link(); ?>
                <?php edit_post_link( '<span class="edit-icon"></span>'. __( 'Edit', 'bricks' ), '<span class="edit-link">', '</span>' ); ?>
			</footer>
			<div class="clearfix"></div>
       	
            <div class="left-post-shadow"></div>
            <div class="right-post-shadow"></div> 
		</article><!-- #post-<?php the_ID(); ?> -->
        <?php bricks_after_article(); ?>