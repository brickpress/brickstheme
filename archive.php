<?php
/**
 * Post presenter for posts post type.
 *
 * @package Bricks
 * @since 1.0.0
 */
get_header(); 

$article_container = bricks_theme_option('article_container'); ?>

	<div id="primary">

        <?php bricks_before_content(); ?>
        
        <div id="content" role="main">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <?php bricks_before_article(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class($article_container); ?> <?php if( $article_container == 'sharp-edges' ) {
            echo 'style="padding: 0; border-radius: 0; -moz-border-radius: 0; -webkit-border-radius: 0; -khtml-border-radius: 0;"'; } ?>>
            
            <?php $post_format = strtolower( get_post_format() ); ?>
            <?php if( $post_format == '' || $post_format == 'gallery' ) : ?>
            <header class="entry-header">
                <hgroup>
                <?php bricks_post_title(); ?>
                </hgroup>
            </header>
            <?php endif; ?>
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
						the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>' ) );
					} ?>
			  
                <?php bricks_after_entry_content(); ?>
            </div><!-- .entry-content -->
            
            <footer class="entry-meta">
                <?php bricks_post_date_text(); ?>
                <?php bricks_comments_link(); ?>
                <?php bricks_post_footer(); ?>
                <?php edit_post_link( '<span class="edit-icon"></span>'. __( 'Edit', 'bricks' ), '<span class="edit-link">', '</span>' ); ?>
            </footer>
         
        <div class="left-post-shadow"></div>
        <div class="right-post-shadow"></div>    
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

<?php if( bricks_theme_option( 'singular_sidebar' ) == 'sidebar' ) {
	      get_sidebar();
	  } ?>
<?php get_footer(); ?>