<?php
/** 
 * Cubricks Theme template tags.
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * @package    Cubricks
 * @subpackage Cubricks Theme Functions
 * @author     Raphael Villanea <support@brickpress.us>
 * @copyright  Copyright (c) 2011, BrickPress
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @since      1.0.0
 */
 
if( ! function_exists('bricks_topbar') ) :
	function bricks_topbar() { 
	
    	global $page, $paged, $theme_options; ?>
		
        <nav id="topbar" role="navigation">
            <h3 class="assistive-text"><?php _e( 'Main menu', 'bricks' ); ?></h3>
            <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
            <div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'bricks' ); ?>"><?php _e( 'Skip to primary content', 'bricks' ); ?></a></div>
            <div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'bricks' ); ?>"><?php _e( 'Skip to secondary content', 'bricks' ); ?></a></div>
            <?php wp_nav_menu( array(
				'theme_location' => 'topbar',
				'items_wrap'     => '<ul id="%1$s" class="sf-menu">%3$s</ul>' ) ); ?>
				<script type="text/javascript">
                <!--//--><![CDATA[//><!--
                jQuery(document).ready(function() { 
                    jQuery('ul.sf-menu').superfish(); 
                }); 
                //--><!]]>
                </script>
            <div class="site-admin">
                <ul>
                  <li><?php wp_register(); ?></li>
                  <li><?php wp_loginout(); ?></li>
                </ul>
            </div>
        </nav><!-- #topbar -->
	<?php
	}
endif;


/**
 * Displays Cubricks primary navigation menu.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_nav_menu') ) :
	function bricks_nav_menu() { 
	
    	global $page, $paged, $theme_options; ?>
		
        <nav id="access" role="navigation">
            <?php wp_nav_menu( array(
					  'theme_location' => 'primary',
					  'items_wrap'     => '<ul id="%1$s" class="sf-menu">%3$s</ul>'
				      )
				   ); ?>
            <?php if( false == bricks_theme_option('show_topbar_nav') ) : ?>
			<script type="text/javascript">
            <!--//--><![CDATA[//><!--
            jQuery(document).ready(function() { 
                jQuery('ul.sf-menu').superfish(); 
            });
            //--><!]]>
            </script>
            <?php endif; ?>
        </nav><!-- #access -->
	<?php
	}
endif;


add_action( 'bricks_footer_menu', 'bricks_footer_nav' );
/**
 * Displays Cubricks footer navigation menu.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_footer_nav') ) :
	function bricks_footer_nav() { ?>
    
        <nav id="footer-navmenu" role="navigation">
        <?php wp_nav_menu( array(
				  'theme_location' => 'footer',
				  'show_home' 	   => true,
				  'depth'          => 1
				  )
			  ); ?>
        </nav><!-- #footer-navmenu -->
        <div class="clearfix"></div>
	<?php
	}
endif;


/**
 * Default navigation menu fallback, wp_page_menu()
 *
 * @since 1.0.0
 */
function bricks_page_menu_args( $args ) {
	$args['show_home'] = false;
	return $args;
}
add_filter( 'wp_page_menu_args', 'bricks_page_menu_args' );


