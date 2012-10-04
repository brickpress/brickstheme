<?php
/**
 * Displays the post archives in reverse chronological order.
 *
 * @package Cubricks
 * @since 1.0.0
 */
get_header(); ?>

	<div id="primary">

        <?php bricks_before_content(); ?>
        
        <div id="content" role="main">
        <?php bricks_archive_header(); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <?php bricks_before_article(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <?php $post_format = strtolower( get_post_format() ); ?>
            <?php if( $post_format == '' || $post_format == 'gallery' || $post_format == 'chat' || $post_format == 'audio' ) : ?>
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
					} elseif( has_post_format('gallery') ) {
						echo bricks_gallery_content();
					} elseif( has_post_format('link') ) {
						echo bricks_link_content();
					} elseif(  has_post_format('quote') ) {
						echo bricks_quote_content();
					} elseif(  has_post_format('status') ) {
						echo bricks_status_content();
					} else {
						the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>' ) );
					} ?>
			  
                <?php bricks_after_entry_content(); ?>
            </div><!-- .entry-content -->
            
            <footer class="entry-meta">
                <?php bricks_post_date_text(); ?>
                <?php bricks_comments_link(); ?>
                <br />
                <?php bricks_post_footer(); ?>
                <?php edit_post_link( '<span class="edit-icon"></span>'. __( 'Edit', 'bricks' ), '<span class="edit-link">', '</span>' ); ?>
            </footer>
         
            <?php if( bricks_theme_option('article_container') == 'no-shadow' ) : ?>
            <div class="post-no-shadow"></div>
            <?php else : ?>
            <div class="left-post-shadow"></div>
            <div class="right-post-shadow"></div>
            <?php endif; ?>   
        </article><!-- #post-<?php the_ID(); ?> -->
        <?php bricks_after_article(); ?>
        
        <?php endwhile; ?>
        
        <?php bricks_content_nav(); ?>
          
        <?php else : ?>
        
        <?php bricks_no_posts(); ?>
            
        <?php endif; ?>
    
        </div><!-- #content -->
    <?php bricks_after_content(); ?>

    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>