<?php
/**
* Array of options under social section of our admin page.
*
* @package Cubricks Theme Options
* @subpackage Sections
* @since 1.0.0
*/

// Social Bookmarks Tab
$this->settings['social-section-tab'] = array(
	'section'  => 'social',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'subsectiontabs',
	'choices'  => array(
		'social-buttons' => __( 'Social Buttons', 'cubricks' ),
		'webmaster-tools' => __( 'Webmaster Tools', 'cubricks' )
	)
);

$this->settings['social-buttons'] = array(
	'section'  => 'social',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['social_module'] = array(
		'section' => 'social',
		'title'   => __( 'Social Media', 'cubricks' ),
		'desc'    => __( 'Choose where you want your social media icons to appear.', 'cubricks' ),
		'type'    => 'radio',
		'class'	  => 'radio-button',
		'family'  => '_wrapped2',
		'std'     => 'header-right',
		'choices' => array(
			'header-right'   => __( 'Header', 'cubricks' ),
			'before-sidebar' => __( 'Primary Sidebar', 'cubricks' )
		)
	);
	
	$this->settings['search_module'] = array(
		'section' => 'social',
		'title'   => __( 'Show Search', 'cubricks' ),
		'desc'    => __( 'Display search bar below social media icons.', 'cubricks' ),
		'type'    => 'checkbox',
		'std'     => 1,
		'class'   => 'iphone_checkboxes',
		'family'  => '_wrapped2',
	);
	
	
	$this->settings['social-buttons-heading'] = array(
		'section'  => 'social',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'headings',
		'desc'	  => __( 'Resetting the theme does not affect the values you put here. If you wish to replace old values with new ones, just key in or paste the new values then click save. To delete entries, click on the <strong>Clear Field</strong> button and click <strong>Save Changes</strong>.', 'cubricks' ),
	);
	
	$this->settings['social_icons_label'] = array(
		'section' => 'social',
		'title'	  => __( 'Social Media Label', 'cubricks' ),
		'desc'	  => __( 'The widget title if you choose to place your social media icons before the primary sidebar. ', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'std'	  => __( 'Connect with ', 'cubricks' ) . $site_name
	);
		
	$this->settings['facebook_page'] = array(
		'section' => 'social',
		'title'	  => __( 'Facebook Page', 'cubricks' ),
		'desc'	  => __( 'Username for your Facebook Page. You may use your Facebook profile username if you don\'t have a page.', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'family'  => '_wrapped2',
		'std'	  => '',
	);

	$this->settings['google-wrap'] = array(
		'section'  => 'social',
		'title'	   => __( 'Google', 'cubricks' ),
		'desc'     => __( '', 'cubricks' ),
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'controller_wrap'
	);
	
	$this->settings['google_profile'] = array(
		'section' => 'social',
		'title'	  => __( 'Google+ Profile', 'cubricks' ),
		'desc'	  => __( 'example: https://plus.google.com/u/0/<strong>012345678901234567890</strong>', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'family'  => '_wrapped2',
		'std'	  => '',
	);
	
	$this->settings['google_page'] = array(
		'section' => 'social',
		'title'	  => __( 'Google+ Page ID', 'cubricks' ),
		'desc'	  => __( 'If you have a Google+ Page please enter your Google+ Page ID here. <br />example: https://plus.google.com/u/0/b/<strong>012345678901234567890</strong>', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'family'  => '_wrapped2',
		'std'	  => '',
	);
	
		$this->settings['close-google-wrap'] = array(
			'section'  => 'social',
			'archtype' => 'structure',
			'type'     => 'no-data',
			'class'    => 'close_controller_wrap',
		);
		
	$this->settings['twitter_id'] = array(
		'section' => 'social',
		'title'	  => __( 'Twitter Username', 'cubricks' ),
		'desc'	  => __( 'example: <strong>Username</strong>.twitter.com', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'std'	  => '',
	);
	
	$this->settings['tumblr_id'] = array(
		'section' => 'social',
		'title'	  => __( 'Tumblr Username', 'cubricks' ),
		'desc'	  => __( 'example: <strong>Username</strong>.tumblr.com', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'std'	  => '',
	);
	
	$this->settings['flickr_id'] = array(
		'section' => 'social',
		'title'	  => __( 'Flickr Username', 'cubricks' ),
		'desc'	  => __( 'example: http://www.flickr.com/photos/<strong>Username</strong>', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'std'	  => '',
	);
	
	$this->settings['youtube_id'] = array(
		'section' => 'social',
		'title'	  => __( 'YouTube Username', 'cubricks' ),
		'desc'	  => __( 'example: http://www.youtube.com/user/<strong>Username</strong>', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'std'	  => '',
	);

$this->settings['close-social-buttons'] = array(
	'section'  => 'social',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'close_subsection',
);


$this->settings['webmaster-tools'] = array(
	'section'  => 'social',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection',
);

	$this->settings['site-verify-heading'] = array(
		'section'  => 'social',
		'archtype' => 'structure',
		'type'     => 'no-data',
		'class'    => 'headings',
		'desc'	  => __( 'If your website is already verified you may forget about these. Enter the meta tags for the following:', 'cubricks' ),
	);

	$this->settings['google_verify'] = array(
		'section' => 'social',
		'title'	  => __( 'Google Site Verification', 'cubricks' ),
		'desc'	  => __( 'Enter your Google Webmaster Tools site verification meta tag. ', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'std'	  => '',
	);
	
	$this->settings['bing_verify'] = array(
		'section' => 'social',
		'title'	  => __( 'Bing Site Verification', 'cubricks' ),
		'desc'	  => __( 'Enter your Bing Webmaster Tools site verification meta tag. ', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'std'	  => '',
	);
	
	$this->settings['alexa_verify'] = array(
		'section' => 'social',
		'title'	  => __( 'Alexa Site Verification', 'cubricks' ),
		'desc'	  => __( 'Enter your Alexa site verification meta tag. ', 'cubricks' ),
		'type'	  => 'text',
		'class'   => 'constant',
		'std'	  => '',
	);
	
$this->settings['close-social-tab'] = array(
	'section' => 'social',
	'archtype'=> 'structure',
	'type'    => 'no-data',
	'class'	  => 'close_subsection_wrap',
);