/**
 * Displays post date.
 * Styling and date format can be customized at the theme options admin page.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_post_date_graphic') ) : 
	function bricks_post_date_graphic() {

		$month = get_the_time('M');
		$day = get_the_time('d');
		$year = get_the_time('Y');
		echo '<div class="entry-date graphic"><span class="month">' .$month. '</span><span class="day">' .$day. '</span><span class="year">' .$year. '</span></div>';
	}
endif;


/**
 * Displays post date.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_post_date_text') ) : 
function bricks_post_date_text() {
		
	global $theme_options;
	
	$format = get_post_format();
	$author_avatar = bricks_theme_option('author_avatar');
	if( '' == $format )
		$format = 'article';
	
	if( $author_avatar == 'hide_avatar') {
		
		$utility_text = __( '<span class="%1$s-post"></span><a href="%3$s" title="%3$s" rel="bookmark">%2$s</a> posted on <a href="%3$s" title="%4$s" rel="bookmark"><time class="entry-date" datetime="%5$s">%6$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%7$s" title="%8$s" rel="author">%9$s.</a></span></span>' );		
	} else {
		
		$utility_text = __( '<span class="%1$s-post"></span><a href="%3$s" title="%3$s" rel="bookmark">%2$s</a> posted on <a href="%3$s" title="%4$s" rel="bookmark"><time class="entry-date" datetime="%5$s">%6$s</time></a>' );
	}
	
	printf(
		$utility_text,																		// [0]
		$post_icon = strtolower( $format ),													// [1]
		$post_format = ucwords( $format ),													// [2]
		esc_url( get_permalink() ),															// [3]
		esc_attr( get_the_time() ),															// [4]
		esc_attr( get_the_date( 'c' ) ),													// [5]
		esc_html( get_the_date() ),															// [6]
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),						// [7]
		esc_attr( sprintf( __( 'View all posts by %s', 'bricks' ), get_the_author() ) ),	// [8]
		get_the_author()																	// [9]																		
	);
}
endif;


/**
 * Cubricks custom header.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_custom_header') ) : 
	function bricks_custom_header() {
	
	$header_image = get_header_image();
	$bricks_image = bricks_theme_option('custom_header');
	$header_image_width = bricks_theme_option('header_image_width');
	$header_image_height = bricks_theme_option('header_image_height');
	$custom_header_adjust = bricks_theme_option('custom_header_adjust');
	?>
    	
	<div id="custom-header-wrapper" <?php if( $header_image || $bricks_image ) { echo 'style="max-height:'.esc_attr($header_image_height).'px;"'; } ?>>
        <div id="custom-header" <?php if( '0' != $custom_header_adjust ) { echo 'style="margin-top: -'.esc_attr($custom_header_adjust).'px;"'; } ?>>
		
		<?php // Check to see if the header image has been removed
		if ( $header_image || $bricks_image ) :
				$header_image_width = get_theme_support( 'custom-header', 'width' );
				$header_image_height = get_theme_support( 'custom-header', 'height' );
			?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo ('' != $bricks_image) ? esc_attr($bricks_image) : header_image(); ?>" width="<?php echo esc_attr($header_image_width); ?>" height="auto" />
		</a>
        <?php endif; // end check for removed header image ?>
    	</div>
    </div><!-- #custom-header-wrapper -->
	<?php
	}
endif;


/**
 * Displays the current post's title.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_post_title') ) :
function bricks_post_title() {
	?>
	<?php if( is_single() ) { ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
    <?php } elseif( is_sticky() ) { ?>
		<h1 class="entry-title">
		<a class="slider-caption" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h1>
	<?php } else { ?>
		<h1 class="entry-title">
		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'bricks' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h1><?php
	}
}
endif;


/**
 * Returns headlines header for archive pages.
 * 
 * @since 1.0.0
 */
