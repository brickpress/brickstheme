<?php
/** 
 * Bricks Theme template tags.
 *
 * @package Bricks Theme
 * @subpackage Functions
 */

/**
 * Displays Bricks primary navigation menu.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_nav_menu') ) :
	function bricks_nav_menu() { 
	
    	global $page, $paged, $theme_options; ?>
		
        <nav id="access" role="navigation">
        <?php bricks_before_primary_menu(); ?>
        
            <h3 class="assistive-text"><?php _e( 'Main menu', 'bricks' ); ?></h3>
            <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
            <div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'bricks' ); ?>"><?php _e( 'Skip to primary content', 'bricks' ); ?></a></div>
            <div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'bricks' ); ?>"><?php _e( 'Skip to secondary content', 'bricks' ); ?></a></div>
            <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            <?php get_search_form(); ?>
        </nav><!-- #access -->
        <?php //echo '<div id="subhead"><div class="breadcrumbs"></div><div class="pageheaders"></div></div>'; ?><!-- #subhead-wrapper -->
	<?php
	}
endif;


/**
 * Displays post date.
 * Styling and date format can be customized at the theme options admin panel page.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_post_date') ) : 
	function bricks_post_date() {
	
		$entry_date = bricks_theme_option( 'entry_date' );
		if( $entry_date == 'graphic' ) {
			$month = get_the_time('M');
			$day = get_the_time('d');
			$year = get_the_time('Y');
		echo '<div class="entry-date ' .$entry_date. '"> 
				<span class="month">' .$month. '</span><span class="day">' .$day. '</span><span class="year">' .$year. '</span></div>';
		} else {
			printf( '<div class="entry-date ' .$entry_date. '"><span class="sep">' .__( 'Posted on', 'bricks' ). '</span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a><span class="by-author"> <span class="sep"> ' .__( 'by', 'bricks' ). '</span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span></div>',
				esc_url( get_permalink() ),
				esc_attr( get_the_time() ),
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date() ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				esc_attr( sprintf( __( 'View all posts by %s', 'bricks' ), get_the_author() ) ),
				get_the_author()
			);
		}
	}
endif;


/**
 * Displays entry meta post date.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_entry_meta_date') ) : 
	function bricks_entry_meta_date() {
	
		printf( __( '<span class="date-posted"></span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'bricks' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'bricks' ), get_the_author() ) ),
			get_the_author()
		);
	}
endif;


/**
 * Display a div containing the current post's format.
 * @since 1.0.0
 */
if( ! function_exists('bricks_post_format') ) :
function bricks_post_format() {

	$post_format = ucwords( get_post_format() );
	if ( is_sticky() ) {
		$post_format = __( 'Featured', 'bricks' );
	} elseif ( $post_format == '' ) {
		$post_format = __( 'Blog', 'bricks' );
	}
	$format = apply_filters( 'bricks_post_format', '<h3 class="entry-format">' . $post_format . '</h3>' );

	echo $format;	
}
endif;

/**
 * Display a div containing the current post's format.
 * @since 1.0.0
 */
if( ! function_exists('bricks_post_format_icon') ) :
function bricks_post_format_icon() {
	
	$post_format = strtolower( get_post_format() );
	//$post_format = strtolower( get_post_format() );
	if ( is_sticky() ) {
		$post_format = __( 'featured', 'bricks' );
	} elseif ( $post_format == '' ) {
		$post_format = __( 'standard', 'bricks' );
	}
	$format = apply_filters( 'bricks_post_format_icon', '<span class="entry-format-' .$post_format. '"></span>' );

	echo $format;	
}
endif;


/**
 * Display a div containing the current post's title.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_post_title') ) :
function bricks_post_title() {
	?>
	<?php if( is_single() ) { ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
    <?php } elseif( is_sticky() ) { ?>
		<h2 class="entry-title">
		<a class="slider-caption" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2>
    <?php } elseif( is_author() ) { ?>
    	<h1 class="entry-title">
		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'bricks' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2>
	<?php } else { ?>
		<h2 class="entry-title">
		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'bricks' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2><?php
	}
}
endif;


/**
 * Returns page navigation.
 * @since 1.0.0
 */
