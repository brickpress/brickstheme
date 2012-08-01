<?php
/**
* Array of options under content section of our admin page.
*
* @package Bricks Theme Options
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
	    'content-wrapper'	 => __( 'Content Wrapper', 'bricks' ),
		'post-layout'	     => __( 'Post Layout', 'bricks' ),
		'post-background'    => __( 'Article Background', 'bricks' ),
		'post-formats' 	 	 => __( 'Post Formats', 'bricks' ),
		'featured-slider' 	 => __( 'Featured Slider', 'bricks' )
	)
);

$this->settings['content-wrapper'] = array(
	'section'  => 'content',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	/* Content Wrapper */
	$this->settings['content_wrapper'] = array(
		'section'  => 'content',
		'title'	   => __( 'Content Wrapper', 'bricks' ),
		'desc'     => __( 'This is the area between the header and footer.', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['content_wrapper_color'] = array(
		'section' => 'content',
		'title'	  => __( 'Background Color', 'bricks' ),
		'desc'	  => '',
		'type'	  => 'colorpicker',
		'subtype' => 'wp_theme_mod',
		'class'   => 'pick-color',
		'family'  => '_wrapped2',
		'std'     => '#FFFFFF'
	);
	
	$this->settings['content_wrapper_opacity'] = array(
		'section' => 'content',
		'title'	  => __( 'Background Color Opacity', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 1,
		'step'    => 0.1,
		'std'	  => '0.5'
	);

	$this->settings['close-content-wrap'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['content_wrapper_img'] = array(
		'section' => 'content',
		'title'	  => __( '', 'bricks' ),
		'desc'	  => __( 'Content Wrapper Image', 'bricks' ),
		'type'	  => 'image',
		'subtype' => 'wp_theme_mod',
		'class'   => 'uploadimg',
		'std'	  => ''
	);

	$this->settings['content-wrap-position'] = array(
		'section'  => 'content',
		'title'	   => __( 'Background Image Position', 'bricks' ),
		'desc'     => __( '', 'bricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['content_wrap_xpos'] = array(
		'section' => 'content',
		'title'   => __( 'Horizontal Position', 'bricks' ),
		'desc'    => __( '0 = left | 50 = center | 100 = right', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '50'
	);
	
	$this->settings['content_wrap_ypos'] = array(
		'section' => 'content',
		'title'   => __( 'Vertical Position', 'bricks' ),
		'desc'    => __( '0 = top | 50 = center | 100 = bottom', 'bricks' ),
		'type'	  => 'jslider',
		'family'  => '_wrapped2',
		'min'	  => 0,
		'max'	  => 100,
		'step'    => 1,
		'std'	  => '0'
	);
	
		$this->settings['content_wrap_repeat'] = array(
		'section' => 'content',
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
	
	$this->settings['content_wrap_attachment'] = array(
		'section' => 'content',
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
	
		$this->settings['close-content-wrap-position'] = array(
			'section'  => 'content',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);

$this->settings['close-content-wrapper'] = array(
	'section'  => 'content',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection'
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
			'text'	   => __( 'Plain Text', 'bricks' )
		)
	);
	
	$this->settings['singular_sidebar'] = array(
		'section' => 'content',
		'title'   => __( 'Single Post Sidebar', 'bricks' ),
		'desc'    => __( 'Displays sidebar on single post, archives and search.', 'bricks' ),
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
		'min'	  => 50,
		'max'	  => 200,
		'step'    => 1,
		'std'	  => '140',
		'unit'    => '%'
	);
	
	$this->settings['entry_title_fontweight'] = array(
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
		'min'	  => 50,
		'max'	  => 200,
		'step'    => 1,
		'std'	  => '120'
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
		'desc'    => __( 'Choose <strong>Show</strong> to enclose posts in boxes.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'std'     => 'post-box',
		'choices' => array(
			'post-box' => __( 'Show', 'bricks' ),
			'no-box'   => __( 'Hide', 'bricks' )
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
		'std'     => '#FFFFFF'
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
		'std'	  => '#FF9900'
	);
	
	$this->settings['linkformat_color2'] = array(
		'section' => 'content',
		'title'	  => __( 'Secondary Color', 'bricks' ),
		'desc'	  => __( 'Darker color', 'bricks' ),
		'type'	  => 'colorpicker',
		'family'  => '_wrapped3',
		'class'   => 'pick-color',
		'std'	  => '#F89100'
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
	
	$this->settings['slider_items'] = array(
		'section' => 'content',
		'title'	  => __( 'Number of Featured Posts to Show', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'min'	  => 1,
		'max'	  => 10,
		'step'    => 1,
		'std'	  => '5'
	);
	
	$this->settings['slider_order'] = array(
		'section' => 'content',
		'title'   => __( 'Featured Posts Order', 'bricks' ),
		'desc'    => __( 'Choose the arrangement of Featured Posts.', 'bricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'std'     => 'DESC',
		'choices' => array(
			'ASC'  => __( 'Oldest First', 'bricks' ),
			'DESC' => __( 'Newest First', 'bricks' )
		)
	);
	
	$this->settings['slider_effects'] = array(
		'section' => 'content',
		'title'   => __( 'Featured Slider Effects', 'bricks' ),
		'desc'    => __( '', 'bricks' ),
		'type'	  => 'select',
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
	
	$this->settings['slider_timer'] = array(
		'section' => 'content',
		'title'	  => __( 'Featured Slider Timer', 'bricks' ),
		'desc'	  => __( '', 'bricks' ),
		'type'	  => 'jslider',
		'min'	  => 1,
		'max'	  => 10,
		'step'    => 1,
		'std'	  => '5'
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
		'title'	  => __( 'Featured Image Width', 'bricks' ),
		'desc'	  => __( 'Sets the width for featured slider images.', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '680',
	);
	
	$this->settings['medium_feature_height'] = array(
		'section' => 'content',
		'title'	  => __( 'Featured Image Height', 'bricks' ),
		'desc'	  => __( 'Sets the height for featured slider images.', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '340',
	);
	
	$this->settings['full_feature_width'] = array(
		'section' => 'content',
		'title'	  => __( 'Full Width Featured Image', 'bricks' ),
		'desc'	  => __( 'Sets the width for featured slider images.', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '1024',
	);
	
	$this->settings['full_feature_height'] = array(
		'section' => 'content',
		'title'	  => __( 'Full Featured Image Height', 'bricks' ),
		'desc'	  => __( 'Sets the height for featured slider images.', 'bricks' ),
		'type'	  => 'text',
		'class'   => 'regular-text',
		'family'  => '_wrapped2',
		'std'	  => '512',
	);
	
		$this->settings['close-featured-img-size'] = array(
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