if( ! function_exists('bricks_archive_header') ) :
function bricks_archive_header() {
	
    $format = get_post_format(); ?>
    <h1 class="archive-heading">
		<?php if ( is_day() ) {
            printf( __( 'Daily Archives: %s', 'bricks' ), '<span>' . get_the_date() . '</span>' );
        } elseif ( is_month() ) {
            printf( __( 'Monthly Archives: %s', 'bricks' ), '<span>' . get_the_date( 'F Y' ) . '</span>' ); 
        } elseif ( is_year() ) {
            printf( __( 'Yearly Archives: %s', 'bricks' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
        } elseif ( is_category() ) {
            printf( __( 'Category Archives: %s', 'bricks' ), single_cat_title( '', false ) );
        } elseif ( is_tag() ) {
            printf( __( 'Tag Archives: %s', 'bricks' ), single_tag_title( '', false ) );
        } elseif ( is_author() ) {
            printf( __( 'Author Archives: %s', 'bricks' ) );
        } elseif ( has_post_format('aside') ) {
            printf( __( 'Post Format Archives: %s', 'bricks' ), ucwords( $format ) );
        } elseif ( has_post_format('audio') ) {
            printf( __( 'Post Format Archives: %s', 'bricks' ), ucwords( $format ) );
        } elseif ( has_post_format('chat') ) {
            printf( __( 'Post Format Archives: %s', 'bricks' ), ucwords( $format ) );
        } elseif ( has_post_format('gallery') ) {
            printf( __( 'Post Format Archives: %s', 'bricks' ), ucwords( $format ) );
        } elseif ( has_post_format('image') ) {
            printf( __( 'Post Format Archives: %s', 'bricks' ), ucwords( $format ) );
        } elseif ( has_post_format('link') ) {
            printf( __( 'Post Format Archives: %s', 'bricks' ), ucwords( $format ) );
        } elseif ( has_post_format('quote') ) {
            printf( __( 'Post Format Archives: %s', 'bricks' ), ucwords( $format ) );
        } elseif ( has_post_format('status') ) {
            printf( __( 'Post Format Archives: %s', 'bricks' ), ucwords( $format ) );
        } elseif ( has_post_format('video') ) {
            printf( __( 'Post Format Archives: %s', 'bricks' ), ucwords( $format ) );
        } else {
            _e( 'Blog Archives', 'bricks' );
        } ?>
    </h1>
	<?php
}
endif;


/**
 * Returns headlines header for search pages.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_search_header') ) :
function bricks_search_header() { ?>

    <h1 class="search-heading">
		<?php 
        if ( is_search() && have_posts() ) {
            printf( __( 'Search Results for: %s', 'bricks' ), '<span>' . get_search_query() . '</span>' );
        } elseif ( is_404() ) {
            _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'bricks' );
        } else {
            _e( 'Nothing Found', 'bricks' );
        } ?>
    </h1>
	<?php
}
endif;

         
/**
 * Returns comments link.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_comment_link') ) :
function bricks_comments_link() {
	
	if( comments_open() && ! post_password_required() ) {
		comments_popup_link( '<span class="comments-link"></span>' . __( 'Leave a Comment. ', 'bricks' ), '<span class="comments-link"></span>' . _x( '1 Comment ', 'comments number', 'bricks' ), '<span class="comments-link"></span>' . _x( '% Comments ', 'comments number', 'bricks' ) );
	}
}
endif;


/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Cubricks 1.0.0
 */
if( ! function_exists('bricks_comments') ) :
function bricks_comments($comment, $args, $depth) {
	
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'bricks' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'bricks' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 68;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 50;

						echo get_avatar( $comment, $avatar_size );

						/* translators: 1: comment author, 2: date and time */
						printf( __( '%1$s on %2$s <span class="says"></span>', 'bricks' ),
							sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
							sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __( '%1$s at %2$s', 'bricks' ), get_comment_date(), get_comment_time() )
							)
						);
					?>

					<?php edit_comment_link( __( 'Edit', 'bricks' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'bricks' ); ?></em>
					<br />
				<?php endif; ?>

			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'bricks' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif;


/**
 * Sets the post excerpt length to 40 words.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 *
 * @since 1.0.0
 */
function bricks_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'bricks_excerpt_length' );


/**
 * Returns a "Continue Reading" link for excerpts
 * @since 1.0.0
 */
function bricks_continue_reading_link() {
	return ' <a href="'. esc_url( get_permalink() ) . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bricks' ) . '</a>';
}


/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and bricks_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.  
 * @since 1.0.0
 */
function bricks_auto_excerpt_more( $more ) {
	return ' &hellip;' . bricks_continue_reading_link();
}
add_filter( 'excerpt_more', 'bricks_auto_excerpt_more' );


/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 * @since 1.0.0
 */
function bricks_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= bricks_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'bricks_custom_excerpt_more' );


/**
 * Cubricks pagination
 *
 * @since   1.0.0
 */
function bricks_link_pages_args() {
	
	$args = array(
			  'before'         => '<div class="pagination"><span class="page-link-meta">' . __( 'Pages:', 'bricks' ) . '</span>',
			  'after'          => '</div>',
			  'next_or_number' => 'number',
			  'link_before'    => '<span>',
			  'link_after'     => '</span>'
		  );
	return $args;
}


