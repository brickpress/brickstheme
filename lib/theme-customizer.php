<?php
/**
 * Implements Cubricks theme options into Theme Customizer
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
 *
 * @since Cubricks 1.0.6
 */

/**
 * Registers sections, settings and controls.
 *
 * @param $wp_customize Theme Customizer object
 * @return void
 *
 * @since Cubricks 1.0.6
 */
function cubricks_customize_register( $wp_customize ) {
	
	$capability = 'edit_theme_options';
	
	// Add postMessage support for the Theme Customizer.
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->get_setting( 'copyright_notice' )->transport = 'postMessage';
	
	/**
	 * Cubricks custom text control.
	 *
	 * @param $wp_customize Theme Customizer object
	 * @return void
	 *
	 * @since Cubricks 1.0.6
	 */
	class Cubricks_Customize_Text_Control extends WP_Customize_Control {
		
		public $type = 'text';
		public $desc = '';
	
		public function render_content() {
		
			echo '<label><span class="customize-control-title">' .esc_html( $this->label ). '</span>';
			if( $this->setting->default != '' )
				echo '<span class="default-setting" style="float:right; margin-top:-20px; color:#4F7079;">Default: <span><strong>' .$this->setting->default. '</strong></span></span>';	
			if( $this->desc != '' )
				echo '<span class="customize-control-desc">' .$this->desc. '</span>'; ?>
			<input type="text" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); ?> /></label><?php           
		}
	}
	
	/**
	 * Cubricks custom textarea.
	 *
	 * @param $wp_customize Theme Customizer object
	 * @return void
	 *
	 * @since Cubricks 1.0.6
	 */
	class Cubricks_Customize_Textarea_Control extends WP_Customize_Control {
		
		public $type = 'textarea';
		
		public $desc = '';
	
		public function render_content() {
			
			echo '<label><span class="customize-control-title">' .esc_html( $this->label ). '</span>';
			if( $this->desc != '' )
				echo '<span class="customize-control-desc">' .$this->desc. '</span>'; ?>
			<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php esc_textarea( $this->value() ); ?></textarea></label>
			<?php
		}
	}
	
	/* Layout Section
	=======================================================*/
	$wp_customize->add_section( 'layout_section', array(
		'title'          => __( 'Theme Layout', 'cubricks' ),
		'priority'       => 23,
	) );
	
	$wp_customize->add_setting( 'page_layout', array(
		'default'        => 'full-wide',
		'capability'     => $capability
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_layout', array(
		'label'      => __( 'Page Layout', 'cubricks' ),
		'section'    => 'layout_section',
		'settings' 	 => 'page_layout',
		'visibility' => 'page_layout',
		'type'       => 'radio',
		'choices'    => array(
			'full-wide'      => __('Full Width', 'cubricks'),
			'page-centered'  => __('Page Container Centered', 'cubricks')
			),
	) ) );
	
	
	/* Site and Tagline Section
	=======================================================*/
	$wp_customize->add_setting( 'site_logo', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => $capability,
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_logo', array(
		'label'    => __( 'Site Logo', 'cubricks' ),
		'section'  => 'title_tagline',
		'settings' => 'site_logo',
	) ) );
	
	/* Color Section
	=======================================================*/
	$colors = array(
		'primary_text_color'    => '#333333',
		'secondary_text_color'  => '#777777',
		'link_color'		    => '#21759B',
		'post_entry_titles'     => '#1E598E',
		'post_entry_headers'    => '#357AE8',
		'main_menu_link'        => '#1E598E',
		'menu_current_page'     => '#333333',
		'menu_hover_background' => '#F5F5F5',
		'header_menu_hover'     => '#DD4B39',
		'sidebar_link_color'    => '#336699',
		'footer_sidebar_text'   => '#474747',
		'footer_sidebar_link'   => '#1E598E',
		'footer_text_color'     => '#F5F5F5',
		'footer_link_color'     => '#F7F7F7',
		'homepage_sidebar_text' => '#0B3C63'
	);
	
	$color_priority = 20;
	
	foreach( $colors as $color => $default ) {
		
		$label = ucwords( preg_replace('/_+/', ' ', $color) );
		$priority = $color_priority++;
		
		$wp_customize->add_setting( $color, array(
			'default'           => $default,
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sanitize_hex_color',
			'capability'        => $capability
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color, array(
			'label'    => $label,
			'section'  => 'colors',
			'settings' => $color,
			'priority' => $priority
		) ) );
	}
	
	/* Text Shadows Section
	=======================================================*/
	$wp_customize->add_section( 'shadows_section', array(
		'title'          => __( 'Text Shadows', 'cubricks' ),
		'priority'       => 41,
	) );
	
	$shadows = array(
		'header_text_shadow'      => '#6F94BC',
		'menu_text_shadow'        => '#FFFFFF',
		'fsidebar_text_shadow'    => '#FFFFFF',
		'homepage_sidebar_shadow' => '#333333',
	);
	
	foreach( $shadows as $shadow => $default ) {
		
		$label = ucwords( preg_replace('/_+/', ' ', $shadow) );
		
		$wp_customize->add_setting( $shadow, array(
			'default'           => $default,
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sanitize_hex_color',
			'capability'        => $capability,
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $shadow, array(
			'label'    => $label,
			'section'  => 'shadows_section',
			'settings' => $shadow,
		) ) );
	}
	
	/* Social Section
	=======================================================*/
	$wp_customize->add_section( 'social_section', array(
		'title'          => __( 'Social Links', 'cubricks' ),
		'priority'       => 61,
	) );
	
	$wp_customize->add_setting( 'social_links_label', array(
		'default'        => __( 'Follow me on', 'cubricks' ),
		'type'			 => 'theme_mod'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_label', array(
		'label'    => __( 'Social Links Label', 'cubricks' ),
		'section'  => 'social_section',
		'settings' => 'social_links_label',
		'priority' => 10
	) ) );	

	$socials = array(
		'facebook_id'   => __( 'Username for your Facebook Page. You may use your Facebook profile if you don\'t have a page.', 'cubricks' ),
		'twitter_id'	=> __( '<strong>Username</strong>.twitter.com', 'cubricks' ),
		'google_id'		=> __( 'https://plus.google.com/<strong>012345678901234567890</strong>/', 'cubricks' ),
		'tumblr_id'		=> __( '<strong>Username</strong>.tumblr.com', 'cubricks' ),
		'flickr_id'     => __( 'http://www.flickr.com/photos/<strong>Username</strong>', 'cubricks' ),
		'youtube_id'    => __( 'http://www.youtube.com/user/<strong>Username</strong>', 'cubricks' ),
	);
	
	foreach( $socials as $social => $desc ) {
		
		$label = ucwords( preg_replace('/_+/', ' ', $social) );
		
		$wp_customize->add_setting( $social, array(
			'default'        => '',
			'type'			 => 'theme_mod'
		) );

		$wp_customize->add_control( new Cubricks_Customize_Text_Control( $wp_customize, $social, array(
			'label'    => $label,
			'section'  => 'social_section',
			'settings' => $social,
			'type'     => 'text',
			'desc'     => $desc
		) ) );
	}	
	
	/* Div wrappers
	============================================================*/
	$wrappers = array(
		'page_wrapper'     => '#FFFFFF',
		'header_wrapper'   => '#638EBC',
		'nav_wrapper'	   => '#E3EDF4',
		'content_wrapper'  => '#FFFFFF',
		'fsidebar_wrapper' => '#E3EDF4',
		'footer_wrapper'   => '#1E598E',
		'slider_wrapper'   => '#FFFFFF',
	);
	
	$wrapper_priority = 42;
	
	foreach( $wrappers as $wrapper => $default ) {
		
		$label = ucwords( preg_replace('/_+/', ' ', $wrapper) );
		$opacity = __( 'Enter values between 0 and 1, 0 = transparent | 1 = opaque', 'cubricks' );
		$priority = $wrapper_priority++;
		
		$wp_customize->add_section( $wrapper, array(
			'title'          => $label,
			'priority'       => $priority
		) );
		
		$wp_customize->add_setting( $wrapper.'_color', array(
			'default'           => $default,
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sanitize_hex_color',
			'capability'        => $capability
		) );
	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $wrapper.'_color', array(
			'label'    => __( 'Background Color', 'cubricks' ),
			'section'  => $wrapper,
			'settings' => $wrapper.'_color'
		) ) );
		
		$wp_customize->add_setting( $wrapper.'_opacity', array(
			'default'    => '1',
			'capability' => $capability
		) );
	
		$wp_customize->add_control( new Cubricks_Customize_Text_Control( $wp_customize, $wrapper.'_opacity', array(
			'label'    => __( 'Background Opacity', 'cubricks' ),
			'section'  => $wrapper,
			'settings' => $wrapper.'_opacity',
			'desc'     => $opacity
		) ) );
		
		$wp_customize->add_setting( $wrapper.'_image', array(
			'default'           => '',
			'capability'        => $capability
		) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $wrapper.'_image', array(
			'label'    => $label . __( ' Image', 'cubricks' ),
			'section'  => $wrapper,
			'settings' => $wrapper.'_image'
		) ) );
		
		$wp_customize->add_setting( $wrapper.'_repeat', array(
			'default'        => 'repeat',
			'capability'     => $capability
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $wrapper.'_repeat', array(
			'label'      => __( 'Background Repeat', 'cubricks' ),
			'section'    => $wrapper,
			'settings' 	 => $wrapper.'_repeat',
			'visibility' => $wrapper.'_image',
			'type'       => 'radio',
			'choices'    => array(
				'no-repeat'  => __('No Repeat', 'cubricks'),
				'repeat'     => __('Tile', 'cubricks'),
				'repeat-x'   => __('Tile Horizontally', 'cubricks'),
				'repeat-y'   => __('Tile Vertically', 'cubricks'),
			 	),
		) ) );
		
		$wp_customize->add_setting( $wrapper.'_position_x', array(
			'default'        => '0',
			'capability'     => $capability
		) );
	
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $wrapper.'_position_x', array(
			'label'      => __( 'Background Horizontal Position', 'cubricks' ),
			'section'    => $wrapper,
			'settings' 	 => $wrapper.'_position_x',
			'visibility' => $wrapper.'_image',
			'type'       => 'radio',
			'priority'   => 11,
			'choices'    => array(
				'0'   => __('Left', 'cubricks'),
				'50'  => __('Center', 'cubricks'),
				'100' => __('Right', 'cubricks')
				),
		) ) );
		
		$wp_customize->add_setting( $wrapper.'_position_y', array(
			'default'        => '50',
			'capability'     => $capability
		) );
	
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $wrapper.'_position_y', array(
			'label'      => __( 'Background Vertical Position', 'cubricks' ),
			'section'    => $wrapper,
			'settings' 	 => $wrapper.'_position_y',
			'visibility' => $wrapper.'_image',
			'type'       => 'radio',
			'priority'   => 12,
			'choices'    => array(
				'0'   => __('Top', 'cubricks'),
				'50'  => __('Middle', 'cubricks'),
				'100' => __('Bottom', 'cubricks')
				),
		) ) );
		
		$wp_customize->add_setting( $wrapper.'_attachment', array(
			'default'        => 'scroll',
			'capability'     => $capability
		) );
	
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $wrapper.'_attachment', array(
			'label'      => __( 'Background Attachment', 'cubricks' ),
			'section'    => $wrapper,
			'settings' 	 => $wrapper.'_attachment',
			'visibility' => $wrapper.'_image',
			'type'       => 'radio',
			'choices'    => array(
				'fixed'      => __('Fixed', 'cubricks'),
				'scroll'     => __('Scroll', 'cubricks')
				),
		) ) );
	}
	// end foreach
	
	/* Footer Section
	==========================================================*/
	$wp_customize->add_section( 'footer_section', array(
		'title'          => __( 'Footer Settings', 'cubricks' ),
		'priority'       => 91,
	) );

	$wp_customize->add_setting( 'copyright_notice', array(
		'default'        => '',
		'type'			 => 'theme_mod'
	) );

	$wp_customize->add_control( new Cubricks_Customize_Textarea_Control( $wp_customize, 'copyright_notice', array(
		'label'    => __( 'Copyright Notice', 'cubricks' ),
		'section'  => 'footer_section',
		'settings' => 'copyright_notice',
		'type'     => 'textarea',	
		'desc'	   => ''
	) ) );
	
	/* Featured Slider Section
	============================================================*/
	$wp_customize->add_section( 'slider_section', array(
		'title'          => __( 'Featured Slider', 'cubricks' ),
		'priority'       => 24,
	) );
	
	$wp_customize->add_setting( 'slider_position', array(
		'default'        => 'after_header',
		'capability'     => $capability
	) );
		
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'slider_position', array(
		'label'    => __('Slider Position', 'cubricks'),
		'section'  => 'slider_section',
		'settings' => 'slider_position',
		'type'     => 'radio',
		'visibility' => 'slider_position',
		'choices'  => array(
			'before_header'  => __( 'Before site header', 'cubricks' ),
			'after_header'   => __( 'After site header', 'cubricks' )
			),	
	) ) );
	
	$wp_customize->add_setting( 'slider_timer', array(
		'default'        => '5',
		'capability'     => $capability
	) );
		
	$wp_customize->add_control( new Cubricks_Customize_Text_Control( $wp_customize, 'slider_timer', array(
		'label'    => __('Slider Timer', 'cubricks'),
		'section'  => 'slider_section',
		'settings' => 'slider_timer',
		'desc'     => __( 'Time interval (in seconds) between slides', 'cubricks' )
	) ) );
	
	$wp_customize->add_setting( 'slider_items', array(
		'default'        => '6',
		'capability'     => $capability
	) );
		
	$wp_customize->add_control( new Cubricks_Customize_Text_Control( $wp_customize, 'slider_items', array(
		'label'    => __('Slider Items', 'cubricks'),
		'section'  => 'slider_section',
		'settings' => 'slider_items',
		'desc'     => __( 'Number of featured posts', 'cubricks' )
	) ) );
	
	$wp_customize->add_setting( 'slider_effects', array(
		'default'        => 'fade',
		'capability'     => $capability
	) );
		
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'slider_effects', array(
		'label'    => __('Slider Effects', 'cubricks'),
		'section'  => 'slider_section',
		'settings' => 'slider_effects',
		'type'     => 'select',
		'choices'  => array(
			'fade'			 	 => 'fade',
			'sliceDownRight' 	 => 'sliceDownRight',
			'sliceDownLeft' 	 => 'sliceDownLeft',
			'sliceUpRight'  	 => 'sliceUpRight',
			'sliceUpLeft'    	 => 'sliceUpLeft',
			'sliceUpDown'     	 => 'sliceUpDown',
			'sliceUpDownLeft' 	 => 'sliceUpDownLeft',
			'fold'			 	 => 'fold',
            'boxRandom'		 	 => 'boxRandom',
			'boxRain'		 	 => 'boxRain',
			'boxRainReverse'  	 => 'boxRainReverse',
			'boxRainGrow'      	 => 'boxRainGrow',
			'boxRainGrowReverse' => 'boxRainGrowReverse',
			'random'		  	 => 'random'
		)
	) ) );
	
	$wp_customize->add_setting( 'large_slider_width', array(
		'default'        => '1024',
		'capability'     => $capability
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'large_slider_width', array(
		'label'    => __('Featured Slider Width', 'cubricks'),
		'section'  => 'slider_section',
		'settings' => 'large_slider_width',	
	) ) );
	
	$wp_customize->add_setting( 'large_slider_height', array(
		'default'        => '520',
		'capability'     => $capability
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'large_slider_height', array(
		'label'    => __('Featured Slider Height', 'cubricks'),
		'section'  => 'slider_section',
		'settings' => 'large_slider_height',	
	) ) );
	
	$wp_customize->add_setting( 'large_slider_caption', array(
		'default'           => '#FFFFFF',
		'type'              => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => $capability,
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'large_slider_caption', array(
		'label'    => __('Large Slider Caption Color', 'cubricks'),
		'section'  => 'slider_section',
		'settings' => 'large_slider_caption',
	) ) );
	
	/* Reset Section
	=======================================================*/
	$wp_customize->add_section( 'reset_section', array(
		'title'          => __( 'Reset Theme', 'cubricks' )
	) );
	
	$wp_customize->add_setting( 'reset_theme', array(
		'default'        => false,
		'capability'     => $capability
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'reset_theme', array(
		'settings' => 'reset_theme',
		'label'    => __( 'Reset Theme Mods', 'cubricks' ),
		'section'  => 'reset_section',
		'type'     => 'checkbox',
	) ) );
}
add_action( 'customize_register', 'cubricks_customize_register' );


