<?php
/**
 * Post presenter for posts post type.
 *
 * @package Bricks
 * @since 1.0.0
 */
bricks_before_article(); ?>

        <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <?php $post_format = strtolower( get_post_format() ); ?>
        <?php if( $post_format == '' || $post_format == 'gallery' || $post_format == 'chat' ) : ?>
			<header class="entry-header">
            	<hgroup>
					<?php bricks_post_title(); ?>
				</hgroup>       
			</header>
        <?php endif; ?>
        <div class="clearfix"></div>
            
            <?php if ( is_search() || is_archive() || is_category() || is_tag() ) : ?> 
            <div class="entry-summary">
				<?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
			
            <?php else : ?>
            
			<div class="entry-content">
				<?php bricks_before_entry_content(); ?>
                <?php
					  if( $post_format == 'chat' && !( post_password_required() ) ) {
						  echo bricks_chat_content();
					  } elseif( $post_format == 'quote' && !( post_password_required() ) ) {
						  echo bricks_quote_content();		
					  } else {
						  the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>' ) );
					  } ?>
				<?php wp_link_pages( bricks_link_pages_args() ); ?>
                
				<?php bricks_after_entry_content(); ?>
			</div><!-- .entry-content -->
            <?php endif; ?>
			<div class="clearfix"></div>
            
			<footer class="entry-meta">>
                <?php bricks_entry_meta_date(); ?>
				<?php bricks_post_footer(); ?>
			</footer>
			<div class="clearfix"></div>

		</li><!-- #post-<?php the_ID(); ?> -->
        <?php bricks_after_article(); ?>