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
				echo '<span class="default-setting">Default: <span>' .$this->setting->default. '</span></span>';	
			if( $this->desc != '' )
				echo '<span class="customize-control-desc">' .$this->desc. '</span>';
			echo '<input type="text"' .$this->link(''). ' value="' .esc_textarea( $this->value() ). '"/></label>';
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
				echo '<span class="customize-control-desc">' .$this->desc. '</span>';
			echo '<textarea rows="5" style="width:100%;"' .$this->link(''). '>' .esc_textarea( $this->value() ). '</textarea></label>';
		}
	}
	
	/**
	 * Cubricks custom jquery-ui-slider.
	 *
	 * @param $wp_customize Theme Customizer object
	 * @return void
	 *
	 * @since Cubricks 1.0.6
	 */	
	class Cubricks_Customize_Slider_Control extends WP_Customize_Control {
		
		public $type = 'slider';
		
		public $desc = '';
		
		public $minvalue = '';
		
		public $maxvalue = '';
		
		public $step = '';
		
		public function enqueue() {
			wp_enqueue_script( 'jquery-ui-slider' );
			wp_enqueue_style( 'jquery-custom-css', get_template_directory_uri() . '/js/redmond/jquery-ui-1.8.19.custom.css' );
		}
	
		public function render_content() {
			
			echo '<label><span class="customize-control-title">' .esc_html( $this->label ). '</span>';	
			echo '<div id="' .$this->id. '" class="default-values">';
			echo '<div id="slider-range-min" style="width: 200px; padding: 0 !important;">';
			echo '<input id="' .$this->id. '" name="' .$this->id. '" value="' .esc_attr( $this->value() ). '" type="text" style="width:40px;" />';
			echo '<div id="slider_' .$this->id. '"></div></div>';
			echo '<script type="text/javascript">jQuery(document).ready(function($) {
			$( "div#' .$this->id. ' #slider_' .$this->id. '" ).slider({ range: "min", value: ' .$this->value(). ', min: ' .$this->minvalue. ', max: ' .$this->maxvalue. ', step: ' .$this->step. ',
					slide: function( event, ui ) {
						$( "div#' .$this->id. ' #' .$this->id. '" ).val( ui.value );
					}
				});
				$( "div#' .$this->id. '#' .$this->id. '" ).val( $( "div#' .$this->id. ' #slider_' .$this->id. '" ).slider( "value" ) );
			});
			</script>';
			echo '</div>';
			if( $this->desc != '' )
				echo '<span class="customize-control-desc">' .$this->desc. '</span>';
			echo '</label>';
		}
	}

	/* Layout Section
	=======================================================*/
	$wp_customize->add_section( 'layout_section', array(
		'title'          => __( 'Theme Layout', 'cubricks' ),
		'priority'       => 30,
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
	
	$wp_customize->add_setting( 'cubricks_page_width', array(
		'default'        => __( '1024', 'cubricks' ),
		'type'			 => 'theme_mod'
	) );
	
	$wp_customize->add_control( new Cubricks_Customize_Text_Control( $wp_customize, 'cubricks_page_width', array(
		'label'    => __( 'Page Width', 'cubricks' ),
		'section'  => 'layout_section',
		'settings' => 'cubricks_page_width',	
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
		'primary_text_color'   => '#333333',
		'secondary_text_color' => '#777777',
		'link_color'		   => '#21759B',
		'titles_and_main_menu' => '#21759B',
		'menu_hover_background' => '#F5F5F5',
		'sidebar_link_color'   => '#336699',
		'footer_sidebar_text'  => '#474747',
		'footer_sidebar_link'  => '#1E598E',
		'footer_text_color'    => '#F5F5F5',
		'footer_link_color'    => '#F7F7F7'
	);
	
	foreach( $colors as $color => $default ) {
		
		$label = ucwords( preg_replace('/_+/', ' ', $color) );
		
		$wp_customize->add_setting( $color, array(
			'default'           => $default,
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sanitize_hex_color',
			'capability'        => $capability,
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color, array(
			'label'    => $label,
			'section'  => 'colors',
			'settings' => $color,
		) ) );
	}
	
	/* Text Shadows Section
	=======================================================*/
	$wp_customize->add_section( 'shadows_section', array(
		'title'          => __( 'Text Shadows', 'cubricks' ),
		'priority'       => 41,
	) );
	
	$shadows = array(
		'header_text_shadow'   => '#6F94BC',
		'menu_text_shadow'     => '#FFFFFF',
		'fsidebar_text_shadow' => '#FFFFFF',
		'homepage_text_shadow' => '#333333',
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
	foreach( $wrappers as $wrapper => $default ) {
		
		$label = ucwords( preg_replace('/_+/', ' ', $wrapper) );
		$opacity = __( '0 = transparent | 1 = opaque', 'cubricks' );
		
		$wp_customize->add_section( $wrapper, array(
			'title'          => $label,
			'priority'       => 70
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
			'default'           => '1',
			'capability'        => $capability
		) );
	
		$wp_customize->add_control( new Cubricks_Customize_Slider_Control( $wp_customize, $wrapper.'_opacity', array(
			'label'    => __( 'Background Opacity', 'cubricks' ),
			'section'  => $wrapper,
			'settings' => $wrapper.'_opacity',
			'desc'    => $opacity,
			'minvalue'   => '0',
			'maxvalue'   => '1',
			'step'    	 => '0.1'
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
	
		$wp_customize->add_control( new Cubricks_Customize_Slider_Control( $wp_customize, $wrapper.'_position_x', array(
			'label'      => __( 'Background Horizontal Position', 'cubricks' ),
			'section'    => $wrapper,
			'settings' 	 => $wrapper.'_position_x',
			'visibility' => $wrapper.'_image',
			'desc'    => __( '0 = left | 50 = center | 100 = right', 'cubricks' ),
			'minvalue'   => '0',
			'maxvalue'   => '100',
			'step'    	 => '1'
		) ) );
		
		$wp_customize->add_setting( $wrapper.'_position_y', array(
			'default'        => '50',
			'capability'     => $capability
		) );
	
		$wp_customize->add_control( new Cubricks_Customize_Slider_Control( $wp_customize, $wrapper.'_position_y', array(
			'label'      => __( 'Background Vertical Position', 'cubricks' ),
			'section'    => $wrapper,
			'settings' 	 => $wrapper.'_position_y',
			'visibility' => $wrapper.'_image',
			'desc'    => __( '0 = top | 50 = middle | 100 = bottom', 'cubricks' ),
			'minvalue'   => '0',
			'maxvalue'   => '100',
			'step'    	 => '1'
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
	} // end foreach
	
	
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
		'desc'	   => ''
	) ) );
	
	/* Featured Slider Section
	============================================================*/
	$wp_customize->add_section( 'slider_section', array(
		'title'          => __( 'Featured Slider', 'cubricks' ),
		'priority'       => 52,
	) );
	
	$wp_customize->add_setting( 'slider_position', array(
		'default'        => 'after-header',
		'capability'     => $capability
	) );
		
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'slider_position', array(
		'label'    => __('Slider Position', 'cubricks'),
		'section'  => 'slider_section',
		'settings' => 'slider_position',
		'type'     => 'radio',
		'visibility' => 'slider_position',
		'choices'  => array(
			'before-header'  => __( 'Before site header', 'cubricks' ),
			'after-header'   => __( 'After site header', 'cubricks' )
			),	
	) ) );
	
	$wp_customize->add_setting( 'slider_timer', array(
		'default'        => '5',
		'capability'     => $capability
	) );
		
	$wp_customize->add_control( new Cubricks_Customize_Slider_Control( $wp_customize, 'slider_timer', array(
		'label'    => __('Slider Timer', 'cubricks'),
		'section'  => 'slider_section',
		'settings' => 'slider_timer',
		'desc'     => __( 'Time interval (in seconds) between slides', 'cubricks' ),
		'minvalue' => '1',
		'maxvalue' => '10',
		'step'     => '1'	
	) ) );
	
	$wp_customize->add_setting( 'slider_items', array(
		'default'        => '6',
		'capability'     => $capability
	) );
		
	$wp_customize->add_control( new Cubricks_Customize_Slider_Control( $wp_customize, 'slider_items', array(
		'label'    => __('Slider Items', 'cubricks'),
		'section'  => 'slider_section',
		'settings' => 'slider_items',
		'desc'    => __( 'Number of featured posts', 'cubricks' ),
		'minvalue'   => '2',
		'maxvalue'   => '10',
		'step'    	 => '1'
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
	#secondary .widget .textwidget {
		color: <?php echo get_theme_mod('secondary_text_color'); ?>;
	}
	a,
	.main-navigation a:hover,
	.comments-link a:hover,
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
	.main-navigation li a,
	.entry-header .entry-title a {
		color: <?php echo get_theme_mod('titles_and_main_menu'); ?>;
	}
	.main-navigation li a {
		text-shadow: 1px 1px <?php echo get_theme_mod('menu_text_shadow'); ?>;
	}
	.main-navigation li ul li a:hover,
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
			#featured-slider-wrapper {
			<?php if( '1' == $slider_wrapper_opacity ) : ?>
				background: <?php echo $slider_wrapper_color; ?>;
			<?php else : ?>
				background: rgba( <?php echo hex_to_rgb($slider_wrapper_color) .','. $slider_wrapper_opacity; ?>);
			<?php endif; ?>
			}
		</style>
		<?php elseif( '' != $slider_wrapper_image ) : ?>
        <style type="text/css">
			#featured-slider-wrapper {
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
 * Modifies the medium featured slider dimensions.
 * @uses get_theme_mod
 *
 * @since 1.0.6
 */
function cubricks_medium_slider_size() {
	
	$medium_slider_width = cubricks_get_content_width();
	$medium_slider_height = get_content_slider_height();
	$rembase = 14;
	
	if( is_page_template('page-templates/content-slider.php') ) : ?>
		<style type="text/css">
			#content-slider-wrapper .nivoSlider  {
				width: <?php echo $medium_slider_width; ?>px;
				width: <?php echo ($medium_slider_width / $rembase); ?>rem;
			}
			#content-slider-wrapper .inner-slider {
				max-width: <?php echo $medium_slider_width; ?>px;
				max-width: <?php echo ($medium_slider_width / $rembase); ?>rem;
				height: <?php echo $medium_slider_height; ?>px;
				height: <?php echo ($medium_slider_height / $rembase); ?>rem;
			}
			#content-slider-wrapper .nivo-directionNav a {
				top: <?php echo ($medium_slider_height / 2 ) -25; ?>px;
				top: <?php echo ((($medium_slider_height / 2 ) -25) / $rembase); ?>rem;
			}
		</style>
	<?php else :
		return;
	endif;
}
//add_action( 'wp_head', 'cubricks_medium_slider_size' );


/**
 * Modifies the large featured slider dimensions.
 * @uses get_theme_mod
 *
 * @since 1.0.6 
 */
function cubricks_large_slider_size() {
	
	$page_width = get_theme_mod('cubricks_page_width');
	$large_slider_width = get_theme_mod('large_slider_width');
	$large_slider_height = get_theme_mod('large_slider_height');
	$rembase = 14;

	if( '1024' != $large_slider_width || '520' != $large_slider_height ) : ?>
    	<style type="text/css">
		<?php if( '1024' != $large_slider_width && '520' == $large_slider_height ) : ?>
			#featured-slider-wrapper .nivoSlider {
				width: <?php echo $large_slider_width; ?>px;
				width: <?php echo ($large_slider_width / $rembase) ; ?>rem;
			}
			#featured-slider-wrapper .inner-slider {
				width: <?php echo $large_slider_width; ?>px;
				width: <?php echo ($large_slider_width / $rembase) ; ?>rem;
			}
			#featured-slider-wrapper .nivo-caption {
				top: <?php echo round($large_slider_height * 0.8); ?>px;
				top: <?php echo (round($large_slider_height * 0.8) / $rembase); ?>rem;
				<?php if($large_slider_width > $page_width) :
					  $left = round(round($large_slider_width - $page_width) /2 ); ?>
					left: <?php echo $left; ?>px;
					left: <?php echo round($left /$rembase); ?>rem;
				<?php endif; ?>
			}
			<?php if($large_slider_width > $page_width) :
					  $right = round(round($large_slider_width - $page_width) /2 ); ?>
				#featured-slider-wrapper .nivo-controlNav,
				#featured-slider-wrapper .nivo-nextNav {
					right: <?php echo $right; ?>px;
					right: <?php echo round($right /$rembase); ?>rem;
				}
				#featured-slider-wrapper .nivo-prevNav {
					left: <?php echo $right; ?>px;
					left: <?php echo round($right /$rembase); ?>rem;
				}
			<?php endif; ?>	
			<?php elseif( '1024' == $large_slider_width && '520' != $large_slider_height ) : ?>
			#featured-slider-wrapper .nivoSlider {
				height: <?php echo $large_slider_height; ?>px;
				height: <?php echo ($large_slider_height / $rembase) ; ?>rem;
			}
			#featured-slider-wrapper .inner-slider {
				max-height: <?php echo $large_slider_height; ?>px;
				max-height: <?php echo ($large_slider_height / $rembase) ; ?>rem;
			}
			#featured-slider-wrapper .nivo-directionNav a {
				top: <?php echo ($large_slider_height / 2 ) -41; ?>px;
				top: <?php echo ((($large_slider_height / 2 ) -41) / $rembase); ?>rem;
			}
			<?php else : ?>
			#featured-slider-wrapper .nivoSlider {
				width: <?php echo $large_slider_width; ?>px;
				width: <?php echo ($large_slider_width / $rembase); ?>rem;
				height: <?php echo $large_slider_height; ?>px;
				height: <?php echo ($large_slider_height / $rembase); ?>rem;
			}
			#featured-slider-wrapper .inner-slider {
				width: <?php echo $large_slider_width; ?>px;
				width: <?php echo ($large_slider_width / $rembase); ?>rem;
				max-height: <?php echo $large_slider_height; ?>px;
				max-height: <?php echo ($large_slider_height / $rembase); ?>rem;
			}
			#featured-slider-wrapper .nivo-directionNav a {
				top: <?php echo ($large_slider_height / 2 ) -41; ?>px;
				top: <?php echo ((($large_slider_height / 2 ) -41) / $rembase); ?>rem;
			}
			#featured-slider-wrapper .nivo-caption {
				top: <?php echo round($large_slider_height * 0.8); ?>px;
				top: <?php echo (round($large_slider_height * 0.8) / $rembase); ?>rem;
				<?php if($large_slider_width > $page_width) :
					  $left = round(round($large_slider_width - $page_width) /2 ); ?>
					left: <?php echo $left; ?>px;
					left: <?php echo round($left /$rembase); ?>rem;
				<?php endif; ?>
			}
			<?php if($large_slider_width > $page_width) :
					  $right = round(round($large_slider_width - $page_width) /2 ); ?>
				#featured-slider-wrapper .nivo-controlNav,
				#featured-slider-wrapper .nivo-nextNav {
					right: <?php echo $right; ?>px;
					right: <?php echo round($right /$rembase); ?>rem;
				}
				#featured-slider-wrapper .nivo-prevNav {
					left: <?php echo $right; ?>px;
					left: <?php echo round($right /$rembase); ?>rem;
				}
			<?php endif; ?>		
		<?php endif; ?>
		</style>
	<?php endif;
}
add_action( 'wp_head', 'cubricks_large_slider_size' );