/**
 * Display navigation to next/previous pages when applicable
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'bricks_content_nav' ) ) :
	function bricks_content_nav() {
		
		global $wp_rewrite, $wp_query;
		
		$current = ( $wp_query->query_vars['paged'] > 1 ? $wp_query->query_vars['paged'] : 1 );
		
		$pagination = array(
			'base' => @add_query_arg( 'paged','%#%' ),
			'format' => '',
			'total' => $wp_query->max_num_pages,
			'current' => $current,
			'show_all' => false,
			'type' => 'plain',
		);
		
		if( ! empty( $wp_query->query_vars['s'] ) ) {
			$pagination['add_args'] = array( 's' => get_query_var( 's' ) );
		}
		echo '<nav id="nav-single">' . paginate_links( $pagination ) . '</nav>';	
	}
endif;


/**
 * Return the URL for the first link found in the post content.
 *
 * @since Cubricks 1.0.0
 * @return string|bool URL or false when no link is present.
 */
function bricks_first_link() {
	
	global $post;
	
	$content1 = $post->post_content;
	
	preg_match_all( '|<a.*?(title=[\'"](.*?)[\'"])*? href=[\'"](.*?)[\'"].*?>(.*?)</a>|i', $post->post_content, $matches );
	
	if ( isset( $matches ) ) {
		
		$title = apply_filters( 'post_title', $post->post_title );
		
		// link has a title attribute
		if ( $matches[2][0] != '' )
			$title_attribute = $matches[2][0];
		
		// link has no title, use post title
		elseif ( $post->post_title != '' )
			$title_attribute = $post->post_title;
		
		// link and post have no title, use description
		else
			$title_attribute = $matches[4][0];
		
		$url = $matches[3][0];
		$desc = $matches[4][0];
		
		return array(
			'title'      => $title,
			'title_attr' => $title_attribute,
			'url'        => $url,
			'desc'       => $desc
		);
	}
	else {
		return false;
	}
}


/**
 * Return the URL for the first image found in the post content.
 *
 * @since 1.0.0
 * @return string|bool URL or false when no image is present.
 */
function bricks_first_image() {

	global $post;

	preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i', $post->post_content, $matches );

	if ( isset( $matches ) )
		return esc_attr($matches);
	else
		return false;
}


/**
 * Shows author bio on single post entries if one is filled out by the author.
 * This can be toggled on/off at the theme options admin page.
 *
 * @since 1.0.0
 */
if( ! function_exists( 'bricks_author_meta' ) ) :
function bricks_author_meta() {
		
	if ( get_the_author_meta( 'description' ) && is_multi_author() ) { // If a user has filled out their description and this is a multi-author blog, show a bio on their entries ?>
	<div class="footer-meta-hr"></div>
	<div id="author-info">
		<div id="author-avatar">
			<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'bricks_author_bio_avatar_size', 90 ) ); ?>
		</div><!-- #author-avatar -->
		
		<div id="author-description">
			<h2><?php printf( esc_attr__( 'About %s', 'bricks' ), get_the_author() ); ?></h2>
			<?php the_author_meta( 'description' ); ?>
			<div id="author-link">
				<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
					<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'bricks' ), get_the_author() ); ?>
				</a>
			</div><!-- #author-link	-->
		</div><!-- #author-description -->
	</div><!-- #entry-author-info -->
	<?php
	}
}
endif;
	

/**
 * Message to display if no post found.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_no_posts') ) :
	function bricks_no_posts() { ?>
		
		<p class="none-found">
		<?php if( is_search() ) {
				  $message = _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'bricks' );
		
			  } elseif( is_404() ) {
				  $message = _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'bricks' );
			  }
			  
			echo apply_filters( 'bricks_no_posts', $message );
		?>
        </p>
	<?php
}
endif;


/**
 * Post entry meta after the post content.
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'bricks_post_footer' ) ) :
	function bricks_post_footer() {
		
		global $theme_options;
		$format = get_post_format();
		if( '' == $format )
			$format = 'article';
			
		/* translators: used between list items, there is a space after the comma */
		$tag_list = get_the_tag_list( '', __( ', ', 'bricks' ) );
		
		/* Footer entry meta for single post */
		if ( is_single() ) {
			if( '' != $tag_list ) {
				$utility_text = __( '<span class="%1$s-post"></span>%2$s posted in %3$s and tagged %4$s.', 'bricks' );
			} else {
				$utility_text = __( '<span class="%1$s-post"></span>%2$s posted in %3$s.', 'bricks' );
			}	
		/* Footer entry meta for posts, archives */	
		} else {
			if( '' != $tag_list ) {
				$utility_text = __( '<span class="category"></span> %3$s. <span class="tags"></span> %4$s.', 'bricks' );
			} else {
				$utility_text = __( '<span class="category"></span> %3$s.', 'bricks' );
			}
		}
		printf(
			$utility_text,																		// [0]
			$post_icon = strtolower( $format ),													// [1]
			$post_format = ucwords( $format ),													// [2]
			get_the_category_list( __( ', ', 'bricks' ) ),										// [3]
			$tag_list																			// [4]
		);
	}