/**
 * Adds social media icons before the footer sidebars.
 *
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_social_links() {
	
	$social_links_label = get_theme_mod('social_links_label'); ?>
	<div id="social-links">
        <div id="social-links-label">
            <h1>
            <?php echo $social_links_label; ?>
            </h1>
        </div>
        <div id="social-media-links" class="dark_round">
          <ul>
            <?php $facebook_id = get_theme_mod( 'facebook_id' );
                  $twitter_id = get_theme_mod( 'twitter_id' );
                  $google_id = get_theme_mod( 'google_id' );
                  $youtube_id = get_theme_mod( 'youtube_id' );
                  $flickr_id = get_theme_mod( 'flickr_id' );
                  $tumblr_id = get_theme_mod( 'tumblr_id' );

            if( '' != $facebook_id ) : ?>     
            <li class="facebook"><a href="<?php echo esc_url( 'http://www.facebook.com/' . esc_attr($facebook_id) ); ?>" title="<?php _e( 'Follow me on Facebook', 'cubricks' ); ?>" target="_blank"></a></li>
            <?php endif; ?>
            
            <?php if( '' != $twitter_id ) : ?>
            <li class="twitter"><a href="<?php echo esc_url( 'http://www.twitter.com/' . $twitter_id ); ?>" title="<?php _e( 'Follow me on Twitter', 'cubricks' ); ?>" target="_blank"></a></li>
            <?php endif; ?>
    
            <?php if( '' != $google_id ) : ?>
            <li class="google"><a href="<?php echo esc_url( 'http://plus.google.com/' . $google_id ); ?>" title="<?php _e( 'Add me to your circles', 'cubricks' ); ?>" target="_blank"></a></li>
            <?php endif; ?>
            
            <?php if( '' != $tumblr_id ) : ?>
            <li class="tumblr"><a href="<?php echo esc_url( 'http://' .$tumblr_id. '.tumblr.com/' ); ?>" title="<?php _e( 'Follow me on Tumblr', 'cubricks' ); ?>" target="_blank"></a></li>
            <?php endif; ?>
            
            <?php if( '' != $flickr_id ) : ?>
            <li class="flickr"><a href="<?php echo esc_url( 'http://www.flickr.com/photos/' .$flickr_id ); ?>" title="<?php _e( 'Check out my Flickr photostream', 'cubricks' ); ?>" target="_blank"></a></li>
            <?php endif; ?>
            
            <?php if( '' != $youtube_id ) : ?>     
            <li class="youtube"><a href="<?php echo esc_url( 'http://www.youtube.com/user/' . $youtube_id ); ?>" title="<?php _e( 'Subscribe to my channel on Youtube', 'cubricks' ); ?>" target="_blank"></a></li>
            <?php endif; ?>
          </ul>
          <div class="clearfix"></div>
        </div>
    </div><!-- #social-links -->
	<?php
}
add_action( 'cubricks_after_content', 'cubricks_social_links' );


/**
 * Adds a style block to modify the theme's text color.
 * This function is attached to the wp_head action hook.
 *
 * @uses get_theme_mod
 *
 * @since 1.0.6
 */