if( ! function_exists('bricks_archive_header') ) :
function bricks_archive_header() { ?>
	
    <header class="archive-header">
        <h1 class="page-title">
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
                printf( __( 'Author Archives: %s', 'bricks' ), get_the_author() );
            } else {
                _e( 'Blog Archives', 'bricks' );
            } ?>
        </h1>
    </header><?php
}
endif;

              
/**
 * Returns comments link.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_comment_link') ) :
function bricks_comments_link() {
	
		if( comments_open() && ! post_password_required() ) { ?>
		<div class="comments-link">
			<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a Comment &raquo;', 'bricks' ) . '</span>', _x( '1 Comment', 'comments number', 'bricks' ), _x( '% Comments', 'comments number', 'bricks' ) ); ?>
		</div>
        <?php
	}
}
endif;


/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Bricks 1.0.0
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
							$avatar_size = 39;

						echo get_avatar( $comment, $avatar_size );

						/* translators: 1: comment author, 2: date and time */
						printf( __( '%1$s on %2$s <span class="says">said:</span>', 'bricks' ),
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


add_action('bricks_before_entry_content', 'bricks_get_avatar');
/**
 * Shows author avatar for status post format.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_get_avatar') ) :
	function bricks_get_avatar() {
		
		$post_format = get_post_format();
		$current_author = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(get_query_var('author'));
		if( $post_format == 'status' ) { ?>
			<div class="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'bricks_status_avatar', '65' ) ); ?></div>
		<?php
		}
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
 * function tied to the excerpt_more filter hook.  * @since 1.0.0
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
 * Default navigation menu fallback, wp_page_menu()
 *
 * @since 1.0.0
 */
function bricks_page_menu_args( $args ) {
	$args['show_home'] = false;
	return $args;
}
add_filter( 'wp_page_menu_args', 'bricks_page_menu_args' );



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
		
		$page_navigation = bricks_theme_option( 'page_navigation' );
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
		echo '<nav id="nav-single-'. $page_navigation .'">' . paginate_links( $pagination ) . '</nav>';	
	}
endif;


/**
 * Return the URL for the first link found in the post content.
 *
 * @since Bricks 1.0.9
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
		return $matches;
	else
		return false;
}


add_action( 'bricks_before_single', 'bricks_enqueue_singlepost_script' );
/**
 * Enqueue script for single posts with tabbed layout.
 *
 * @since 1.0.0         
 */
function bricks_enqueue_singlepost_script() {
	
	if( bricks_theme_option( 'single_post_layout' ) == 'tabbed' ) {
		wp_enqueue_script( 'single-post', trailingslashit( BRICKS_JS ) . 'single-post.js', array( 'jquery' ), BRICKS_VERSION );
	}
}


add_action( 'bricks_before_single', 'bricks_single_post_layout' );
/**
 * Layout options for single posts.
 *
 * @since 1.0.0         
 */
if( ! function_exists( 'bricks_single_post_layout' ) ) :
function bricks_single_post_layout() {
	
	$active = 'post-tab-active';
	if( bricks_theme_option( 'single_post_layout' ) == 'tabbed' ) { ?>
		<div id="single-post-tabs">
          <ul>
            <li><a id="single_post_article_a" href="#post-<?php the_ID(); ?>" <?php echo 'class="post-tab ' .$active. '"'; ?>><?php bricks_post_format(); ?></a></li>
            <li><a href="#comments" class="post-tab"><?php echo '<h3 class="entry-format">'. __( 'Comments', 'bricks' ) .'</h3>'; ?></a></li>
          </ul>
        </div>
		<div class="clearfix"></div>
		<?php
	} else {
		return;
	}
}
endif;


/**
 * Shows author bio on single post entries if one is filled out by the author.
 *
 * @since 1.0.0
 */
if( ! function_exists( 'bricks_author_meta' ) ) :
function bricks_author_meta() {
	
	if( bricks_theme_option( 'author_avatar' ) == 'show_avatar' ) {
		if ( get_the_author_meta( 'description' ) && is_multi_author() ) { // If a user has filled out their description and this is a multi-author blog, show a bio on their entries ?>
		<div id="author-info">
		<div id="author-avatar">
			<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'bricks_author_bio_avatar_size', 68 ) ); ?>
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
	} else {
		return;
	}
}
endif;
	

/**
 * Message to display if no post found.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_no_posts') ) :
	function bricks_no_posts() {
		
		$message = '<p>' ._e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'bricks' ). '</p>';
		echo apply_filters( 'bricks_no_posts', $message );
		get_search_form();
}
endif;


/**
 * Post meta & comments link.
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'bricks_post_footer' ) ) :
	function bricks_post_footer() {
			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'bricks' ) );
			if ( is_single() ) {
				if( '' != $tag_list ) {
					$utility_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'bricks' );
				} else {
					$utility_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'bricks' );
				}
			} else {
				if( '' != $tag_list ) {
					$utility_text = __( '<span class="category"></span> %1$s <span class="tags"></span> %2$s <span class="permalink"></span><a href="%3$s" title="Permalink to %4$s" rel="bookmark">Bookmark the permalink</a>.', 'bricks' );
				} else {
					$utility_text = __( '<span class="category"></span> %1$s <span class="permalink"></span><a href="%3$s" title="Permalink to %4$s" rel="bookmark">Bookmark the permalink</a>.', 'bricks' );
				}		
			}
			
			printf(
				$utility_text,
				/* translators: used between list items, there is a space after the comma */
				get_the_category_list( __( ', ', 'bricks' ) ),
				$tag_list,
				esc_url( get_permalink() ),
				the_title_attribute( 'echo=0' )
			);
		comments_popup_link( '<span class="comments-link"></span>' . __( 'Leave a Comment', 'bricks' ), _x( '1 Comment', 'comments number', 'bricks' ), _x( '% Comments', 'comments number', 'bricks' ) );
		edit_post_link( __( 'Edit', 'bricks' ), '<span class="editpost"></span>', '' );		
	}
