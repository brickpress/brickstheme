<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Cubricks
 * @since Cubricks 1.0.0
 */
?>
		<?php cubricks_before_footer(); ?>
        </div><!-- #main .inner -->
    </div><!-- #main-content .wrapper -->
	<?php 
	if ( ! is_404() )
		get_sidebar( 'footer' ); ?>
            
	<div id="footer" class="wrapper">
        <footer id="colophon" class="inner" role="contentinfo">
            <div class="site-info">
            	<p class="copyright-notice"><?php echo get_theme_mod( 'copyright_notice' ); ?></p>
                <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'cubricks' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'cubricks' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'cubricks' ), 'WordPress' ); ?></a>
            </div><!-- .site-info -->
        </footer><!-- #colophon .inner -->
    </div><!-- #footer .wrapper -->
</div><!-- #page .wrapper -->    
<?php wp_footer(); ?>
</body>
</html>