function cubricks_text_color() {
	?>
	<style type="text/css">
	body,
	.comments-area article header cite a,
	.main-navigation li ul li a:hover {
		color: <?php echo get_theme_mod('primary_text_color'); ?>;
	}
	.menu-toggle:active,
	.menu-toggle.toggled-on,
	input[type="submit"]:active,
	article.post-password-required input[type=submit]:active,
	input[type="submit"].toggled-on,
	.wp-caption .wp-caption-text,
	.gallery-caption,
	.entry-caption,
	.author-description p,
	article.sticky .featured-post,
	.entry-content table,
	.comment-content table,
	footer.entry-meta,
	.archive-meta,
	.format-status .entry-header header a,
	h3.widget-title a,
	#secondary .widget .textwidget,
	article.format-quote .entry-content cite,
	.entry-content .cubricks-chat .chat-even {
		color: <?php echo get_theme_mod('secondary_text_color'); ?>;
	}
	a,
	.main-navigation a:hover,
	.comments-link a,
	.comments-link a:hover,
	.entry-meta a,
	.entry-meta a:hover,
	.format-status .entry-header header a:hover,
	.comments-area article header a:hover,
	a.comment-reply-link:hover,
	.template-homepage .widget-area .widget li a:hover,
	.entry-header .entry-title a:hover {
		color: <?php echo get_theme_mod('link_color'); ?>;
	}
	.header-menu li a,
	.header-menu li a:hover,
	.site-title,
	.site-description {
		text-shadow: 1px 1px <?php echo get_theme_mod('header_text_shadow'); ?>;
	}
	.main-navigation li a {
		color: <?php echo get_theme_mod('main_menu_link'); ?>;
	}
	/* Minimum width of 600 pixels. */
	@media screen and (min-width: 600px) {
		.main-navigation li a {
			color: <?php echo get_theme_mod('main_menu_link'); ?>;
		}
		.main-navigation li a:hover,
		.main-navigation .current-menu-item > a,
		.main-navigation .current-menu-ancestor > a  {
			color: <?php echo get_theme_mod('menu_current_page'); ?>;
		}
	}
	.header-navigation li a:hover {
		color: <?php echo get_theme_mod('header_menu_hover'); ?>
	}
	.entry-header .entry-title a,
	article.format-quote .entry-content blockquote:before,
	article.format-quote .entry-content blockquote  {
		color: <?php echo get_theme_mod('post_entry_titles'); ?>;
	}
	.entry-content h1, .comment-content h1,
	.entry-content h2, .comment-content h2,
	.entry-content .cubricks-chat .chat-even strong {
		color: <?php echo get_theme_mod('post_entry_headers'); ?>;
	}
	/* Minimum width of 1024 pixels. */
	@media screen and (min-width: 1024px) {
		.main-navigation li a {
			text-shadow: 1px 1px <?php echo get_theme_mod('menu_text_shadow'); ?>;
		}
		.main-navigation li ul li a:hover {
			background: <?php echo get_theme_mod('menu_hover_background'); ?>;
		}
		#showcase-slider .nivo-caption {
			color: <?php echo get_theme_mod('large_slider_caption'); ?>;
		}
	}
	#secondary .widget h3,
	.archive-header .archive-title,
	.showcase-header .showcase-heading,
	.content-slider-header .showcase-heading {
		background: <?php echo get_theme_mod('menu_hover_background'); ?>;
	}
	#secondary .widget a,
	#secondary .widget a:hover,
	#secondary .widget .tagcloud {
		color: <?php echo get_theme_mod('sidebar_link_color'); ?>;
	}
	#supplementary .widget a,
	#supplementary .widget a:hover,
	.template-front-page #supplementary .widget li a,
	.template-front-page #supplementary .widget li a:hover,
	#supplementary .widget .tagcloud {
		color: <?php echo get_theme_mod('footer_sidebar_link'); ?>;
		text-shadow: 1px 1px <?php echo get_theme_mod('fsidebar_text_shadow'); ?>;
	}
	#supplementary .widget .textwidget,
	#supplementary .widget-title,
	#supplementary .widget p,
	#supplementary .widget #calendar_wrap table {
		color: <?php echo get_theme_mod('footer_sidebar_text'); ?>;
		text-shadow: 1px 1px <?php echo get_theme_mod('fsidebar_text_shadow'); ?>;
	}
	#sidebar-homepage #supplementary .widget .textwidget,
	#sidebar-homepage #supplementary .widget-title,
	#sidebar-homepage #supplementary .widget p {
		color: <?php echo get_theme_mod('homepage_sidebar_text'); ?>;
		text-shadow: 1px 1px <?php echo get_theme_mod('homepage_sidebar_shadow'); ?>;
	}
	footer[role="contentinfo"],
	footer[role="contentinfo"] p {
		color: <?php echo get_theme_mod('footer_text_color'); ?>;
	}
	footer[role="contentinfo"] a,
	footer[role="contentinfo"] a:hover {
		color: <?php echo get_theme_mod('footer_link_color'); ?>;
	}
	</style>
    <?php
}
add_action( 'wp_head', 'cubricks_text_color' );


