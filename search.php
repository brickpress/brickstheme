<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Bricks Theme
 * @subpackage Page Templates
 * @since Bricks 1.0.0
 */
global $theme_options;

$article_container = bricks_theme_option('article_container');
get_header(); ?>

	<div id="primary">
    
        <?php bricks_before_content(); ?>
        <div id="content" role="main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         
        <?php bricks_before_article(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class($article_container); ?> <?php if( $article_container == 'no-box' ) {
                echo 'style="padding: 0; border-radius: 0; -moz-border-radius: 0; -webkit-border-radius: 0; -khtml-border-radius: 0;"'; } ?>>
            
            <header class="entry-header">
                <hgroup>
                <?php bricks_post_title(); ?>
                </hgroup>
            </header>
            <div class="clearfix"></div>

            <div class="entry-content">
                <?php bricks_before_entry_content(); ?>
                <?php the_excerpt(); ?>
                <?php bricks_after_entry_content(); ?>
            </div><!-- .entry-content -->
            
            <footer class="entry-meta">
            	<?php bricks_post_footer(); ?>
                <?php bricks_comments_link(); ?>
                <?php edit_post_link( '<span class="edit-icon"></span>'. __( 'Edit', 'bricks' ), '<span class="edit-link">', '</span>' ); ?>
            </footer>
         
        <div class="left-post-shadow"></div>
        <div class="right-post-shadow"></div>    
        </article><!-- #post-<?php the_ID(); ?> -->
        <?php bricks_after_article(); ?>
        
        <?php endwhile; ?>
        
        <?php bricks_content_nav(); ?>
          
        <?php else : ?>
        
        <article id="post-0" class="post error404 not-found"<?php if( $article_container == 'no-box' ) {
                echo 'style="padding: 0; border-radius: 0; -moz-border-radius: 0; -webkit-border-radius: 0; -khtml-border-radius: 0;"'; } ?>>
        
            <div class="entry-content">        
            	<?php bricks_no_posts(); ?>
                
                <div class="widget widget_search">
                <?php the_widget( 'Bricks_Search_Widget', array( 'search_text'   => 'Search', 'search_submit' => 'Search' ), array( 'widget_id' => 'Search' ) ); ?>
                </div>
                
                <?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => 'Search' ) ); ?>

                <div class="widget widget_categories">
                    <h2 class="widgettitle"><?php _e( 'Most Used Categories', 'bricks' ); ?></h2>
                    <ul>
                    <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
                    </ul>
                </div>

                <?php
                /* translators: %1$s: smilie */
                $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'bricks' ), convert_smilies( ':)' ) ) . '</p>';
                the_widget( 'WP_Widget_Archives', array('count' => 1 , 'dropdown' => 0 ), array( 'after_title' => '</h2>'.$archive_content ) );
                ?>

                <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

			</div><!-- .entry-content -->
        
        <div class="left-post-shadow"></div>
        <div class="right-post-shadow"></div>    
        </article><!-- #post-0-->
        
        <?php bricks_after_article(); ?>
          
        <div class="clearfix"></div>
          
        <?php endif; ?>
    
        </div><!-- #content -->
    <?php bricks_after_content(); ?>

    </div><!-- #primary -->

<?php if( bricks_theme_option( 'singular_sidebar' ) == 'sidebar' ) {
	      get_sidebar();
	  } ?>
<?php get_footer(); ?>