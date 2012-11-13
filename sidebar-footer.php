<?php
/**
 * The sidebar before the footer.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Cubricks
 * @since Cubricks 1.0.0
 */
?>
	<?php 
	if( !is_active_sidebar('sidebar-f1') && !is_active_sidebar('sidebar-f2') && !is_active_sidebar('sidebar-f3') && !is_active_sidebar('sidebar-f4') )
		return;
	?>
	
    <div id="sidebar-footer" class="wrapper">
        <div id="supplementary" <?php cubricks_footer_sidebar_class(); ?>>
        
        <?php if ( is_active_sidebar( 'sidebar-f1' ) ) : ?>	    
            <div id="first" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-f1' ); ?>
            </div><!-- #first .widget-area -->
        <?php endif; ?>
        
        <?php if ( is_active_sidebar( 'sidebar-f2' ) ) : ?>
            <div id="second" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-f2' ); ?>
            </div><!-- #second .widget-area -->
        <?php endif; ?>
    
        <?php if ( is_active_sidebar( 'sidebar-f3' ) ) : ?>	    
            <div id="third" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-f3' ); ?>
            </div><!-- #third .widget-area -->
        <?php endif; ?>
        
        <?php if ( is_active_sidebar( 'sidebar-f4' ) ) : ?>
            <div id="four" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-f4' ); ?>
            </div><!-- #fourth .widget-area -->
        <?php endif; ?>
        </div><!-- #supplementary -->
	</div><!-- #sidebar-footer .wrapper -->