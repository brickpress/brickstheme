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
		'quick-start'	    => __( 'Quick Start', 'cubricks' ),
		'buttons' 			=> __( 'Buttons', 'cubricks' ),
		'html-elements' 	=> __( 'HTML Elements', 'cubricks' ),
		'custom-background' => __( 'Custom Background', 'cubricks' )
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
		'title'	   => __( 'Page Layout', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);

	$this->settings['page_width'] = array(
		'section' => 'general',
		'title'	  => __( 'Page Width', 'cubricks' ),
		'desc'	  => __( 'Sets the maximum width for the page container.', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '1024',
		'unit'	  => 'px'
	);
	
	$this->settings['content_width'] = array(
		'section' => 'general',
		'title'	  => __( 'Content Width', 'cubricks' ),
		'desc'	  => __( 'Sets the minimum width for the page container and the page width for one column layout. Your theme will stop to resize if viewd on a screen with lower resolution than the content width.', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '700',
		'unit'	  => 'px'
	);
	
	$this->settings['content_top_margin'] = array(
		'section' => 'general',
		'title'	  => __( 'Content Top Margin', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '10',
		'unit'	  => 'px'
	);
		
	$this->settings['sidebar_top_margin'] = array(
		'section' => 'general',
		'title'	  => __( 'Main Sidebar Top Margin', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
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
		'title'   => __( 'Show Admin Bar', 'cubricks' ),
		'desc'    => __( 'Toggles admin bar on/off.', 'cubricks' ),
		'type'    => 'checkbox',
		'std'     => 1,
		'class'   => 'iphone_checkboxes'
	);
	
	$this->settings['sidebar_layout'] = array(
		'section' => 'general',
		'title'   => __( 'Sidebar Layout', 'cubricks' ),
		'desc'    => __( 'Sidebar layout options for our theme.', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-image',
		'std'     => 'content-sidebar',
		'choices' => array(
			'content-sidebar' => __( 'Content on left.', 'cubricks' ),
			'sidebar-content' => __( 'Content on right.', 'cubricks' ),
			'no-sidebar'	  => __( 'One column, no sidebars', 'cubricks' )
		)
	);
	
	$this->settings['body_text'] = array(
		'section'  => 'general',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Body Text', 'cubricks' ),
		'desc'	   => __( 'Global font settings', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['body_text_color'] = array(
		'section' => 'general',
		'title'	  => __( 'Font Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'	  => '#373737'
	);
	
	$this->settings['body_text_opacity'] = array(
		'section' => 'general',
		'title'	  => __( 'Body Text Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
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
		'title'   => __( 'Font Family', 'cubricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'cubricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['link_color'] = array(
		'section' => 'general',
		'title'	  => __( 'Link Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'     => '#1E598E'
	);
	
	$this->settings['body_text_size'] = array(
		'section' => 'general',
		'title'	  => __( 'Font Size', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
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
		'title'	   => __( 'Secondary Text', 'cubricks' ),
		'desc'	   => __( 'Widget items, Entry meta (e.g. This entry was posted in...), copyright text, credits text, form fields.', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['secondary_text_color'] = array(
		'section' => 'general',
		'title'	  => __( 'Secondary Text Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'	  => '#474747'
	);
	
	$this->settings['secondary_text_opacity'] = array(
		'section' => 'general',
		'title'	  => __( 'Secondary Text Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
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
		'title'	   => __( 'Button Color', 'cubricks' ),
		'desc'	   => __( 'Styles buttons used at the header and primary content area.', 'cubricks' ),
		'class'    => 'controller_wrap',
	);
		
	$this->settings['button_color1'] = array(
		'section' => 'general',
		'title'	  => __( 'Primary Color', 'cubricks' ),
		'desc'	  => __( 'Top gradient', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#4D90FE'
	);
	
	$this->settings['button_color2'] = array(
		'section' => 'general',
		'title'	  => __( 'Secondary Color', 'cubricks' ),
		'desc'	  => __( 'Bottom gradient', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#055CA1'
	);
	
	$this->settings['button_opacity1'] = array(
		'section' => 'general',
		'title'	  => __( 'Primary Color Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['button_opacity2'] = array(
		'section' => 'general',
		'title'	  => __( 'Secondary Color Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
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
		'title'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap',
	);
			
	$this->settings['button_hover1'] = array(
		'section' => 'general',
		'title'	  => __( 'Primary Color', 'cubricks' ),
		'desc'	  => __( 'Top gradient', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#055CA1'
	);
	
	$this->settings['button_hover2'] = array(
		'section' => 'general',
		'title'	  => __( 'Secondary Color', 'cubricks' ),
		'desc'	  => __( 'Bottom gradient', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#4D90FE'
	);
	
	$this->settings['button_hover_opacity1'] = array(
		'section' => 'general',
		'title'	  => __( 'Primary Color Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);

	$this->settings['button_hover_opacity2'] = array(
		'section' => 'general',
		'title'	  => __( '', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
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
		'title'	   => __( 'Button Text Color', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['button_text_color'] = array(
		'section' => 'general',
		'title'	  => __( 'Font Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#FFFFFF'
	);
	
	$this->settings['button_border'] = array(
		'section' => 'general',
		'title'	  => __( 'Button border', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#20559A'
	);
	
	$this->settings['button_fontface'] = array(
		'section' => 'general',
		'title'   => __( 'Font Family', 'cubricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'cubricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped2',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['button_text_size'] = array(
		'section' => 'general',
		'title'	  => __( 'Font Size', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
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
		'title'	  => __( 'Headings Color', 'cubricks' ),
		'desc'	  => __( 'h1, h2, h3, h4, h5, h6', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'std'	  => '#1e5a8e'
	);
	
	$this->settings['table_header'] = array(
		'section' => 'general',
		'title'	  => __( 'Table Header Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'std'	  => '#3e9400'
	);
	
	$this->settings['caption_background'] = array(
		'section' => 'general',
		'title'	  => __( 'Caption Background Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'std'	  => '#DFF1C4'
	);
	
	$this->settings['preformatted-text'] = array(
		'section'  => 'general',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Preformatted Text', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['preformat_text'] = array(
		'section' => 'general',
		'title'	  => __( 'Preformatted Text Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'	  => '#373737'
	);
	
	$this->settings['preformat_background'] = array(
		'section' => 'general',
		'title'	  => __( 'Preformatted Background Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
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
		'title'	   => __( 'Form Fields', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['formfield_background'] = array(
		'section' => 'general',
		'title'	  => __( 'Form Fields Background Color', 'cubricks' ),
		'desc'	  => __( 'text input, textarea', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'	  => '#F3F6F9'
	);
	
	$this->settings['formfield_border'] = array(
		'section' => 'general',
		'title'	  => __( 'Form Fields Border', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
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
		'title'	   => __( 'Body Background', 'cubricks' ),
		'desc'     => __( '', 'cubricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['background_color'] = array(
		'section' => 'general',
		'title'	  => __( 'Background Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#F7F7F7'
	);
	
	$this->settings['body_bg_opacity'] = array(
		'section' => 'general',
		'title'	  => __( 'Background Color Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
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
		'title'	  => __( 'Custom Body Background', 'cubricks' ),
		'desc'	  => __( 'Choose an image from your computer or from the media library to use as background. The image you set here can be overridden by the theme customizer.', 'cubricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => trailingslashit( BRICKS_IMAGES ) . 'background.jpg'
	);
	
	$this->settings['body-background-image'] = array(
		'section'  => 'general',
		'title'	   => __( '', 'cubricks' ),
		'desc'     => __( '', 'cubricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['background_position_x'] = array(
		'section' => 'general',
		'title'   => __( 'Horizontal Position', 'cubricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['background_position_y'] = array(
		'section' => 'general',
		'title'   => __( 'Vertical Position', 'cubricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);
	
	$this->settings['background_repeat'] = array(
		'section' => 'general',
		'title'   => __( 'Background Repeat', 'cubricks' ),
		'desc'    => __( 'Sets how a background image will be repeated. By default, a background image is repeated both vertically and horizontally.', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'repeat',
		'choices' => array(
			'no-repeat' => __( 'No Repeat', 'cubricks' ),
			'repeat' 	=> __( 'Tile', 'cubricks' ),
			'repeat-x'  => __( 'Tile Horizontally', 'cubricks' ),
			'repeat-y'  => __( 'Tile Vertically', 'cubricks' )
		)
	);
	
	$this->settings['background_attachment'] = array(
		'section' => 'general',
		'title'   => __( 'Background Attachment', 'cubricks' ),
		'desc'    => __( 'Sets whether a background image is fixed or scrolls with the rest of the page.', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'scroll',
		'choices' => array(
			'scroll' => __( 'Scroll', 'cubricks' ),
			'fixed'  => __( 'Fixed', 'cubricks' )
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