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
        <?php if( $post_format == '' || $post_format == 'gallery' || $post_format == 'chat' || $post_format == 'audio' || $post_format == 'link' )
				cubricks_entry_header(); ?>
                     
        <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'cubricks' ); ?>
		</div>
		<?php endif; ?>

            <div class="entry-content">
                <?php
					if( has_post_format('chat') ) {
						echo cubricks_chat_content();
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
            <?php if( has_post_format('link') || has_post_format('quote') | has_post_format('aside') ) : ?>
            	<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'cubricks' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_date(); ?></a>
            <?php else : ?>
                <?php cubricks_entry_meta(); ?>
            <?php endif; ?>
                <?php cubricks_comments_link(); ?>
                <?php edit_post_link( '<span class="edit-icon"></span>'. __( 'Edit', 'cubricks' ), '<span class="edit-link">', '</span>' ); ?>
			</footer>
			<div class="clear"></div>

            <div class="left-post-shadow"></div>
            <div class="right-post-shadow"></div>
		</article><!-- #post-<?php the_ID(); ?> -->