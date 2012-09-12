<?php
/**
* Array of options under layout section of our admin page.
*
* @package Cubricks Theme Options
* @subpackage Sections
* @since 1.0.0
*/

// Layout Settings Tab
$this->settings['layout-section-tab'] = array(
	'section' => 'layout',
	'archtype'=> 'structure',
	'type'    => 'no-data',
	'class'   => 'subsectiontabs',
	'choices' => array(
		'topbar-wrapper'	      => __( 'Topbar Wrapper', 'bricks' ),
		'primary-nav-wrapper'     => __( 'Navigation Wrapper', 'bricks' ),
	    'content-wrapper'	      => __( 'Content Wrapper', 'bricks' ),
		'footer-sidebar-wrapper'  => __( 'Footer Sidebar Wrapper', 'bricks' ),
		'footer-wrapper'	 	  => __( 'Footer Wrapper', 'bricks' )
	)
);

//Topbar Wrapper
$this->settings['topbar-wrapper'] = array(
	'section'  => 'layout',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['topbar_wrapper'] = array(
		'section'  => 'layout',
		'title'	   => __( 'Topbar Wrapper', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);

	$this->settings['topbar_wrapper_color'] = array(
		'section' => 'layout',
		'title'	  => __( 'Background Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#191919'
	);
	
	$this->settings['topbar_wrapper_opacity'] = array(
		'section' => 'layout',
		'title'	  => __( 'Background Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
		$this->settings['close-topbar-wrap'] = array(
			'section'  => 'layout',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['topbar_wrapper_img'] = array(
		'section' => 'layout',
		'title'	  => __( '', 'bricks' ),
		'desc'	  => __( 'Topbar Wrapper Image', 'bricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
	$this->settings['topbar-wrap-position'] = array(
		'section'  => 'layout',
		'title'	   => __( 'Background Image Position', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['topbar_wrap_xpos'] = array(
		'section' => 'layout',
		'title'   => __( 'Horizontal Position', 'bricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['topbar_wrap_ypos'] = array(
		'section' => 'layout',
		'title'   => __( 'Vertical Position', 'bricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);
	
	$this->settings['topbar_wrap_repeat'] = array(
		'section' => 'layout',
		'title'   => __( 'Background Repeat', 'bricks' ),
		'desc'    => __( 'Sets how a background image will be repeated. By default, a background image is repeated both vertically and horizontally.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'no-repeat',
		'choices' => array(
			'no-repeat' => __( 'No Repeat', 'bricks' ),
			'repeat' 	=> __( 'Tile', 'bricks' ),
			'repeat-x'  => __( 'Tile Horizontally', 'bricks' ),
			'repeat-y'  => __( 'Tile Vertically', 'bricks' )
		)
	);
	
	$this->settings['topbar_wrap_attachment'] = array(
		'section' => 'layout',
		'title'   => __( 'Background Attachment', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'scroll',
		'choices' => array(
			'scroll' => __( 'Scroll', 'bricks' ),
			'fixed'  => __( 'Fixed', 'bricks' )
		)
	);
	
		$this->settings['close-topbar-wrap-position'] = array(
			'section'  => 'layout',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);

$this->settings['close-topbar-wrapper'] = array(
	'section'  => 'layout',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);

// Navigation Wrapper
$this->settings['primary-nav-wrapper'] = array(
	'section'  => 'layout',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['nav_wrapper'] = array(
		'section'  => 'layout',
		'title'	   => __( 'Primary Navigation Wrapper', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['nav_wrapper_color'] = array(
		'section' => 'layout',
		'title'	  => __( 'Background Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#E3EDF4'
	);
	
	$this->settings['nav_wrapper_opacity'] = array(
		'section' => 'layout',
		'title'	  => __( 'Background Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
		$this->settings['close-navigation-wrapper'] = array(
			'section'  => 'layout',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['nav_wrapper_img'] = array(
		'section' => 'layout',
		'title'	  => __( '', 'bricks' ),
		'desc'	  => __( 'Primary Navigation Wrapper Image', 'bricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
	$this->settings['nav-wrap-position'] = array(
		'section'  => 'layout',
		'title'	   => __( 'Background Image Position', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['nav_wrap_xpos'] = array(
		'section' => 'layout',
		'title'   => __( 'Horizontal Position', 'bricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['nav_wrap_ypos'] = array(
		'section' => 'layout',
		'title'   => __( 'Vertical Position', 'bricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);
	
	$this->settings['nav_wrap_repeat'] = array(
		'section' => 'layout',
		'title'   => __( 'Background Repeat', 'bricks' ),
		'desc'    => __( 'Sets how a background image will be repeated. By default, a background image is repeated both vertically and horizontally.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'no-repeat',
		'choices' => array(
			'no-repeat' => __( 'No Repeat', 'bricks' ),
			'repeat' 	=> __( 'Tile', 'bricks' ),
			'repeat-x'  => __( 'Tile Horizontally', 'bricks' ),
			'repeat-y'  => __( 'Tile Vertically', 'bricks' )
		)
	);
	
	$this->settings['nav_wrap_attachment'] = array(
		'section' => 'layout',
		'title'   => __( 'Background Attachment', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'scroll',
		'choices' => array(
			'scroll' => __( 'Scroll', 'bricks' ),
			'fixed'  => __( 'Fixed', 'bricks' )
		)
	);
	
		$this->settings['close-navigation-wrap-position'] = array(
			'section'  => 'layout',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['open-nav-border'] = array(
		'section'  => 'layout',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap',
	);
	
	$this->settings['nav_border_top'] = array(
		'section' => 'layout',
		'title'	  => __( 'Top Border', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#FFFFFF'
	);
	
	$this->settings['nav_border_bottom'] = array(
		'section' => 'layout',
		'title'	  => __( 'Bottom Border', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#DCE5EE'
	);
	
	$this->settings['nav_border_opacity'] = array(
		'section' => 'layout',
		'title'	  => __( 'Border Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
		$this->settings['close-nav-border'] = array(
			'section'  => 'layout',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);

$this->settings['close-nav-wrapper'] = array(
	'section'  => 'layout',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);

/* Content Wrapper */
$this->settings['content-wrapper'] = array(
	'section'  => 'layout',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['content_wrapper'] = array(
		'section'  => 'layout',
		'title'	   => __( 'Content Wrapper', 'bricks' ),
		'desc'     => __( 'This is the area between the header and footer.', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['content_wrapper_color'] = array(
		'section' => 'layout',
		'title'	  => __( 'Background Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#FFFFFF'
	);
	
	$this->settings['content_wrapper_opacity'] = array(
		'section' => 'layout',
		'title'	  => __( 'Background Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '0'
	);

	$this->settings['close-content-wrap'] = array(
			'section'  => 'layout',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['content_wrapper_img'] = array(
		'section' => 'layout',
		'title'	  => __( '', 'bricks' ),
		'desc'	  => __( 'Content Wrapper Image', 'bricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);

	$this->settings['content-wrap-position'] = array(
		'section'  => 'layout',
		'title'	   => __( 'Background Image Position', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['content_wrap_xpos'] = array(
		'section' => 'layout',
		'title'   => __( 'Horizontal Position', 'bricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['content_wrap_ypos'] = array(
		'section' => 'layout',
		'title'   => __( 'Vertical Position', 'bricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);
	
	$this->settings['content_wrap_repeat'] = array(
		'section' => 'layout',
		'title'   => __( 'Background Repeat', 'bricks' ),
		'desc'    => __( 'Sets how a background image will be repeated. By default, a background image is repeated both vertically and horizontally.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'repeat',
		'choices' => array(
			'no-repeat' => __( 'No Repeat', 'bricks' ),
			'repeat' 	=> __( 'Tile', 'bricks' ),
			'repeat-x'  => __( 'Tile Horizontally', 'bricks' ),
			'repeat-y'  => __( 'Tile Vertically', 'bricks' )
		)
	);
	
	$this->settings['content_wrap_attachment'] = array(
		'section' => 'layout',
		'title'   => __( 'Background Attachment', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'scroll',
		'choices' => array(
			'scroll' => __( 'Scroll', 'bricks' ),
			'fixed'  => __( 'Fixed', 'bricks' )
		)
	);
	
		$this->settings['close-content-wrap-position'] = array(
			'section'  => 'layout',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
$this->settings['close-content-wrapper'] = array(
	'section'  => 'layout',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);

// Footer Sidebar Wrapper
$this->settings['footer-sidebar-wrapper'] = array(
	'section'  => 'layout',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection'
);

	$this->settings['fwidget_bg'] = array(
		'section'  => 'layout',
		'title'	   => __( 'Footer Widget Area Background', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);

	$this->settings['fwidget_bg_color'] = array(
		'section' => 'layout',
		'title'	  => __( 'Widget Area Background Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#E3EDF4'
	);
	
	$this->settings['fwidget_bg_opacity'] = array(
		'section' => 'layout',
		'title'	  => __( 'Widget Area Background Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
		$this->settings['close-fwidget-bg'] = array(
			'section'  => 'layout',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['fwidget_bg_image'] = array(
		'section' => 'layout',
		'title'	  => __( 'Background Image', 'bricks' ),
		'desc'	  => __( 'Background image for footer widget area.', 'bricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
	$this->settings['fwidget_bg_pos'] = array(
		'section'  => 'layout',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Background Position', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['fwidget_bg_xpos'] = array(
		'section' => 'layout',
		'title'   => __( 'Horizontal Position', 'bricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['fwidget_bg_ypos'] = array(
		'section' => 'layout',
		'title'   => __( 'Vertical Position', 'bricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);
	
	$this->settings['fwidget_bg_repeat'] = array(
		'section' => 'layout',
		'title'   => __( 'Background Repeat', 'bricks' ),
		'desc'    => __( 'Sets how a background image will be repeated. By default, a background image is repeated both vertically and horizontally.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'repeat',
		'choices' => array(
			'no-repeat' => __( 'No Repeat', 'bricks' ),
			'repeat' 	=> __( 'Tile', 'bricks' ),
			'repeat-x'  => __( 'Tile Horizontally', 'bricks' ),
			'repeat-y'  => __( 'Tile Vertically', 'bricks' )
		)
	);
	
	$this->settings['fwidget_bg_attachment'] = array(
		'section' => 'layout',
		'title'   => __( 'Background Attachment', 'bricks' ),
		'desc'    => __( 'Sets whether a background image is fixed or scrolls with the rest of the page.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'scroll',
		'choices' => array(
			'scroll' => __( 'Scroll', 'bricks' ),
			'fixed'  => __( 'Fixed', 'bricks' )
		)
	);
	
		$this->settings['close-fwidget-bg-pos'] = array(
			'section'  => 'layout',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['open-fwidget-border'] = array(
		'section'  => 'layout',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Footer Widet Area Borders', 'bricks' ),
		'class'    => 'controller_wrap',
	);
	
	$this->settings['fwidget_border_top'] = array(
		'section' => 'layout',
		'title'	  => __( 'Top Border', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#DCE5EE'
	);
	
	$this->settings['fwidget_border_bottom'] = array(
		'section' => 'layout',
		'title'	  => __( 'Bottom Border', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#E3EDF4'
	);
	
	$this->settings['fwidget_border_opacity'] = array(
		'section' => 'layout',
		'title'	  => __( 'Border Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['fwidget_border_width'] = array(
		'section' => 'layout',
		'title'	  => __( 'Top Border Width', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 10,
		'step'    => 1,
		'std'	  => '1'
	);
	
		$this->settings['close-fwidget-border'] = array(
			'section'  => 'layout',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);	

$this->settings['close-footer-sidebar-wrapper'] = array(
	'section'  => 'layout',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection'
);
		
// Footer Wrapper
$this->settings['footer-wrapper'] = array(
	'section'  => 'layout',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['footer_wrapper'] = array(
		'section'  => 'layout',
		'title'	   => __( 'Footer Wrapper', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['footer_wrapper_color'] = array(
		'section' => 'layout',
		'title'	  => __( 'Background Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#191919'
	);
	
	$this->settings['footer_wrapper_opacity'] = array(
		'section' => 'layout',
		'title'	  => __( 'Background Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
		$this->settings['close-footer-wrap'] = array(
			'section'  => 'layout',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['footer_wrapper_img'] = array(
		'section' => 'layout',
		'title'	  => __( 'Footer Wrapper Image', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);

	$this->settings['footer-wrap-position'] = array(
		'section'  => 'layout',
		'title'	   => __( 'Background Image Position', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['footer_wrap_xpos'] = array(
		'section' => 'layout',
		'title'   => __( 'Horizontal Position', 'bricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['footer_wrap_ypos'] = array(
		'section' => 'layout',
		'title'   => __( 'Vertical Position', 'bricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);
	
	$this->settings['footer_wrap_repeat'] = array(
		'section' => 'layout',
		'title'   => __( 'Background Repeat', 'bricks' ),
		'desc'    => __( 'Sets how a background image will be repeated. By default, a background image is repeated both vertically and horizontally.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'no-repeat',
		'choices' => array(
			'no-repeat' => __( 'No Repeat', 'bricks' ),
			'repeat' 	=> __( 'Tile', 'bricks' ),
			'repeat-x'  => __( 'Tile Horizontally', 'bricks' ),
			'repeat-y'  => __( 'Tile Vertically', 'bricks' )
		)
	);
	
	$this->settings['footer_wrap_attachment'] = array(
		'section' => 'layout',
		'title'   => __( 'Background Attachment', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'scroll',
		'choices' => array(
			'scroll' => __( 'Scroll', 'bricks' ),
			'fixed'  => __( 'Fixed', 'bricks' )
		)
	);
	
		$this->settings['close-footer-wrap-position'] = array(
			'section'  => 'layout',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);

$this->settings['close-layout-tab'] = array(
	'section'  => 'layout',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'	   => 'close_subsection_wrap'
);