/**
 * Adds a style block to modify the page container.
 * This function is attached to the wp_head action hook.
 *
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_page_wrapper() {
	
	$page_wrapper_image   = get_theme_mod('page_wrapper_image');
	$page_wrapper_color   = get_theme_mod('page_wrapper_color');
	$page_wrapper_opacity = get_theme_mod('page_wrapper_opacity');
	
	if( '#FFFFFF' != $page_wrapper_color && '' == $page_wrapper_image ) : ?>
        <style type="text/css">
			#page {
			<?php if( '1' == $page_wrapper_opacity ) : ?>
				background: <?php echo $page_wrapper_color; ?>;
			<?php else : ?>
				background: rgba( <?php echo hex_to_rgb($page_wrapper_color) .','. $page_wrapper_opacity; ?>);
			<?php endif; ?>
			}
		</style>
		<?php elseif( '' != $page_wrapper_image ) : ?>
        <style type="text/css">
			#page {
				background: rgba( <?php echo hex_to_rgb($page_wrapper_color) .','. $page_wrapper_opacity; ?>) url( <?php echo $page_wrapper_image; ?>) <?php echo get_theme_mod('page_wrapper_repeat') .' '. get_theme_mod('page_wrapper_attachment') .' '. get_theme_mod('page_wrapper_position_x') .'% '. get_theme_mod('page_wrapper_position_y') .'%'; ?>;
			}
		</style>
		<?php else :
		return;
	endif;
}
add_action( 'wp_head', 'cubricks_page_wrapper' );


/*
 * Adds a style block to modify the header container.
 * This function is attached to the wp_head action hook.
 *
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_header_wrapper() {
	
	$header_wrapper_image   = get_theme_mod('header_wrapper_image');
	$header_wrapper_color   = get_theme_mod('header_wrapper_color');
	$header_wrapper_opacity = get_theme_mod('header_wrapper_opacity');
    
	if( '#638EBC' != $header_wrapper_color && '' == $header_wrapper_image ) : ?>
    	<style type="text/css">
			#header {
			<?php if( '1' == $header_wrapper_opacity ) : ?>
				background: <?php echo $header_wrapper_color; ?>;
			<?php else : ?>
				background: rgba( <?php echo hex_to_rgb($header_wrapper_color) .','. $header_wrapper_opacity; ?>);
			<?php endif; ?>
			}
		</style>
		<?php elseif( '' != $header_wrapper_image ) : ?>
        <style type="text/css">
			#header {
				background: rgba( <?php echo hex_to_rgb($header_wrapper_color) .','. $header_wrapper_opacity; ?>) url( <?php echo $header_wrapper_image; ?>) <?php echo get_theme_mod('header_wrapper_repeat') .' '. get_theme_mod('header_wrapper_attachment') .' '. get_theme_mod('header_wrapper_position_x') .'% '. get_theme_mod('header_wrapper_position_y') .'%'; ?>;
			}
		</style>
		<?php else :
		return;
	endif;
}
add_action( 'wp_head', 'cubricks_header_wrapper' );


/**
 * Adds a style block to modify the nav container.
 * This function is attached to the wp_head action hook.
 *
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_nav_wrapper() {
	
	$nav_wrapper_image   = get_theme_mod('nav_wrapper_image');
	$nav_wrapper_color   = get_theme_mod('nav_wrapper_color');
	$nav_wrapper_opacity = get_theme_mod('nav_wrapper_opacity');
	
	if( '#E3EDF4' != $nav_wrapper_color && '' == $nav_wrapper_image ) : ?>
        <style type="text/css">
			#sub-head {
			<?php if( '1' == $nav_wrapper_opacity ) : ?>
				background: <?php echo $nav_wrapper_color; ?>;
			<?php else : ?>
				background: rgba( <?php echo hex_to_rgb($nav_wrapper_color) .','. $nav_wrapper_opacity; ?>);
			<?php endif; ?>
			}
			.main-navigation li ul li a {
				background: <?php echo $nav_wrapper_color; ?>;
			}
		</style>
	<?php elseif( '' != $nav_wrapper_image ) : ?>
        <style type="text/css">
			#sub-head {
				background: rgba( <?php echo hex_to_rgb($nav_wrapper_color) .','. $nav_wrapper_opacity; ?>) url( <?php echo $nav_wrapper_image; ?>) <?php echo get_theme_mod('nav_wrapper_repeat') .' '. get_theme_mod('nav_wrapper_attachment') .' '. get_theme_mod('nav_wrapper_position_x') .'% '. get_theme_mod('nav_wrapper_position_y') .'%'; ?>;
			}
			.main-navigation li ul li a {
				background: <?php echo $nav_wrapper_color; ?>;
			}
		</style>
		<?php else :
		return;
	endif;
}
add_action( 'wp_head', 'cubricks_nav_wrapper' );


/**
 * Adds a style block to modify the main content container.
 * This function is attached to the wp_head action hook.
 *
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_content_wrapper() {
	
	$content_wrapper_image   = get_theme_mod('content_wrapper_image');
	$content_wrapper_color   = get_theme_mod('content_wrapper_color');
	$content_wrapper_opacity = get_theme_mod('content_wrapper_opacity');
	
	if( '#FFFFFF' != $content_wrapper_color && '' == $content_wrapper_image ) : ?>
        <style type="text/css">
			#main-content,
			#secondary .widget h3 span,
			.archive-header .archive-title span,
			.showcase-header .showcase-heading span,
			.content-slider-header .showcase-heading span {
			<?php if( '1' == $content_wrapper_opacity ) : ?>
				background: <?php echo $content_wrapper_color; ?>;
			<?php else : ?>
				background: rgba( <?php echo hex_to_rgb($content_wrapper_color) .','. $content_wrapper_opacity; ?>);
			<?php endif; ?>
			}
		</style>
		<?php elseif( '' != $content_wrapper_image ) : ?>
        <style type="text/css">
			#main-content,
			#secondary .widget h3 span,
			.archive-header .archive-title span,
			.showcase-header .showcase-heading span,
			.content-slider-header .showcase-heading span {
				background: rgba( <?php echo hex_to_rgb($content_wrapper_color) .','. $content_wrapper_opacity; ?>) url( <?php echo $content_wrapper_image; ?>) <?php echo get_theme_mod('content_wrapper_repeat') .' '. get_theme_mod('content_wrapper_attachment') .' '. get_theme_mod('content_wrapper_position_x') .'% '. get_theme_mod('content_wrapper_position_y') .'%'; ?>;
			}
		</style>
		<?php else :
		return;
	endif;
}
add_action( 'wp_head', 'cubricks_content_wrapper' );


/**
 * Adds a style block to modify the footer sidebar container.
 * This function is attached to the wp_head action hook.
 *
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_fsidebar_wrapper() {
	
	$fsidebar_wrapper_image   = get_theme_mod('fsidebar_wrapper_image');
	$fsidebar_wrapper_color   = get_theme_mod('fsidebar_wrapper_color');
	$fsidebar_wrapper_opacity = get_theme_mod('fsidebar_wrapper_opacity');

	if( '#E3EDF4' != $fsidebar_wrapper_color && '' == $fsidebar_wrapper_image ) : ?>
    	<style type="text/css">
			#sidebar-footer {
			<?php if( '1' == $fsidebar_wrapper_opacity ) : ?>
				background: <?php echo $fsidebar_wrapper_color; ?>;
			<?php else : ?>
				background: rgba( <?php echo hex_to_rgb($fsidebar_wrapper_color) .','. $fsidebar_wrapper_opacity; ?>);
			<?php endif; ?>
			}
		</style>
		<?php elseif( '' != $fsidebar_wrapper_image ) : ?>
        <style type="text/css">
			#sidebar-footer {
				background: rgba( <?php echo hex_to_rgb($fsidebar_wrapper_color) .','. $fsidebar_wrapper_opacity; ?>) url( <?php echo $fsidebar_wrapper_image; ?>) <?php echo get_theme_mod('fsidebar_wrapper_repeat') .' '. get_theme_mod('fsidebar_wrapper_attachment') .' '. get_theme_mod('fsidebar_wrapper_position_x') .'% '. get_theme_mod('fsidebar_wrapper_position_y') .'%'; ?>;
			}
		</style>
		<?php else :
		return;
	endif;
}
add_action( 'wp_head', 'cubricks_fsidebar_wrapper' );


/**
 * Adds a style block to modify the footer container.
 * This function is attached to the wp_head action hook.
 *
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_footer_wrapper() {
	
	$footer_wrapper_image   = get_theme_mod('footer_wrapper_image');
	$footer_wrapper_color   = get_theme_mod('footer_wrapper_color');
	$footer_wrapper_opacity = get_theme_mod('footer_wrapper_opacity');

	if( '#1E598E' != $footer_wrapper_color && '' == $footer_wrapper_image ) : ?>
    	<style type="text/css">
			#footer {
			<?php if( '1' == $footer_wrapper_opacity ) : ?>
				background: <?php echo $footer_wrapper_color; ?>;
			<?php else : ?>
				background: rgba( <?php echo hex_to_rgb($footer_wrapper_color) .','. $footer_wrapper_opacity; ?>);
			<?php endif; ?>
			}
		</style>
		<?php elseif( '' != $footer_wrapper_image ) : ?>
        <style type="text/css">
			#footer {
				background: rgba( <?php echo hex_to_rgb($footer_wrapper_color) .','. $footer_wrapper_opacity; ?>) url( <?php echo $footer_wrapper_image; ?>) <?php echo get_theme_mod('footer_wrapper_repeat') .' '. get_theme_mod('footer_wrapper_attachment') .' '. get_theme_mod('footer_wrapper_position_x') .'% '. get_theme_mod('footer_wrapper_position_y') .'%'; ?>;
			}
		</style>
		<?php else :
		return;
	endif;
}
add_action( 'wp_head', 'cubricks_footer_wrapper' );


/**
 * Adds a style block to modify the featured slider container.
 * This function is attached to the wp_head action hook.
 *
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_slider_wrapper() {
	
	$slider_wrapper_image   = get_theme_mod('slider_wrapper_image');
	$slider_wrapper_color   = get_theme_mod('slider_wrapper_color');
	$slider_wrapper_opacity = get_theme_mod('slider_wrapper_opacity');

	if( '#FFFFFF' != $slider_wrapper_color && '' == $slider_wrapper_image ) : ?>
    	<style type="text/css">
			#showcase-slider {
			<?php if( '1' == $slider_wrapper_opacity ) : ?>
				background: <?php echo $slider_wrapper_color; ?>;
			<?php else : ?>
				background: rgba( <?php echo hex_to_rgb($slider_wrapper_color) .','. $slider_wrapper_opacity; ?>);
			<?php endif; ?>
			}
		</style>
		<?php elseif( '' != $slider_wrapper_image ) : ?>
        <style type="text/css">
			#showcase-slider {
				background: rgba( <?php echo hex_to_rgb($slider_wrapper_color) .','. $slider_wrapper_opacity; ?>) url( <?php echo $slider_wrapper_image; ?>) <?php echo get_theme_mod('slider_wrapper_repeat') .' '. get_theme_mod('slider_wrapper_attachment') .' '. get_theme_mod('slider_wrapper_position_x') .'% '. get_theme_mod('slider_wrapper_position_y') .'%'; ?>;
			}
		</style>
		<?php else :
		return;
	endif;
}
add_action( 'wp_head', 'cubricks_slider_wrapper' );


/**
 * Fixes Site title and site logo margin when using
 * page-centered page_layout.
 *
 * @uses get_theme_mod
 *
 * @since 1.0.6
 */
