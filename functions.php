<?php
/**
 * Cubricks Theme Functions
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
 * @package    Cubricks Theme
 * @author     Raphael Villanea <support@brickpress.us>
 * @copyright  Copyright (c) 2012, Raphael Villanea
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 */
if ( !defined('CUBRICKS_VERSION') )
	define( 'CUBRICKS_VERSION', '1.0.6' );

if( ! isset( $content_width ) )
	$content_width = 680;

/**
 * Sets up theme defaults and registers the various WordPress features that
 * Cubricks Theme supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 * 	custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Cubricks 1.0.0
 */
function cubricks_setup() {
	
	load_theme_textdomain( 'cubricks', get_template_directory() . '/lib/languages' );
	
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();
	
	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link',  'quote', 'status',  'video' ) );
	
	// Add post-formats support to post_type 'page'.
	add_post_type_support( 'page', 'post-formats' );
	
	// This theme uses wp_nav_menu() in three locations.
	register_nav_menu( 'primary', __( 'Primary Menu', 'cubricks' ) );
	register_nav_menu( 'header', __( 'Header Menu', 'cubricks' ) );
	
	// Adds Jetpack's infinite scroll support.
	add_theme_support( 'infinite-scroll', array(
		'container'    => 'content',
	) );
	
	// Add support for custom background color and image.
	add_theme_support( 'custom-background', array(
		// Background color default
		'default-color' => '#F5F5F5'
	) );
	
	// Proposed removal in WordPress 3.5 Guidelines Revisions
	add_theme_support( 'automatic-feed-links' );
	
	$page_width = get_theme_mod('cubricks_page_width');
	/* Sets the width of the medium featured slider to the theme's content width.
	 * Default value is 680px.
	 */
	$medium_slider_width = cubricks_get_content_width();
	
	// Sets the height of the medium featured slider. Default value is 365px.
	$medium_slider_height = get_content_slider_height();
	
	/* Sets the width of the large featured slider to the theme's page width.
	 * Default value is 1024px.
	 */
	$large_slider_width = get_theme_mod('large_slider_width');
	
	// Sets the height of the large featured slider. Default value is 550px.
	$large_slider_height = get_theme_mod('large_slider_height');
	
	add_image_size( 'cubricks-large-slider', $large_slider_width, 9999 );         // 1024 pixels wide and unlimited height, soft crop
	add_image_size( 'cubricks-medium-slider', $medium_slider_width, 9999 ); 	   //  680 pixels wide and unlimited height, soft crop
	
	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );	
	set_post_thumbnail_size( $medium_slider_width, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'cubricks_setup' );


/**
 * Returns the content width according to page width.
 *
 * @uses get_theme_mod
 *
 * @since Cubricks 1.0.6
 */
function cubricks_get_content_width() {
	
	$page_width = get_theme_mod('cubricks_page_width');
	$content_width = round($page_width * 0.6640625);
	return $content_width;
}


/**
 * Returns the height for the content slider (medium
 * sized slider).
 *
 * @uses cubricks_get_content_width()
 *
 * @since Cubricks 1.0.6
 */
function get_content_slider_height() {
	
	$slider_width = cubricks_get_content_width();
	$slider_height = round($slider_width * 0.537109375);
	return $slider_height;
}


/**
 * Registers our main widget area and the front page widget areas.
 *
 * @since Cubricks 1.0.0
 */
