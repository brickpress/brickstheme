<?php
/**
 * This is the default template for posts.
 *
 * @package Cubricks
 * @since 1.0.0
 */
cubricks_before_article(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
			<?php $entry_date = cubricks_theme_option('entry_date');
				  if( is_page_template('showcase.php') && $entry_date == 'graphic' ) {
                      cubricks_post_date_graphic();
                  }
            ?>
                
        <?php $post_format = strtolower( get_post_format() ); ?>
        <?php if( $post_format == '' || $post_format == 'gallery' || $post_format == 'chat' || $post_format == 'audio' ) : ?>
			<header class="entry-header">
            	<hgroup>
					<?php cubricks_post_title(); ?>
                    <?php if( is_page_template('showcase.php') && $entry_date == 'text' ) {
					  	      cubricks_post_date_text();
					      } ?>
				</hgroup>       
			</header>
        <?php endif; ?>
        <div class="clearfix"></div>
            
            <div class="entry-content">
                <?php cubricks_before_entry_content();
				
					if( has_post_format('chat') ) {
						echo cubricks_chat_content();
					} elseif( has_post_format('gallery') ) {
						echo cubricks_gallery_content();
					} elseif( has_post_format('link') ) {
						echo cubricks_link_content();
					} elseif(  has_post_format('quote') ) {
						echo cubricks_quote_content();
					} elseif(  has_post_format('status') ) {
						echo cubricks_status_content();
					} else {
						the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>' ) );
					} ?>
                
                <?php wp_link_pages( cubricks_link_pages_args() ); ?>
                
                <?php cubricks_after_entry_content(); ?>
            </div><!-- .entry-content -->        
			<div class="clearfix"></div>
            
			<footer class="entry-meta">
                <?php cubricks_post_date_text(); ?>
                <?php cubricks_comments_link(); ?>
                <br />
                <?php cubricks_post_footer(); ?>
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
        <?php cubricks_after_article(); ?>