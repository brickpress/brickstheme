<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package Bricks
 * @since Bricks 1.0.0
 */
get_header(); ?>

		<div id="primary">
        
        <?php bricks_before_content(); ?>
			<div id="content" role="main">
			
			<?php if ( have_posts() ) : ?>

				<?php
					/* Queue the first post, that way we know
					 * what author we're dealing with (if that is the case).
					 *
					 * We reset this later so we can run the loop
					 * properly with a call to rewind_posts().
					 */
					the_post();
				?>

				<?php //bricks_archive_header(); ?>
                
				<?php
					/* Since we called the_post() above, we need to
					 * rewind the loop back to the beginning that way
					 * we can run the loop properly, in full.
					 */
					rewind_posts();
				?>
                
				<div id="author-info">
					<div id="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'bricks_author_bio_avatar_size', 100 ) ); ?>
					</div><!-- #author-avatar -->
                    
					<?php
                    // If a user has filled out their description, show a bio on their entries.
                    if ( get_the_author_meta( 'description' ) ) : ?>
					<div id="author-description">
						<h2><?php printf( __( 'About %s', 'bricks' ), get_the_author() ); ?></h2>
						<?php the_author_meta( 'description' ); ?>
					</div><!-- #author-description	-->
                    <?php endif; ?>
                    
				</div><!-- #entry-author-info -->
				

            <?php while ( have_posts() ) : the_post(); ?>
             
			<?php bricks_before_article(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class($article_container); ?> <?php if( $article_container == 'no-box' ) {
                echo 'style="padding: 0; border-radius: 0; -moz-border-radius: 0; -webkit-border-radius: 0; -khtml-border-radius: 0;"'; } ?>>

                <?php bricks_post_date(); ?>
                
                <header class="entry-header">
                    <hgroup> 
                    <?php bricks_post_title(); ?>
                    </hgroup>          
                </header>
                
                <?php bricks_post_format_icon(); ?>
                
                <div class="clearfix"></div>
      
                <div class="entry-content">
                    <?php bricks_before_entry_content(); ?>
                    <?php the_excerpt(); ?>
                    <?php bricks_after_entry_content(); ?>
                </div><!-- .entry-content -->
                
    		<div class="left-post-shadow"></div>
            <div class="right-post-shadow"></div> 
            </article><!-- #post-<?php the_ID(); ?> -->
			<?php bricks_after_article(); ?>
            
            <?php endwhile; ?>
            
            <?php bricks_content_nav();  ?>
              
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