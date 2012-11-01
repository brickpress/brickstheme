<?php
/**
 * The template for displaying the footer for the slider homepage
 * page template.
 *
 * Contains the closing of the id=main div and all content after.
 *
 * @package Cubricks
 * @subpackage Cubricks
 * @since Cubricks 1.0.5
 */
?>
			</div><!-- #main -->
		</div><!-- .inner-content -->
	</div>
            
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
        <?php if( bricks_theme_option('footer_nav') == 'show' ) {
        	    bricks_footer_menu();
			  } ?>
		<?php bricks_credits(); ?>
		</footer><!-- #colophon -->
        	
    </div><!-- .inner-footer -->
</div><!-- #footer-wrapper -->

<?php wp_footer(); ?>
</body>
</html>