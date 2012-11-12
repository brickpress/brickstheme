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
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'cubricks_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'cubricks' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'cubricks' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'cubricks' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>