<?php
/**
* Array of options under general section of our admin page.
*
* @package Cubricks Theme Options
* @subpackage Sections
* @since 1.0.0
*/

// General Settings Tab
$this->settings['general-section-tab'] = array(
	'section'  => 'general',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'subsectiontabs',
	'choices'  => array(
		'quick-start'	    => __( 'Quick Start', 'bricks' ),
		'buttons' 			=> __( 'Buttons', 'bricks' ),
		'html-elements' 	=> __( 'HTML Elements', 'bricks' ),
		'custom-background' => __( 'Custom Background', 'bricks' )
	)
);

$this->settings['quick-start'] = array(
	'section'  => 'general',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['layout_width'] = array(
		'section'  => 'general',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Page Layout', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);

	$this->settings['page_width'] = array(
		'section' => 'general',
		'title'	  => __( 'Page Width', 'bricks' ),
		'desc'	  => __( 'Sets the maximum width for the page container.', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '1024',
		'unit'	  => 'px'
	);
	
	$this->settings['content_width'] = array(
		'section' => 'general',
		'title'	  => __( 'Content Width', 'bricks' ),
		'desc'	  => __( 'Sets the minimum width for the page container and the page width for one column layout. Your theme will stop to resize if viewd on a screen with lower resolution than the content width.', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '700',
		'unit'	  => 'px'
	);
	
	$this->settings['content_top_margin'] = array(
		'section' => 'general',
		'title'	  => __( 'Content Top Margin', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '10',
		'unit'	  => 'px'
	);
		
	$this->settings['sidebar_top_margin'] = array(
		'section' => 'general',
		'title'	  => __( 'Main Sidebar Top Margin', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '10',
		'unit'	  => 'px'
	);
	
		$this->settings['close-layout-width'] = array(
			'section'  => 'general',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['show_adminbar'] = array(
		'section' => 'general',
		'title'   => __( 'Show Admin Bar', 'bricks' ),
		'desc'    => __( 'Toggles admin bar on/off.', 'bricks' ),
		'type'    => 'checkbox',
		'std'     => 1,
		'class'   => 'iphone_checkboxes'
	);
	
	$this->settings['sidebar_layout'] = array(
		'section' => 'general',
		'title'   => __( 'Sidebar Layout', 'bricks' ),
		'desc'    => __( 'Sidebar layout options for our theme.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-image',
		'std'     => 'content-sidebar',
		'choices' => array(
			'content-sidebar' => __( 'Content on left.', 'bricks' ),
			'sidebar-content' => __( 'Content on right.', 'bricks' ),
			'no-sidebar'	  => __( 'One column, no sidebars', 'bricks' )
		)
	);
	
	$this->settings['body_text'] = array(
		'section'  => 'general',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Body Text', 'bricks' ),
		'desc'	   => __( 'Global font settings', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['body_text_color'] = array(
		'section' => 'general',
		'title'	  => __( 'Font Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'	  => '#373737'
	);
	
	$this->settings['body_text_opacity'] = array(
		'section' => 'general',
		'title'	  => __( 'Body Text Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'class'   => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['body_text_fontface'] = array(
		'section' => 'general',
		'title'   => __( 'Font Family', 'bricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'bricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['link_color'] = array(
		'section' => 'general',
		'title'	  => __( 'Link Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'     => '#1E598E'
	);
	
	$this->settings['body_text_size'] = array(
		'section' => 'general',
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
	
		$this->settings['close-body-text'] = array(
			'section'  => 'general',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	
	$this->settings['secondary_text'] = array(
		'section'  => 'general',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Secondary Text', 'bricks' ),
		'desc'	   => __( 'Widget items, Entry meta (e.g. This entry was posted in...), copyright text, credits text, form fields.', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['secondary_text_color'] = array(
		'section' => 'general',
		'title'	  => __( 'Secondary Text Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'	  => '#474747'
	);
	
	$this->settings['secondary_text_opacity'] = array(
		'section' => 'general',
		'title'	  => __( 'Secondary Text Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'class'   => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
		$this->settings['close-secondary-text'] = array(
			'section'  => 'general',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);

$this->settings['close-quick-start-tab'] = array(
	'section'  => 'general',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);

	$this->settings['buttons'] = array(
		'section'  => 'general',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'open_subsection',
	);

	$this->settings['open-button-color'] = array(
		'section'  => 'general',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Button Color', 'bricks' ),
		'desc'	   => __( 'Styles buttons used at the header and primary content area.', 'bricks' ),
		'class'    => 'controller_wrap',
	);
		
	$this->settings['button_color1'] = array(
		'section' => 'general',
		'title'	  => __( 'Primary Color', 'bricks' ),
		'desc'	  => __( 'Top gradient', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#4D90FE'
	);
	
	$this->settings['button_color2'] = array(
		'section' => 'general',
		'title'	  => __( 'Secondary Color', 'bricks' ),
		'desc'	  => __( 'Bottom gradient', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#055CA1'
	);
	
	$this->settings['button_opacity1'] = array(
		'section' => 'general',
		'title'	  => __( 'Primary Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['button_opacity2'] = array(
		'section' => 'general',
		'title'	  => __( 'Secondary Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);	
	
		$this->settings['close-button-color'] = array(
			'section'  => 'general',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['open-button-hover'] = array(
		'section'  => 'general',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap',
	);
			
	$this->settings['button_hover1'] = array(
		'section' => 'general',
		'title'	  => __( 'Primary Color', 'bricks' ),
		'desc'	  => __( 'Top gradient', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#055CA1'
	);
	
	$this->settings['button_hover2'] = array(
		'section' => 'general',
		'title'	  => __( 'Secondary Color', 'bricks' ),
		'desc'	  => __( 'Bottom gradient', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#4D90FE'
	);
	
	$this->settings['button_hover_opacity1'] = array(
		'section' => 'general',
		'title'	  => __( 'Primary Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);

	$this->settings['button_hover_opacity2'] = array(
		'section' => 'general',
		'title'	  => __( '', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);	
	
		$this->settings['close-button-hover'] = array(
			'section'  => 'general',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['button_text'] = array(
		'section'  => 'general',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Button Text Color', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['button_text_color'] = array(
		'section' => 'general',
		'title'	  => __( 'Font Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#FFFFFF'
	);
	
	$this->settings['button_border'] = array(
		'section' => 'general',
		'title'	  => __( 'Button border', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#20559A'
	);
	
	$this->settings['button_fontface'] = array(
		'section' => 'general',
		'title'   => __( 'Font Family', 'bricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'bricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped2',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['button_text_size'] = array(
		'section' => 'general',
		'title'	  => __( 'Font Size', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 5,
		'max'	  => 32,
		'step'    => 1,
		'unit'	  => 'px',
		'std'	  => '14'
	);
	
		$this->settings['close-buttons'] = array(
			'section'  => 'general',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
$this->settings['close-button-background-tab'] = array(
	'section'  => 'general',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);

	$this->settings['html-elements'] = array(
		'section'  => 'general',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'open_subsection',
	);
	
	$this->settings['content_headings'] = array(
		'section' => 'general',
		'title'	  => __( 'Headings Color', 'bricks' ),
		'desc'	  => __( 'h1, h2, h3, h4, h5, h6', 'bricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'std'	  => '#1e5a8e'
	);
	
	$this->settings['table_header'] = array(
		'section' => 'general',
		'title'	  => __( 'Table Header Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'std'	  => '#3e9400'
	);
	
	$this->settings['caption_background'] = array(
		'section' => 'general',
		'title'	  => __( 'Caption Background Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'std'	  => '#DFF1C4'
	);
	
	$this->settings['preformatted-text'] = array(
		'section'  => 'general',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Preformatted Text', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['preformat_text'] = array(
		'section' => 'general',
		'title'	  => __( 'Preformatted Text Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'	  => '#373737'
	);
	
	$this->settings['preformat_background'] = array(
		'section' => 'general',
		'title'	  => __( 'Preformatted Background Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'	  => '#F4F4F4'
	);
	
		$this->settings['close-preformatted'] = array(
			'section'  => 'general',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['formfield-background'] = array(
		'section'  => 'general',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Form Fields', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['formfield_background'] = array(
		'section' => 'general',
		'title'	  => __( 'Form Fields Background Color', 'bricks' ),
		'desc'	  => __( 'text input, textarea', 'bricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'	  => '#F3F6F9'
	);
	
	$this->settings['formfield_border'] = array(
		'section' => 'general',
		'title'	  => __( 'Form Fields Border', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'	  => '#3e9400'
	);
	
		$this->settings['close-formfield'] = array(
			'section'  => 'general',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
$this->settings['close-html-elements-tab'] = array(
	'section'  => 'general',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);
	
$this->settings['custom-background'] = array(
	'section'  => 'general',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);
	
	$this->settings['body_bg'] = array(
		'section'  => 'general',
		'title'	   => __( 'Body Background', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['background_color'] = array(
		'section' => 'general',
		'title'	  => __( 'Background Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#F7F7F7'
	);
	
	$this->settings['body_bg_opacity'] = array(
		'section' => 'general',
		'title'	  => __( 'Background Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
		$this->settings['close-body-bg'] = array(
			'section'  => 'general',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['background_image'] = array(
		'section' => 'general',
		'title'	  => __( 'Custom Body Background', 'bricks' ),
		'desc'	  => __( 'Choose an image from your computer or from the media library to use as background. The image you set here can be overridden by the theme customizer.', 'bricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => trailingslashit( BRICKS_IMAGES ) . 'background.jpg'
	);
	
	$this->settings['body-background-image'] = array(
		'section'  => 'general',
		'title'	   => __( '', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['background_position_x'] = array(
		'section' => 'general',
		'title'   => __( 'Horizontal Position', 'bricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['background_position_y'] = array(
		'section' => 'general',
		'title'   => __( 'Vertical Position', 'bricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);
	
	$this->settings['background_repeat'] = array(
		'section' => 'general',
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
	
	$this->settings['background_attachment'] = array(
		'section' => 'general',
		'title'   => __( 'Background Attachment', 'bricks' ),
		'desc'    => __( 'Sets whether a background image is fixed or scrolls with the rest of the page.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'scroll',
		'choices' => array(
			'scroll' => __( 'Scroll', 'bricks' ),
			'fixed'  => __( 'Fixed', 'bricks' )
		)
	);
	
		$this->settings['close-bod-background-img'] = array(
			'section'  => 'general',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
$this->settings['close-general-tab'] = array(
	'section' => 'general',
	'archtype'=> 'structure',
	'type'    => 'no-data',
	'class'	  => 'close_subsection_wrap',
);