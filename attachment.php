<?php
/**
 * Displays a single attachment.
 *
 * @package Cubricks
 * @since 1.0.0
 */
get_header(); ?>

        <div id="primary">
    
            <?php cubricks_before_content(); ?>
            <div id="content" role="main">
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           
			<?php cubricks_before_article(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    			
                <header class="entry-header">
                    <hgroup>
                    <h1 class="entry-title"><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title( $post->post_parent ); ?>&raquo; <?php the_title(); ?></a>
                    </h1>
                    </hgroup>
                </header>
                <div class="clearfix"></div>
               
                <div class="entry">

				<?php if ( wp_attachment_is_image() ) :
                
                    $content_width = cubricks_theme_option('content_width');

                    $attachments = array_values( get_children( array( 'post_parent' => $post->post_parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID' ) ) );
                    foreach ( $attachments as $k => $attachment ) {
                        if ( $attachment->ID == $post->ID )
                            break;
                    }
                    $k++;
                    // If there is more than 1 image attachment in a gallery
                    if ( count( $attachments ) > 1 ) {
                        if ( isset( $attachments[ $k ] ) )
                            $next_attachment_url = get_attachment_link( $attachments[ $k ]->ID );
                        else
                            $next_attachment_url = get_attachment_link( $attachments[ 0 ]->ID );
                    } else {
                        $next_attachment_url = wp_get_attachment_url();
                    }

                    $metadata = wp_get_attachment_metadata();
                    printf( '<h5>'. __( 'Full size is %s pixels', 'cubricks' ). '</h5>',
                        sprintf( '<a href="%1$s" title="%2$s">%3$s &times; %4$s</a>',
                            wp_get_attachment_url(),
                            esc_attr( __( 'Link to full-size image', 'cubricks' ) ),
                            $metadata['width'],
                            $metadata['height']
                        )
                    );

                    wp_link_pages( cubricks_link_pages_args() ); ?>

                    <div class="attachment-image">
                        <p class="attachment-image"><a href="<?php echo $next_attachment_url; ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment"><?php echo wp_get_attachment_image( $post->ID, array( $content_width, 700 ) ); ?></a></p>
                        <div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); ?></div>
                        <div class="image-description"><?php if ( !empty($post->post_content) ) the_content(); ?></div>
                    </div>
					<div class="clearfix"></div>
                    
                    <div class="navigation-attachment">
                        <div class="attachment-nav-left"><?php previous_image_link(); ?></div>
                        <div class="attachment-nav-right"><?php next_image_link(); ?></div>
                    </div>
    
                    <?php else : ?>
                    
                        <p><?php _e( 'View file:', 'cubricks' ); ?> <a href="<?php echo wp_get_attachment_url(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment"><?php echo basename( get_permalink() ); ?></a></p>
                        <?php the_content( __( '(More ...)' , 'cubricks' ) ); ?>
                        
                        <?php wp_link_pages( cubricks_link_pages_args() ); ?>
                        
                        <?php endif; ?>
    
                    <div class="bottom-of-entry">&nbsp;</div>
                    <div class="clearfix"></div>
                </div><!-- .entry -->
				
                <?php if( cubricks_theme_option('author_avatar') == 'show_avatar' )
						  cubricks_author_meta(); ?>
                
                <footer class="entry-meta">
                    <?php edit_post_link( '<span class="edit-icon"></span>'. __( 'Edit', 'cubricks' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-meta -->
                
                <?php comments_template( '', true ); ?>
            
            <?php if( cubricks_theme_option('article_container') == 'no-shadow' ) : ?>
            <div class="post-no-shadow"></div>
            <?php else : ?>
            <div class="left-post-shadow"></div>
            <div class="right-post-shadow"></div>
            <?php endif; ?>   
            </article><!-- #post-<?php the_ID(); ?> -->
            
            <?php cubricks_after_single(); ?>
                
            <div class="clearfix"></div>
        <?php endwhile; ?>
        <?php endif; ?>

        </div><!-- #content -->
    <?php cubricks_after_content(); ?>

    </div><!-- #primary -->
 
<?php if( cubricks_theme_option( 'singular_sidebar' ) == 'sidebar' ) {
	      get_sidebar();
	  } ?>
<?php get_footer(); ?>