<?php
/**
 * Template Name: Homepage Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The homepage template
 * in Cubricks consists of a page content area for adding text, images, video --
 * anything you’d like -- followed by homepage-only widgets in one, two or three columns.
 *
 * @package Cubricks
 * @subpackage Page Templates
 * @since Cubricks 1.0.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'homepage' ); ?>
<?php get_footer(); ?>