/**
 * Modifies the large featured slider dimensions.
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_layout_size() {
	
	$page_layout = get_theme_mod('page_layout');
	$page_width = get_theme_mod('cubricks_page_width');
	$rembase = 14;

	if( '1024' != $page_width ) :
		if( $page_layout == 'full-wide' ) : ?>
        <style type="text/css">
			footer[role="contentinfo"],
			.footer-navigation,
			.inner,
			.main-navigation,
			.header-image,
			.ie .site,
			#featured-slider-wrapper .nivo-caption,
			#featured-slider-wrapper .nivo-control {
				max-width: <?php echo $page_width; ?>px;
				max-width: <?php echo ($page_width / $rembase); ?>rem;
			}
		</style>	
    	<?php elseif( $page_layout == 'page-centered' ) : ?>
        <style type="text/css"> 
			footer[role="contentinfo"],
			.footer-navigation,
			.inner,
			.main-navigation,
			.header-image,
			.ie .site,
			#featured-slider-wrapper .nivo-caption,
			#featured-slider-wrapper .nivo-control {
				max-width: <?php echo $page_width; ?>px;
				max-width: <?php echo ($page_width / $rembase); ?>rem;
			}
			body.page-centered .site {
				max-width: <?php echo $page_width + 80; ?>px;
				max-width: <?php echo (($page_width + 80) / $rembase); ?>rem;
			}
		</style>
		<?php endif;
	else :
		return;
	endif;
}
//add_action( 'wp_head', 'cubricks_layout_size' );


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
	    'page_layout'            => 'full-wide',
		'cubricks_page_width'    => '1024',
		'large_slider_width'     => '1024',
		'large_slider_height'    => '520',
		'slider_timer'           => '5',
		'slider_effects'         => 'fade',
		'slider_items'           => '6',
		'primary_text_color'     => '#333333',
		'secondary_text_color'   => '#777777',
		'link_color'		     => '#21759B',
		'titles_and_main_menu'   => '#21759B',
		'menu_hover_background'  => '#F5F5F5',
		'sidebar_link_color'     => '#336699',
		'footer_sidebar_text'    => '#474747',
		'footer_sidebar_link'    => '#1E598E', 
		'footer_text_color'      => '#F5F5F5',
		'footer_link_color'      => '#F7F7F7',
		'header_text_shadow'     => '#6F94BC',
		'menu_text_shadow'       => '#FFFFFF',
		'fsidebar_text_shadow'   => '#FFFFFF',
		'homepage_text_shadow'   => '#333333',
		'page_wrapper_color'     => '#FFFFFF',
		'header_wrapper_color'   => '#638EBC',
		'nav_wrapper_color'	     => '#E3EDF4',
		'content_wrapper_color'  => '#FFFFFF',
		'fsidebar_wrapper_color' => '#E3EDF4',
		'footer_wrapper_color' 	 => '#1E598E',
		'slider_wrapper_color'	 => '#FFFFFF',
		'page_wrapper_image'     => '',
		'header_wrapper_image'   => '',
		'nav_wrapper_image'	     => '',
		'content_wrapper_image'  => '',
		'fsidebar_wrapper_image' => '',
		'footer_wrapper_image' 	 => '',
		'slider_wrapper_image'	 => '',
		'reset_theme'		   => false
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