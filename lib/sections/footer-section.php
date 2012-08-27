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
		'footer-background' => __( 'Footer Background', 'bricks' ),
		'footer-text'		=> __( 'Footer Text', 'bricks' ),
		'footer-extras'		=> __( 'Logo, Copyright, Ads', 'bricks' )
	)
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
		'title'	   => __( 'Footer Background', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);

	$this->settings['footer_bg_color'] = array(
		'section' => 'footer',
		'title'	  => __( 'Background Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#191919'
	);
	
	$this->settings['footer_bg_opacity'] = array(
		'section' => 'footer',
		'title'	  => __( 'Footer Background Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
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
		'title'	  => __( 'Background Image', 'bricks' ),
		'desc'	  => __( 'Background image for footer.', 'bricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
	$this->settings['footer_bg_pos'] = array(
		'section'  => 'footer',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Background Position', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['footer_bg_xpos'] = array(
		'section' => 'footer',
		'title'   => __( 'Horizontal Position', 'bricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['footer_bg_ypos'] = array(
		'section' => 'footer',
		'title'   => __( 'Vertical Position', 'bricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);

	$this->settings['footer_bg_repeat'] = array(
		'section' => 'footer',
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
	
	$this->settings['footer_bg_attachment'] = array(
		'section' => 'footer',
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
		'title'	   => __( 'Footer Text', 'bricks' ),
		'desc'	   => '',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['footer_text_color'] = array(
		'section' => 'footer',
		'title'	  => __( 'Font Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#757575'
	);
	
	$this->settings['footer_text_size'] = array(
		'section' => 'footer',
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
	
	$this->settings['footer_text_fontface'] = array(
		'section' => 'footer',
		'title'   => __( 'Font Family', 'bricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'bricks' ),
		'type'	  => 'select',
		'family'  => '_wrapped3',
		'class'	  => 'font-face',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['footer_text_opacity'] = array(
		'section' => 'footer',
		'title'	  => __( 'Footer Text Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
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
		'title'	  => __( 'Footer Link Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
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
		'title'	  => __( 'Footer Logo', 'bricks' ),
		'desc'	  => __( 'Choose an image from your computer or from your media library.', 'bricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
	$this->settings['footer_logo_url'] = array(
		'section' => 'footer',
		'title'	  => __( 'Destination URL for the footer logo.', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'std'	  => '',
	);
	
	$this->settings['copyright_notices'] = array(
		'section' => 'footer',
		'title'	  => __( 'Copyright Notice', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'std'	  => ''
	);
	
	$this->settings['creative_commons'] = array(
		'section'  => 'footer',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Creative Commons License', 'bricks' ),
		'desc'	   => __( 'There is no registration to use the Creative Commons licenses. Licensing a work is as simple as selecting which of the six licenses best meets your goals, and then marking your work in some way so that others know that you have chosen to release the work under the terms of that license. <a href="' .esc_attr( 'http://creativecommons.org/choose/' ). '" target="_blank"><strong>Choose a license</strong>.</a>', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['cc_license_type'] = array(
		'section' => 'footer',
		'title'	  => __( 'Creative Commons License', 'bricks' ),
		'desc'	  => __( 'Please enter your Creative Commons License.<br />(e.g)Attribution-NonCommercial-ShareAlike 3.0 United States (CC BY-NC-SA 3.0)', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'std'	  => ''
	);
	
	$this->settings['cc_license_url'] = array(
		'section' => 'footer',
		'title'	  => __( 'Creative Commons License URL', 'bricks' ),
		'desc'	  => __( 'Please enter your Creative Commons License URL.', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'std'	  => ''
	);
	
	$this->settings['cc_license_img'] = array(
		'section' => 'footer',
		'title'	  => __( 'Creative Commons License Image', 'bricks' ),
		'desc'	  => __( 'Please enter your Creative Commons License image URL.', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
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
		'title'	   => __( 'Footer Ad Banner (468x60)', 'bricks' ),
		'desc'	   => '',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['footer_ad_url'] = array(
		'section' => 'footer',
		'title'	  => __( 'Ad Destination URL', 'bricks' ),
		'desc'	  => __( 'Enter the URL where this banner ad points to.', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'family'  => '_wrapped3',
		'std'	  => ''
	);

	$this->settings['footer_ad_image'] = array(
		'section' => 'footer',
		'title'	  => __( 'Ad Image URL', 'bricks' ),
		'desc'	  => __( 'Enter the banner ad image URL.', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'family'  => '_wrapped3',
		'std'	  => ''
	);
	
	$this->settings['footer_ad_alt'] = array(
		'section' => 'footer',
		'title'	  => __( 'Ad Alt Attribute', 'bricks' ),
		'desc'	  => __( 'Enter the alt attribute (if any).', 'bricks' ),
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
		
$this->settings['close-footer-tab'] = array(
	'section'  => 'footer',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'	   => 'close_subsection_wrap'
);