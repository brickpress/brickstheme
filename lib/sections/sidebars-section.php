<?php
/**
* Array of options under sidebar section of our admin page.
*
* @package Cubricks Theme Options
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
		'primary-sidebar'	=> __( 'Main Sidebar', 'cubricks' ),
		'footer-sidebar'    => __( 'Footer Sidebar', 'cubricks' ),
		'homepage-sidebar'  => __( 'Homepage Sidebar', 'cubricks' ),
		'widget-buttons'    => __( 'Widget Buttons', 'cubricks' )
	)
);

$this->settings['primary-sidebar'] = array(
	'section'  => 'sidebars',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection'
);

	$this->settings['hide_sidebar_divider'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Hide Sidebar Divider', 'cubricks' ),
		'desc'    => __( 'Show/hide the divider between content and primary sidebar.', 'cubricks' ),
		'type'    => 'checkbox',
		'std'     => 0,
		'class'   => 'iphone_checkboxes'
	);

	$this->settings['widget_title'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Widget Title', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['widget_title_color'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Font Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#F9F9F9'
	);
	
	$this->settings['widget_title_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Title Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['widget_title_fontface'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Font Family', 'cubricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'cubricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['widget_title_size'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Font Size', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 36,
		'step'    => 1,
		'unit'	  => 'px',
		'std'	  => '18'
	);
	
	$this->settings['widget_title_transform'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Text Transform', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'	  => 'radio',
		'class'   => 'radio-button',
		'family'  => '_wrapped3',
		'std'	  => 'capitalize',
		'choices' => array(
			'none'     	 => __( 'None', 'cubricks' ),
			'capitalize' => __( 'Capitalize', 'cubricks' ),
			'uppercase'	 => __( 'Uppercase', 'cubricks' )
		)	
	);
	
	$this->settings['widget_title_shadow'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Title Shadow', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'	  => '#000'
	);
	
	$this->settings['widget_title_fontweight'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Font Weight', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'normal',
		'choices' => array(
			'normal' => __( 'Normal', 'cubricks' ),
			'bold'   => __( 'Bold', 'cubricks' )
		)
	);
	
	
		$this->settings['close-widget-title'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
		$this->settings['widget_text'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Primary Sidebar Widget Text', 'cubricks' ),
		'desc'	   => __( 'Widget items', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['widget_text_color'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Text Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'	  => '#40668C'
	);
	
	$this->settings['widget_text_shadow'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Text Shadow', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'	  => '#FFF'
	);
	
	$this->settings['widget_text_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Text Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'class'   => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['widget_shadow_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Shadow Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '0.3'
	);
	
		$this->settings['close-widget-text'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);

	$this->settings['widget_background'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Widget Background Color', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['widget_background_color'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Background Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#F9F9F9'
	);
	
	$this->settings['widget_background_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Background Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '0.3'
	);
	
		$this->settings['close-widget-background'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
			
	$this->settings['widget-title-bg'] = array(
		'section'  => 'sidebars',
		'title'	   => __( 'Widget Title Background', 'cubricks' ),
		'desc'     => __( '', 'cubricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['widget_title_bg'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Background Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'     => '#638ebc'
	);
	
	$this->settings['widget_titlebg_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Background Color Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
		$this->settings['close-widget-title-bg'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['widget_title_image'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Background Image', 'cubricks' ),
		'desc'	  => __( 'Background image for primary widget title.', 'cubricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
	$this->settings['widget_title_position'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Background Image Position', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['widget_title_xpos'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Horizontal Position', 'cubricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['widget_title_ypos'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Vertical Position', 'cubricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);
	
	$this->settings['widget_titlebg_repeat'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Background Repeat', 'cubricks' ),
		'desc'    => __( 'Sets how a background image will be repeated. By default, a background image is repeated both vertically and horizontally.', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'repeat',
		'choices' => array(
			'no-repeat' => __( 'No Repeat', 'cubricks' ),
			'repeat' 	=> __( 'Tile', 'cubricks' ),
			'repeat-x'  => __( 'Tile Horizontally', 'cubricks' ),
			'repeat-y'  => __( 'Tile Vertically', 'cubricks' )
		)
	);
	
	$this->settings['widget_titlebg_attachment'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Background Attachment', 'cubricks' ),
		'desc'    => __( 'Sets whether a background image is fixed or scrolls with the rest of the page.', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'scroll',
		'choices' => array(
			'scroll' => __( 'Scroll', 'cubricks' ),
			'fixed'  => __( 'Fixed', 'cubricks' )
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
	
$this->settings['footer-sidebar'] = array(
	'section'  => 'sidebars',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection'
);

	$this->settings['fwidget_title'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Footer Widget Title', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['fwidget_title_color'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Footer Font Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#474747'
	);
	
	$this->settings['fwidget_title_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Footer Widget Title Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['fwidget_title_fontface'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Footer Widget Font Family', 'cubricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'cubricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['fwidget_title_shadow'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Shadow Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#FFFFFF'
	);
	
	$this->settings['fwidget_title_size'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Footer Widget Font Size', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 36,
		'step'    => 1,
		'std'	  => '18',
		'unit'    => 'px'
	);
	
	$this->settings['fwidget_title_transform'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Footer Widget Text Transform', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'	  => 'radio',
		'class'   => 'radio-button',
		'family'  => '_wrapped3',
		'std'	  => 'capitalize',
		'choices' => array(
			'none'     	 => __( 'None', 'cubricks' ),
			'capitalize' => __( 'Capitalize', 'cubricks' ),
			'uppercase'	 => __( 'Uppercase', 'cubricks' )
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
		'title'	   => __( 'Footer Widget Text', 'cubricks' ),
		'desc'	   => __( 'Widget items', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['fwidget_text_color'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Text Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'	  => '#1E598E'
	);
	
	$this->settings['fwidget_text_shadow'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Text Shadow', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'	  => '#E3EDF4'
	);
	
	$this->settings['fwidget_text_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Text Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'class'   => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['fwidget_text_fontweight'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Footer Widget Text Font Weight', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'	  => 'radio',
		'class'   => 'radio-button',
		'family'  => '_wrapped3',
		'std'	  => 'bold',
		'choices' => array(
			'normal' => __( 'Normal', 'cubricks' ),
			'bold'   => __( 'Bold', 'cubricks' )
		)	
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

$this->settings['homepage-sidebar'] = array(
	'section'  => 'sidebars',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection'
);

	$this->settings['homepage_widget'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Widget Title', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['hwidget_title_color'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Font Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#1E598E'
	);
	
	$this->settings['hwidget_title_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Title Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['hwidget_title_fontface'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Font Family', 'cubricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'cubricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['hwidget_title_size'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Font Size', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 36,
		'step'    => 1,
		'unit'	  => 'px',
		'std'	  => '20'
	);
	
	$this->settings['hwidget_title_transform'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Text Transform', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'	  => 'radio',
		'class'   => 'radio-button',
		'family'  => '_wrapped3',
		'std'	  => 'none',
		'choices' => array(
			'none'     	 => __( 'None', 'cubricks' ),
			'capitalize' => __( 'Capitalize', 'cubricks' ),
			'uppercase'	 => __( 'Uppercase', 'cubricks' )
		)	
	);
	
	$this->settings['hwidget_title_shadow'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Title Shadow', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'	  => '#F9F9F9'
	);
	
	$this->settings['hwidget_fontweight'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Font Weight', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'normal',
		'choices' => array(
			'normal' => __( 'Normal', 'cubricks' ),
			'bold'   => __( 'Bold', 'cubricks' )
		)
	);
	
		$this->settings['close-hwidget-title'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['hwidget_text'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Homepage Sidebar Widget Text', 'cubricks' ),
		'desc'	   => __( 'Widget items', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['hwidget_text_color'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Text Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'	  => '#222'
	);
	
	$this->settings['hwidget_text_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Text Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'class'   => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['hwidget_fontface'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Font Family', 'cubricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'cubricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['hwidget_text_shadow'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Text Shadow', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'	  => '#F9F9F9'
	);
	
	$this->settings['hwidget_shadow_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Shadow Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['hwidget_text_size'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Text Size', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 36,
		'step'    => 1,
		'unit'	  => 'px',
		'std'	  => '16'
	);
	
		$this->settings['close-hwidget-text'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);

	$this->settings['hwidget_background'] = array(
		'section'  => 'sidebars',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Widget Background Color', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['hwidget_background_color'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Background Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#F9F9F9'
	);
	
	$this->settings['hwidget_background_opacity'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Background Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '0'
	);
	
		$this->settings['close-hwidget-background'] = array(
			'section'  => 'sidebars',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);

$this->settings['close-homepage-sidebar'] = array(
	'section'  => 'sidebars',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection'
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
		'title'	   => __( 'Widget Buttons Background Color', 'cubricks' ),
		'desc'	   => __( 'Sidebar Widget Buttons', 'cubricks' ),
		'class'    => 'controller_wrap',
	);
		
	$this->settings['widget_button1'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Primary Color', 'cubricks' ),
		'desc'	  => __( 'Top gradient', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#58c908'
	);
	
	$this->settings['widget_button2'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Secondary Color', 'cubricks' ),
		'desc'	  => __( 'Bottom gradient', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#3a8a00'
	);
	
	$this->settings['widget_button_opacity1'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Primary Color Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['widget_button_opacity2'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Secondary Color Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
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
		'title'	   => __( 'Link Background Color on Hover', 'cubricks' ),
		'class'    => 'controller_wrap',
	);
			
	$this->settings['widget_button_hover1'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Primary Color', 'cubricks' ),
		'desc'	  => __( 'Bottom gradient', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#3a8a00'
	);
	
	$this->settings['widget_button_hover2'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Secondary Color', 'cubricks' ),
		'desc'	  => __( 'Top gradient', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#58c908'
	);
	
	$this->settings['widget_button_hover_opacity1'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Primary Color Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);

	$this->settings['widget_button_hover_opacity2'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Secondary Color Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
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
		'title'	   => __( 'Widget Button Text', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['widget_button_text'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Font Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'	  => '#FFFFFF'
	);
	
	$this->settings['widget_button_border'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Button Border Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#336601'
	);
	
	$this->settings['widget_field_border'] = array(
		'section' => 'sidebars',
		'title'	  => __( 'Widget Form Fields Border Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#c0c0c0'
	);
	
	$this->settings['widget_button_fontface'] = array(
		'section' => 'sidebars',
		'title'   => __( 'Font Family', 'cubricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'cubricks' ),
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