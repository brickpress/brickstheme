<?php
/**
* Array of options under content section of our admin page.
*
* @package Cubricks Theme Options
* @subpackage Sections
* @since 1.0.0
*/

// Content Settings Tab
$this->settings['content-section-tab'] = array(
	'section' => 'content',
	'archtype'=> 'structure',
	'type'    => 'no-data',
	'class'   => 'subsectiontabs',
	'choices' => array(
		'post-layout'	     => __( 'Post Layout', 'cubricks' ),
		'post-background'    => __( 'Article Background', 'cubricks' ),
		'post-formats' 	 	 => __( 'Post Formats', 'cubricks' ),
		'featured-slider' 	 => __( 'Featured Slider', 'cubricks' ),
		'slider-wrapper' 	 => __( 'Slider Wrapper', 'cubricks' ),
		'slider-homepage' 	 => __( 'Slider Homepage', 'cubricks' )
	)
);

$this->settings['post-layout'] = array(
	'section'  => 'content',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);
	
	$this->settings['content_options'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( '', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['entry_date'] = array(
		'section' => 'content',
		'title'   => __( 'Entry Date Format', 'cubricks' ),
		'desc'    => __( 'Choose graphic if you want styled entry date on single post.', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'graphic',
		'choices' => array(
			'graphic' => __( 'Graphic', 'cubricks' ),
			'text'	  => __( 'Plain Text', 'cubricks' )
		)
	);
	
	$this->settings['singular_sidebar'] = array(
		'section' => 'content',
		'title'   => __( 'Single Post Sidebar', 'cubricks' ),
		'desc'    => __( 'Show/hide primary sidebar on single posts while retaining your sidebar layout on blog posts, archives and search. <p><strong>TIP: </strong>Hide primary sidebar on single posts to have your readers dig right in your content.', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'sidebar',
		'choices' => array(
			'sidebar'   => __( 'Show Sidebar', 'cubricks' ),
			'fullwidth' => __( 'Full Width', 'cubricks' )
		)
	);

	$this->settings['author_avatar'] = array(
		'section' => 'content',
		'title'   => __( 'Author Avatar', 'cubricks' ),
		'desc'    => __( 'Display author avatar on single posts.', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'show_avatar',
		'choices' => array(
			'show_avatar' => __( 'Show avatar', 'cubricks' ),
			'hide_avatar' => __( 'Hide avatar', 'cubricks' )
		)
	);
	
		$this->settings['close-content-options'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap'
		);
		
	$this->settings['headings'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Headlines', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['headings_color'] = array(
		'section' => 'content',
		'title'	  => __( 'Font Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#3e9400'
	);
	
	$this->settings['headings_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Headlines Text Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['headings_fontface'] = array(
		'section' => 'content',
		'title'   => __( 'Font Family', 'cubricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'cubricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);

	$this->settings['headings_size'] = array(
		'section' => 'content',
		'title'	  => __( 'Font Size', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 36,
		'step'    => 1,
		'std'	  => '20',
		'unit'    => 'px'
	);
	
	$this->settings['headings_fontweight'] = array(
		'section' => 'content',
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
	
	$this->settings['headings_text_transform'] = array(
		'section' => 'content',
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
	
		$this->settings['close-headings'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap'
		);
	
	$this->settings['entry_title'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Post Title', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['entry_title_color'] = array(
		'section' => 'content',
		'title'	  => __( 'Font Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#1e5a8e'
	);
	
	$this->settings['entry_title_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Post Title Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['entry_title_fontface'] = array(
		'section' => 'content',
		'title'   => __( 'Font Family', 'cubricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'cubricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);

	$this->settings['entry_title_size'] = array(
		'section' => 'content',
		'title'	  => __( 'Font Size', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 36,
		'step'    => 1,
		'std'	  => '24',
		'unit'    => 'px'
	);
	
	$this->settings['entry_title_fontweight'] = array(
		'section' => 'content',
		'title'   => __( 'Font Weight', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'bold',
		'choices' => array(
			'normal' => __( 'Normal', 'cubricks' ),
			'bold'   => __( 'Bold', 'cubricks' )
		)
	);
	
	$this->settings['entry_title_text_transform'] = array(
		'section' => 'content',
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
	
		$this->settings['close-entry-title'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap'
		);
	
	$this->settings['entry_content_text'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Post Content', 'cubricks' ),
		'desc'	   => __( 'Styles the content of posts and pages. Area affected: all text between post title and post meta.', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['entry_content_color'] = array(
		'section' => 'content',
		'title'	  => __( 'Font Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#373737'
	);
	
	$this->settings['entry_content_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Post Content Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['entry_content_fontface'] = array(
		'section' => 'content',
		'title'   => __( 'Font Family', 'cubricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'cubricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['entry_content_size'] = array(
		'section' => 'content',
		'title'	  => __( 'Font Size', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 50,
		'step'    => 1,
		'std'	  => '32',
		'unit'    => 'px'
	);

		$this->settings['close-entry-content-text'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap'
		);

$this->settings['close-post-layout'] = array(
	'section'  => 'content',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection'
);

$this->settings['post-background'] = array(
	'section'  => 'content',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['article_container'] = array(
		'section' => 'content',
		'title'   => __( 'Article/Posts Container', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'std'     => 'round-corners',
		'choices' => array(
			'round-corners' => __( 'Round Corners', 'cubricks' ),
			'sharp-edges'   => __( 'Sharp Edges', 'cubricks' ),
			'no-shadow'     => __( 'No Box Shadow', 'cubricks' )
		)
	);
	
	$this->settings['article_bg'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Post Background', 'cubricks' ),
		'desc'	   => __( 'Styles the post container. Includes container of all posts, pages, comments and attachment pages.', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['article_bg_color'] = array(
		'section' => 'content',
		'title'	  => __( 'Post Background Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'     => '#FFF'
	);
	
	$this->settings['article_bg_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Background Color Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['content_shadow'] = array(
		'section' => 'content',
		'title'	  => __( 'Post Container Shadow', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'     => '#000000'
	);
	
		$this->settings['close-article-bg-color'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);

	$this->settings['article_bg_image'] = array(
		'section' => 'content',
		'title'	  => __( 'Post Background Image', 'cubricks' ),
		'desc'	  => __( 'If you wish to use a large image, recommended width is 670px(default) or as wide as your post content, then set background repeat to <strong>No Repeat</strong>.', 'cubricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);

	$this->settings['article_bg_pos'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Background Position', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['article_bg_xpos'] = array(
		'section' => 'content',
		'title'   => __( 'Horizontal Position', 'cubricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['article_bg_ypos'] = array(
		'section' => 'content',
		'title'   => __( 'Vertical Position', 'cubricks' ),
		'desc'    => __( '0 = top | 50 = middle | 100 = bottom', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '1'
	);
	
	$this->settings['article_bg_repeat'] = array(
		'section' => 'content',
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
	
	$this->settings['article_bg_attachment'] = array(
		'section' => 'content',
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
	
	$this->settings['close-article-bg-pos'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
	 	'type'     => 'no-data',
		'class'    => 'close_controller_wrap',
	);
	
$this->settings['close-post-background'] = array(
	'section'  => 'content',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);

$this->settings['post-formats'] = array(
	'section'  => 'content',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['open-chat-format'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Chat Post Format Color', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['cubricks_chat_odd'] = array(
		'section' => 'content',
		'title'	  => __( 'Odd Speaker Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#398A00'
	);

	$this->settings['cubricks_chat_even'] = array(
		'section' => 'content',
		'title'	  => __( 'Even Speaker Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#1B8BE0'
	);
	
		$this->settings['close-chat-format'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);

	$this->settings['open-link-format'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Link Post Format Background Color', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap',
	);
		
	$this->settings['linkformat_color1'] = array(
		'section' => 'content',
		'title'	  => __( 'Primary Color', 'cubricks' ),
		'desc'	  => __( 'Lighter color', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#58c908'
	);
	
	$this->settings['linkformat_color2'] = array(
		'section' => 'content',
		'title'	  => __( 'Secondary Color', 'cubricks' ),
		'desc'	  => __( 'Darker color', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#398A00'
	);
	
	$this->settings['linkformat_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Primary Color Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);

		$this->settings['close-link-format'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
$this->settings['close-post-formats'] = array(
	'section'  => 'content',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);

$this->settings['featured-slider'] = array(
	'section'  => 'content',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['featured-slider-heading'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
	 	'type'     => 'no-data',
		'class'    => 'headings',
		'title'    => __( '', 'cubricks' ),
		'desc'	   => __( 'Set a featured image on your sticky post.', 'cubricks' )
	);
	
	$this->settings['slider_position'] = array(
		'section' => 'content',
		'title'   => __( 'Featured Slider Position', 'cubricks' ),
		'desc'    => __( 'Choose where you want your full width featured slider.', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'std'     => 'after-main-nav',
		'choices' => array(
			'topnav' 		 => __( 'On top of the page', 'cubricks' ),
			'before-header'  => __( 'Before site header', 'cubricks' ),
			'after-header'   => __( 'After site header', 'cubricks' ),
			'after-main-nav' => __( 'After primary nav', 'cubricks' ),
		)
	);
	
	$this->settings['open-slider-options'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( '', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap',
	);
		
	$this->settings['slider_order'] = array(
		'section' => 'content',
		'title'   => __( 'Featured Posts Order', 'cubricks' ),
		'desc'    => __( 'Choose the arrangement of Featured Posts.', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'DESC',
		'choices' => array(
			'ASC'  => __( 'Oldest First', 'cubricks' ),
			'DESC' => __( 'Newest First', 'cubricks' )
		)
	);
	
	$this->settings['slider_items'] = array(
		'section' => 'content',
		'title'	  => __( 'Number of Featured Posts to Show', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 1,
		'max'	  => 10,
		'step'    => 1,
		'std'	  => '6'
	);
	
	$this->settings['slider_timer'] = array(
		'section' => 'content',
		'title'	  => __( 'Featured Slider Timer', 'cubricks' ),
		'desc'	  => __( 'Time interval (in seconds) between slides.', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 1,
		'max'	  => 10,
		'step'    => 1,
		'std'	  => '5'
	);
	
	$this->settings['slider_effects'] = array(
		'section' => 'content',
		'title'   => __( 'Featured Slider Effects', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'	  => 'select',
		'family'  => '_wrapped2',
		'std'	  => 'fade',
		'choices' => array(
			'sliceDownRight'  => 'sliceDownRight',
			'sliceDownLeft'   => 'sliceDownLeft',
			'sliceUpRight'    => 'sliceUpRight',
			'sliceUpLeft'     => 'sliceUpLeft',
			'sliceUpDown'     => 'sliceUpDown',
			'sliceUpDownLeft' => 'sliceUpDownLeft',
			'fold'			  => 'fold',
			'fade'			  => 'fade',
            'boxRandom'		  => 'boxRandom',
			'boxRain'		  => 'boxRain',
			'boxRainReverse'  => 'boxRainReverse',
			'boxRainGrow'     => 'boxRainGrow',
			'boxRainGrowReverse' => 'boxRainGrowReverse',
			'random'		  => 'random'
		)
	);
	
		$this->settings['close-slider-options'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['featured-img-size'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Featured Image Size', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);

	$this->settings['medium_feature_width'] = array(
		'section' => 'content',
		'title'	  => __( 'Medium Featured Image Width', 'cubricks' ),
		'desc'	  => __( 'Sets the width for medium featured slider images.', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '690',
		'unit'    => 'px'
	);
	
	$this->settings['medium_feature_height'] = array(
		'section' => 'content',
		'title'	  => __( 'Medium Featured Image Height', 'cubricks' ),
		'desc'	  => __( 'This sets the height of the slider container for medium featured slider. The height of the slider image is set automatically to maintain image aspect ratio.', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '390',
		'unit'    => 'px'
	);
	
	$this->settings['large_feature_width'] = array(
		'section' => 'content',
		'title'	  => __( 'Large Featured Image Width', 'cubricks' ),
		'desc'	  => __( 'Sets the width for large featured slider images. This also sets the width of the slider container.', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '1024',
		'unit'    => 'px'
	);
	
	$this->settings['large_feature_height'] = array(
		'section' => 'content',
		'title'	  => __( 'Large Featured Image Height', 'cubricks' ),
		'desc'	  => __( 'This sets the height of the slider container for large featured slider. The height of the slider image is set automatically to maintain image aspect ratio. If you need to adjust this value, please adjust the <strong>Slider Wrapper Height</strong> accordingly (found on the next tab). ', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '550',
		'unit'    => 'px'
	);
	
		$this->settings['close-featured-img-size'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['showcase_recent_posts'] = array(
		'section' => 'content',
		'title'	  => __( 'Number of Recent Posts to Show', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'min'	  => 1,
		'max'	  => 50,
		'step'    => 1,
		'std'	  => '10'
	);
	
	$this->settings['slider-caption'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Slider Caption', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['slider_caption_bg'] = array(
		'section' => 'content',
		'title'	  => __( 'Slider Caption Background Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#000'
	);
	
	$this->settings['slider_caption_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Slider Caption Background Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '0.8'
	);
	
	$this->settings['slider_caption_text'] = array(
		'section' => 'content',
		'title'	  => __( 'Slider Caption Text', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#FFF'
	);
	
		$this->settings['close-slider-caption'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['caption-position'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Slider Caption Position', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['h-caption-position'] = array(
		'section' => 'content',
		'title'	  => __( 'Horizontal Caption Position', 'cubricks' ),
		'desc'	  => __( '0 = left | 50 = middle | 100 = right', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '15',
		'unit'	  => '%'
	);
	
	$this->settings['v-caption-position'] = array(
		'section' => 'content',
		'title'	  => __( 'Vertical Caption Position', 'cubricks' ),
		'desc'	  => __( '0 = top | 50 = middle | 100 = bottom', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '80',
		'unit'	  => '%',
	);

		$this->settings['close-caption-position'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['slider_nav'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Slider Navigation Image', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['slider_nav_left'] = array(
		'section' => 'content',
		'title'	  => __( 'Slider Left Nav', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'family'  => '_wrapped2',
		'std'	  => ''
	);
	
	$this->settings['slider_nav_right'] = array(
		'section' => 'content',
		'title'	  => __( 'Slider Right Nav', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'family'  => '_wrapped2',
		'std'	  => ''
	);
	
		$this->settings['close-slider-nav'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap'
		);
		
	$this->settings['slider_nav_width'] = array(
		'section' => 'content',
		'title'	  => __( 'Slider Nav Icon Width', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '79',
		'unit'    => 'px'
	);
	
	$this->settings['slider_nav_height'] = array(
		'section' => 'content',
		'title'	  => __( 'Slider Nav Icon Height', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '82',
		'unit'    => 'px'
	);		
		
	$this->settings['h-slidernav-position'] = array(
		'section' => 'content',
		'title'	  => __( 'Horizontal Nav Position', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0',
		'unit'	  => '%'
	);
	
	$this->settings['v-slidernav-position'] = array(
		'section' => 'content',
		'title'	  => __( 'Vertical Nav Position', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '40',
		'unit'	  => '%'
	);
		
$this->settings['close-featured-slider'] = array(
	'section'  => 'content',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);

$this->settings['slider-wrapper'] = array(
	'section'  => 'content',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['large_slider_margin'] = array(
		'section'  => 'content',
		'title'	   => __( 'Top and Bottom Margin for Large Slider', 'cubricks' ),
		'desc'     => __( '', 'cubricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['slider_top_padding'] = array(
		'section' => 'content',
		'title'	  => __( 'Top Padding', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 150,
		'step'    => 1,
		'std'	  => '0',
		'unit'    => 'px'
	);
	
	$this->settings['slider_bottom_padding'] = array(
		'section' => 'content',
		'title'	  => __( 'Bottom Padding', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 150,
		'step'    => 1,
		'std'	  => '0',
		'unit'    => 'px'
	);
	
		$this->settings['close-slider-margin'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);

	$this->settings['slider_wrapper_bg'] = array(
		'section'  => 'content',
		'title'	   => __( 'Slider Wrapper Background', 'cubricks' ),
		'desc'     => __( '', 'cubricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
		
	$this->settings['slider_wrapper_color'] = array(
		'section' => 'content',
		'title'	  => __( 'Background Color', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#FFFFFF'
	);
	
	$this->settings['slider_wrapper_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Background Color Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '0'
	);

		$this->settings['close-slider-wrapper-bg'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['slider_wrapper_image'] = array(
		'section' => 'content',
		'title'	  => __( 'Background Image for Large Featured Image Slider', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
	$this->settings['slider_wrapper_pos'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Background Position', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['slider_wrapper_xpos'] = array(
		'section' => 'content',
		'title'   => __( 'Horizontal Position', 'cubricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['slider_wrapper_ypos'] = array(
		'section' => 'content',
		'title'   => __( 'Vertical Position', 'cubricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);
	
	$this->settings['slider_wrapper_height'] = array(
		'section' => 'content',
		'title'	  => __( 'Slider Wrapper Height', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped3',
		'std'	  => '550',
		'unit'	  => 'px'
	);
	
	$this->settings['slider_wrapper_repeat'] = array(
		'section' => 'content',
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
	
	$this->settings['slider_wrapper_attachment'] = array(
		'section' => 'content',
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
	
		$this->settings['close-slider-wrap-pos'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['close-slider-wrapper'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'close_subsection',
	);
	
	$this->settings['slider-homepage'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'open_subsection',
	);
	
	$this->settings['toggle_homepage_menu'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['homepage_topbar'] = array(
		'section' => 'content',
		'title'   => __( 'Show Top Nav Menu on Homepage', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'show_topbar',
		'choices' => array(
			'show_topbar'   => __( 'Show Topbar', 'cubricks' ),
			'hide_topbar'   => __( 'Hide Topbar', 'cubricks' )
		)
	);
	
	$this->settings['homepage_navmenu'] = array(
		'section' => 'content',
		'title'   => __( 'Show Primary Nav Menu on Homepage', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'show_nav',
		'choices' => array(
			'show_nav'   => __( 'Show Main Nav', 'cubricks' ),
			'hide_nav'   => __( 'Hide Main Nav', 'cubricks' )
		)
	);
	
	$this->settings['homepage_footer_sidebar'] = array(
		'section' => 'content',
		'title'   => __( 'Show Footer Widgets on Homepage', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'show_fwidget',
		'choices' => array(
			'show_fwidget'   => __( 'Show Footer Widgets', 'cubricks' ),
			'hide_fwidget'   => __( 'Hide Footer Widgets', 'cubricks' )
		)
	);
	
		$this->settings['close-toggle-homepage-menu'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
	$this->settings['headlines'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Homepage Headline', 'cubricks' ),
		'desc'	   => __( '', 'cubricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['headlines_color'] = array(
		'section' => 'content',
		'title'	  => __( 'Font Color', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#3e9400'
	);
	
	$this->settings['headlines_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Headlines Text Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['headlines_fontface'] = array(
		'section' => 'content',
		'title'   => __( 'Font Family', 'cubricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'cubricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Times New Roman", Times, serif',
		'choices' => $fontfamily
	);
	
	$this->settings['headlines_shadow'] = array(
		'section' => 'content',
		'title'	  => __( 'Headlines Text Shadow', 'cubricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#F9F9F9'
	);
	
	$this->settings['headlines_shadow_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Headlines Shadow Opacity', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);

	$this->settings['headlines_size'] = array(
		'section' => 'content',
		'title'	  => __( 'Font Size', 'cubricks' ),
		'desc'	  => __( '', 'cubricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 50,
		'step'    => 1,
		'std'	  => '32',
		'unit'    => 'px'
	);
	
	$this->settings['headlines_fontweight'] = array(
		'section' => 'content',
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
	
	$this->settings['headlines_text_transform'] = array(
		'section' => 'content',
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
	
	$this->settings['headlines_text_align'] = array(
		'section' => 'content',
		'title'   => __( 'Text Align', 'cubricks' ),
		'desc'    => __( '', 'cubricks' ),
		'type'	  => 'radio',
		'class'   => 'radio-button',
		'family'  => '_wrapped3',
		'std'	  => 'center',
		'choices' => array(
			'left'    => __( 'Left', 'cubricks' ),
			'center'  => __( 'Center', 'cubricks' ),
			'right'	  => __( 'Right', 'cubricks' ),
			'justify' => __( 'Justify', 'cubricks' ),
		)	
	);
	
		$this->settings['close-headlines'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap'
		);
		
$this->settings['close-content-tab'] = array(
	'section'  => 'content',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'	   => 'close_subsection_wrap'
);