<?php
/**
 * The template for displaying 404 Error pages.
 *
 * @package Cubricks Theme
 * @subpackage Page Templates
 * @since Cubricks 1.0.0
 */
get_header();

$article_container = bricks_theme_option('article_container'); ?>

	<div id="primary">
    
        <?php bricks_before_content(); ?>
        <div id="content" role="main">
        <?php bricks_search_header(); ?>

        <?php bricks_before_article(); ?>
        <article id="post-0" class="post error404 not-found <?php echo $article_container; ?>">

            <div class="entry-content">        
            	<?php bricks_no_posts(); ?>
                
                <div class="widget widget_search">
                <?php the_widget( 'Bricks_Search_Widget', array( 'search_text'   => 'Search', 'search_submit' => 'Search' ), array( 'widget_id' => 'Search' ) ); ?>
                </div>
                <br /><br/>
                <?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => 'Search' ) ); ?>
				
                <hr /><br/>
                <div class="widget widget_categories">
                    <h2 class="widgettitle"><?php _e( 'Most Used Categories', 'bricks' ); ?></h2>
                    <ul>
                    <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
                    </ul>
                </div>
				<hr /><br/>
                
                <?php
                /* translators: %1$s: smilie */
                $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'bricks' ), convert_smilies( ':)' ) ) . '</p>';
                the_widget( 'WP_Widget_Archives', array('count' => 1 , 'dropdown' => 0 ), array( 'after_title' => '</h2>'.$archive_content ) );
                ?>
                <hr /><br/>

                <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

			</div><!-- .entry-content -->
        
            <?php if( bricks_theme_option('article_container') == 'no-shadow' ) : ?>
            <div class="post-no-shadow"></div>
            <?php else : ?>
            <div class="left-post-shadow"></div>
            <div class="right-post-shadow"></div>
            <?php endif; ?>  
        </article><!-- #post-0-->
        <?php bricks_after_article(); ?>

        </div><!-- #content -->
    <?php bricks_after_content(); ?>

    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>