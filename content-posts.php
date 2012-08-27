<?php
/**
 * This is the default template for posts.
 *
 * @package Cubricks
 * @since 1.0.0
 */
bricks_before_article(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <?php $post_format = strtolower( get_post_format() ); ?>
        <?php if( $post_format == '' || $post_format == 'gallery' || $post_format == 'chat' ) : ?>
			<header class="entry-header">
            	<hgroup>
					<?php bricks_post_title(); ?>
				</hgroup>       
			</header>
        <?php endif; ?>
        <div class="clearfix"></div>
            
            <div class="entry-content">
                <?php bricks_before_entry_content();
				
					if( has_post_format('chat') ) {
						echo bricks_chat_content();
					} elseif( has_post_format('link') ) {
						echo bricks_link_content();
					} elseif(  has_post_format('quote') ) {
						echo bricks_quote_content();
					} elseif(  has_post_format('status') ) {
						echo bricks_status_content();
					} else {
						the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>' ) );
					} ?>
                
                <?php wp_link_pages( bricks_link_pages_args() ); ?>
                
                <?php bricks_after_entry_content(); ?>
            </div><!-- .entry-content -->        
			<div class="clearfix"></div>
            
			<footer class="entry-meta">
                <?php bricks_post_date_text(); ?>
                <?php bricks_comments_link(); ?>
                <br />
                <?php bricks_post_footer(); ?>
                <?php edit_post_link( '<span class="edit-icon"></span>'. __( 'Edit', 'bricks' ), '<span class="edit-link">', '</span>' ); ?>
			</footer>
			<div class="clearfix"></div>
       	
            <div class="left-post-shadow"></div>
            <div class="right-post-shadow"></div> 
		</article><!-- #post-<?php the_ID(); ?> -->
        <?php bricks_after_article(); ?>