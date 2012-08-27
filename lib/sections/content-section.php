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
		'post-layout'	     => __( 'Post Layout', 'bricks' ),
		'post-background'    => __( 'Article Background', 'bricks' ),
		'post-formats' 	 	 => __( 'Post Formats', 'bricks' ),
		'featured-slider' 	 => __( 'Featured Slider', 'bricks' ),
		'slider-wrapper' 	 => __( 'Slider Wrapper', 'bricks' )
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
		'title'	   => __( '', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['entry_date'] = array(
		'section' => 'content',
		'title'   => __( 'Entry Date Format', 'bricks' ),
		'desc'    => __( 'Choose graphic if you want styled entry date on single post.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'graphic',
		'choices' => array(
			'graphic' => __( 'Graphic', 'bricks' ),
			'text'	  => __( 'Plain Text', 'bricks' )
		)
	);
	
	$this->settings['singular_sidebar'] = array(
		'section' => 'content',
		'title'   => __( 'Single Post Sidebar', 'bricks' ),
		'desc'    => __( 'Show/hide primary sidebar on single posts while retaining your sidebar layout on blog posts, archives and search. <p><strong>TIP: </strong>Hide primary sidebar on single posts to have your readers dig right in your content.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'sidebar',
		'choices' => array(
			'sidebar'   => __( 'Show Sidebar', 'bricks' ),
			'fullwidth' => __( 'Full Width', 'bricks' )
		)
	);

	$this->settings['author_avatar'] = array(
		'section' => 'content',
		'title'   => __( 'Author Avatar', 'bricks' ),
		'desc'    => __( 'Display author avatar on single posts.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'show_avatar',
		'choices' => array(
			'show_avatar' => __( 'Show avatar', 'bricks' ),
			'hide_avatar' => __( 'Hide avatar', 'bricks' )
		)
	);
	
		$this->settings['close-content-options'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap'
		);
		
	$this->settings['headlines'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Headlines', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['headlines_color'] = array(
		'section' => 'content',
		'title'	  => __( 'Font Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#3e9400'
	);
	
	$this->settings['headlines_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Headlines Text Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['headlines_fontface'] = array(
		'section' => 'content',
		'title'   => __( 'Font Family', 'bricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'bricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);

	$this->settings['headlines_size'] = array(
		'section' => 'content',
		'title'	  => __( 'Font Size', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 36,
		'step'    => 1,
		'std'	  => '20',
		'unit'    => 'px'
	);
	
	$this->settings['headlines_fontweight'] = array(
		'section' => 'content',
		'title'   => __( 'Font Weight', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'normal',
		'choices' => array(
			'normal' => __( 'Normal', 'bricks' ),
			'bold'   => __( 'Bold', 'bricks' )
		)
	);
	
	$this->settings['headlines_text_transform'] = array(
		'section' => 'content',
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
	
		$this->settings['close-headlines'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap'
		);
	
	$this->settings['entry_title'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Post Title', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['entry_title_color'] = array(
		'section' => 'content',
		'title'	  => __( 'Font Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#1e5a8e'
	);
	
	$this->settings['entry_title_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Post Title Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['entry_title_fontface'] = array(
		'section' => 'content',
		'title'   => __( 'Font Family', 'bricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'bricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);

	$this->settings['entry_title_size'] = array(
		'section' => 'content',
		'title'	  => __( 'Font Size', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
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
		'title'   => __( 'Font Weight', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped3',
		'std'     => 'bold',
		'choices' => array(
			'normal' => __( 'Normal', 'bricks' ),
			'bold'   => __( 'Bold', 'bricks' )
		)
	);
	
	$this->settings['entry_title_text_transform'] = array(
		'section' => 'content',
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
		'title'	   => __( 'Post Content', 'bricks' ),
		'desc'	   => __( 'Styles the content of posts and pages. Area affected: all text between post title and post meta.', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['entry_content_color'] = array(
		'section' => 'content',
		'title'	  => __( 'Font Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#373737'
	);
	
	$this->settings['entry_content_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Post Content Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['entry_content_fontface'] = array(
		'section' => 'content',
		'title'   => __( 'Font Family', 'bricks' ),
		'desc'    => __( 'Web Safe Font Combinations.', 'bricks' ),
		'type'	  => 'select',
		'class'   => 'font-face',
		'family'  => '_wrapped3',
		'std'	  => '"Helvetica Neue", Helvetica, Arial, sans-serif',
		'choices' => $fontfamily
	);
	
	$this->settings['entry_content_size'] = array(
		'section' => 'content',
		'title'	  => __( 'Font Size', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 5,
		'max'	  => 36,
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
		'title'   => __( 'Article/Posts Container', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'std'     => 'round-corners',
		'choices' => array(
			'round-corners' => __( 'Round Corners', 'bricks' ),
			'sharp-edges'   => __( 'Sharp Edges', 'bricks' )
		)
	);
	
	$this->settings['article_bg'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Post Background', 'bricks' ),
		'desc'	   => __( 'Styles the post container. Includes container of all posts, pages, comments and attachment pages.', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['article_bg_color'] = array(
		'section' => 'content',
		'title'	  => __( 'Post Background Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped3',
		'std'     => '#FFF'
	);
	
	$this->settings['article_bg_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Background Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '1'
	);
	
	$this->settings['content_shadow'] = array(
		'section' => 'content',
		'title'	  => __( 'Post Container Shadow', 'bricks' ),
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
		'title'	  => __( 'Post Background Image', 'bricks' ),
		'desc'	  => __( 'If you wish to use a large image, recommended width is 670px(default) or as wide as your post content, then set background repeat to <strong>No Repeat</strong>.', 'bricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);

	$this->settings['article_bg_pos'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Background Position', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['article_bg_xpos'] = array(
		'section' => 'content',
		'title'   => __( 'Horizontal Position', 'bricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['article_bg_ypos'] = array(
		'section' => 'content',
		'title'   => __( 'Vertical Position', 'bricks' ),
		'desc'    => __( '0 = top | 50 = middle | 100 = bottom', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '1'
	);
	
	$this->settings['article_bg_repeat'] = array(
		'section' => 'content',
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
	
	$this->settings['article_bg_attachment'] = array(
		'section' => 'content',
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
		'title'	   => __( 'Chat Post Format Color', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['bricks_chat_odd'] = array(
		'section' => 'content',
		'title'	  => __( 'Odd Speaker Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped2',
		'class'   => 'pick-color',
		'std'	  => '#398A00'
	);

	$this->settings['bricks_chat_even'] = array(
		'section' => 'content',
		'title'	  => __( 'Even Speaker Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
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
		'title'	   => __( 'Link Post Format Background Color', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap',
	);
		
	$this->settings['linkformat_color1'] = array(
		'section' => 'content',
		'title'	  => __( 'Primary Color', 'bricks' ),
		'desc'	  => __( 'Lighter color', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#58c908'
	);
	
	$this->settings['linkformat_color2'] = array(
		'section' => 'content',
		'title'	  => __( 'Secondary Color', 'bricks' ),
		'desc'	  => __( 'Darker color', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#398A00'
	);
	
	$this->settings['linkformat_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Primary Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
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
		'title'    => __( '', 'bricks' ),
		'desc'	   => __( 'Set a featured image on your sticky post.', 'bricks' )
	);
	
	$this->settings['slider_position'] = array(
		'section' => 'content',
		'title'   => __( 'Featured Slider Position', 'bricks' ),
		'desc'    => __( 'Choose where you want your full width featured slider.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'std'     => 'after-header',
		'choices' => array(
			'topnav' 		 => __( 'On top of the page', 'bricks' ),
			'before-header'  => __( 'Before site header', 'bricks' ),
			'after-header'   => __( 'After site header', 'bricks' ),
			'after-main-nav' => __( 'After primary nav', 'bricks' ),
		)
	);
	
	$this->settings['open-slider-options'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( '', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap',
	);
		
	$this->settings['slider_order'] = array(
		'section' => 'content',
		'title'   => __( 'Featured Posts Order', 'bricks' ),
		'desc'    => __( 'Choose the arrangement of Featured Posts.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'DESC',
		'choices' => array(
			'ASC'  => __( 'Oldest First', 'bricks' ),
			'DESC' => __( 'Newest First', 'bricks' )
		)
	);
	
	$this->settings['slider_items'] = array(
		'section' => 'content',
		'title'	  => __( 'Number of Featured Posts to Show', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 1,
		'max'	  => 10,
		'step'    => 1,
		'std'	  => '6'
	);
	
	$this->settings['slider_timer'] = array(
		'section' => 'content',
		'title'	  => __( 'Featured Slider Timer', 'bricks' ),
		'desc'	  => __( 'Time interval (in seconds) between slides.', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 1,
		'max'	  => 10,
		'step'    => 1,
		'std'	  => '5'
	);
	
	$this->settings['slider_effects'] = array(
		'section' => 'content',
		'title'   => __( 'Featured Slider Effects', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'	  => 'select',
		'family'  => '_wrapped2',
		'std'	  => 'random',
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
		'title'	   => __( 'Featured Image Size', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);

	$this->settings['medium_feature_width'] = array(
		'section' => 'content',
		'title'	  => __( 'Medium Featured Image Width', 'bricks' ),
		'desc'	  => __( 'Sets the width for medium featured slider images.', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '685',
		'unit'    => 'px'
	);
	
	$this->settings['medium_feature_height'] = array(
		'section' => 'content',
		'title'	  => __( 'Mediun Featured Image Height', 'bricks' ),
		'desc'	  => __( 'This sets the height of the slider container for medium featured slider. The height of the slider image is set automatically to maintain image aspect ratio.', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '390',
		'unit'    => 'px'
	);
	
	$this->settings['large_feature_width'] = array(
		'section' => 'content',
		'title'	  => __( 'Large Featured Image Width', 'bricks' ),
		'desc'	  => __( 'Sets the width for large featured slider images. This also sets the width of the slider container.', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '1024',
		'unit'    => 'px'
	);
	
	$this->settings['large_feature_height'] = array(
		'section' => 'content',
		'title'	  => __( 'Large Featured Image Height', 'bricks' ),
		'desc'	  => __( 'This sets the height of the slider container for large featured slider. The height of the slider image is set automatically to maintain image aspect ratio.', 'bricks' ),
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
		'title'	  => __( 'Number of Recent Posts to Show', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
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
		'title'	   => __( 'Slider Caption', 'bricks' ),
		'desc'	   => __( '', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['slider_caption_bg'] = array(
		'section' => 'content',
		'title'	  => __( 'Slider Caption Background Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#000'
	);
	
	$this->settings['slider_caption_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Slider Caption Background Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '0.8'
	);
	
	$this->settings['slider_caption_text'] = array(
		'section' => 'content',
		'title'	  => __( 'Slider Caption Text', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
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

	$this->settings['slider_wrapper_bg'] = array(
		'section'  => 'content',
		'title'	   => __( 'Background for Large Featured Image Slider.', 'bricks' ),
		'desc'     => __( 'Lower opacity if you wish to make the container transparent.', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
		
	$this->settings['slider_wrapper_color'] = array(
		'section' => 'content',
		'title'	  => __( 'Background Color', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'colorpicker',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#FFFFFF'
	);
	
	$this->settings['slider_wrapper_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Background Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
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
		'title'	  => __( 'Custom Header Container Background Image', 'bricks' ),
		'desc'	  => __( 'Background image for the custom header container.', 'bricks' ),
		'type'	  => 'image',
		'class'   => 'uploadimg',
		'std'	  => ''
	);
	
	$this->settings['slider_wrapper_pos'] = array(
		'section'  => 'content',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'title'	   => __( 'Background Position', 'bricks' ),
		'class'    => 'controller_wrap'
	);
	
	$this->settings['slider_wrapper_xpos'] = array(
		'section' => 'content',
		'title'   => __( 'Horizontal Position', 'bricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['slider_wrapper_ypos'] = array(
		'section' => 'content',
		'title'   => __( 'Vertical Position', 'bricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped3',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);
	
	$this->settings['slider_wrapper_height'] = array(
		'section' => 'content',
		'title'	  => __( 'Custom Header Container Height.', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped3',
		'std'	  => '576',
		'unit'	  => 'px'
	);
	
	$this->settings['slider_wrapper_repeat'] = array(
		'section' => 'content',
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
	
	$this->settings['slider_wrapper_attachment'] = array(
		'section' => 'content',
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
	
		$this->settings['close-slider-wrap-pos'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
	
$this->settings['close-content-tab'] = array(
	'section'  => 'content',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'	   => 'close_subsection_wrap'
);