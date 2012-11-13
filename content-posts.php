<?php
/**
 * This is the default template for posts.
 *
 * @package Cubricks
 * @since 1.0.0
 */
?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
        <?php $post_format = strtolower( get_post_format() ); ?>
        <?php if( $post_format == '' || $post_format == 'gallery' || $post_format == 'chat' || $post_format == 'audio' )
				cubricks_entry_header(); ?>
        
        <div class="clearfix"></div>
            
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
			<div class="clearfix"></div>
            
			<footer class="entry-meta">
                <?php cubricks_post_date_text(); ?>
                <?php cubricks_comments_link(); ?>
                <br />
                <?php cubricks_entry_meta(); ?>
                <?php edit_post_link( '<span class="edit-icon"></span>'. __( 'Edit', 'cubricks' ), '<span class="edit-link">', '</span>' ); ?>
			</footer>
			<div class="clearfix"></div>
       		
            <?php if( cubricks_theme_option('article_container') == 'no-shadow' ) : ?>
            <div class="post-no-shadow"></div>
            <?php else : ?>
            <div class="left-post-shadow"></div>
            <div class="right-post-shadow"></div>
            <?php endif; ?>
		</article><!-- #post-<?php the_ID(); ?> -->