function cubricks_header_layout_fix() {
	
	$page_layout = get_theme_mod('page_layout');
	$site_logo = get_theme_mod('site_logo');
	
	if( $page_layout == 'page-centered' ) : ?>
		<style type="text/css">
		<?php if( '' != $site_logo ) : ?>
			.site-logo {
				padding-left: 40px;
				padding-left: 2.857142857rem;
			}
		<?php else : ?>
			.site-title,
			.site-description {
				padding-left: 40px;
				padding-left: 2.857142857rem;
			}
		<?php endif; ?>
			</style>
	<?php endif;
}
add_action( 'wp_head', 'cubricks_header_layout_fix' );


/**
 * Modifies the large featured slider dimensions.
 * @uses get_theme_mod
 *
 * @since 1.0.6 
 */
function cubricks_large_slider_size() {
	
	$large_slider_width = get_theme_mod('large_slider_width');
	$large_slider_height = get_theme_mod('large_slider_height');
	$rembase = 14;

	if( '1024' != $large_slider_width || '520' != $large_slider_height ) : ?>
    	<style type="text/css">
		<?php if( '1024' != $large_slider_width && '520' == $large_slider_height ) : ?>
			#showcase-slider #slider-wrapper,
			#showcase-slider .nivoSlider {
				max-width: <?php echo $large_slider_width; ?>px;
				max-width: <?php echo ($large_slider_width / $rembase) ; ?>rem;
			}
			<?php elseif( '1024' == $large_slider_width && '520' != $large_slider_height ) : ?>
			#showcase-slider #slider-wrapper,
			#showcase-slider .nivoSlider {
				max-height: <?php echo $large_slider_height; ?>px;
				max-height: <?php echo ($large_slider_height / $rembase) ; ?>rem;
			}
			#showcase-slider .nivo-directionNav a {
				top: -<?php echo ((520 - $large_slider_height) + 50); ?>px;
			}
			#showcase-slider .nivo-controlNav {
				top: -<?php echo ((520 - $large_slider_height) + 20); ?>px;
			}
			<?php else : ?>
			#showcase-slider #slider-wrapper,
			#showcase-slider .nivoSlider {
				max-width: <?php echo $large_slider_width; ?>px;
				max-width: <?php echo ($large_slider_width / $rembase); ?>rem;
				max-height: <?php echo $large_slider_height; ?>px;
				max-height: <?php echo ($large_slider_height / $rembase); ?>rem;
			}
			#showcase-slider .nivo-directionNav a {
				top: -<?php echo ((520 - $large_slider_height) + 50); ?>px;
			}
			#showcase-slider .nivo-controlNav {
				top: -<?php echo ((520 - $large_slider_height) + 20); ?>px;
			}
		<?php endif; ?>
		</style>
	<?php endif;
}
add_action( 'wp_head', 'cubricks_large_slider_size' );


