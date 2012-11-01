<?php
/**
* Array of options under footer section of our admin page.
*
* @package Cubricks Theme Options
* @subpackage Sections
* @since 1.0.0
*/

// Footer Settings Tab
$this->settings['footer-section-tab'] = array(
	'section'  => 'footer',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'subsectiontabs',
	'choices'  => array(
		'footer-widget-bg'  => __( 'Footer Sidebar Background', 'cubricks' ),
		'footer-background' => __( 'Footer Background', 'cubricks' ),
		'footer-text'		=> __( 'Footer Text', 'cubricks' ),
		'footer-extras'		=> __( 'Logo, Copyright, Ads', 'cubricks' )
	)
);

// Footer Sidebar Background
$this->settings['footer-widget-bg'] = array(
	'section'  => 'footer',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);
	
	$this->settings['footer_sidebar_bg'] = array(
		'section'  => 'footer',
		'title'	   => __( 'Footer Widget Area Background', 'cubricks' ),
		'desc'     => __( '', 'cubricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);

	$this->settings['footer_sidebar_color'] = array(
		'section' => 'footer',
		'title'	  => __( 'Background Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#E3EDF4'
	);
	
	$this->settings['footer_sidebar_opacity'] = array(
		'section' => 'footer',
		'title'	  => __( 'Footer Background Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '0'
	);
	
		$this->settings['close-footer-sidebar-bg'] = array(
			'section'  => 'footer',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['footer_sidebar_image'] = array(
		'section' => 'footer',
		'title'	  => __( 'Background Image', 'cubricks' ),
		'desc'	  => __( 'Background image for footer.', 'cubricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
	$this->settings['footer_sidebar_pos'] = array(
		'section'  => 'footer',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Background Position', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['footer_sidebar_xpos'] = array(
		'section' => 'footer',
		'title'   => __( 'Horizontal Position', 'cubricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['footer_sidebar_ypos'] = array(
		'section' => 'footer',
		'title'   => __( 'Vertical Position', 'cubricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);

	$this->settings['footer_sidebar_repeat'] = array(
		'section' => 'footer',
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
	
	$this->settings['footer_sidebar_attachment'] = array(
		'section' => 'footer',
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
	
		$this->settings['close-footer-sidebar-pos'] = array(
			'section'  => 'footer',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);	

$this->settings['close-footer-widget-bg'] = array(
	'section'  => 'footer',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);

// Footer Background
$this->settings['footer-background'] = array(
	'section'  => 'footer',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);
	
	$this->settings['footer_bg'] = array(
		'section'  => 'footer',
		'title'	   => __( 'Footer Background', 'cubricks' ),
		'desc'     => __( '', 'cubricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);

	$this->settings['footer_bg_color'] = array(
		'section' => 'footer',
		'title'	  => __( 'Background Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#191919'
	);
	
	$this->settings['footer_bg_opacity'] = array(
		'section' => 'footer',
		'title'	  => __( 'Footer Background Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '0'
	);
	
		$this->settings['close-footer-bg'] = array(
			'section'  => 'footer',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['footer_bg_image'] = array(
		'section' => 'footer',
		'title'	  => __( 'Background Image', 'cubricks' ),
		'desc'	  => __( 'Background image for footer.', 'cubricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
	$this->settings['footer_bg_pos'] = array(
		'section'  => 'footer',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Background Position', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['footer_bg_xpos'] = array(
		'section' => 'footer',
		'title'   => __( 'Horizontal Position', 'cubricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['footer_bg_ypos'] = array(
		'section' => 'footer',
		'title'   => __( 'Vertical Position', 'cubricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);

	$this->settings['footer_bg_repeat'] = array(
		'section' => 'footer',
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
	
	$this->settings['footer_bg_attachment'] = array(
		'section' => 'footer',
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
	
		$this->settings['close-footer-bg-pos'] = array(
			'section'  => 'footer',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);	

$this->settings['close-footer-background'] = array(
	'section'  => 'footer',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);
	
// Footer Text	
$this->settings['footer-text'] = array(
	'section'  => 'footer',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['footer_text'] = array(
		'section'  => 'footer',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Footer Text', 'cubricks' ),
		'desc'	   => '',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['footer_text_color'] = array(
		'section' => 'footer',
		'title'	  => __( 'Font Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#757575'
	);
	
	$this->settings['footer_text_size'] = array(
		'section' => 'footer',
		'title'	  => __( 'Font Size', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 50,
		'step'    => 1,
		'unit'	  => 'px',
		'std'	  => '12'
	);
	
	$this->settings['footer_text_fontface'] = array(
		'section' => 'footer',
		'title'   => __( 'Font Family', 'cubricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'cubricks' ),
		'type'	  => 'select',
		'family'  => '_wrapped3',
		'class'	  => 'font-face',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['footer_text_opacity'] = array(
		'section' => 'footer',
		'title'	  => __( 'Footer Text Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);

		$this->settings['close-footer_text'] = array(
			'section'  => 'footer',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['footer_link_color'] = array(
		'section' => 'footer',
		'title'	  => __( 'Footer Link Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'std'     => '#1E598E'
	);

$this->settings['close-footer-text'] = array(
	'section'  => 'footer',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);

// Footer Extras
$this->settings['footer-extras'] = array(
	'section'  => 'footer',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['footer_logo'] = array(
		'section' => 'footer',
		'title'	  => __( 'Footer Logo', 'cubricks' ),
		'desc'	  => __( 'Choose an image from your computer or from your media library.', 'cubricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
	$this->settings['footer_logo_url'] = array(
		'section' => 'footer',
		'title'	  => __( 'Destination URL for the footer logo.', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'family'  => '_wrapped2',
		'std'	  => '',
	);
	
	$this->settings['footer_logo_alt'] = array(
		'section' => 'footer',
		'title'	  => __( 'Alt attribute for the footer logo.', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'family'  => '_wrapped2',
		'std'	  => '',
	);
	
	$this->settings['copyright_notices'] = array(
		'section' => 'footer',
		'title'	  => __( 'Copyright Notice', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'std'	  => ''
	);
	
	$this->settings['creative_commons'] = array(
		'section'  => 'footer',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Creative Commons License', 'cubricks' ),
		'desc'	   => __( 'There is no registration to use the Creative Commons licenses. Licensing a work is as simple as selecting which of the six licenses best meets your goals, and then marking your work in some way so that others know that you have chosen to release the work under the terms of that license. <a href="' .esc_attr( 'http://creativecommons.org/choose/' ). '" target="_blank"><strong>Choose a license</strong>.</a>', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['cc_license_type'] = array(
		'section' => 'footer',
		'title'	  => __( 'Creative Commons License', 'cubricks' ),
		'desc'	  => __( 'Please enter your Creative Commons License.<br />(e.g)Attribution-NonCommercial-ShareAlike 3.0 United States (CC BY-NC-SA 3.0)', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'family'  => '_wrapped3',
		'std'	  => ''
	);
	
	$this->settings['cc_license_url'] = array(
		'section' => 'footer',
		'title'	  => __( 'Creative Commons License URL', 'cubricks' ),
		'desc'	  => __( 'Please enter your Creative Commons License URL.', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'family'  => '_wrapped3',
		'std'	  => ''
	);
	
	$this->settings['cc_license_img'] = array(
		'section' => 'footer',
		'title'	  => __( 'Creative Commons License Image', 'cubricks' ),
		'desc'	  => __( 'Please enter your Creative Commons License image URL.', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'family'  => '_wrapped3',
		'std'	  => ''
	);
	
		$this->settings['close-creative-commons'] = array(
			'section'  => 'footer',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['footer_ads'] = array(
		'section'  => 'footer',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Footer Ad Banner (468x60)', 'cubricks' ),
		'desc'	   => '',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['footer_ad_url'] = array(
		'section' => 'footer',
		'title'	  => __( 'Ad Destination URL', 'cubricks' ),
		'desc'	  => __( 'Enter the URL where this banner ad points to.', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'family'  => '_wrapped3',
		'std'	  => ''
	);

	$this->settings['footer_ad_image'] = array(
		'section' => 'footer',
		'title'	  => __( 'Ad Image URL', 'cubricks' ),
		'desc'	  => __( 'Enter the banner ad image URL.', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'family'  => '_wrapped3',
		'std'	  => ''
	);
	
	$this->settings['footer_ad_alt'] = array(
		'section' => 'footer',
		'title'	  => __( 'Ad Alt Attribute', 'cubricks' ),
		'desc'	  => __( 'Enter the alt attribute (if any).', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'family'  => '_wrapped3',
		'std'	  => ''
	);
	
		$this->settings['close-footer-ads'] = array(
			'section'  => 'footer',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['show_theme_url'] = array(
		'section' => 'footer',
		'title'   => __( 'Show Theme URL', 'cubricks' ),
		'desc'    => __( 'Show link to theme website next to WordPress credits link.', 'cubricks' ),
		'type'    => 'checkbox',
		'std'     => 1,
		'class'   => 'iphone_checkboxes',
	);
		
$this->settings['close-footer-tab'] = array(
	'section'  => 'footer',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'	   => 'close_subsection_wrap'
);