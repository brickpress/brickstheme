<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after.
 *
 * @package Cubricks
 * @subpackage Cubricks
 * @since Cubricks 1.0.0
 */
?>
			</div><!-- #main -->
		</div><!-- .inner-content -->
	</div>

<?php // if footer widget area is empty, no need to call the container

if( is_active_sidebar( 'sidebar-f1' ) || is_active_sidebar( 'sidebar-f2' ) || is_active_sidebar( 'sidebar-f3' ) || is_active_sidebar( 'sidebar-f4' ) || is_active_sidebar( 'sidebar-f5' ) || is_active_sidebar( 'sidebar-f6' ) ) : ?>

<div id="footer-sidebar-wrapper">
    <div class="inner-widget-footer"> 
    <?php bricks_before_footer(); ?>
    
        <div id="supplementary" <?php bricks_footer_sidebar_class(); ?>>
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
            <div id="fourth" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-f4' ); ?>
            </div><!-- #fourth .widget-area -->
            <?php endif; ?>
            
            <?php if ( is_active_sidebar( 'sidebar-f5' ) ) : ?>
            <div id="fifth" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-f5' ); ?>
            </div><!-- #fifth .widget-area -->
            <?php endif; ?>
            
            <?php if ( is_active_sidebar( 'sidebar-f6' ) ) : ?>
            <div id="sixth" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-f6' ); ?>
            </div><!-- #sixth .widget-area -->
            <?php endif; ?>
        </div><!-- #supplementary -->
    </div><!-- .footer-widget-inner -->
</div><!-- #footer-sidebar-wrapper -->
<?php endif; ?>       
        
        
<div id="footer-wrapper">
    <div class="inner-footer">
		<footer id="colophon" role="contentinfo">

        <?php $footer_logo = bricks_theme_option('footer_logo');
		      $footer_logo_url = get_theme_mod('footer_logo_url');
			  
		if( $footer_logo ) { ?>
			<div id="footer-logo">
                <a href="<?php echo esc_url( $footer_logo_url ); ?>"><img src="<?php echo esc_url( $footer_logo ); ?>" /></a>
                <span id="footer-divider"></span>   
			</div>
		<?php } ?>
        
		<div id="footer-main" role="contentinfo">			
            <?php bricks_copyright_notices(); ?> 
            <?php bricks_footer_ads(); ?>
		</div><!-- #main -->
        <?php if( bricks_theme_option('show_footer_nav') ) {
        	    bricks_footer_menu();
			  } ?>
		<?php bricks_credits(); ?>
		</footer><!-- #colophon -->
        	
    </div><!-- .inner-footer -->
</div><!-- #footer-wrapper -->

<?php wp_footer(); ?>
</body>
</html>