/**
 * Resets theme mods controlling stylesheet options, such as
 * theme layout, colors, dimensions, etc to default values.
 *
 * It does not reset text entries such as copyright notice and
 * social links.
 *
 * @uses get_theme_mod
 *
 * @since 1.0.6
 */
function cubricks_reset_theme() {
	
	$cubricks_mods = array(
	    'page_layout'             => 'full-wide',
		'large_slider_width'      => '1024',
		'large_slider_height'     => '520',
		'slider_timer'            => '3',
		'slider_effects'          => 'fade',
		'slider_items'            => '6',
		'large_slider_caption'    => '#FFFFFF',
		'primary_text_color'      => '#333333',
		'secondary_text_color'    => '#777777',
		'link_color'		      => '#21759B',
		'post_entry_titles'       => '#1E598E',
		'post_entry_headers'      => '#357AE8',
		'main_menu_link'          => '#1E598E',
		'menu_current_page'       => '#333333',
		'menu_hover_background'   => '#F5F5F5',
		'header_menu_hover'       => '#DD4B39',
		'sidebar_link_color'      => '#336699',
		'footer_sidebar_text'     => '#474747',
		'footer_sidebar_link'     => '#1E598E', 
		'footer_text_color'       => '#F5F5F5',
		'footer_link_color'       => '#F7F7F7',
		'homepage_sidebar_text'   => '#0B3C63',
		'header_text_shadow'      => '#6F94BC',
		'menu_text_shadow'        => '#FFFFFF',
		'fsidebar_text_shadow'    => '#FFFFFF',
		'homepage_sidebar_shadow' => '#FFFFFF',
		'page_wrapper_color'      => '#FFFFFF',
		'header_wrapper_color'    => '#638EBC',
		'nav_wrapper_color'	      => '#E3EDF4',
		'content_wrapper_color'   => '#FFFFFF',
		'fsidebar_wrapper_color'  => '#E3EDF4',
		'footer_wrapper_color' 	  => '#1E598E',
		'slider_wrapper_color'	  => '#FFFFFF',
		'page_wrapper_image'      => '',
		'header_wrapper_image'    => '',
		'nav_wrapper_image'	      => '',
		'content_wrapper_image'   => '',
		'fsidebar_wrapper_image'  => '',
		'footer_wrapper_image' 	  => '',
		'slider_wrapper_image'	  => '',
		'reset_theme'		      => false
	);
	if( get_theme_mod('reset_theme') ) {
		foreach( $cubricks_mods as $mod_name => $value ) {
			set_theme_mod( $mod_name, $value );
		}
	}
}
add_action( 'after_setup_theme', 'cubricks_reset_theme' );


/**
 * Convert a hexadecimal color code to its RGB equivalent
 *
 * @param	string	$hexStr (hexadecimal color value)
 * @param	boolean $returnAsString (if set true, returns the value separated by the separator character. Otherwise returns associative array)
 * @param	string 	$seperator (to separate RGB values. Applicable only if second parameter is true.)
 * @return 	array or string (depending on second parameter. Returns False if invalid hex color value)
 *
 * @since 1.0.0
 */                                                                                           
function hex_to_rgb($hexStr, $returnAsString = true, $seperator = ',') {
	
	$hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
	$rgbArray = array();
	if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
		$colorVal = hexdec($hexStr);
		$rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
		$rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
		$rgbArray['blue'] = 0xFF & $colorVal;
	} elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
		$rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
		$rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
		$rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
	} else {
		return false; //Invalid hex color code
	}
	return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray; // returns the rgb string or the associative array
}