endif;


/* 
 * Footer sidebar class.
 *
 * Count the number of footer sidebars to enable dynamic classes for the footer.
 *
 * @param     void
 * @return    string $class
 * 
 * @since     1.0.0
 */
if( ! function_exists( 'bricks_footer_sidebar_class' ) ) :
	function bricks_footer_sidebar_class() {
		$count = 0;
		
		if ( is_active_sidebar( 'sidebar-f1' ) )
			$count++;
		if ( is_active_sidebar( 'sidebar-f2' ) )
			$count++;
		if ( is_active_sidebar( 'sidebar-f3' ) )
			$count++;
		if ( is_active_sidebar( 'sidebar-f4' ) )
			$count++;
		if ( is_active_sidebar( 'sidebar-f5' ) )
			$count++;
		if ( is_active_sidebar( 'sidebar-f6' ) )
			$count++;
		$class = '';
		
		if( bricks_theme_option('sidebar_layout') == 'no-sidebar' && $count > 3 )
			$class = 'three';
	
		switch ( $count ) {
			case '1':
				$class = 'one';
				break;
			case '2':
				$class = 'two';
				break;
			case '3':
				$class = 'three';
				break;
			case '4':
				$class = 'four';
				break;
			case '5':
				$class = 'five';
				break;
			case '6':
				$class = 'six';
				break;
		}
		if ( $class ) {
			echo 'class="' . $class . '"';
		}
	}
endif;


/* 
 * Slider Homepage sidebar class.
 *
 * Count the number of footer sidebars to enable dynamic classes for the slider homepage.
 *
 * @param     void
 * @return    string $class
 * 
 * @since     1.0.1
 */
if( ! function_exists( 'slider_homepage_sidebar_class' ) ) :
	function slider_homepage_sidebar_class() {
		$count = 0;
		
		if ( is_active_sidebar( 'sidebar-2' ) )
			$count++;
		if ( is_active_sidebar( 'sidebar-3' ) )
			$count++;
		if ( is_active_sidebar( 'sidebar-4' ) )
			$count++;
		$class = '';
		
		switch ( $count ) {
			case '1':
				$class = 'one';
				break;
			case '2':
				$class = 'two';
				break;
			case '3':
				$class = 'three';
				break;
		}
		if ( $class ) {
			echo 'class="' . $class . '"';
		}
	}
endif;


add_action( 'bricks_after_footer_menu', 'bricks_copyright_notices' );
/**
 * Displays a copyright notice or a Creative Commons license at the footer. 
 *
 * @since 1.0.0 
 */
if( ! function_exists('bricks_copyright_notices') ) :
function bricks_copyright_notices() {
	
    $footer_ad_url = get_theme_mod('footer_ad_url'); ?>
	<div id="copyright-notice"<?php if( '' == $footer_ad_url ) { echo 'style="width:100%;"'; } ?>>
    	<?php if( '' != get_theme_mod('copyright_notices') ) : ?>	
		<p><?php echo get_theme_mod('copyright_notices'); ?>
        
			<?php if( '' != get_theme_mod('cc_license_url') ) : ?>
            <?php _e( 'Except where otherwise noted, content on this site is licensed under a ', 'bricks' ); ?>
            <a rel="license" href="<?php echo esc_attr( get_theme_mod('cc_license_url') ); ?>"><?php echo esc_attr( get_theme_mod('cc_license_type') ); ?></a>.</p>
            
            <p><a rel="license" href="<?php echo esc_attr( get_theme_mod('cc_license_url') ); ?>"><img alt="Creative Commons License" style="border-width:0" src="<?php echo esc_attr( get_theme_mod('cc_license_img') ); ?>" /></a></p>
            <?php endif; ?>
        <?php endif; ?>
	</div>
    <?php
}
endif;


