<?php
/**
 * Array of options under header section of our admin page.
 *
 * @package Bricks Theme Options
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
		'header-text'	        => __( 'Header Text', 'bricks' ),
		'header-background'     => __( 'Header Background', 'bricks' ),
		'custom-header-wrapper' => __( 'Custom Header Wrapper', 'bricks' ),
		'custom-header'	        => __( 'Custom Header', 'bricks' ),
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
		'title'	   => __( '', 'bricks' ),
		'desc'	   => '',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['show_site_title'] = array(
		'section' => 'header',
		'title'   => __( 'Show Site Title', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'    => 'checkbox',
		'std'     => 1,
		'class'   => 'iphone_checkboxes',
		'family'  => '_wrapped3',
	);
	
	$this->settings['show_site_description'] = array(
		'section' => 'header',
		'title'   => __( 'Show Site Description', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'    => 'checkbox',
		'std'     => 1,
		'class'   => 'iphone_checkboxes',
		'family'  => '_wrapped3',
	);
	
	$this->settings['header_search'] = array(
		'section' => 'header',
		'title'   => __( 'Show Header Search', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'    => 'checkbox',
		'std'     => 1,
		'class'   => 'iphone_checkboxes',
		'family'  => '_wrapped3',
	);
	
		$this->settings['close-site-toggle-wrap'] = array(
			'section'  => 'header',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['site_logo'] = array(
		'section' => 'header',
		'title'	  => __( 'Site Logo', 'bricks' ),
		'desc'	  => __( 'Choose an image from your computer or from your media library.', 'bricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
	$this->settings['site-title-wrap'] = array(
		'section'  => 'header',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Site Title', 'bricks' ),
		'desc'	   => '',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['site_title_color'] = array(
		'section' => 'header',
		'title'	  => __( 'Font Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#FFFFFF'
	);

	$this->settings['site_title_opacity'] = array(
		'section' => 'header',
		'title'	  => __( 'Site Title Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['site_title_fontface'] = array(
		'section' => 'header',
		'title'   => __( 'Font Family', 'bricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'bricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Georgia", Times, serif',
		'choices' => $fontfamily
	);
	
	$this->settings['site_title_size'] = array(
		'section' => 'header',
		'title'	  => __( 'Font Size', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 50,
		'max'	  => 200,
		'step'    => 1,
		'unit'    => 'percent',
		'std'	  => '150'
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
		'title'	   => __('Site Description', 'bricks'),
		'desc'	   => __( '', 'bricks'),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['site_description_color'] = array(
		'section' => 'header',
		'title'	  => __( 'Font Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'	  => '#FFFFFF'
	);
	
	$this->settings['site_description_opacity'] = array(
		'section' => 'header',
		'title'	  => __( 'Site Description Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['site_description_fontface'] = array(
		'section' => 'header',
		'title'   => __( 'Font Family', 'bricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'bricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Georgia", Times, serif',
		'choices' => $fontfamily
	);
	
	$this->settings['site_description_size'] = array(
		'section' => 'header',
		'title'	  => __( 'Font Size', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 50,
		'max'	  => 150,
		'step'    => 1,
		'unit'    => 'percent',
		'std'	  => '100'
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
		'title'	   => __( 'Site Header Background', 'bricks' ),
		'class'    => 'controller_wrap',
	);
		
	$this->settings['siteheader_color1'] = array(
		'section' => 'header',
		'title'	  => __( 'Primary Color', 'bricks' ),
		'desc'	  => __( 'top gradient', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#638EBC'
	);
	
	$this->settings['siteheader_color2'] = array(
		'section' => 'header',
		'title'	  => __( 'Secondary Color', 'bricks' ),
		'desc'	  => __( 'bottom gradient', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#5C87B3'
	);
	
	$this->settings['siteheader_opacity1'] = array(
		'section' => 'header',
		'title'	  => __( 'Primary Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);

	$this->settings['siteheader_opacity2'] = array(
		'section' => 'header',
		'title'	  => __( 'Secondary Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
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
		'title'	   => __( 'Site Header Background', 'bricks' ),
		'class'    => 'controller_wrap',
	);
	
	$this->settings['siteheader_border_top'] = array(
		'section' => 'header',
		'title'	  => __( 'Site Header Top Border', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#83A4CC'
	);
	
	$this->settings['siteheader_border_bottom'] = array(
		'section' => 'header',
		'title'	  => __( 'Site Header Bottom Border', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#4B6C8F'
	);
	
	$this->settings['siteheader_border_opacity'] = array(
		'section' => 'header',
		'title'	  => __( 'Site Header Border Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
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
		
$this->settings['close-header-bg'] = array(
	'section'  => 'header',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);

$this->settings['custom-header-wrapper'] = array(
	'section'  => 'header',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['custom_header_bg'] = array(
		'section'  => 'header',
		'title'	   => __( 'Background Color', 'bricks' ),
		'desc'     => __( 'Lower opacity if you wish to make the header transparent.', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
		
	$this->settings['custom_header_bg_color'] = array(
		'section' => 'header',
		'title'	  => __( 'Background Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#FFFFFF'
	);
	
	$this->settings['custom_header_bg_opacity'] = array(
		'section' => 'header',
		'title'	  => __( 'Background Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '0'
	);

		$this->settings['close-custom-headerbg'] = array(
			'section'  => 'header',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['custom_header_bg_image'] = array(
		'section' => 'header',
		'title'	  => __( 'Custom Header Container Background Image', 'bricks' ),
		'desc'	  => __( 'Background image for the custom header container.', 'bricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
	$this->settings['custom_header_bg_pos'] = array(
		'section'  => 'header',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Background Position', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['custom_header_bg_xpos'] = array(
		'section' => 'header',
		'title'   => __( 'Horizontal Position', 'bricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['custom_header_bg_ypos'] = array(
		'section' => 'header',
		'title'   => __( 'Vertical Position', 'bricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);
	
	$this->settings['custom_header_image_height'] = array(
		'section' => 'header',
		'title'	  => __( 'Custom Header Container Height.', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped3',
		'std'	  => '0',
		'unit'	  => 'px'
	);
	
	$this->settings['custom_header_bg_repeat'] = array(
		'section' => 'header',
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
	
	$this->settings['custom_header_bg_attachment'] = array(
		'section' => 'header',
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
	
		$this->settings['close-header-bg-pos'] = array(
			'section'  => 'header',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
$this->settings['close-custom-header-bg'] = array(
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
		'title'   => __( 'Enable Custom Header', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'    => 'checkbox',
		'std'     => 0,
		'class'   => 'iphone_checkboxes',
	);

	$this->settings['custom_header'] = array(
		'section' => 'header',
		'title'	  => __( 'Custom Header Image', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => '',
	);
	
	$this->settings['header_image_pos'] = array(
		'section' => 'header',
		'title'   => __( 'Custom Header Position', 'bricks' ),
		'desc'    => __( 'Choose where you want your custom header to appear.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'std'     => 'topnav',
		'choices' => array(
			'topnav' 		=> __( 'On top of the page', 'bricks' ),
			'before-header' => __( 'Before site header', 'bricks' ),
			'after-header'  => __( 'After site header', 'bricks' ),
		)
	);
	
	$this->settings['header_image_size'] = array(
		'section'  => 'header',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Custom Header Size', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['header_image_width'] = array(
		'section' => 'header',
		'title'	  => __( 'Custom Header Image Width', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '1024'
	);
	
	$this->settings['header_image_height'] = array(
		'section' => 'header',
		'title'	  => __( 'Custom Header Container Height', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '270'
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