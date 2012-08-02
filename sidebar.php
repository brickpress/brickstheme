<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package Bricks
 * @since Bricks 1.0.0
 */
$current_layout = bricks_theme_option('sidebar_layout');

if ( 'no-sidebar' != $current_layout ) :
?>
		<?php bricks_before_primary_sidebar(); ?>
		<div id="secondary" class="widget-area" role="complementary">
        <span class="sbar-top"></span>
        	
			<?php if ( ! dynamic_sidebar( 'Main Sidebar' ) ) : ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'bricks' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'bricks' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
            
        <span class="sbar-bottom"></span>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>