function cubricks_widgets_init() {
	
	register_widget( 'Cubricks_Category_Posts_Widget' );
			
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'cubricks' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'First Homepage Sidebar', 'cubricks' ),
		'id' => 'sidebar-h1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Second Homepage Sidebar', 'cubricks' ),
		'id' => 'sidebar-h2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Third Homepage Sidebar', 'cubricks' ),
		'id' => 'sidebar-h3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area One', 'cubricks' ),
		'id' => 'sidebar-f1',
		'description' => __( 'An optional widget area for your site footer', 'cubricks' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area Two', 'cubricks' ),
		'id' => 'sidebar-f2',
		'description' => __( 'An optional widget area for your site footer', 'cubricks' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area Three', 'cubricks' ),
		'id' => 'sidebar-f3',
		'description' => __( 'An optional widget area for your site footer', 'cubricks' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Area Four', 'cubricks' ),
		'id' => 'sidebar-f4',
		'description' => __( 'An optional widget area for your site footer', 'cubricks' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Area Five', 'cubricks' ),
		'id' => 'sidebar-f5',
		'description' => __( 'An optional widget area for your site footer', 'cubricks' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );		
	
	register_sidebar( array(
		'name' => __( 'Footer Area Six', 'cubricks' ),
		'id' => 'sidebar-f6',
		'description' => __( 'An optional widget area for your site footer', 'cubricks' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
}
add_action( 'widgets_init', 'cubricks_widgets_init' );


/**
 * Extends the default WordPress body class to denote:
 * 1. Using a full-width layout, when no active widgets in the sidebar
 *    or full-width template.
 * 2. Front Page template: thumbnail in use and number of sidebars for
 *    widget areas.
 * 3. White or empty background color to change the layout and spacing.
 * 4. Custom fonts enabled.
 * 5. Single or multiple authors.
 *
 * @since Cubricks 1.0.6
 *
 * @param array Existing class values.
 * @return array Filtered class values.
 */
function cubricks_body_classes( $classes ) {
	$background_color = get_background_color();
	$page_layout = get_theme_mod( 'page_layout' );
	$showcase_slider  = get_theme_mod( 'slider_position' );

	if ( ! is_active_sidebar( 'sidebar-1' ) || is_page_template( 'page-templates/full-width.php' ) )
		$classes[] = 'full-width';

	if ( is_page_template( 'page-templates/homepage.php' ) ) {
		$classes[] = 'template-homepage';
		if ( has_post_thumbnail() )
			$classes[] = 'has-post-thumbnail';
		if ( is_active_sidebar( 'sidebar-2' ) && is_active_sidebar( 'sidebar-3' ) )
			$classes[] = 'two-sidebars';
	}

	if ( empty( $background_color ) )
		$classes[] = 'custom-background-empty';
	elseif ( in_array( $background_color, array( 'fff', 'ffffff' ) ) )
		$classes[] = 'custom-background-white';

	// Enable custom font class only if the font CSS is queued to load.
	if ( wp_style_is( 'cubricks-fonts', 'queue' ) )
		$classes[] = 'custom-font-enabled';

	if ( ! is_multi_author() )
		$classes[] = 'single-author';
	
	if( $page_layout == 'page-centered' ) {
		$classes[] = 'page-centered';
	} elseif( $page_layout == 'post-boxes' ) {
		$classes[] = 'post-boxes';
	} else {
		$classes[] = 'full-wide';
	}

	if( $showcase_slider == 'before_header' )
		$classes[] = 'slider-before-header';
		
	return $classes;
}
add_filter( 'body_class', 'cubricks_body_classes' );


/**
 * Adds a Customize Theme menu item to wp_admin_bar.
 * 
 * @param     $wp_admin_bar
 *
 * @since     1.0.0
 */
function cubricks_admin_bar_menu( $wp_admin_bar ) {
	
	global $wp_admin_bar;
	
	// Bail early if current user can not edit theme options.
	if ( !current_user_can( 'edit_theme_options' ) )
		return;
		
	$cubricks_url = admin_url( 'customize.php' );
	
	$wp_admin_bar->add_menu( array( 'id' => 'cubricks-menu', 'title' => __( 'Cubricks Theme', 'cubricks' ), 'href'  => $cubricks_url ) );
}
add_action( 'admin_bar_menu', 'cubricks_admin_bar_menu', 99 );


/**
 * Removes the Custom Background, Custom Header and Theme Editor submenu pages.
 *
 * @since 1.0.0
 */
function remove_custom_background_submenu() {
	
	global $submenu;
	
	$submenu_pages = array( 'theme-editor.php' );
	foreach ( $submenu_pages as $submenu_page )
		remove_submenu_page( 'themes.php', $submenu_page );
}
add_action( 'admin_init', 'remove_custom_background_submenu' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since Cubricks 1.0.0
 */
function cubricks_customize_preview_js() {
	wp_enqueue_script( 'cubricks-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), 'CUBRICKS_VERSION', true );
}
add_action( 'customize_preview_init', 'cubricks_customize_preview_js' );


/* Adds support for a custom header image. */
require( get_template_directory() . '/lib/custom-header.php' );

/* Adds custom hooks used by custom template tags. */
require( get_template_directory() . '/lib/cubricks-hooks.php' );

/* Custom filters and actions which modify core functions. */
require( get_template_directory() . '/lib/template-tags.php' );

/* Customizes the output of supported post formats. */
require( get_template_directory() . '/lib/post-formats.php' );

/* Built-in nivo slider by Dev7 Studios. */
require( get_template_directory() . '/lib/cubricks-slider.php' );

/* Implements theme options into the theme. */ 
require( get_template_directory() . '/lib/theme-customizer.php' );

/* Cubricks widgets */ 
require( get_template_directory() . '/lib/cubricks-widgets.php' );

require( get_template_directory() . '/lib/page-category-field.php' );

/**
 * Enqueues scripts and styles for front-end.
 *
 * @since Cubricks 1.0.6
 */
function cubricks_scripts_styles() {
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	// Adds JavaScript for handling the navigation menu hide-and-show behavior.
	wp_enqueue_script( 'cubricks-navigation', get_template_directory_uri() . '/js/navigation.js', array(), CUBRICKS_VERSION, true );
	wp_enqueue_script( 'scroll-to-top', get_template_directory_uri() . '/js/scrolltopcontrol.js', array( 'jquery' ), CUBRICKS_VERSION );
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js', array( 'jquery' ), CUBRICKS_VERSION );

	if( is_page_template('page-templates/showcase.php') || is_page_template('page-templates/content-slider.php') || is_page_template('page-templates/homepage.php') ) {
		wp_enqueue_script( 'nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array( 'jquery' ), CUBRICKS_VERSION );
		wp_enqueue_style( 'slider-style', get_template_directory_uri() . '/css/cubricks-slider.css' );
	}

	/*
	 * Loads our special font CSS file.
	 *
	 * The use of Open Sans by default is localized. For languages that use
	 * characters not supported by the font, the font can be disabled.
	 *
	 * To disable in a child theme, use wp_dequeue_style()
	 * function mytheme_dequeue_fonts() {
	 *     wp_dequeue_style( 'cubricks-fonts' );
	 * }
	 * add_action( 'wp_enqueue_scripts', 'mytheme_dequeue_fonts', 11 );
	 */

	/* translators: If there are characters in your language that are not supported
	   by Open Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'cubricks' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Open Sans character subset specific to your language, translate
		   this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'Open Sans font: add new subset (greek, cyrillic, vietnamese)', 'cubricks' );

		if ( 'cyrillic' == $subset )
			$subsets .= ',cyrillic,cyrillic-ext';
		elseif ( 'greek' == $subset )
			$subsets .= ',greek,greek-ext';
		elseif ( 'vietnamese' == $subset )
			$subsets .= ',vietnamese';

		$protocol = is_ssl() ? 'https' : 'http';
		$query_args = array(
			'family' => 'Open+Sans:400italic,700italic,400,700',
			'subset' => $subsets,
		);
		wp_enqueue_style( 'cubricks-fonts', add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" ), array(), null );
	}

	// Loads our main stylesheet.
	wp_enqueue_style( 'cubricks-style', get_stylesheet_uri() );
	
	// Loads stylesheet for buttons.
	wp_enqueue_style( 'buttons-style', get_template_directory_uri() . '/css/buttons.css' );
	
	if( is_admin() ) {
		wp_enqueue_script( 'jquery-ui-slider' );
		wp_enqueue_style( 'jquery-custom-css', get_template_directory_uri() . '/js/redmond/jquery-ui-1.8.19.custom.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'cubricks_scripts_styles' );


/**
 * Adjusts content_width value for full-width and single image attachment
 * templates, and when there are no active widgets in the sidebar.
 *
 * @since Cubricks 1.0.0
 */
function cubricks_content_width() {
	if ( is_page_template( 'page-templates/full-width.php' ) || is_page_template( 'page-templates/homepage.php' ) || is_attachment() || ! is_active_sidebar( 'sidebar-1' ) ) {
		
		global $content_width;
		$content_width = get_theme_mod( 'cubricks_page_width' );
	}
}
add_action( 'template_redirect', 'cubricks_content_width' );