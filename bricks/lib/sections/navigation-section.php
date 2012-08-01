<?php
/**
 * Array of options under navigation section of our admin page.
 *
 * @package Bricks Theme Options
 * @subpackage Sections
 * @since 1.0.0
 */
 
// Navigation Settings Tabs
$this->settings['navigation-section-tab'] = array(
	'section'  => 'navigation',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'subsectiontabs',
	'choices'  => array(
		'subnav-wrapper'	 => __( 'Nav Wrapper', 'bricks' ),
		'topbar-navigation'  => __( 'Topbar Navigation', 'bricks' ),
		'primary-navigation' => __( 'Primary Navigation', 'bricks' ),
		'footer-navigation'	 => __( 'Footer Navigation', 'bricks' )
	)
);

/* Subnav Wrapper */
$this->settings['subnav-wrapper'] = array(
	'section'  => 'navigation',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);
	
	$this->settings['subnav_wrapper'] = array(
		'section'  => 'navigation',
		'title'	   => __( 'Subnav navigation Wrapper', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['subnav_wrapper_color'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Background Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'subtype' => 'wp_theme_mod',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#E3EDF4'
	);
	
	$this->settings['subnav_wrapper_opacity'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Background Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '0.7'
	);
	
	$this->settings['subnav_wrapper_img'] = array(
		'section' => 'navigation',
		'title'	  => __( '', 'bricks' ),
		'desc'	  => __( 'Subnav Wrapper Image', 'bricks' ),
		'type'	  => 'image',
		'subtype' => 'wp_theme_mod',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
		$this->settings['close-navigation-wrapper'] = array(
			'section'  => 'navigation',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['subnav-wrap-position'] = array(
		'section'  => 'navigation',
		'title'	   => __( 'Background Image Position', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['subnav_wrap_xpos'] = array(
		'section' => 'navigation',
		'title'   => __( 'Horizontal Position', 'bricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['subnav_wrap_ypos'] = array(
		'section' => 'navigation',
		'title'   => __( 'Vertical Position', 'bricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);
	
	$this->settings['subnav_wrap_repeat'] = array(
		'section' => 'navigation',
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
	
	$this->settings['subnav_wrap_attachment'] = array(
		'section' => 'navigation',
		'title'   => __( 'Background Attachment', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'    => 'radio',
		'subtype' => 'wp_theme_mod',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'scroll',
		'choices' => array(
			'scroll' => __( 'Scroll', 'bricks' ),
			'fixed'  => __( 'Fixed', 'bricks' )
		)
	);
	
		$this->settings['close-navigation-wrap-position'] = array(
			'section'  => 'navigation',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['open-subnav-border'] = array(
		'section'  => 'navigation',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Site navigation Background', 'bricks' ),
		'class'    => 'controller_wrap',
	);
	
	$this->settings['subnav_border_top'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Top Border', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#FFFFFF'
	);
	
	$this->settings['subnav_border_bottom'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Bottom Border', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#DCE5EE'
	);
	
	$this->settings['subnav_border_opacity'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Border Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
		$this->settings['close-subnav-border'] = array(
			'section'  => 'navigation',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);

$this->settings['close-subnav-wrapper'] = array(
	'section'  => 'navigation',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);

// Topbar Navigation
$this->settings['topbar-navigation'] = array(
	'section'  => 'navigation',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['show_topbar_nav'] = array(
		'section' => 'navigation',
		'title'   => __( 'Show Topbar Navigation', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'    => 'checkbox',
		'std'     => 1,
		'class'   => 'iphone_checkboxes',
	);
	
	$this->settings['topbar_bg'] = array(
		'section'  => 'navigation',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Topbar Background Color', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['topbar_bg_color'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Background Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#191919'
	);
	
	$this->settings['topbar_bg_opacity'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Background Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
		$this->settings['close-topbar-bg'] = array(
			'section'  => 'navigation',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);

	$this->settings['topbar_text'] = array(
		'section'  => 'navigation',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Navigation Menu Text', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['topbar_text_color'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Font Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#f9f9f9'
	);
	
	$this->settings['topbar_text_opacity'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Body Text Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
		
	$this->settings['topbar_fontface'] = array(
		'section' => 'navigation',
		'title'   => __( 'Font Family', 'bricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'bricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => 'Arial, Helvetica, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['topbar_text_size'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Font Size', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 36,
		'step'    => 1,
		'unit'	  => 'px',
		'std'	  => '11'
	);

	$this->settings['topbar_text_transform'] = array(
		'section' => 'navigation',
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
	
	$this->settings['topbar_fontweight'] = array(
		'section' => 'navigation',
		'title'   => __( 'Font Weight', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'	  => 'radio',
		'class'   => 'radio-button',
		'family'  => '_wrapped3',
		'std'	  => 'bold',
		'choices' => array(
			'normal'  => __( 'Normal', 'bricks' ),
			'bold'    => __( 'Bold', 'bricks' )
		)	
	);

		$this->settings['close-topbar-text'] = array(
			'section'  => 'navigation',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);

	$this->settings['topbar_current'] = array(
		'section'  => 'navigation',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( '', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['topbar_text_current'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Current Menu Item Text Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#FF9900'
	);
	
	$this->settings['topbar_bg_hover'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Menu Hover Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#747474'
	);
	
		$this->settings['close-topbar-current'] = array(
			'section'  => 'navigation',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
$this->settings['close-topbar-navigation'] = array(
	'section'  => 'navigation',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);

// Primary Navigation
$this->settings['primary-navigation'] = array(
	'section'  => 'navigation',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['navmenu_bg'] = array(
		'section'  => 'navigation',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Primary Navigation', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);

	$this->settings['navmenu_text_color'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Font Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#1e5a8e'
	);
	
	$this->settings['navmenu_text_opacity'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Body Text Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
		
	$this->settings['navmenu_fontface'] = array(
		'section' => 'navigation',
		'title'   => __( 'Font Family', 'bricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'bricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => 'Arial, Helvetica, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['navmenu_text_size'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Font Size', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 50,
		'max'	  => 150,
		'step'    => 1,
		'unit'	  => 'percent',
		'std'	  => '110'
	);
	
	$this->settings['navmenu_text_transform'] = array(
		'section' => 'navigation',
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
	
	$this->settings['navmenu_fontweight'] = array(
		'section' => 'navigation',
		'title'   => __( 'Font Wieght', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'	  => 'radio',
		'class'   => 'radio-button',
		'family'  => '_wrapped3',
		'std'	  => 'bold',
		'choices' => array(
			'normal'  => __( 'Normal', 'bricks' ),
			'bold'    => __( 'Bold', 'bricks' )
		)	
	);

		$this->settings['close-navmenu-text'] = array(
			'section'  => 'navigation',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['navmenu_current'] = array(
		'section'  => 'navigation',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( '', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['navmenu_text_current'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Current Menu Item Text Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#F89100'
	);
	
	$this->settings['navmenu_bg_color'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Menu Item Background Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#F3F6F9'
	);
	
	$this->settings['navmenu_bg_hover'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Menu Hover Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#FFFFFF'
	);
	
	$this->settings['navmenu_bg_border'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Menu Border Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#DCE5EE'
	);
		$this->settings['close-navmenu-current'] = array(
			'section'  => 'navigation',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
$this->settings['close-primary-navigation'] = array(
	'section'  => 'navigation',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);

// Footer Navigation
$this->settings['footer-navigation'] = array(
	'section'  => 'navigation',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['footernav_text'] = array(
		'section'  => 'navigation',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Navigation Menu Text', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['footernav_text_color'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Font Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#1E598E'
	);
	
	$this->settings['footernav_text_opacity'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Body Text Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
		
	$this->settings['footernav_fontface'] = array(
		'section' => 'navigation',
		'title'   => __( 'Font Family', 'bricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'bricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => 'Arial, Helvetica, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['footernav_text_size'] = array(
		'section' => 'navigation',
		'title'	  => __( 'Font Size', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 36,
		'step'    => 1,
		'unit'	  => 'px',
		'std'	  => '12'
	);
	
	$this->settings['footernav_text_transform'] = array(
		'section' => 'navigation',
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
	
	$this->settings['footernav_fontweight'] = array(
		'section' => 'navigation',
		'title'   => __( 'Font Weight', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'	  => 'radio',
		'class'   => 'radio-button',
		'family'  => '_wrapped3',
		'std'	  => 'bold',
		'choices' => array(
			'normal'  => __( 'Normal', 'bricks' ),
			'bold'    => __( 'Bold', 'bricks' )
		)	
	);

	$this->settings['footernav_text_decoration'] = array(
		'section' => 'navigation',
		'title'   => __( 'Text Decoration', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'	  => 'radio',
		'class'   => 'radio-button',
		'family'  => '_wrapped3',
		'std'	  => 'none',
		'choices' => array(
			'none'     	 => __( 'None', 'bricks' ),
			'underline'  => __( 'Underline', 'bricks' ),
		)	
	);
	
		$this->settings['close-footernav-text'] = array(
			'section'  => 'navigation',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		

$this->settings['close-navigation-tab'] = array(
	'section'  => 'navigation',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'	   => 'close_subsection_wrap'
);