<?php
/**
 * Template Name: Get Images
 *
 * @package Bricks
 * @since Bricks 1.0.0
 */
get_header(); ?>

		<div id="primary">
 
        <?php bricks_before_content(); ?>
			<div id="content" role="main">
            
            		<?php $sticky = get_option( 'sticky_posts' );
					 $get_images = array(
							'post_not__in' => $sticky,
							'post_status' => 'publish',
							'posts_per_page' => 10,
							'no_found_rows' => true,
						);
	
		// The Featured Posts query.
		//$get_images = new WP_Query( $featured_args );
		get_the_image( $args = array() );
		?>
			<?php if ( have_posts() ) : ?>
            
            <?php while ( have_posts() ) : the_post(); ?>
            
            <div id="get-images">
            
            <?php if ( wp_attachment_is_image() ) :
                    
                        $content_width = bricks_theme_option('content_width');

                        $attachments = array_values( get_children( array( 'post_parent' => $post->post_parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID' ) ) );
                        foreach ( $attachments as $k => $attachment ) {
                            if ( $attachment->ID == $post->ID )
                                break;
                        }

                        $metadata = wp_get_attachment_metadata();
                        printf( __( 'Full size is %s pixels', 'bricks' ),
                            sprintf( '<a href="%1$s" title="%2$s">%3$s &times; %4$s</a>',
                                wp_get_attachment_url(),
                                esc_attr( __( 'Link to full-size image', 'bricks' ) ),
                                $metadata['width'],
                                $metadata['height']
                            )
                        );

                        wp_link_pages( bricks_link_pages_args() ); ?>

                        <div class="attachment-image">
                            <p class="attachment-image"><a href="<?php echo $next_attachment_url; ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment"><?php echo wp_get_attachment_image( $post->ID, array( $content_width, 700 ) ); ?></a></p>
                            <div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); ?></div>
                            <div class="image-description"><?php if ( !empty($post->post_content) ) the_content(); ?></div>
                        </div>
            
            </div>
                                <?php endif; ?>

                    <div class="bottom-of-entry">&nbsp;</div>
                    <div class="clearfix"></div>
                    
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