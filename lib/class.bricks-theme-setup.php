<?php 
/**
 * Class Cubricks Theme Setup
 * 
 * This file extends Class Cubricks Theme Options which is instantiated
 * by $theme_options in functions.php file.
 *
 * This file is required by functions.php
 * 
 * @package    Cubricks Theme
 * @author     Raphael Villanea <support@brickpress.us>
 * @copyright  Copyright (c) 2011, BrickPress
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @since      1.0.0
 */
class Bricks_Theme_Setup extends Bricks_Theme_Options {
	
	/**
	 * Construct
	 * 
	 * @param     void
	 * @return    void
	 * 
	 * @uses      BRICKS_DIR
	 * @uses      BRICKS_FUNCTIONS
	 * @uses      Bricks_Theme_Options
	 * @uses      Cubricks::wp_hooks()
	 * 
	 * @access    public
	 * @since     1.0.0
	 * @modified  1.0.0
	 */
	public function __construct() {
		
		add_action( 'after_setup_theme', array( &$this, 'load_bricks_textdomain' ) );
		add_action( 'after_setup_theme', array( &$this, 'bricks_theme_supports' ) );
		add_action( 'wp_enqueue_scripts', array( &$this, 'bricks_enqueue_styles' ) );

		register_nav_menu( 'topbar', __( 'Top Bar Menu', 'bricks' ) );
		register_nav_menu( 'primary', __( 'Primary Menu', 'bricks' ) );
		register_nav_menu( 'footer',  __( 'Footer Menu', 'bricks' ) );

		$this->bricks_theme_supports();
		$this->bricks_hooks_and_filters();
	}
	

