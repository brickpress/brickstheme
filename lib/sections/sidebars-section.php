<?php
/**
* Array of options under sidebar section of our admin page.
*
* @package Bricks Theme Options
* @subpackage Sections
* @since 1.0.0
*/

// Sidebar Settings Tab
$this->settings['sidebars-section-tab'] = array(
	'section' => 'sidebars',
	'archtype'=> 'structure',
	'type'    => 'no-data',
	'class'   => 'subsectiontabs',
	'choices' => array(
		'primary-sidebar'	  => __( 'Main Sidebar', 'bricks' ),
		'footer-sidebar-bg'   => __( 'Footer Sidebar Background', 'bricks' ),
		'footer-sidebar-text' => __( 'Footer Sidebar Text', 'bricks' ),
		'widget-buttons'      => __( 'Widget Buttons', 'bricks' )
	)
);

$this->settings['primary-sidebar'] = array(
	'section'  => 'sidebars',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection'
);

	$this->settings['widget_title'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Widget Title', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['widget_title_color'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Font Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#40668C'
	);
	
	$this->settings['widget_title_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Title Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['widget_title_fontface'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Font Family', 'bricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'bricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['widget_title_size'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Font Size', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 36,
		'step'    => 1,
		'unit'	  => 'px',
		'std'	  => '14'
	);
	
	$this->settings['widget_title_transform'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Text Transform', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'	  => 'radio',
		'class'   => 'radio-button',
		'family'  => '_wrapped3',
		'std'	  => 'none',
		'choices' => array(
			'none'     	 => __( 'None', 'bricks' ),
			'capitalize' => __( 'Capitalize', 'bricks' ),
			'uppercase'	 => __( 'Uppercase', 'bricks' )
		)	
	);

		$this->settings['close-widget-title'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['widget-title-bg'] = array(
		'section'  => 'sidebars',
		'title'	   => __( 'Widget Title Background', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['widget_title_bg'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Background Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'     => '#CCCCCC'
	);
	
	$this->settings['widget_titlebg_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Background Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '0.5'
	);
	
		$this->settings['close-widget-title-bg'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['widget_text'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Primary Sidebar Widget Text', 'bricks' ),
		'desc'	   => __( 'Widget items', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['widget_text_color'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Text Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'	  => '#40668C'
	);
	
	$this->settings['widget_text_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Text Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'class'   => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
		$this->settings['close-widget-text'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['widget_title_image'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Background Image', 'bricks' ),
		'desc'	  => __( 'Background image for primary widget title.', 'bricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => trailingslashit( BRICKS_IMAGES ) . 'small-diagonals.png'
	);
	
	$this->settings['widget_title_position'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Background Image Position', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['widget_title_xpos'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Horizontal Position', 'bricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['widget_title_ypos'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Vertical Position', 'bricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);
	
	$this->settings['widget_titlebg_repeat'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Background Repeat', 'bricks' ),
		'desc'    => __( 'Sets how a background image will be repeated. By default, a background image is repeated both vertically and horizontally.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'repeat',
		'choices' => array(
			'no-repeat' => __( 'No Repeat', 'bricks' ),
			'repeat' 	=> __( 'Tile', 'bricks' ),
			'repeat-x'  => __( 'Tile Horizontally', 'bricks' ),
			'repeat-y'  => __( 'Tile Vertically', 'bricks' )
		)
	);
	
		$this->settings['close-widget-titlebg-pos'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
$this->settings['close-primary-sidebar'] = array(
	'section'  => 'sidebars',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection'
);	
	
$this->settings['footer-sidebar-bg'] = array(
	'section'  => 'sidebars',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection'
);

	$this->settings['fwidget_bg'] = array(
		'section'  => 'sidebars',
		'title'	   => __( 'Footer Widget Area Background', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);

	$this->settings['fwidget_bg_color'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Area Background Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#E3EDF4'
	);
	
	$this->settings['fwidget_bg_opacity'] = array(
		'section' => 'sidebars',
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
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['fwidget_bg_image'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Background Image', 'bricks' ),
		'desc'	  => __( 'Background image for footer widget area.', 'bricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
	$this->settings['fwidget_bg_pos'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Background Position', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['fwidget_bg_xpos'] = array(
		'section' => 'sidebars',
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
		'section' => 'sidebars',
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
		'section' => 'sidebars',
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
		'section' => 'sidebars',
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
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['open-fwidget-border'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Footer Widet Area Borders', 'bricks' ),
		'class'    => 'controller_wrap',
	);
	
	$this->settings['fwidget_border_top'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Top Border', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#DCE5EE'
	);
	
	$this->settings['fwidget_border_bottom'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Bottom Border', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#E3EDF4'
	);
	
	$this->settings['fwidget_border_opacity'] = array(
		'section' => 'sidebars',
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
		'section' => 'sidebars',
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
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);	

$this->settings['close-footer-sidebar-bg'] = array(
	'section'  => 'sidebars',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection'
);
	
$this->settings['footer-sidebar-text'] = array(
	'section'  => 'sidebars',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection'
);

	$this->settings['fwidget_title'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Footer Widget Title', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['fwidget_title_color'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Footer Font Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#474747'
	);
	
	$this->settings['fwidget_title_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Footer Widget Title Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['fwidget_title_fontface'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Footer Widget Font Family', 'bricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'bricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['fwidget_title_shadow'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Shadow Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#FFFFFF'
	);
	
	$this->settings['fwidget_title_size'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Footer Widget Font Size', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 50,
		'max'	  => 200,
		'step'    => 1,
		'std'	  => '133',
		'unit'	  => __( 'percent', 'bricks' )
	);
	
	$this->settings['fwidget_title_transform'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Footer Widget Text Transform', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'	  => 'radio',
		'class'   => 'radio-button',
		'family'  => '_wrapped3',
		'std'	  => 'capitalize',
		'choices' => array(
			'none'     	 => __( 'None', 'bricks' ),
			'capitalize' => __( 'Capitalize', 'bricks' ),
			'uppercase'	 => __( 'Uppercase', 'bricks' )
		)	
	);
	
		$this->settings['close-fwidget-title'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['fwidget_text'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Footer Widget Text', 'bricks' ),
		'desc'	   => __( 'Widget items', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['fwidget_text_color'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Text Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'	  => '#1E598E'
	);
	
	$this->settings['fwidget_text_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Text Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'class'   => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
		$this->settings['close-fwidget-text'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
$this->settings['close-footer-text-sub'] = array(
	'section'  => 'sidebars',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);	

	$this->settings['widget-buttons'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'open_subsection',
	);

	$this->settings['open-widget-button-color'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Widget Buttons Background Color', 'bricks' ),
		'desc'	   => __( 'Sidebar Widget Buttons', 'bricks' ),
		'class'    => 'controller_wrap',
	);
		
	$this->settings['widget_button1'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Primary Color', 'bricks' ),
		'desc'	  => __( 'Top gradient', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#3D9400'
	);
	
	$this->settings['widget_button2'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Secondary Color', 'bricks' ),
		'desc'	  => __( 'Bottom gradient', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#398A00'
	);
	
	$this->settings['widget_button_opacity1'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Primary Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['widget_button_opacity2'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Secondary Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);	
	
		$this->settings['close-widget-button'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['open-widget-button-hover'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Link Background Color on Hover', 'bricks' ),
		'class'    => 'controller_wrap',
	);
			
	$this->settings['widget_button_hover1'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Primary Color', 'bricks' ),
		'desc'	  => __( 'Bottom gradient', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#69e014'
	);
	
	$this->settings['widget_button_hover2'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Secondary Color', 'bricks' ),
		'desc'	  => __( 'Top gradient', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#398A00'
	);
	
	$this->settings['widget_button_hover_opacity1'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Primary Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);

	$this->settings['widget_button_hover_opacity2'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Secondary Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);	
	
		$this->settings['close-widget-button-hover'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['widget_button_text_wrap'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Widget Button Text', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['widget_button_text'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Font Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'	  => '#FFFFFF'
	);
	
	$this->settings['widget_button_border'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Button Border Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#69e014'
	);
	
	$this->settings['widget_button_fontface'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Font Family', 'bricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'bricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);
	
		$this->settings['close-widgetbg-text'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);

$this->settings['close-sidebars-tab'] = array(
	'section'  => 'sidebars',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'	   => 'close_subsection_wrap'
);