<?php
/**
 * This is the default template to display posts.
 *
 * @package Cubricks Theme
 *
 * @since 1.0.0
 */
?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
            <?php $post_format = strtolower( get_post_format() );
			if( $post_format == '' || $post_format == 'gallery' || $post_format == 'audio' || $post_format == 'chat' )
				cubricks_post_title(); ?>
			</header><!-- .entry-header -->
            
			<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                <div class="featured-post">
                    <?php _e( 'Featured post', 'cubricks' ); ?>
                </div>
            <?php endif; ?>
            
            <?php if( $post_format == 'status' ) : ?>
            <div class="entry-header">
                <header>
                    <h1><?php the_author(); ?></h1>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'cubricks' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_date(); ?></a></h2>
                </header>
                <?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'cubricks_status_avatar', '48' ) ); ?>
            </div><!-- .entry-header -->
            <?php endif; ?>

			<?php if( $post_format == 'link' ) : ?>
            	<header><span class="link-icon"><span><?php _e( 'Link', 'cubricks' ); ?></span></span></header><!-- .entry-header -->
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
			</footer>
            	<?php cubricks_comments_link(); ?>
           		<?php cubricks_edit_link(); ?>
			<div class="clear"></div>

            <div class="left-post-shadow"></div>
            <div class="right-post-shadow"></div>
		</article><!-- #post-<?php the_ID(); ?> -->