<?php
/**
 * Implements Cubricks theme options into Theme Customizer
 *
 * @package    Cubricks Theme
 * @since Cubricks 1.0.6
 */

add_action ('admin_menu', 'cubricks_admin_page');
/**
 * Adds a Customize Theme link to the admin menu.
 *
 * @since Cubricks 1.0.6
 */
function cubricks_admin_page() {

    add_theme_page( 'Customize Theme', 'Customize Theme', 'edit_theme_options', 'customize.php' );
}


add_action( 'customize_register', 'cubricks_customize_register' );
/**
 * Registers sections, settings and controls.
 *
 * @param $wp_customize Theme Customizer object
 * @return void
 *
 * @since Cubricks 1.0.6
 */
function cubricks_customize_register( $wp_customize ) {
	
	
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->get_setting( 'copyright_notice' )->transport = 'postMessage';

	/* Site and Tagline Section
	=======================================================*/
	$wp_customize->add_setting( 'site_logo', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
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
		'link_color'		   => '#336699',
		'sidebar_link_color'   => '#21759B',
		'fsidebar_text_color'  => '#1E598E'
	);
	
	foreach( $colors as $color => $default ) {
		
		$label = ucwords( preg_replace('/_+/', ' ', $color) );
		
		$wp_customize->add_setting( $color, array(
			'default'           => $default,
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sanitize_hex_color',
			'capability'        => 'edit_theme_options',
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color, array(
			'label'    => $label,
			'section'  => 'colors',
			'settings' => $color,
		) ) );
	}
	
	/* Layout Section
	=======================================================*/
	$wp_customize->add_section( 'layout_section', array(
		'title'          => __( 'Theme Layout', 'cubricks' ),
		'priority'       => 51,
	) );
	
	$wp_customize->add_setting( 'container_type', array(
		'default'        => 'type1',
		'capability'     => 'edit_theme_options'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'container_type', array(
		'label'      => __( 'Page Layout' ),
		'section'    => 'layout_section',
		'settings' 	 => 'container_type',
		'visibility' => 'container_type',
		'type'       => 'radio',
		'choices'    => array(
			'type1'      => __('Type 1'),
			'type2'      => __('Type 2')
			),
	) ) );
	
	$wp_customize->add_setting( 'cubricks_page_width', array(
		'default'        => __( '1024', 'cubricks' ),
		'type'			 => 'theme_mod'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cubricks_page_width', array(
		'label'    => 'Page Width',
		'section'  => 'layout_section',
		'settings' => 'cubricks_page_width',	
	) ) );
	
	$wp_customize->add_setting( 'cubricks_content_width', array(
		'default'        => __( '680', 'cubricks' ),
		'type'			 => 'theme_mod'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cubricks_content_width', array(
		'label'    => 'Content Width',
		'section'  => 'layout_section',
		'settings' => 'cubricks_content_width'
	) ) );

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
		'label'    => 'Social Links Label',
		'section'  => 'social_section',
		'settings' => 'social_links_label',	
	) ) );	

	$socials = array(
		'facebook_id'   => 'Facebook Username',
		'twitter_id'	=> 'Twitter Username',
		'google_id'		=> 'Google Profile',
		'tumblr_id'		=> 'Tumblr Username',
		'flickr_id'     => 'Flickr Username',
		'youtube_id'    => 'YouTube Username'
	);
	
	foreach($socials as $social => $label) {
		
		$wp_customize->add_setting( $social, array(
			'default'        => '',
			'type'			 => 'theme_mod'
		) );

		// Adds a custom contorller
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $social, array(
			'label'    => $label,
			'section'  => 'social_section',
			'settings' => $social,	
		) ) );
	}	
	
	/* Footer Section
	==========================================================*/
	$wp_customize->add_section( 'footer_section', array(
		'title'          => __( 'Footer Settings', 'cubricks' ),
		'priority'       => 80,
	) );

	// Adds a custom setting Copyright Notice
	$wp_customize->add_setting( 'copyright_notice', array(
		'default'        => 'Copyright Notice',
		'type'			 => 'theme_mod'
	) );
	
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
	
		public function render_content() {
			?>
			<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
			</label>
			<?php
		}
	}

	// Adds a custom controller
	$wp_customize->add_control( new Cubricks_Customize_Textarea_Control( $wp_customize, 'copyright_notice', array(
		'label'    => 'Copyright Notice',
		'section'  => 'footer_section',
		'settings' => 'copyright_notice',	
	) ) );

	/* Div wrappers
	============================================================*/
	$wrappers = array(
		'header_wrapper'   => '#5E88B4',
		'nav_wrapper'	   => '#F3F6F9',
		'content_wrapper'  => '#FFFFFF',
		'fsidebar_wrapper' => '#E3EDF4',
		'footer_wrapper'   => '#E3EDF4',
		'slider_wrapper'   => '#000000',
	);
	foreach( $wrappers as $wrapper => $default ) {
		
		$label = ucwords( preg_replace('/_+/', ' ', $wrapper) );
		
		$wp_customize->add_section( $wrapper, array(
			'title'          => $label,
			'priority'       => 70
		) );
		
		$wp_customize->add_setting( $wrapper.'_color', array(
			'default'           => $default,
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sanitize_hex_color',
			'capability'        => 'edit_theme_options'
		) );
	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $wrapper.'_color', array(
			'label'    => __( 'Background Color', 'cubricks' ),
			'section'  => $wrapper,
			'settings' => $wrapper.'_color'
		) ) );
		
		$wp_customize->add_setting( $wrapper.'_opacity', array(
			'default'           => '1',
			'capability'        => 'edit_theme_options'
		) );
	
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $wrapper.'_opacity', array(
			'label'    => __( 'Background Opacity', 'cubricks' ),
			'section'  => $wrapper,
			'settings' => $wrapper.'_opacity'
		) ) );
		
		$wp_customize->add_setting( $wrapper.'_image', array(
			'default'           => '',
			'capability'        => 'edit_theme_options'
		) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $wrapper.'_image', array(
			'label'    => $label . __( ' Image', 'cubricks' ),
			'section'  => $wrapper,
			'settings' => $wrapper.'_image'
		) ) );
		
		$wp_customize->add_setting( $wrapper.'_repeat', array(
			'default'        => 'repeat',
			'capability'     => 'edit_theme_options'
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
			'capability'     => 'edit_theme_options'
		) );
	
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $wrapper.'_position_x', array(
			'label'      => __( 'Background Horizontal Position', 'cubricks' ),
			'section'    => $wrapper,
			'settings' 	 => $wrapper.'_position_x',
			'visibility' => $wrapper.'_image'
		) ) );
		
		$wp_customize->add_setting( $wrapper.'_position_y', array(
			'default'        => '0',
			'capability'     => 'edit_theme_options'
		) );
	
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $wrapper.'_position_y', array(
			'label'      => __( 'Background Vertical Position', 'cubricks' ),
			'section'    => $wrapper,
			'settings' 	 => $wrapper.'_position_y',
			'visibility' => $wrapper.'_image'
		) ) );
		
		$wp_customize->add_setting( $wrapper.'_attachment', array(
			'default'        => 'fixed',
			'capability'     => 'edit_theme_options'
		) );
	
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $wrapper.'_attachment', array(
			'label'      => __( 'Background Attachment', 'cubricks' ),
			'section'    => $wrapper,
			'settings' 	 => $wrapper.'_attachment',
			'visibility' => $wrapper.'_image',
			'type'       => 'radio',
			'choices'    => array(
				'fixed'      => __('Fixed', 'cubricks'),
				'scroll'     => __('Scroll', 'cubricks'),
				),
		) ) );
	} // end foreach
}

