<?php
/**
 * This is the default template for posts.
 *
 * @package Cubricks
 * @since 1.0.0
 */
?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
            <?php $post_format = strtolower( get_post_format() );
			if( $post_format == '' || $post_format == 'gallery' || $post_format == 'audio' || $post_format == 'chat' || $post_format == 'status' )
				cubricks_post_title(); ?>
			</header>
            
			<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                <div class="featured-post">
                    <?php _e( 'Featured post', 'cubricks' ); ?>
                </div>
            <?php endif; ?>

			<?php if( $post_format == 'link' ) : ?>
            	<header><?php _e( 'Link', 'cubricks' ); ?></header>
            <?php endif; ?>
            	
            <div class="entry-content">
                <?php cubricks_entry_content(); ?>
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