<?php 
/**
 * Class Cubricks Theme Setup
 * 
 * This class sets up the theme and provides methods used by the theme.
 *
 * This file is required by functions.php
 * 
 * @package    Cubricks Theme
 * @author     Raphael Villanea <support@brickpress.us>
 * @copyright  Copyright (c) 2012, Raphael Villanea
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @since      1.0.0
 */
class Cubricks_Theme_Setup {
	
	/**
	 * Construct
	 * 
	 * @param     void
	 * @return    void
	 *
	 * @uses      Cubricks_Theme_Options
	 * @uses      Cubricks::wp_hooks()
	 * 
	 * @access    public
	 * @since     1.0.0
	 * @modified  1.0.0
	 */
	public function __construct() {
		
		define( 'THEMENAME', 'Cubricks' );
		define( 'SHORTNAME', 'cubricks' );
		define( 'CUBRICKS_VERSION', '1.0.6' );
		define( 'THEME_DIR', get_template_directory() );
		define( 'THEME_URI', get_template_directory_uri() );
		define( 'CUBRICKS_DIR', trailingslashit( THEME_DIR ) . basename( dirname( __FILE__ ) ) );
		define( 'CUBRICKS_URI', trailingslashit( THEME_URI ) . basename( dirname( __FILE__ ) ) );	
		define( 'CUBRICKS_IMAGES', trailingslashit( THEME_URI ) . 'images' );
		define( 'CUBRICKS_CSS', trailingslashit( THEME_URI ) . 'css' );
		define( 'CUBRICKS_JS', trailingslashit( THEME_URI ) . 'js' );
		
		add_action( 'after_setup_theme', array( &$this, 'load_cubricks_textdomain' ) );
		add_action( 'after_setup_theme', array( &$this, 'cubricks_theme_supports' ) );
		add_action( 'wp_enqueue_scripts', array( &$this, 'cubricks_scripts_styles' ) );

		register_nav_menu( 'primary', __( 'Primary Menu', 'cubricks' ) );
		register_nav_menu( 'footer',  __( 'Footer Menu', 'cubricks' ) );

		$this->cubricks_theme_supports();
		$this->cubricks_hooks_and_filters();
	}
	
	public function load_cubricks_textdomain() {
		
		$locale = get_locale();
		$locale_file = trailingslashit( get_template_directory() ) . "languages/$locale.php";
		if ( !empty( $locale_file ) && is_readable( $locale_file ) ) {
			require_once( $locale_file );
		}
	}
	
	
	public function cubricks_theme_supports() {
			
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link',  'quote', 'status',  'video' ) );
		
		// add post-formats to post_type 'page'
		add_post_type_support( 'page', 'post-formats' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-style' );

		add_theme_support( 'custom-background', array(
			// Background color default
			'default-color' => 'FFF',
			// Background image default
			'default-image' => ''
		) );

		//$medium_feature_width = cubricks_theme_option('medium_feature_width');
		//$medium_feature_height = cubricks_theme_option('medium_feature_height');
		
		//$large_feature_width = cubricks_theme_option('large_feature_width');
		//$large_feature_height = cubricks_theme_option('large_feature_height');
		
		//add_image_size( 'cubricks-large-slider', $large_feature_width, 9999 );       // 1024 pixels wide and unlimited height, soft crop
		//add_image_size( 'cubricks-medium-slider', $medium_feature_width, 9999 ); 	   //  690 pixels wide and unlimited height, soft crop
	}

	public function cubricks_hooks_and_filters() {

		add_action( 'widgets_init', array( &$this, 'cubricks_widgets_init' ) );
		add_filter( 'body_class', array( &$this, 'cubricks_body_classes' ) );
		
		add_filter( 'wp_list_categories', array( &$this, 'valid_category_list_rel' ) );
		add_filter( 'the_category',  array( &$this, 'valid_category_list_rel' ) );
		add_filter( 'the_content',  array( &$this, 'valid_attachment_rel' ) );
	}
	
		
	/**
	 * Register default sidebars and widgets.
	 * 
	 * @param     void
	 * @access    public
	 *
	 * @since     1.0.0
	 */
	public function cubricks_widgets_init() {
		
		//register_widget( 'Cubricks_Category_Posts_Widget' );
		//register_widget( 'Cubricks_Search_Widget' );
		//register_widget( 'Cubricks_Text_Widget' );
				
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
			'before_title' => '<h3 class="widget-title"><span>',
			'after_title' => '</span></h3>',
		) );	
	}
	
	/**
	 * Enqueue the scripts used by our theme.
	 *
	 * @since Cubricks 1.0.0
	 */
	public function cubricks_scripts_styles() {
		
		wp_enqueue_script( 'scroll-to-top', trailingslashit( CUBRICKS_JS ) . 'scrolltopcontrol.js', array( 'jquery' ), CUBRICKS_VERSION );
		wp_enqueue_script( 'superfish', trailingslashit( CUBRICKS_JS ) . 'superfish.js', array( 'jquery' ), CUBRICKS_VERSION );
		//wp_enqueue_script( 'cubricks-navigation', trailingslashit( CUBRICKS_JS ) . 'navigation.js', array( 'jquery' ), CUBRICKS_VERSION, true );

		if( is_page_template('page-templates/showcase.php') || is_page_template('page-templates/content-slider.php') || is_page_template('page-templates/slider-homepage.php') ) {
			
			wp_enqueue_script( 'nivo-slider', trailingslashit( CUBRICKS_JS ) . 'jquery.nivo.slider.js', array( 'jquery' ), CUBRICKS_VERSION );		
			wp_enqueue_style( 'page-templates', trailingslashit( CUBRICKS_CSS ) . 'page-templates.css' );
		}

		add_editor_style( trailingslashit( get_template_directory() ) . 'css/editor-style.css' );
		add_editor_style( trailingslashit( get_template_directory() ) . 'css/editor-style-rtl.css' );
		
		wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri() );
	}
	
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
	public function cubricks_body_classes( $classes ) {
		$background_color = get_background_color();
		$container_type = get_theme_mod( 'container_type' );
	
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
			
		if( $container_type == 'type1' ) {
			$classes[] = 'type1';
		} else {
			$classes[] = 'type2';
		}
		
		return $classes;
	}
	
	/**
	 * Removes rel attribute from the category list for HTML5 validation.
	 * 
	 * @access    public
	 * @since     1.0.0
	 */
	public function valid_category_list_rel($output) {
		
		$invalid = array( ' rel="category tag"', ' rel="category"', 'scrolling="no"', );
		$output = str_replace($invalid, '', $output);
		return $output;
	}
	
	
	/**
	 * Removes invalid rel attribute from attachments for HTML5 validation.
	 * 
	 * @access    public
	 * @since     1.0.0
	 */
	public function valid_attachment_rel($output) {
		
		global $post;
		
		$invalid = preg_match( '|rel=[\'"]attachment(.*?)[\'"]|i', $post->post_content, $matches );
		$output = str_replace($matches, '', $output);
		return $output;
	}
}