function cubricks_custom_wrappers() {
	

}

add_action( 'cubricks_before_footer', 'cubricks_social_links' );
/**
 * Adds social media icons before the footer sidebars.
 *
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_social_links() {
	
	$social_links_label = get_theme_mod('social_links_label'); ?>
	
	<div class="widget-title-bg">
        <h2 class="widget-title">
        <?php echo $social_links_label; ?>
        </h2>
	</div>
    <div id="social-media-links" class="dark_round">
      <ul>
      	<?php $facebook_id = get_theme_mod( 'facebook_id' );
			  $twitter_id = get_theme_mod( 'twitter_id' );
			  $google_id = get_theme_mod( 'google_id' );
			  $youtube_id = get_theme_mod( 'youtube_id' );
			  $flickr_id = get_theme_mod( 'flickr_id' );
              $tumblr_id = get_theme_mod( 'tumblr_id' );
		?>    
        
        <?php if( '' != $facebook_id ) : ?>     
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
	<?php
}

add_action( 'wp_head', 'cubricks_text_color' );
/**
 * @uses get_theme_mod
 *
 * @since 1.0.0 
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
	.site-header h2,
	article.sticky .featured-post,
	.entry-content table,
	.comment-content table,
	footer.entry-meta,
	.archive-meta,
	.format-status .entry-header header a {
		color: <?php echo get_theme_mod('secondary_text_color'); ?>;
	}
	a,
	.site-header h1 a:hover,
	.site-header h2 a:hover,
	.main-navigation a:hover,
	.widget-area .widget a:hover,
	footer[role="contentinfo"] a:hover,
	.comments-link a:hover,
	.entry-meta a:hover,
	.format-status .entry-header header a:hover,
	.comments-area article header a:hover,
	a.comment-reply-link:hover,
	.template-homepage .widget-area .widget li a:hover {
		color: <?php echo get_theme_mod('link_color'); ?>;
	}
	.widget-area .widget a,
	.widget-area .widget a:hover,
	.template-front-page .widget-area .widget li a,
	.template-front-page .widget-area .widget li a:hover {
		color: <?php echo get_theme_mod('sidebar_link_color'); ?>;
	}
	</style>
    <?php
}

add_action( 'wp_head', 'cubricks_header_wrapper' );
/**
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_header_wrapper() {
	
	$header_wrapper_image = get_theme_mod('header_wrapper_image');
	$header_wrapper_color = get_theme_mod('header_wrapper_color');
	?>
    <style type="text/css">
		#header {
		<?php if( '' != $header_wrapper_image ) : ?>
			background: rgba( <?php echo hex_to_rgb($header_wrapper_color) .','. get_theme_mod('header_wrapper_opacity'); ?>) url( <?php echo $header_wrapper_image; ?>) <?php echo get_theme_mod('header_wrapper_repeat') .' '. get_theme_mod('header_wrapper_attachment') .' '. get_theme_mod('header_wrapper_position_x') .'% '. get_theme_mod('header_wrapper_position_y') .'%'; ?>;
		<?php else : ?>
			background: rgba( <?php echo hex_to_rgb($header_wrapper_color) .','. get_theme_mod('header_wrapper_opacity'); ?>);
		<?php endif; ?>
	</style>
    <?php
}


add_action( 'wp_head', 'cubricks_nav_wrapper' );
/**
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_nav_wrapper() {
	
	$nav_wrapper_image = get_theme_mod('nav_wrapper_image');
	$nav_wrapper_color = get_theme_mod('nav_wrapper_color');
	?>
	<style type="text/css">
		#sub-head {
		<?php if( '' != $nav_wrapper_image ) : ?>
			background: rgba( <?php echo hex_to_rgb($nav_wrapper_color) .','. get_theme_mod('nav_wrapper_opacity'); ?>) url( <?php echo $nav_wrapper_image; ?>) <?php echo get_theme_mod('nav_wrapper_repeat') .' '. get_theme_mod('nav_wrapper_attachment') .' '. get_theme_mod('nav_wrapper_position_x') .'% '. get_theme_mod('nav_wrapper_position_y') .'%'; ?>;
		<?php else : ?>
			background: rgba( <?php echo hex_to_rgb($nav_wrapper_color) .','. get_theme_mod('nav_wrapper_opacity'); ?>);
		<?php endif; ?>
	</style>
    <?php
}

add_action( 'wp_head', 'cubricks_content_wrapper' );
/**
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_content_wrapper() {
	
	$content_wrapper_image = get_theme_mod('content_wrapper_image');
	$content_wrapper_color = get_theme_mod('content_wrapper_color');
	?>
    <style type="text/css">
		#main-content {
		<?php if( '' != $content_wrapper_image ) : ?>
			background: rgba( <?php echo hex_to_rgb($content_wrapper_color) .','. get_theme_mod('content_wrapper_opacity'); ?>) url( <?php echo $content_wrapper_image; ?>) <?php echo get_theme_mod('content_wrapper_repeat') .' '. get_theme_mod('content_wrapper_attachment') .' '. get_theme_mod('content_wrapper_position_x') .'% '. get_theme_mod('content_wrapper_position_y') .'%'; ?>;
		<?php else : ?>
			background: rgba( <?php echo hex_to_rgb($content_wrapper_color) .','. get_theme_mod('content_wrapper_opacity'); ?>);
		<?php endif; ?>
	</style>
    <?php
}

add_action( 'wp_head', 'cubricks_fsidebar_wrapper' );
/**
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_fsidebar_wrapper() {
	
	$fsidebar_wrapper_image = get_theme_mod('fsidebar_wrapper_image');
	$fsidebar_wrapper_color = get_theme_mod('fsidebar_wrapper_color');
	?>
    <style type="text/css">
		#sidebar-footer {
		<?php if( '' != $fsidebar_wrapper_image ) : ?>
			background: rgba( <?php echo hex_to_rgb($fsidebar_wrapper_color) .','. get_theme_mod('fsidebar_wrapper_opacity'); ?>) url( <?php echo $fsidebar_wrapper_image; ?>) <?php echo get_theme_mod('fsidebar_wrapper_repeat') .' '. get_theme_mod('fsidebar_wrapper_attachment') .' '. get_theme_mod('fsidebar_wrapper_position_x') .'% '. get_theme_mod('fsidebar_wrapper_position_y') .'%'; ?>;
		<?php else : ?>
			background: rgba( <?php echo hex_to_rgb($fsidebar_wrapper_color) .','. get_theme_mod('fsidebar_wrapper_opacity'); ?>);
		<?php endif; ?>
	</style>
    <?php
}

add_action( 'wp_head', 'cubricks_footer_wrapper' );
/**
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_footer_wrapper() {
	
	$footer_wrapper_image = get_theme_mod('footer_wrapper_image');
	$footer_wrapper_color = get_theme_mod('footer_wrapper_color');
	?>
    <style type="text/css">
		#footer {
		<?php if( '' != $footer_wrapper_image ) : ?>
			background: rgba( <?php echo hex_to_rgb($footer_wrapper_color) .','. get_theme_mod('footer_wrapper_opacity'); ?>) url( <?php echo $footer_wrapper_image; ?>) <?php echo get_theme_mod('footer_wrapper_repeat') .' '. get_theme_mod('footer_wrapper_attachment') .' '. get_theme_mod('footer_wrapper_position_x') .'% '. get_theme_mod('footer_wrapper_position_y') .'%'; ?>;
		<?php else : ?>
			background: rgba( <?php echo hex_to_rgb($footer_wrapper_color) .','. get_theme_mod('footer_wrapper_opacity'); ?>);
		<?php endif; ?>
	</style>
    <?php
}

add_action( 'wp_head', 'cubricks_slider_wrapper' );
/**
 * @uses get_theme_mod
 *
 * @since 1.0.0 
 */
function cubricks_slider_wrapper() {
	
	$slider_wrapper_image = get_theme_mod('slider_wrapper_image');
	$slider_wrapper_color = get_theme_mod('slider_wrapper_color');
	?>
    <style type="text/css">
		#slider-wrapper {
		<?php if( '' != $slider_wrapper_image ) : ?>
			background: rgba( <?php echo hex_to_rgb($slider_wrapper_color) .','. get_theme_mod('slider_wrapper_opacity'); ?>) url( <?php echo $slider_wrapper_image; ?>) <?php echo get_theme_mod('slider_wrapper_repeat') .' '. get_theme_mod('slider_wrapper_attachment') .' '. get_theme_mod('slider_wrapper_position_x') .'% '. get_theme_mod('slider_wrapper_position_y') .'%'; ?>;
		<?php else : ?>
			background: rgba( <?php echo hex_to_rgb($slider_wrapper_color) .','. get_theme_mod('slider_wrapper_opacity'); ?>);
		<?php endif; ?>
	</style>
    <?php
}

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