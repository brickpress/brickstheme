<?php
/**
 * Post presenter for featured posts.
 *
 * @package Bricks
 * @subpakage Templates
 * @since 1.0.0
 */

global $feature_class;

	bricks_before_article(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( $feature_class ); ?>>
        
			<header class="entry-header">
            	<hgroup>
					<?php bricks_post_title(); ?> 
				</hgroup>       
			</header>
            <div class="clearfix"></div>

			<div class="entry-summary">
                <?php the_excerpt(); ?>
			</div><!-- .entry-content -->
			<div class="clearfix"></div>
		
		</article><!-- #post-<?php the_ID(); ?> -->
        <?php bricks_after_article(); ?>