	public function bricks_content_width( $width ) {
		
		$width = bricks_theme_option('content_width');
		if( ! isset( $content_width ) ) {
			$content_width = $width;
		}
		return true;
	}
	
	
	public function load_bricks_textdomain() {
		
		$locale = get_locale();
		$locale_file = trailingslashit( BRICKS_DIR ) . "languages/$locale.php";
		if ( !empty( $locale_file ) && is_readable( $locale_file ) ) {
			require_once( $locale_file );
		}
	}
	
	
	public function bricks_theme_supports() {
			
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link',  'quote', 'status',  'video' ) );
		
		// add post-formats to post_type 'page'
		add_post_type_support( 'page', 'post-formats' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-style' );

		add_theme_support( 'custom-background', array(
			// Background color default
			'default-color' => bricks_theme_option('background_color'),
			// Background image default
			'default-image' => bricks_theme_option('background_image'),
			//'wp-head-callback' => array( &$this, 'bricks_custom_background' )
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => ''
		) );
		
		add_theme_support( 'custom-header', array(
			// Header image default
			'default-image'			 => bricks_theme_option('custom_header'),
			// Header text display default
			'default-text-color'	 => bricks_theme_option('site_title_color'),
			// Get page width to set Header image width (in pixels)
			'width'				     => bricks_theme_option('header_image_width'),
			// Header image height (in pixels)
			'height'			     => bricks_theme_option('header_image_height'),
			// Support flexible height
			'flex-width'			 => false,
			'flex-height' 		 	 => true,
			// Header image random rotation default
			'random-default'		 => false,
			'header-text'            => true,
			'uploads'  				 => true,
			'wp-head-callback'       => '',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		) );
		
		add_theme_support( 'cleaner-gallery' );
		add_theme_support( 'get-the-image' );
		
		$medium_feature_width = bricks_theme_option('medium_feature_width');
		$medium_feature_height = bricks_theme_option('medium_feature_height');
		
		$large_feature_width = bricks_theme_option('large_feature_width');
		$large_feature_height = bricks_theme_option('large_feature_height');
		
		add_image_size( 'bricks-large-slider', $large_feature_width, 9999 );       // 1024 pixels wide and unlimited height
		add_image_size( 'bricks-medium-slider', $medium_feature_width, 999 ); 
	}
	


	public function bricks_hooks_and_filters() {
		
		if( bricks_theme_option('show_adminbar') == false ) {
			add_filter( 'show_admin_bar', '__return_false' );
		}

		add_action( 'widgets_init', array( &$this, 'bricks_widgets_init' ) );
		
		add_filter( 'admin_init', array( &$this, 'bricks_editor_style' ) );
		add_filter( 'body_class', array( &$this, 'bricks_body_classes' ) );
		add_filter( 'body_class', array( &$this, 'bricks_layout_classes' ) );
		
		add_action( 'wp_head', array( &$this, 'bricks_global_print_style' ) );
		add_action( 'wp_head', array( &$this, 'bricks_header_print_style' ) );
		add_action( 'wp_head', array( &$this, 'bricks_navigation_print_style' ) );
		add_action( 'wp_head', array( &$this, 'bricks_content_print_style' ) );
		add_action( 'wp_head', array( &$this, 'bricks_sidebars_print_style' ) );
		add_action( 'wp_head', array( &$this, 'bricks_footer_print_style' ) );
		add_action( 'wp_head', array( &$this, 'bricks_post_format_style' ) );
		
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
	public function bricks_widgets_init() {
		
		register_widget( 'Bricks_Category_Posts_Widget' );
		register_widget( 'Bricks_Search_Widget' );
				
		register_sidebar( array(
			'name' => __( 'Main Sidebar', 'bricks' ),
			'id' => 'sidebar-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<div class="widget-title-bg"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		) );
	
		register_sidebar( array(
			'name' => __( 'Footer Area One', 'bricks' ),
			'id' => 'sidebar-f1',
			'description' => __( 'An optional widget area for your site footer', 'bricks' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<div class="widget-title-bg"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		) );
	
		register_sidebar( array(
			'name' => __( 'Footer Area Two', 'bricks' ),
			'id' => 'sidebar-f2',
			'description' => __( 'An optional widget area for your site footer', 'bricks' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<div class="widget-title-bg"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		) );
	
		register_sidebar( array(
			'name' => __( 'Footer Area Three', 'bricks' ),
			'id' => 'sidebar-f3',
			'description' => __( 'An optional widget area for your site footer', 'bricks' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<div class="widget-title-bg"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		) );
		
		register_sidebar( array(
			'name' => __( 'Footer Area Four', 'bricks' ),
			'id' => 'sidebar-f4',
			'description' => __( 'An optional widget area for your site footer', 'bricks' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<div class="widget-title-bg"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		) );
		
		register_sidebar( array(
			'name' => __( 'Footer Area Five', 'bricks' ),
			'id' => 'sidebar-f5',
			'description' => __( 'An optional widget area for your site footer', 'bricks' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<div class="widget-title-bg"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		) );
		
		register_sidebar( array(
			'name' => __( 'Footer Area Six', 'bricks' ),
			'id' => 'sidebar-f6',
			'description' => __( 'An optional widget area for your site footer', 'bricks' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<div class="widget-title-bg"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		) );
	}
	
	
	/**
	 * Enqueue the styles for the current color scheme.
	 *
	 * @since Cubricks 1.0.0
	 */
	public function bricks_enqueue_styles() {
		
		//wp_enqueue_style( 'postformats', trailingslashit( BRICKS_CSS ) . 'postformats.css' );
		//do_action( 'bricks_enqueue_styles', 'postformats' );
		wp_enqueue_script( 'scroll-to-top', trailingslashit( BRICKS_JS ) . 'scrolltopcontrol.js', array( 'jquery' ), BRICKS_VERSION );
		wp_enqueue_script( 'superfish', trailingslashit( BRICKS_JS ) . 'superfish.js', array( 'jquery' ), BRICKS_VERSION );

		if( is_page_template('showcase.php') || is_page_template('content-slider.php') ) {
			
			wp_enqueue_script( 'nivo-slider', trailingslashit( BRICKS_JS ) . 'jquery.nivo.slider.js', array( 'jquery' ), BRICKS_VERSION );		
			//wp_enqueue_style( 'nivo-slider-style', trailingslashit( BRICKS_CSS ) . 'nivo-slider.css' );
			wp_enqueue_style( 'page-templates', trailingslashit( BRICKS_CSS ) . 'page-templates.css' );
		}
		
		add_editor_style( trailingslashit( BRICKS_CSS ) . 'tinyMCE/editor-style.css' );
		add_editor_style( trailingslashit( BRICKS_CSS ) . 'tinyMCE/editor-style-rtl.css' );
	}
	
	
	/**
	 * Adds two classes to the array of body classes.
	 * The first is if the site has only had one author with published posts.
	 * The second is if a singular post being displayed
	 *
	 * @since 1.0.0
	 */
	public function bricks_body_classes( $classes ) {
	
		$singular_sidebar = bricks_theme_option( 'singular_sidebar' );
		if ( ! is_multi_author() ) {
			$classes[] = 'single-author';
		} elseif ( is_singular() && ! is_home() && ! is_page_template( 'template-featured.php' ) && ! is_page_template( 'sidebar-page.php' ) && $singular_sidebar != 'sidebar' ) {
			$classes[] = 'singular';
		}
		return $classes;
	}
	
	
	/**
	 * Adds Cubricks layout classes to the array of body classes.
	 *
	 * @since 1.0.0
	 */
	public function bricks_layout_classes( $existing_classes ) {
		
		$current_layout = bricks_theme_option('sidebar_layout');
	
		if ( in_array( $current_layout, array( 'content-sidebar', 'sidebar-content' ) ) )
			$classes = array( 'two-column' );
		else
			$classes = array( 'one-column' );
	
		if ( 'content-sidebar' == $current_layout )
			$classes[] = 'right-sidebar';
		elseif ( 'sidebar-content' == $current_layout )
			$classes[] = 'left-sidebar';
		else
			$classes[] = $current_layout;
	
		$classes = apply_filters( 'bricks_layout_classes', $classes, $current_layout );
	
		return array_merge( $existing_classes, $classes );
	}
	
	
	/**
	 * Cubricks global print style.
	 * 
	 * @param     void
	 * @return    string	$theme_options
	 * 
	 * @access    public
	 * @since     1.0.0
	 */
	public function bricks_global_print_style() {
	
		$background_color = bricks_theme_option('background_color'); 
		$body_text_color = bricks_theme_option('body_text_color');
		$secondary_text_color = bricks_theme_option('secondary_text_color');
		$link_color = bricks_theme_option('link_color');
		$button_text_color = bricks_theme_option('button_text_color');
		$button_border = bricks_theme_option('button_border');
		if( $background_color ) : ?>
        
		<style type="text/css">
		    html body, html body.custom-background, body.paged {
				font-size: <?php echo bricks_theme_option('body_text_size'); ?>px;
                background: <?php echo $background_color; ?>; /* Show a solid color for older browsers */
                background: rgba(<?php echo $this->hex_to_rgb($background_color) .','. bricks_theme_option('body_bg_opacity'); ?>) url(<?php echo bricks_theme_option('background_image'); ?>);
				background-position: <?php echo bricks_theme_option('background_position_x').'% '.bricks_theme_option('background_position_y'); ?>%;
				background-repeat: <?php echo bricks_theme_option('background_repeat'); ?>;
				background-attachment: <?php echo bricks_theme_option('background_attachment'); ?>;
            }
            body, input, textarea, .bricks-chat li {
                font-family: <?php echo bricks_theme_option('body_text_fontface'); ?>;
                color: rgba(<?php echo $this->hex_to_rgb($body_text_color) .','. bricks_theme_option('body_text_opacity'); ?>);
            }
			.single .entry-meta p, .entry-meta p, .widget ul li, input[type=text], input[type=password], textarea, .widget ul.tweets li {
				color: rgba(<?php echo $this->hex_to_rgb($secondary_text_color) .','. bricks_theme_option('secondary_text_opacity'); ?>);	
			}
			.inner-topbar,
			.inner-header,
			.inner-navigation,
			.inner-content,
			.inner-footer,
			.inner-widget-footer,
			#custom-header,
			#main,
			#headline-container {
				<?php if( bricks_theme_option('sidebar_layout') == 'no-sidebar' ) : ?>
					width: <?php echo bricks_theme_option('content_width'); ?>px;
				<?php endif; ?>		 
				max-width: <?php echo bricks_theme_option('page_width'); ?>px;
				min-width: <?php echo bricks_theme_option('content_width'); ?>px;
			}
			#primary,
			.left-sidebar #primary,
			.error404 #primary,
			.single.singular-fullwidth #primary,
			.error404.left-sidebar #primary,
			.page-template-sidebar-page-php #primary,
			.right-sidebar.page-template-sidebar-page-php #primary,
			.no-sidebar.page-template-sidebar-page-php #primary {
				margin-top: <?php echo bricks_theme_option('content_top_margin'); ?>px;
			}
			#secondary,
			.left-sidebar #secondary {
				margin-top: <?php echo bricks_theme_option('sidebar_top_margin'); ?>px;
			}
			.page-template-content-slider-php .nivoSlider {
				width: <?php echo bricks_theme_option('medium_feature_width'); ?>px;
			}
			.page-template-showcase-php .nivoSlider {
				width: <?php echo bricks_theme_option('large_feature_width'); ?>px;
			}		
			.page-template-showcase-php #bricks-slider-wrapper,
			.page-template-showcase-php .nivoSlider {
				height: <?php echo bricks_theme_option('large_feature_height'); ?>px;
			}
			.page-template-content-slider-php #bricks-slider-wrapper,
			.page-template-content-slider-php .nivoSlider {
				height: <?php echo bricks_theme_option('medium_feature_height'); ?>px;
			}
            /* Link color */
			#comments-title,
			.comments-link a:hover,
			section.recent-posts .other-recent-posts a[rel="bookmark"]:hover,
			section.recent-posts .other-recent-posts .comments-link a:hover,
			#site-generator a:hover,
			article.feature-image.small .entry-summary p a:hover,
			.entry-header .comments-link a:hover,
			.entry-header .comments-link a:focus,
			.entry-header .comments-link a:active,
			.feature-slider a.active,
			.single .entry-meta a,
			.entry-meta a,
			.entry-content a,
			#comments a {
				color: <?php echo $link_color; ?>;
			}
			<?php $button_color1 = bricks_theme_option('button_color1');
				  $button_color2 = bricks_theme_option('button_color2'); ?>
			#content nav span.previous a,
			#content nav span.next a,
			#content nav a.page-numbers.prev,
			#content nav a.page-numbers.next,
			#content nav span.page-numbers.current {
				font-size: <?php echo bricks_theme_option('button_text_size'); ?>px;
			}
			#content nav span.previous a,
			#content nav span.next a,
			#content nav a.page-numbers.prev,
			#content nav a.page-numbers.next,
			#content nav span.page-numbers.current,
			#comment-nav-above .nav-previous a,
			#comment-nav-above .nav-next a,
			.entry-date.graphic,
			.comments-link a,
			.entry-meta .edit-link a,
			.single .edit-link a,
			.page .edit-link a,
			.submit-btn {
				background: <?php echo $button_color1; ?>; /* Show a solid color for older browsers */
				background: -moz-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($button_color1) .','. bricks_theme_option('button_opacity1'); ?>), rgba(<?php echo $this->hex_to_rgb($button_color2) .','. bricks_theme_option('button_opacity2'); ?>) );
				background: -o-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($button_color1) .','. bricks_theme_option('button_opacity1'); ?>), rgba(<?php echo $this->hex_to_rgb($button_color2) .','. bricks_theme_option('button_opacity2'); ?>) );
				background: -webkit-gradient(linear, 0% 0%, 0% 100%, from( rgba(<?php echo $this->hex_to_rgb($button_color1) .','. bricks_theme_option('button_opacity1'); ?>) ), to( rgba(<?php echo $this->hex_to_rgb($button_color2) .','. bricks_theme_option('button_opacity2'); ?>) ) ); /* older webkit syntax */
				background: -webkit-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($button_color1) .','. bricks_theme_option('button_opacity1'); ?>), rgba(<?php echo $this->hex_to_rgb($button_color2) .','. bricks_theme_option('button_opacity2'); ?>) );
				border: 1px solid rgba(<?php echo $this->hex_to_rgb($button_border) .','. bricks_theme_option('button_opacity1'); ?>);
				color: <?php echo $button_text_color; ?>;
			}
			<?php $button_hover1 = bricks_theme_option('button_hover1');
				  $button_hover2 = bricks_theme_option('button_hover2'); ?>	  
			#content nav span.previous a:hover,
			#content nav span.next a:hover,
			#content nav a.page-numbers.prev:hover,
			#content nav a.page-numbers.next:hover,
			#content nav span.page-numbers.current,
			#comment-nav-above .nav-previous a:hover,
			#comment-nav-above .nav-next a:hover,
			.entry-meta .edit-link a:hover,
			.single .edit-link a:hover,
			.page .edit-link a:hover,
			.comments-link a:hover,
			.submit-btn:hover {
				background: <?php echo $button_hover1; ?>; /* Show a solid color for older browsers */
				background: -moz-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($button_hover1) .','. bricks_theme_option('button_hover_opacity1'); ?>), rgba(<?php echo $this->hex_to_rgb($button_hover2) .','. bricks_theme_option('button_hover_opacity2'); ?>) );
				background: -o-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($button_hover1) .','. bricks_theme_option('button_hover_opacity1'); ?>), rgba(<?php echo $this->hex_to_rgb($button_hover2) .','. bricks_theme_option('button_hover_opacity2'); ?>) );
				background: -webkit-gradient(linear, 0% 0%, 0% 100%, from( rgba(<?php echo $this->hex_to_rgb($button_hover1) .','. bricks_theme_option('button_hover_opacity1'); ?>) ), to( rgba(<?php echo $this->hex_to_rgb($button_hover2) .','. bricks_theme_option('button_hover_opacity2'); ?>) ) ); /* older webkit syntax */
				background: -webkit-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($button_hover1) .','. bricks_theme_option('button_hover_opacity1'); ?>), rgba(<?php echo $this->hex_to_rgb($button_hover2) .','. bricks_theme_option('button_hover_opacity2'); ?>) );
				border: 1px solid rgba(<?php echo $this->hex_to_rgb($button_border) .','. bricks_theme_option('button_hover_opacity1'); ?>);
				color: <?php echo $button_text_color; ?>;
			}
			#comments a.comment-edit-link {
				color: <?php echo $button_text_color; ?>;
			}
			<?php $caption_background = bricks_theme_option('caption_background'); ?>
			.entry-content h1, .entry-content h2, .entry-content h3, .entry-content h4, .entry-content h5, .entry-content h6,
			.contact-form label.text, .contact-form label.textarea, .contact-form label.radio, .contact-form label.checkbox,
			.contact-form label.select {
				color: <?php echo bricks_theme_option('content_headings'); ?>;
			}
			.entry-content th, .comment-content th {
				color: <?php echo bricks_theme_option('table_header'); ?>;
			}
			.wp-caption,
			.attachment .navigation-attachment {
				background: <?php echo bricks_theme_option('caption_background'); ?>;
			}
			.commentlist .children li.comment {
				border-left: 1px solid rgba(<?php echo $this->hex_to_rgb($caption_background) .','. bricks_theme_option('body_text_opacity'); ?>);
			}
			pre {
				background: <?php echo bricks_theme_option('preformat_background'); ?>;
				color: <?php echo bricks_theme_option('preformat_text'); ?>;	
			}
			.page-template-showcase-php .inner-slider {
				max-width: <?php echo bricks_theme_option('large_feature_width'); ?>px;
			}
		</style>
        <?php endif;
	}
	
	
	/**
	 * Cubricks custom header print style.
	 * 
	 * Customizes the current theme stylesheet.
	 * 
	 * @param     void
	 * @return    string	$theme_options
	 * 
	 * @access    public
	 * @since     1.0.0
	 */
	public function bricks_header_print_style() {
		
		$site_title_color = bricks_theme_option('site_title_color');
		$site_description_color = bricks_theme_option('site_description_color');
		$site_title_shadow = bricks_theme_option('site_title_shadow');
		if( $site_title_color ) :
		?>
        <style type="text/css">
		#site-header span.site-title,
		#site-header span.site-title a {
			color: rgba(<?php echo $this->hex_to_rgb($site_title_color) .','. bricks_theme_option('site_title_opacity'); ?>);
			font-family: <?php echo bricks_theme_option('site_title_fontface'); ?>;
			font-size: <?php echo bricks_theme_option('site_title_size'); ?>px;
			text-shadow: rgba(<?php echo $this->hex_to_rgb($site_title_shadow) .','. bricks_theme_option('site_title_shadow_opacity'); ?>);
		}
		#site-header span.site-description {
			font-family: <?php echo bricks_theme_option('site_description_fontface'); ?>;
			color: rgba(<?php echo $this->hex_to_rgb($site_description_color) .','. bricks_theme_option('site_description_opacity'); ?>);
			font-size: <?php echo bricks_theme_option('site_description_size'); ?>px;
			text-shadow: rgba(<?php echo $this->hex_to_rgb($site_title_shadow) .','. bricks_theme_option('site_title_shadow_opacity'); ?>);
		}
		<?php // Site Header Container //
		$siteheader_color1 = bricks_theme_option('siteheader_color1');
		$siteheader_color2 = bricks_theme_option('siteheader_color2');
		$siteheader_border_top = bricks_theme_option('siteheader_border_top');
		$siteheader_border_bottom = bricks_theme_option('siteheader_border_bottom');
		$siteheader_text_color = bricks_theme_option('siteheader_text_color');
		?>
		#branding {
		<?php if( bricks_theme_option('header_background_img') != '' ) : ?>
		
			background: rgba(<?php echo $this->hex_to_rgb($siteheader_color1) .','. bricks_theme_option('siteheader_opacity1'); ?>) url(<?php echo bricks_theme_option('header_background_img'); ?>) <?php echo bricks_theme_option('header_background_repeat').' '.bricks_theme_option('header_background_attachment').' '.bricks_theme_option('header_background_xpos').'% '.bricks_theme_option('header_background_ypos'); ?>%;

		<?php else : ?>
		
			background: <?php echo $siteheader_color1; ?>; /* Show a solid color for older browsers */
			background: -moz-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($siteheader_color1) .','. bricks_theme_option('siteheader_opacity1'); ?>), rgba(<?php echo $this->hex_to_rgb($siteheader_color2) .','. bricks_theme_option('siteheader_opacity2'); ?>) );
			background: -o-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($siteheader_color1) .','. bricks_theme_option('siteheader_opacity1'); ?>), rgba(<?php echo $this->hex_to_rgb($siteheader_color2) .','. bricks_theme_option('siteheader_opacity2'); ?>) );
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from( rgba(<?php echo $this->hex_to_rgb($siteheader_color1) .','. bricks_theme_option('siteheader_opacity1'); ?>) ), to( rgba(<?php echo $this->hex_to_rgb($siteheader_color2) .','. bricks_theme_option('siteheader_opacity2'); ?>) ) ); /* older webkit syntax */
			background: -webkit-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($siteheader_color1) .','. bricks_theme_option('siteheader_opacity1'); ?>), rgba(<?php echo $this->hex_to_rgb($siteheader_color2) .','. bricks_theme_option('siteheader_opacity2'); ?>) );
			
		<?php endif; ?>
			border-top: 1px solid rgba(<?php echo $this->hex_to_rgb($siteheader_border_top) .','. bricks_theme_option('siteheader_opacity1'); ?>);
			border-bottom: 1px solid rgba(<?php echo $this->hex_to_rgb($siteheader_border_bottom) .','. bricks_theme_option('siteheader_opacity2'); ?>);
		}
		<?php // Featured Slider Wrapper
			$slider_wrapper_color = bricks_theme_option('slider_wrapper_color');
			$slider_wrapper_image = bricks_theme_option('slider_wrapper_image');
		?>
		#bricks-slider-wrapper {
			background: <?php echo $slider_wrapper_color; ?>; /* Show a solid color for older browsers */
			background: rgba(<?php echo $this->hex_to_rgb($slider_wrapper_color).','.bricks_theme_option('slider_wrapper_opacity'); ?>) url(<?php echo bricks_theme_option('slider_wrapper_image'); ?>) <?php echo bricks_theme_option('slider_wrapper_repeat').' '.bricks_theme_option('slider_wrapper_attachment').' '.bricks_theme_option('slider_wrapper_xpos'). '% ' .bricks_theme_option('slider_wrapper_ypos'); ?>%;
			height: <?php echo bricks_theme_option('slider_wrapper_height'); ?>px;
        }
		<?php endif; ?>
		</style>
    <?php
	}
	
	
	/**
	 * Cubricks primary navigation menu print style.

	 * 
	 * Customizes the navigation section stylesheet.
	 * 
	 * @param     void
	 * @return    string	$theme_options
	 * 
	 * @access    public
	 * @since     1.0.0
	 */
	public function bricks_navigation_print_style() {
		
		$topbar_wrapper_color = bricks_theme_option('topbar_wrapper_color');
		$topbar_text_color = bricks_theme_option('topbar_text_color');
		$topbar_bg_hover = bricks_theme_option('topbar_bg_hover');
		$topbar_text_current = bricks_theme_option('topbar_text_current');
		if($topbar_wrapper_color) :
		?>
        <style type="text/css">
		#topbar-wrapper {
			background: rgba(<?php echo $this->hex_to_rgb($topbar_wrapper_color) .','. bricks_theme_option('topbar_wrapper_opacity'); ?>) url(<?php echo bricks_theme_option('topbar_wrapper_img'); ?>) <?php echo bricks_theme_option('topbar_wrap_attachment').' '.bricks_theme_option('topbar_wrap_repeat').' '.bricks_theme_option('topbar_wrap_xpos').'% '. bricks_theme_option('topbar_wrap_ypos') .'%'?>;
        }
		#topbar ul ul {
			background: rgba(<?php echo $this->hex_to_rgb($topbar_wrapper_color) .','. bricks_theme_option('topbar_wrapper_opacity'); ?>);	
		}
		#topbar a {
			font-family: <?php echo bricks_theme_option('topbar_fontface'); ?>;
			font-size: <?php echo bricks_theme_option('topbar_text_size'); ?>px;
			line-height: <?php echo bricks_theme_option('topbar_text_size'); ?>px;
			font-weight: <?php echo bricks_theme_option('topbar_fontweight'); ?>;
			text-transform: <?php echo bricks_theme_option('topbar_text_transform'); ?>;
			color: rgba(<?php echo $this->hex_to_rgb($topbar_text_color) .','. bricks_theme_option('topbar_text_opacity'); ?>);
		}
		#topbar li:hover > a,
		#topbar a:focus {
			color: rgba(<?php echo $this->hex_to_rgb($topbar_text_color) .','. bricks_theme_option('topbar_text_opacity'); ?>);
			background: rgba(<?php echo $this->hex_to_rgb($topbar_bg_hover) .','. bricks_theme_option('topbar_current_opacity'); ?>);
		}
		#topbar .current-menu-item > a,
		#topbar .current-menu-ancestor > a,
		#topbar .current_page_item > a,
		#topbar .current_page_ancestor > a {
			color: rgba(<?php echo $this->hex_to_rgb($topbar_text_current) .','. bricks_theme_option('topbar_text_opacity'); ?>);
		}
        <?php // Primary Navigation Menu
			  $navmenu_bg_color = bricks_theme_option('navmenu_bg_color');
			  $navmenu_bg_hover = bricks_theme_option('navmenu_bg_hover');
			  $navmenu_bg_border = bricks_theme_option('navmenu_bg_border');
			  $navmenu_text_color = bricks_theme_option('navmenu_text_color');
			  $navmenu_text_shadow = bricks_theme_option('navmenu_text_shadow');
			  $navmenu_text_current = bricks_theme_option('navmenu_text_current');
		?>
		#access ul ul {
			background: <?php echo $navmenu_bg_color; ?>; /* Show a solid color for older browsers */
			border-bottom: inset 8px solid rgba(<?php echo $this->hex_to_rgb($navmenu_text_color) .','. bricks_theme_option('navmenu_text_opacity'); ?>);
		}
		#access a {
			color: rgba(<?php echo $this->hex_to_rgb($navmenu_text_color) .','. bricks_theme_option('navmenu_text_opacity'); ?>);
			font-family: <?php echo bricks_theme_option('navmenu_fontface'); ?>;
			font-size: <?php echo bricks_theme_option('navmenu_text_size'); ?>px;
			font-weight: <?php echo bricks_theme_option('navmenu_fontweight'); ?>;
			text-transform: <?php echo bricks_theme_option('navmenu_text_transform'); ?>;
			text-shadow: 1px 1px rgba(<?php echo $this->hex_to_rgb($navmenu_text_shadow) .','. bricks_theme_option('navmenu_text_opacity'); ?>);
		}
		#access li:hover > a,
		#access a:focus {
			background: none;
			color: rgba(<?php echo $this->hex_to_rgb($navmenu_text_color) .','. bricks_theme_option('navmenu_text_opacity'); ?>);
		}
		#access ul li > ul li a:hover {
			color: rgba(<?php echo $this->hex_to_rgb($navmenu_text_color) .','. bricks_theme_option('navmenu_text_opacity'); ?>);
			background: <?php echo $navmenu_bg_hover; ?>; /* Show a solid color for older browsers */
		}
		#access .current-menu-item > a,
		#access .current-menu-ancestor > a,
		#access .current_page_item > a,
		#access .current_page_ancestor > a,
		#access .current-menu-item,
		#access .current-menu-ancestor,
		#access .current_page_item,
		#access .current_page_ancestor {
			color: rgba(<?php echo $this->hex_to_rgb($navmenu_text_current) .','. bricks_theme_option('navmenu_text_opacity'); ?>);
			text-shadow: 1px 1px rgba(<?php echo $this->hex_to_rgb($navmenu_bg_color) .','. bricks_theme_option('navmenu_text_opacity')/2; ?>);
		}
		<?php
		$nav_wrapper_color = bricks_theme_option('nav_wrapper_color');
		$nav_border_top = bricks_theme_option('nav_border_top');
		$nav_border_bottom = bricks_theme_option('nav_border_bottom');
		?>
		#nav-wrapper {
			background: rgba(<?php echo $this->hex_to_rgb($nav_wrapper_color) .','. bricks_theme_option('nav_wrapper_opacity'); ?>) url(<?php echo bricks_theme_option('nav_wrapper_img'); ?>) <?php echo bricks_theme_option('nav_wrap_attachment').' '.bricks_theme_option('nav_wrap_repeat').' '.bricks_theme_option('nav_wrap_xpos').'% '. bricks_theme_option('nav_wrap_ypos') .'%'?>;
			border-top: 1px solid rgba(<?php echo $this->hex_to_rgb($nav_border_top) .','. bricks_theme_option('nav_border_opacity'); ?>);
			border-bottom: inset 1px solid rgba(<?php echo $this->hex_to_rgb($nav_border_bottom) .','. bricks_theme_option('nav_border_opacity'); ?>);
        }
		<?php $footernav_text_color = bricks_theme_option('footernav_text_color'); ?>
		#footer-navmenu li,
		#footer-navmenu a {
			font-family: <?php echo bricks_theme_option('footernav_fontface'); ?>;
			color: rgba(<?php echo $this->hex_to_rgb($footernav_text_color) .','. bricks_theme_option('footernav_text_opacity'); ?>);
			font-size: <?php echo bricks_theme_option('footernav_text_size'); ?>px;
			font-weight: <?php echo bricks_theme_option('footernav_fontweight'); ?>;
			text-transform: <?php echo bricks_theme_option('footernav_text_transform'); ?>;
		}
		</style>
        <?php endif;
	}
	
	
	/**
	 * Cubricks content print style.
	 * 
	 * Customizes the current theme stylesheet.
	 * 
	 * @param     void
	 * @return    string	$theme_options
	 * 
	 * @access    public
	 * @since     1.0.0
	 */
	public function bricks_content_print_style() {
		
		$content_wrapper_color = bricks_theme_option('content_wrapper_color');
		$article_bg_color = bricks_theme_option('article_bg_color');
		$article_bg_image = bricks_theme_option('article_bg_image');
		$headlines_color = bricks_theme_option('headlines_color');
		$entry_title_color = bricks_theme_option('entry_title_color');
		$linkformat_border = bricks_theme_option('linkformat_border');
		$formfield_border = bricks_theme_option('formfield_border');
		$formfield_background = bricks_theme_option('formfield_background');
		if( $article_bg_color ) :
		?>
        <style type="text/css">		
		#content-wrapper {
			background: rgba(<?php echo $this->hex_to_rgb($content_wrapper_color) .','. bricks_theme_option('content_wrapper_opacity'); ?>) url(<?php echo bricks_theme_option('content_wrapper_img'); ?>) <?php echo bricks_theme_option('content_wrap_repeat') .' '. bricks_theme_option('content_wrap_attachment') .' '. bricks_theme_option('content_wrap_xpos') .'% '. bricks_theme_option('content_wrap_ypos') .'%'; ?>;
        }
		#content > article {
			background: <?php echo $article_bg_color; ?>; /* Show a solid color for older browsers */
			background: rgba(<?php echo $this->hex_to_rgb($article_bg_color) .','. bricks_theme_option('article_bg_opacity'); ?>) url(<?php echo bricks_theme_option('article_bg_image'); ?>) <?php echo bricks_theme_option('article_bg_repeat').' '.bricks_theme_option('article_bg_attachment').' '.bricks_theme_option('article_bg_xpos').' '.bricks_theme_option('article_bg_ypos'); ?>;
		}
		#comments-title,
		.archive-header .page-title,
		.search-header .page-title,
		.search .page-title,
		.showcase-heading,
		.archive-heading,
		.search-heading,
		#content > .widgettitle,
		#content article.error404 > .widgettitle {
			font-family: <?php echo bricks_theme_option('headlines_fontface'); ?>;
			color: rgba(<?php echo $this->hex_to_rgb($headlines_color) .','. bricks_theme_option('headlines_opacity'); ?>);
			font-size: <?php echo bricks_theme_option('headlines_size'); ?>px;
			font-weight: <?php echo bricks_theme_option('headlines_fontweight'); ?>;
			text-shadow: 1px 1px rgba(<?php echo $this->hex_to_rgb($content_wrapper_color) .','. bricks_theme_option('headlines_opacity'); ?>);
			text-transform: <?php echo bricks_theme_option('headlines_text_transform'); ?>;
		}
		.entry-title,
		.entry-title a,
		div.entry-title_text .entry-title,
		div.entry-title_text .entry-title a {
			font-family: <?php echo bricks_theme_option('entry_title_fontface'); ?>;
			color: rgba(<?php echo $this->hex_to_rgb($entry_title_color) .','. bricks_theme_option('entry_title_opacity'); ?>);
			font-size: <?php echo bricks_theme_option('entry_title_size'); ?>px;
			font-weight: <?php echo bricks_theme_option('entry_title_fontweight'); ?>;
			text-shadow: 1px 1px rgba(<?php echo $this->hex_to_rgb($content_wrapper_color) .','. bricks_theme_option('entry_title_opacity'); ?>);
			text-transform: <?php echo bricks_theme_option('entry_title_text_transform'); ?>;
		}
		.search .entry-title,
		.search .entry-title a {
			font-size: <?php echo bricks_theme_option('entry_title_size'); ?>px;
		}
		#content .contact-form input[type=text].name {
			background: <?php echo $formfield_background; ?> url(<?php echo esc_url( trailingslashit( BRICKS_IMAGES ) . 'name.png' ); ?>) no-repeat 1% 50% scroll;
			border-color: <?php echo $formfield_border; ?>;
		}
		#content .contact-form input[type=text].email {
			background: <?php echo $formfield_background; ?> url(<?php echo esc_url( trailingslashit( BRICKS_IMAGES ) . 'email.png' ); ?>) no-repeat 1% 50% scroll;
			border-color: <?php echo $formfield_border; ?>;
		}
		#content .contact-form input[type=text].url {
			background: <?php echo $formfield_background; ?> url(<?php echo esc_url( trailingslashit( BRICKS_IMAGES ) . 'website.png' ); ?>) no-repeat 1% 50% scroll;
			border-color: <?php echo $formfield_border; ?>;
		}
		#content .contact-form input[type=text], #content .contact-form textarea, #content .contact-form select {
			background: <?php echo $formfield_background; ?>;
			border-color: <?php echo $formfield_border; ?>;
		}
		<?php $content_shadow = bricks_theme_option('content_shadow'); ?>
		#content > article,
		#content > #comments,
		#primary > #content .recent-posts,
		#content > #author-info {
			-webkit-box-shadow: 0 1px 3px rgba(<?php echo $this->hex_to_rgb($content_shadow) .',0.3'; ?>);
			-moz-box-shadow: 0 1px 3px rgba(<?php echo $this->hex_to_rgb($content_shadow) .',0.3'; ?>);
			box-shadow: 0 1px 3px rgba(<?php echo $this->hex_to_rgb($content_shadow) .',0.3'; ?>);
		}
		<?php $slider_caption_bg   = bricks_theme_option('slider_caption_bg'); 
			  $slider_caption_text = bricks_theme_option('slider_caption_text'); ?>
	    .nivo-caption {
			background: rgba(<?php echo $this->hex_to_rgb($slider_caption_bg) .','. bricks_theme_option('slider_caption_opacity'); ?>);
			color: <?php echo $slider_caption_text; ?>;
		}
		<?php $bricks_chat_odd  = bricks_theme_option('bricks_chat_odd'); 
			  $bricks_chat_even = bricks_theme_option('bricks_chat_even'); ?>
		.bricks-chat .chat-odd strong {
			color: <?php echo $bricks_chat_odd; ?>;
		}
		.bricks-chat .chat-even strong {
			color: <?php echo $bricks_chat_even; ?>;
		}
		</style>
        <?php endif;
	}
	
	
	/**
	 * Cubricks sidebar print style.
	 * 
	 * @param     void
	 * @return    string	$theme_options
	 * 
	 * @access    public
	 * @since     1.0.0
	 */
	public function bricks_sidebars_print_style() {
		
		$widget_title_color = bricks_theme_option('widget_title_color');
		$widget_title_bg = bricks_theme_option('widget_title_bg');
		$widget_text_color = bricks_theme_option('widget_text_color');
		$widget_text_shadow = bricks_theme_option('widget_text_shadow');
		$widget_title_shadow = bricks_theme_option('widget_title_shadow');
		$widget_background_color = bricks_theme_option('widget_background_color');
		if( $widget_title_color ) :
		?>
        <style type="text/css">
		#secondary .widget,
		#secondary .widget a {
			color: rgba(<?php echo $this->hex_to_rgb($widget_text_color) .','. bricks_theme_option('widget_text_opacity'); ?>);
			text-shadow: -1px -1px 0 rgba(<?php echo $this->hex_to_rgb($widget_text_shadow) .','. bricks_theme_option('widget_shadow_opacity'); ?>);
		}
		#secondary .widget-title,
		#secondary .widget-title > a {
			font-family: <?php echo bricks_theme_option('widget_title_fontface'); ?>;
			font-size: <?php echo bricks_theme_option('widget_title_size'); ?>px;
			text-transform: <?php echo bricks_theme_option('widget_title_transform'); ?>;
			color: rgba(<?php echo $this->hex_to_rgb($widget_title_color) .','. bricks_theme_option('widget_title_opacity'); ?>);
			text-shadow: -1px -1px 0 rgba(<?php echo $this->hex_to_rgb($widget_title_shadow) .','. bricks_theme_option('widget_shadow_opacity'); ?>);
			font-weight: <?php echo bricks_theme_option('widget_title_fontweight'); ?>;
		}
		#secondary .widget-title-bg {
			background: <?php echo $widget_title_bg; ?>; /* Show a solid color for older browsers */
			background: rgba(<?php echo $this->hex_to_rgb($widget_title_bg) .','. bricks_theme_option('widget_titlebg_opacity'); ?>) url(<?php echo bricks_theme_option('widget_title_image'); ?>) <?php echo bricks_theme_option('widget_titlebg_repeat').' '.bricks_theme_option('widget_titlebg_attachment').' '.bricks_theme_option('widget_title_xpos').'% '.bricks_theme_option('widget_title_ypos'); ?>%;
		}
		.tagcloud a:hover {
			color: rgba(<?php echo $this->hex_to_rgb($widget_title_color) .','. bricks_theme_option('widget_title_opacity'); ?>);
		}
		#secondary .widget {
			background: rgba(<?php echo $this->hex_to_rgb($widget_background_color) .','. bricks_theme_option('widget_background_opacity'); ?>);
		}
		<?php 
		$fwidget_title_color = bricks_theme_option('fwidget_title_color');
		$fwidget_title_shadow = bricks_theme_option('fwidget_title_shadow');
		$fwidget_text_shadow = bricks_theme_option('fwidget_text_shadow');
		$fwidget_bg_color = bricks_theme_option('fwidget_bg_color');
		$article_bg_color = bricks_theme_option('article_bg_color');
		?>
		#supplementary .widget-title, 
		#supplementary .widget-title > a {
			font-family: <?php echo bricks_theme_option('fwidget_title_fontface'); ?>;	
			color: rgba(<?php echo $this->hex_to_rgb($fwidget_title_color) .','. bricks_theme_option('fwidget_title_opacity'); ?>);
			font-size: <?php echo bricks_theme_option('fwidget_title_size'); ?>px;
			text-transform: <?php echo bricks_theme_option('fwidget_title_transform'); ?>;
			text-shadow: 1px 1px rgba(<?php echo $this->hex_to_rgb($fwidget_title_shadow) .','. bricks_theme_option('fwidget_title_opacity'); ?>);
		}
		<?php $fwidget_text_color = bricks_theme_option('fwidget_text_color'); ?>
		#supplementary .widget,
		#supplementary .widget a {
			color: rgba(<?php echo $this->hex_to_rgb($fwidget_text_color) .','. bricks_theme_option('fwidget_text_opacity'); ?>);
			font-weight: <?php echo bricks_theme_option('fwidget_text_fontweight'); ?>;
			text-shadow: 1px 1px rgba(<?php echo $this->hex_to_rgb($fwidget_text_shadow) .','. bricks_theme_option('fwidget_text_opacity'); ?>);
		}
		#content nav a.page-numbers,
		#content nav a.page-numbers:hover {
			background: <?php echo $fwidget_bg_color; ?>; /* Show a solid color for older browsers */
			background: -moz-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($article_bg_color) .','. bricks_theme_option('fwidget_bg_opacity'); ?>), rgba(<?php echo $this->hex_to_rgb($fwidget_bg_color) .','. bricks_theme_option('fwidget_bg_opacity'); ?>) );
			background: -o-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($article_bg_color) .','. bricks_theme_option('fwidget_bg_opacity'); ?>), rgba(<?php echo $this->hex_to_rgb($fwidget_bg_color) .','. bricks_theme_option('fwidget_bg_opacity'); ?>) );
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from( rgba(<?php echo $this->hex_to_rgb($article_bg_color) .','. bricks_theme_option('fwidget_bg_opacity'); ?>) ), to( rgba(<?php echo $this->hex_to_rgb($fwidget_bg_color) .','. bricks_theme_option('fwidget_bg_opacity'); ?>) ) ); /* older webkit syntax */
			background: -webkit-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($article_bg_color) .','. bricks_theme_option('fwidget_bg_opacity'); ?>), rgba(<?php echo $this->hex_to_rgb($fwidget_bg_color) .','. bricks_theme_option('fwidget_bg_opacity'); ?>) );
		}
		<?php $widget_button1 = bricks_theme_option('widget_button1');
			  $widget_button2 = bricks_theme_option('widget_button2');
			  $widget_button_border = bricks_theme_option('widget_button_border');
			  $widget_button_text = bricks_theme_option('widget_button_text');
		?>
		.widget .searchform input[type=text],
		.widget input.field,
		.widget .search-field input[type=text],
		input[type=text],
		textarea {
			border: 1px solid rgba(<?php echo $this->hex_to_rgb($widget_button_border) .','. bricks_theme_option('widget_button_opacity2'); ?>);
		}
		#supplementary .widget.search input[type=text] {
			border-right: 1px solid rgba(<?php echo $this->hex_to_rgb($widget_button_border) .','. bricks_theme_option('widget_button_opacity2'); ?>);
		}
		#subscribe-blog input[type=submit],
		#content .searchform input[type=submit],
		#content .pushbutton-wide,
		.widget .searchform input[type=submit],
		.widget input[type=submit] {
			background: <?php echo $widget_button1; ?>; /* Show a solid color for older browsers */
			background: -moz-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($widget_button1) .','. bricks_theme_option('button_opacity1'); ?>), rgba(<?php echo $this->hex_to_rgb($widget_button2) .','. bricks_theme_option('button_opacity2'); ?>) );
			background: -o-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($widget_button1) .','. bricks_theme_option('button_opacity1'); ?>), rgba(<?php echo $this->hex_to_rgb($widget_button2) .','. bricks_theme_option('button_opacity2'); ?>) );
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from( rgba(<?php echo $this->hex_to_rgb($widget_button1) .','. bricks_theme_option('button_opacity1'); ?>) ), to( rgba(<?php echo $this->hex_to_rgb($widget_button2) .','. bricks_theme_option('button_opacity2'); ?>) ) ); /* older webkit syntax */
			background: -webkit-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($widget_button1) .','. bricks_theme_option('button_opacity1'); ?>), rgba(<?php echo $this->hex_to_rgb($widget_button2) .','. bricks_theme_option('button_opacity2'); ?>) );
			border: 1px solid rgba(<?php echo $this->hex_to_rgb($widget_button_border) .','. bricks_theme_option('button_opacity1'); ?> );
			color: <?php echo $widget_button_text; ?>;
			text-shadow: 0px 0px 2px rgba(<?php echo $this->hex_to_rgb($widget_button1) .','. bricks_theme_option('button_opacity1'); ?>) );
		}
		<?php $widget_button_hover1 = bricks_theme_option('widget_button_hover1');
			  $widget_button_hover2 = bricks_theme_option('widget_button_hover2');
		?>		
		#subscribe-blog input:hover[type=submit],
		#supplementary input:hover[type=submit],
		.widget .searchform input:hover[type=submit],
		#content button.pushbutton-wide :hover {
			background: <?php echo $widget_button_hover1; ?>; /* Show a solid color for older browsers */
			background: -moz-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($widget_button_hover1) .','. bricks_theme_option('widget_button_hover_opacity1'); ?>), rgba(<?php echo $this->hex_to_rgb($widget_button_hover2) .','. bricks_theme_option('widget_button_hover_opacity2'); ?>) );
			background: -o-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($widget_button_hover1) .','. bricks_theme_option('widget_button_hover_opacity1'); ?>), rgba(<?php echo $this->hex_to_rgb($widget_button_hover2) .','. bricks_theme_option('widget_button_hover_opacity2'); ?>) );
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from( rgba(<?php echo $this->hex_to_rgb($widget_button_hover1) .','. bricks_theme_option('widget_button_hover_opacity1'); ?>) ), to( rgba(<?php echo $this->hex_to_rgb($widget_button_hover2) .','. bricks_theme_option('widget_button_hover_opacity2'); ?>) ) ); /* older webkit syntax */
			background: -webkit-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($widget_button_hover1) .','. bricks_theme_option('widget_button_hover_opacity1'); ?>), rgba(<?php echo $this->hex_to_rgb($widget_button_hover2) .','. bricks_theme_option('widget_button_hover_opacity2'); ?>) );
			border: 1px solid rgba(<?php echo $this->hex_to_rgb($widget_button_border) .','. bricks_theme_option('button_opacity2'); ?> );
			color: <?php echo $widget_button_text; ?>;
	  	}
		</style>
        <?php endif;
	}
	
	
	/**
	 * Cubricks footer print style.
	 * 
	 * Customizes the current theme stylesheet.
	 * 
	 * @param     void
	 * @return    string	$theme_options
	 * 
	 * @access    public
	 * @since     1.0.0
	 */
	public function bricks_footer_print_style() {
		
		$fwidget_bg_color = bricks_theme_option('fwidget_bg_color');
		$fwidget_border_top = bricks_theme_option('fwidget_border_top');
		$fwidget_border_bottom = bricks_theme_option('fwidget_border_bottom');
		$footer_wrapper_color = bricks_theme_option('footer_wrapper_color');
		if( $footer_wrapper_color ) :
		?>
        <style type="text/css">
		#footer-sidebar-wrapper {
			background: <?php echo $fwidget_bg_color; ?>; /* Show a solid color for older browsers */
			background: rgba(<?php echo $this->hex_to_rgb($fwidget_bg_color) .','. bricks_theme_option('fwidget_bg_opacity'); ?>) url(<?php echo bricks_theme_option('fwidget_bg_image'); ?>) <?php echo bricks_theme_option('fwidget_bg_xpos'). '% ' .bricks_theme_option('fwidget_bg_ypos') .'% '; ?><?php echo ' '.bricks_theme_option('fwidget_bg_repeat').' '.bricks_theme_option('fwidget_bg_attachment'); ?>;
			border-top: <?php echo bricks_theme_option('fwidget_border_width'); ?>px solid rgba(<?php echo $this->hex_to_rgb($fwidget_border_top) .','. bricks_theme_option('fwidget_border_opacity'); ?>);
			border-bottom: 1px solid rgba(<?php echo $this->hex_to_rgb($fwidget_border_bottom) .','. bricks_theme_option('fwidget_border_opacity'); ?>);
		}
		#footer-wrapper {
			background: rgba(<?php echo $this->hex_to_rgb($footer_wrapper_color) .','. bricks_theme_option('footer_wrapper_opacity'); ?>) url(<?php echo bricks_theme_option('footer_wrapper_img'); ?>) <?php echo bricks_theme_option('footer_wrap_repeat').' '.bricks_theme_option('footer_wrap_attachment').' '.bricks_theme_option('footer_wrap_xpos') .'% '. bricks_theme_option('footer_wrap_ypos') .'%'; ?>;
        }
		<?php 
		$footer_bg_color = bricks_theme_option('footer_bg_color');
		$footer_text_color = bricks_theme_option('footer_text_color');
		$footer_link_color = bricks_theme_option('footer_link_color');
		?>
		#colophon {
			background: <?php echo $footer_bg_color; ?>; /* Show a solid color for older browsers */
			background: rgba(<?php echo $this->hex_to_rgb($footer_bg_color) .','. bricks_theme_option('footer_bg_opacity'); ?>) url(<?php echo bricks_theme_option('footer_bg_image'); ?>) <?php echo bricks_theme_option('fwidget_bg_repeat').' '.bricks_theme_option('fwidget_bg_attachment').' '.bricks_theme_option('footer_bg_xpos').'% '.bricks_theme_option('footer_bg_ypos') .'%'; ?>;
		}
		#colophon #copyright-notice p,
		#colophon #footer-ads,
		#colophon #site-generator p {
			font-family: <?php echo bricks_theme_option('footer_text_fontface'); ?>;
			font-size: <?php echo bricks_theme_option('footer_text_size'); ?>px;
			color: rgba(<?php echo $this->hex_to_rgb($footer_text_color) .','. bricks_theme_option('footer_text_opacity'); ?>);
		}
		#colophon #site-generator a,
		#colophon #site-generator a:hover,
		#colophon #copyright-notice a,
		#colophon #copyright-notice a:hover,
		#colophon #footer-ads a,
		#colophon #footer-ads a:hover {
			color: rgba(<?php echo $this->hex_to_rgb($footer_link_color) .','. bricks_theme_option('footer_text_opacity'); ?>);
		}
		</style>
        <?php endif;
	}
	
	public function bricks_post_format_style() {
		
		$linkformat_color1 = bricks_theme_option('linkformat_color1');
		$linkformat_color2 = bricks_theme_option('linkformat_color2');
		if( $linkformat_color1 ) : ?>
        <style type="text/css">
		.link-content,
		#content input[type=submit],
		.post-password-required input[type=submit] {
			background: <?php echo $linkformat_color1; ?>; /* Show a solid color for older browsers */
			background: -moz-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($linkformat_color1) .','. bricks_theme_option('linkformat_opacity'); ?>), rgba(<?php echo $this->hex_to_rgb($linkformat_color2) .','. bricks_theme_option('linkformat_opacity'); ?>) );
			background: -o-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($linkformat_color1) .','. bricks_theme_option('linkformat_opacity'); ?>), rgba(<?php echo $this->hex_to_rgb($linkformat_color2) .','. bricks_theme_option('linkformat_opacity'); ?>) );
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from( rgba(<?php echo $this->hex_to_rgb($linkformat_color1) .','. bricks_theme_option('linkformat_opacity'); ?>) ), to( rgba(<?php echo $this->hex_to_rgb($linkformat_color2) .','. bricks_theme_option('linkformat_opacity'); ?>) ) ); /* older webkit syntax */
			background: -webkit-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($linkformat_color1) .','. bricks_theme_option('linkformat_opacity'); ?>), rgba(<?php echo $this->hex_to_rgb($linkformat_color2) .','. bricks_theme_option('linkformat_opacity'); ?>) );
		}
		#content input:hover[type=submit],
		.post-password-required input:hover[type=submit] {
			background: <?php echo $linkformat_color2; ?>; /* Show a solid color for older browsers */
			background: -moz-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($linkformat_color2) .','. bricks_theme_option('linkformat_opacity'); ?>), rgba(<?php echo $this->hex_to_rgb($linkformat_color1) .','. bricks_theme_option('linkformat_opacity'); ?>) );
			background: -o-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($linkformat_color2) .','. bricks_theme_option('linkformat_opacity'); ?>), rgba(<?php echo $this->hex_to_rgb($linkformat_color1) .','. bricks_theme_option('linkformat_opacity'); ?>) );
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from( rgba(<?php echo $this->hex_to_rgb($linkformat_color2) .','. bricks_theme_option('linkformat_opacity'); ?>) ), to( rgba(<?php echo $this->hex_to_rgb($linkformat_color1) .','. bricks_theme_option('linkformat_opacity'); ?>) ) ); /* older webkit syntax */
			background: -webkit-linear-gradient( top, rgba(<?php echo $this->hex_to_rgb($linkformat_color2) .','. bricks_theme_option('linkformat_opacity'); ?>), rgba(<?php echo $this->hex_to_rgb($linkformat_color1) .','. bricks_theme_option('linkformat_opacity'); ?>) );
		}
		input[type=password] {
			border: 1px solid rgba(<?php echo $this->hex_to_rgb($linkformat_color2) .','. bricks_theme_option('linkformat_opacity'); ?>);
		}
		.format-link .link-icon + p {
			text-shadow: 1px 1px 1px rgba(<?php echo $this->hex_to_rgb($linkformat_color1) .','. bricks_theme_option('linkformat_opacity'); ?>);
		}
		.single .entry-meta a:hover,
		.entry-meta a:hover {
			color: background: rgba(<?php echo $this->hex_to_rgb($linkformat_color1) .','. bricks_theme_option('linkformat_opacity'); ?>);
		}
		blockquote {
			border-left: 3px solid rgba(<?php echo $this->hex_to_rgb($linkformat_color1) .','. bricks_theme_option('linkformat_opacity'); ?>);
		}
		.commentlist > li.bypostauthor,
		.commentlist .children > li.bypostauthor {
			border-top: 3px solid rgba(<?php echo $this->hex_to_rgb($linkformat_color1) .','. bricks_theme_option('linkformat_opacity'); ?>);
		}
		</style>
        <?php endif;
	}
	
	
	/**
	 * TinyMCE stylesheet
	 * 
	 * Styles the TinyMCE editor to match the theme.
	 * 
	 * @param     void
	 * @return    void
	 * 
	 * @access    public
	 * @since     1.0.0
	 */
	public function bricks_editor_style() {
		
		add_editor_style( trailingslashit( BRICKS_CSS ) . 'tinyMCE/editor-style.css' );
		add_editor_style( trailingslashit( BRICKS_CSS ) . 'tinyMCE/editor-style-rtl.css' );
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