/**
 * Shows links to Cubricks homepage and Wordpress at the footer.
 *
 * @since 1.0.0 
 */
if( ! function_exists('bricks_credits') ) :
function bricks_credits() { ?>

	<div id="site-generator">
    	<p>	
		<?php printf( __( 'Powered by ', 'bricks' ) ); ?><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'bricks' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'bricks' ); ?>"><?php printf( __( 'WordPress', 'bricks' ) ); ?></a>
		<?php printf( __( ' | Designed by ', 'bricks' ) ); ?><a href="<?php echo esc_url( __( 'http://www.brickpress.us', 'bricks' ) ); ?>" title="<?php esc_attr_e( 'Author Homepage', 'bricks' ); ?>"><strong><?php printf( __( 'BrickPress', 'bricks' ) ); ?></strong></a>
        </p>
	</div>
    <?php
}
endif;


/**
 * Adds social media icons at two locations: either at the header or
 * before the primary sidebar.
 *
 * @uses bricks_theme_options
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
if( !function_exists('bricks_social_media') ) :
function bricks_social_media() {
	
	$social_icons_label = get_theme_mod('social_icons_label');
	
	if( bricks_theme_option('social_module') == 'before-sidebar' ) : ?>
    	<div class="widget-title-bg">
        	<h3 class="widget-title">
            <?php printf(__( '%1$s', 'bricks' ), $social_icons_label); ?>
            </h3>
        </div>   
    <?php endif; ?>
    <div id="social-media-<?php echo bricks_theme_option('social_module'); ?>">
      <ul>
      	<?php $facebook_page = get_theme_mod( 'facebook_page' );
			  $twitter_id = get_theme_mod( 'twitter_id' );
			  $flickr_id = get_theme_mod( 'flickr_id' );
			  $google_profile = get_theme_mod( 'google_profile' );
			  $google_page = get_theme_mod( 'google_page' );
              $tumblr_id = get_theme_mod( 'tumblr_id' );
			  $youtube_id = get_theme_mod( 'youtube_id' ); ?>
              
        <li class="rss-feed"><a href="<?php echo esc_url( home_url( '/feed/' ) ); ?>" title="<?php _e( 'Syndicate this site using RSS 2.0', 'bricks' ); ?>"></a></li>
             
        <?php if( '' != $facebook_page ) : ?>     
    	<li class="facebook"><a href="<?php echo esc_url( 'http://www.facebook.com/' . esc_attr($facebook_page) ); ?>" title="<?php _e( 'Like my page on Facebook', 'bricks' ); ?>" target="_blank"></a></li>
		<?php endif; ?>
        
        <?php if( '' != $twitter_id ) : ?>
        <li class="twitter"><a href="<?php echo esc_url( 'http://www.twitter.com/' . $twitter_id ); ?>" title="<?php _e( 'Follow me on Twitter', 'bricks' ); ?>" target="_blank"></a></li>
        <?php endif; ?>
          
        <?php if( '' != $google_profile ) : ?>
        <li class="google"><a href="<?php echo esc_url( 'http://plus.google.com/' . $google_profile ); ?>" title="<?php _e( 'Add me to your Google+ Circles', 'bricks' ); ?>" target="_blank"></a></li>
        <?php endif; ?>
        
        <?php if( '' != $google_page ) : ?>
        <li class="google"><a href="<?php echo esc_url( 'http://plus.google.com/' . $google_page ); ?>" title="<?php _e( 'Add my Google+ page to your Circles', 'bricks' ); ?>" target="_blank"></a></li>
        <?php endif; ?>
        
        <?php if( '' != $tumblr_id ) : ?>
        <li class="tumblr"><a href="<?php echo esc_url( 'http://' .$tumblr_id. '.tumblr.com/' ); ?>" title="<?php _e( 'Follow me on Tumblr', 'bricks' ); ?>" target="_blank"></a></li>
        <?php endif; ?>
        
        <?php if( '' != $flickr_id ) : ?>
        <li class="flickr"><a href="<?php echo esc_url( 'http://www.flickr.com/photos/' .$flickr_id ); ?>" title="<?php _e( 'Check out my Flickr photostream', 'bricks' ); ?>" target="_blank"></a></li>
        <?php endif; ?>
        
        <?php if( '' != $youtube_id ) : ?>     
    	<li class="youtube"><a href="<?php echo esc_url( 'http://www.youtube.com/user/' . $youtube_id ); ?>" title="<?php _e( 'Subscribe to my channel on Youtube', 'bricks' ); ?>" target="_blank"></a></li>
		<?php endif; ?>
      </ul>
      <div class="clearfix"></div>
      
        <?php if( bricks_theme_option('search_module') ) : ?>
        <div id="search-module">
            <div class="search_module_widget">
            <?php the_widget( 'Bricks_Search_Widget', array( 'search_text'   => 'Search', 'search_submit' => 'Search' ), array( 'widget_id' => 'Search', 'before_widget' => '<div class="module search_widget">' ) ); ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
	<?php
}
endif;


add_action( 'wp_head', 'bricks_site_verification' );
/**
 * Adds social media icons at the header.
 *
 * @uses bricks_theme_options
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
if( !function_exists('bricks_site_verification') ) :
function bricks_site_verification() {
	
	global $wp_query;
	
	if ( is_home() ) {
		
		$google_meta = get_theme_mod('google_verify');
		if ( !empty( $google_meta ) ) {
			
			if ( strpos( $google_meta, 'content' ) ) {
				preg_match( '/content="([^"]+)"/', $google_meta, $match );
				$google_meta = $match[1];
			}
			echo "<meta name=\"google-site-verification\" content=\"$google_meta\" />\n";
		}
  		
		$bing_meta = get_theme_mod('bing_verify');
		if ( !empty( $bing_meta ) ) {
			
			if ( strpos( $bing_meta, 'content' ) ) {
				preg_match( '/content="([^"]+)"/', $bing_meta, $match );
				$bing_meta = $match[1];
			}
			echo "<meta name=\"msvalidate.01\" content=\"$bing_meta\" />\n";
		}
  		
		$alexa_meta = get_theme_mod('alexa_verify');
		if ( !empty( $alexa_meta ) ) {
			echo "<meta name=\"alexaVerifyID\" content=\"" . esc_attr( $alexa_meta ) . "\" />\n";
		}
	}	
}
endif;       


/**
 * Adds an ad banner at the footer.
 *
 * @uses bricks_theme_options
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
if( !function_exists('bricks_footer_ads') ) :
function bricks_footer_ads() {
	
	$footer_ad_url = get_theme_mod('footer_ad_url');
	$footer_ad_image = get_theme_mod('footer_ad_image');
	$footer_ad_alt = get_theme_mod('footer_ad_alt');
	
	if( ' ' != $footer_ad_url && ' ' != $footer_ad_image ) {
		
		echo '<div id="footer-ads"><a href="'. esc_url($footer_ad_url) .'" target="_blank"><img  src="'. esc_url($footer_ad_image) .'" alt="'. $footer_ad_alt .'" /></a></div>';	
	} else {
		return;
	}
}
endif;


/**
 * Adds post container class to the array of post classes.
 * This provides easy styling to post containers.
 *
 * @uses bricks_theme_options
 * @since 1.0.0 
 */
function post_container_class($classes) {
	
	global $post;
	
	$classes[] = bricks_theme_option('article_container');
	return $classes;
}
add_filter('post_class', 'post_container_class');


/**
 * Adds singular post layout class to the array of body classes.
 *
 * @uses bricks_theme_options
 * @since 1.0.0 
 */
function singular_post_body_class($classes) {
	
	global $post;
	
	if( is_single() ) {
		$sidebar = bricks_theme_option('singular_sidebar');
		$classes[] = 'singular-' . $sidebar;
	}
	return $classes;
}
add_filter('body_class', 'singular_post_body_class');