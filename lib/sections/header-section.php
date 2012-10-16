<?php
/**
 * Array of options under header section of our admin page.
 *
 * @package Cubricks Theme Options
 * @subpackage Sections
 * @since 1.0.0
 */
 
// Header Settings Tabs
$this->settings['header-section-tab'] = array(
	'section'  => 'header',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'subsectiontabs',
	'choices'  => array(
		'header-text'	        => __( 'Header Text', 'cubricks' ),
		'header-background'     => __( 'Header Background', 'cubricks' ),
		'custom-header'	        => __( 'Custom Header', 'cubricks' ),
	)
);

$this->settings['header-text'] = array(
	'section'  => 'header',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);
	
	$this->settings['header-toggle-wrap'] = array(
		'section'  => 'header',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( '', 'cubricks' ),
		'desc'	   => '',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['show_site_title'] = array(
		'section' => 'header',
		'title'   => __( 'Show Site Title', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'    => 'checkbox',
		'std'     => 1,
		'class'   => 'iphone_checkboxes',
		'family'  => '_wrapped2',
	);
	
	$this->settings['show_site_description'] = array(
		'section' => 'header',
		'title'   => __( 'Show Site Description', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'    => 'checkbox',
		'std'     => 1,
		'class'   => 'iphone_checkboxes',
		'family'  => '_wrapped2',
	);
	
		$this->settings['close-site-toggle-wrap'] = array(
			'section'  => 'header',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['site_logo'] = array(
		'section' => 'header',
		'title'	  => __( 'Site Logo', 'cubricks' ),
		'desc'	  => __( 'Choose an image from your computer or from your media library.', 'cubricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
	$this->settings['site-title-wrap'] = array(
		'section'  => 'header',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Site Title', 'cubricks' ),
		'desc'	   => '',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['site_title_color'] = array(
		'section' => 'header',
		'title'	  => __( 'Font Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#FFFFFF'
	);

	$this->settings['site_title_opacity'] = array(
		'section' => 'header',
		'title'	  => __( 'Site Title Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['site_title_fontface'] = array(
		'section' => 'header',
		'title'   => __( 'Font Family', 'cubricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'cubricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Georgia", Times, serif',
		'choices' => $fontfamily
	);
	
	$this->settings['site_title_size'] = array(
		'section' => 'header',
		'title'	  => __( 'Font Size', 'cubricks' ),
		'title'	  => __( 'Font Size', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 36,
		'step'    => 1,
		'std'	  => '28',
		'unit'    => 'px'
	);
	
	$this->settings['site_title_shadow'] = array(
		'section' => 'header',
		'title'	  => __( 'Text Shadow', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#000'
	);

	$this->settings['site_title_shadow_opacity'] = array(
		'section' => 'header',
		'title'	  => __( 'Text Shadow Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '0.3'
	);
	
		$this->settings['close-site-title-wrap'] = array(
			'section'  => 'header',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['site_description_wrap'] = array(
		'section'  => 'header',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __('Site Description', 'cubricks'),
		'desc'	   => __( '', 'cubricks'),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['site_description_color'] = array(
		'section' => 'header',
		'title'	  => __( 'Font Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'	  => '#FFFFFF'
	);
	
	$this->settings['site_description_opacity'] = array(
		'section' => 'header',
		'title'	  => __( 'Site Description Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['site_description_fontface'] = array(
		'section' => 'header',
		'title'   => __( 'Font Family', 'cubricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'cubricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Georgia", Times, serif',
		'choices' => $fontfamily
	);
	
	$this->settings['site_description_size'] = array(
		'section' => 'header',
		'title'	  => __( 'Font Size', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 36,
		'step'    => 1,
		'std'	  => '18',
		'unit'    => 'px'
	);

		$this->settings['close-site-description-wrap'] = array(
			'section'  => 'header',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
			
$this->settings['close-header-text'] = array(
	'section'  => 'header',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);
// end of header-text subsection

$this->settings['header-background'] = array(
	'section'  => 'header',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['open-siteheader-color'] = array(
		'section'  => 'header',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Site Header Background', 'cubricks' ),
		'class'    => 'controller_wrap',
	);
		
	$this->settings['siteheader_color1'] = array(
		'section' => 'header',
		'title'	  => __( 'Primary Color', 'cubricks' ),
		'desc'	  => __( 'top gradient', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#638EBC'
	);
	
	$this->settings['siteheader_color2'] = array(
		'section' => 'header',
		'title'	  => __( 'Secondary Color', 'cubricks' ),
		'desc'	  => __( 'bottom gradient', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#5C87B3'
	);
	
	$this->settings['siteheader_opacity1'] = array(
		'section' => 'header',
		'title'	  => __( 'Primary Color Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);

	$this->settings['siteheader_opacity2'] = array(
		'section' => 'header',
		'title'	  => __( 'Secondary Color Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
		$this->settings['close-siteheader-color'] = array(
			'section'  => 'header',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['open-siteheader-border'] = array(
		'section'  => 'header',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Site Header Borders', 'cubricks' ),
		'class'    => 'controller_wrap',
	);
	
	$this->settings['siteheader_border_top'] = array(
		'section' => 'header',
		'title'	  => __( 'Site Header Top Border', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#83A4CC'
	);
	
	$this->settings['siteheader_border_bottom'] = array(
		'section' => 'header',
		'title'	  => __( 'Site Header Bottom Border', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#4B6C8F'
	);
	
	$this->settings['siteheader_border_opacity'] = array(
		'section' => 'header',
		'title'	  => __( 'Site Header Border Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
		$this->settings['close-siteheader-border'] = array(
			'section'  => 'header',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['header_background_img'] = array(
		'section' => 'header',
		'title'	  => __( 'Header Background Image', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);

	$this->settings['header-background-position'] = array(
		'section'  => 'header',
		'title'	   => __( 'Background Image Position', 'cubricks' ),
		'desc'     => __( '', 'cubricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['header_background_xpos'] = array(
		'section' => 'header',
		'title'   => __( 'Horizontal Position', 'cubricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['header_background_ypos'] = array(
		'section' => 'header',
		'title'   => __( 'Vertical Position', 'cubricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);
	
	$this->settings['header_background_repeat'] = array(
		'section' => 'header',
		'title'   => __( 'Background Repeat', 'cubricks' ),
		'desc'    => __( 'Sets how a background image will be repeated. By default, a background image is repeated both vertically and horizontally.', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'no-repeat',
		'choices' => array(
			'no-repeat' => __( 'No Repeat', 'cubricks' ),
			'repeat' 	=> __( 'Tile', 'cubricks' ),
			'repeat-x'  => __( 'Tile Horizontally', 'cubricks' ),
			'repeat-y'  => __( 'Tile Vertically', 'cubricks' )
		)
	);
	
	$this->settings['header_background_attachment'] = array(
		'section' => 'header',
		'title'   => __( 'Background Attachment', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'scroll',
		'choices' => array(
			'scroll' => __( 'Scroll', 'cubricks' ),
			'fixed'  => __( 'Fixed', 'cubricks' )
		)
	);
	
		$this->settings['close-header-background-position'] = array(
			'section'  => 'header',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
$this->settings['close-header-bg'] = array(
	'section'  => 'header',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);

$this->settings['custom-header'] = array(
	'section'  => 'header',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);
	
	$this->settings['enable_custom_header'] = array(
		'section' => 'header',
		'title'   => __( 'Enable Custom Header', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'    => 'checkbox',
		'std'     => 0,
		'class'   => 'iphone_checkboxes',
	);
	
	$this->settings['custom_header_adjust'] = array(
		'section' => 'header',
		'title'	  => __( 'Adjust Custom Header Vertical Position', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'min'	  => 0,
		'max'	  => 500,
		'step'    => 10,
		'std'	  => '0',
		'unit'    => 'px'
	);

	$this->settings['custom_header'] = array(
		'section' => 'header',
		'title'	  => __( 'Custom Header Image', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => '',
	);
	
	$this->settings['header_image_size'] = array(
		'section'  => 'header',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Custom Header Size', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['header_image_width'] = array(
		'section' => 'header',
		'title'	  => __( 'Header Image Width', 'cubricks' ),
		'desc'	  => __( 'Set the width of your custom header image lower or equal to the value you set here. Larger images will be cropped to maintain aspect ratio.', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '1024'
	);
	
	$this->settings['header_image_height'] = array(
		'section' => 'header',
		'title'	  => __( 'Header Image Height', 'cubricks' ),
		'desc'	  => __( 'Set the height of your custom header image lower or equal to the value you set here. Larger images will be cropped to maintain aspect ratio.', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '288'
	);
	
		$this->settings['close-header-image-size'] = array(
			'section'  => 'header',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
$this->settings['close-header-tab'] = array(
	'section'  => 'header',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'	   => 'close_subsection_wrap'
);