endif;


/* 
 * Footer sidebar class
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


add_action( 'bricks_footer_menu', 'bricks_footer_nav' );
/**
 * Displays Bricks footer navigation menu.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_footer_nav') ) :
	function bricks_footer_nav() { ?>
        <nav id="footer-navmenu" role="navigation">
            <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
            <?php wp_nav_menu( array( 'theme_location' => 'footer', 'show_home' => true,'depth' => 1 ) ); ?>
        </nav><!-- #footer-navmenu -->
        <div class="clearfix"></div>
	<?php
	}
endif;


add_action( 'bricks_after_footer_menu', 'bricks_copyright_notices' );
/**
 * Shows links to Bricks homepage and Wordpress at the footer.
 *
 * @since 1.0.0 
 */
if( ! function_exists('bricks_copyright_notices') ) :
function bricks_copyright_notices() { ?>
	
	<div id="copyright-notice">
    	<?php if( '' != get_theme_mod('copyright_notices') ) : ?>	
		<p><?php echo get_theme_mod('copyright_notices'); ?>
        <?php endif; ?>
        <?php // -- todo -- // ?>
        <?php _e( 'Except where otherwise noted, content on this site is licensed under a ', 'bricks' ); ?><a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a></p>
        <p><a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/us/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/us/88x31.png" /></a></p>
	</div></div>
    <?php
}
endif;


/**
 * Shows links to Bricks homepage and Wordpress at the footer.
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
 * Adds social media icons at the header.
 *
 * @uses bricks_theme_options
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
if( !function_exists('bricks_social_media') ) :
function bricks_social_media() { ?>
	
	<div id="social-media">
      <ul>  
      	<?php $facebook_page = get_theme_mod( 'facebook_page' );
			  $twitter_id = get_theme_mod( 'twitter_id' );
			  $google_page = get_theme_mod( 'google_page' );
              $tumblr_id = get_theme_mod( 'tumblr_id' ); ?>
              
        <li class="rss-feed"><a href="<?php echo esc_url( home_url( '/feed/' ) ); ?>" title="<?php _e( 'Syndicate this site using RSS 2.0', 'bricks' ); ?>"></a></li>
             
        <?php if( '' != $facebook_page ) : ?>     
    	<li class="facebook"><a href="<?php echo esc_attr( 'http://www.facebook.com/' . $facebook_page ); ?>" title="<?php _e( 'Like my page on Facebook', 'bricks' ); ?>" target="_blank"></a></li>
		<?php endif; ?>
        
        <?php if( '' != $twitter_id ) : ?>
        <li class="twitter"><a href="<?php echo esc_attr( 'http://www.twitter.com/' . $twitter_id ); ?>" title="<?php _e( 'Follow me on Twitter', 'bricks' ); ?>" target="_blank"></a></li>
        <?php endif; ?>
        
        <?php if( '' != $google_page ) : ?>
        <li class="google"><a href="<?php echo esc_attr( 'http://plus.google.com/' . $google_page ); ?>" title="<?php _e( 'Add me to your Google+ Circles', 'bricks' ); ?>" target="_blank"></a></li>
        <?php endif; ?>
        
        <?php if( '' != $tumblr_id ) : ?>
        <li class="tumblr"><a href="<?php echo esc_attr( 'http://' .$tumblr_id. '.tumblr.com' ); ?>" title="<?php _e( 'Follow me on Tumblr', 'bricks' ); ?>" target="_blank"></a></li>
        <?php endif; ?>
    </ul>
    </div>
		<?php
}
endif;


add_action( 'wp_head', 'bricks_ga_tracking_code' );
/**
 * Adds Google Analytics tracking code at the header.
 *
 * @uses bricks_theme_options
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
if( !function_exists('bricks_ga_tracking_code') ) :
function bricks_ga_tracking_code() {
	
	$tracking_code = get_theme_mod('google_analytics');
	?><script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '<?php echo $tracking_code; ?>']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script><?php
}
endif;


