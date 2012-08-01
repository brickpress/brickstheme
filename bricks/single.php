<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package Bricks
 * @subpackage Templates
 * @since Bricks 1.0.0
 */
global $theme_options, $post;

$article_container = bricks_theme_option('article_container');

get_header(); ?>

		<div id="primary">
  
        	<?php bricks_before_content(); ?>
			<div id="content" role="main">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           
			<?php bricks_before_single(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class($article_container); ?> <?php if( $article_container == 'no-box' ) {
                echo 'style="padding: 0; border-radius: 0; -moz-border-radius: 0; -webkit-border-radius: 0; -khtml-border-radius: 0;"'; } ?>>

                <?php bricks_post_date(); ?>
                
                <?php $post_format = strtolower( get_post_format() ); ?>
                <header class="entry-header">
                    <hgroup> 
                    <?php bricks_post_title(); ?>
                    </hgroup>          
                </header>
                <div class="clearfix"></div>
                  
                <div class="entry-content">
                    <?php bricks_before_entry_content(); ?>
                    
                    <?php if( $post_format == 'chat' ) {
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
                    
                    <?php wp_link_pages( bricks_link_pages_args() ); ?>
                    
                    <?php bricks_after_entry_content(); ?>
                </div><!-- .entry-content -->
                
                <?php /*
$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ); 
$attachments = get_posts($args);
if ($attachments) {
	foreach ( $attachments as $attachment ) {
		echo apply_filters( 'the_title' , $attachment->post_title );
		the_attachment_link( $attachment->ID , false );
	}
} */
?>

<?php 
 if ( has_post_thumbnail()) {
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
   //echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
   echo '<a href="' . the_permalink() . '" title="' . the_title_attribute('echo=0') . '" >';
   echo get_the_post_thumbnail($post->ID, 'bricks-slider-medium' );
   echo the_title();
   echo '</a>';
 }
?>

<br />
<h3>All Attachments</h3>
<?php
$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ); 
$attachments = get_posts( $args );
if ($attachments) {
	foreach ( $attachments as $post ) {
		setup_postdata($post);
		$post->the_title();
		the_attachment_link($post->ID, false);
		the_excerpt();
	}
	printf( '%1$s %2$s %3$s',
				$post->the_title(),
		the_attachment_link($post->ID, false),
		the_excerpt()
	);
}
?>
            	
                <footer class="entry-meta">
                    <?php bricks_post_footer(); ?>
                    <?php edit_post_link( '<span class="edit-icon"></span>'. __( 'Edit', 'bricks' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-meta -->
				
                <?php if( bricks_theme_option('author_avatar') == 'show_avatar' )
						  bricks_author_meta(); ?>
                
                <?php comments_template( '', true ); ?>
            
            <div class="left-post-shadow"></div>
            <div class="right-post-shadow"></div>    
            </article><!-- #post-<?php the_ID(); ?> -->
            
            <?php bricks_after_single(); ?>
                
            <div class="clearfix"></div>
        <?php endwhile; ?>
    	
			<nav class="pagination single">
			<span class="previous"><?php previous_post_link( '%link', sprintf( __( '%s Previous Post', 'bricks' ), '&larr;' ) ); ?></span>
			<span class="next"><?php next_post_link( '%link', sprintf( __( 'Next Post %s', 'bricks' ), '&rarr;' ) ); ?></span>
			</nav>

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