<?php
/**
* Resets theme options to their default values.
*
* @package Cubricks Theme Options
* @subpackage Sections
* @since 1.0.0
*/

// Reset Section
$this->settings['reset-section-tab'] = array(
	'section'  => 'reset',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'subsectiontabs',
	'choices'  => array(
		'reset-options'	 => __( 'Reset Theme Options', 'cubricks' )
	)
);

$this->settings['reset-options'] = array(
	'section'  => 'reset',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'    => 'open_subsection'
);

	$this->settings['reset_theme'] = array(
		'section' => 'reset',
		'title'   => __( 'Reset theme', 'cubricks' ),
		'type'    => 'checkbox',
		'std'     => 0,
		'class'   => 'iphone_checkboxes',
		'desc'    => __( 'Check this box and click on <strong>Save Changes</strong> to reset theme options to their defaults. <p><strong>', 'cubricks' )
	);

$this->settings['close-reset-tab'] = array(
	'section'  => 'reset',
	'archtype' => 'structure',
	'type'     => 'no-data',
	'class'	   => 'close_subsection_wrap'
);