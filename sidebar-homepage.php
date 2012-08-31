<?php
/**
 * The Sidebar containing the widget areas for the Slider Homepage.
 *
 * @package Cubricks
 * @since Cubricks 1.0.1
 */
 
if ( ! is_active_sidebar( 2 ) && ! is_active_sidebar( 3 ) && ! is_active_sidebar( 4 ) )
	return;
		
bricks_before_primary_sidebar(); ?>
<div id="homepage-sidebar" <?php slider_homepage_sidebar_class(); ?> role="complementary">
	<?php if ( is_active_sidebar( 2 ) ) : ?>
	<div class="widget-area">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- .first .homepage-widgets -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 3 ) ) : ?>
	<div class="widget-area">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- .second .homepage-widgets -->
    <?php endif; ?>
    
    <?php if ( is_active_sidebar( 4 ) ) : ?>
	<div class="widget-area">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div><!-- .third .homepage-widgets -->
	<?php endif; ?>
</div><!-- #secondary .widget-area -->