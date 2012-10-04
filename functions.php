<?php
/**
 * Cubricks Theme Functions
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * @package    Cubricks
 * @author     Raphael Villanea <support@brickpress.us>
 * @copyright  Copyright (c) 2012, BrickPress
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 */
require( trailingslashit( dirname( __FILE__ ) ) . 'lib/class.bricks-theme-options.php' );
$theme_options = new Bricks_Theme_Options();

global $theme_options, $bricks_theme_setup;

/**
 * Retrieves an option from our array of theme options.
 *
 * @since	1.0.0
 */
function bricks_theme_option( $option ) {
	$options = get_option( 'theme_options' );
	if ( isset( $options[ $option ] ) )
		return $options[ $option ];
	else
		return false;
}

/* Widgets */
require_once( trailingslashit( BRICKS_DIR ) . 'bricks-category-posts-widget.php' );
require_once( trailingslashit( BRICKS_DIR ) . 'bricks-search-widget.php' );
require_once( trailingslashit( BRICKS_DIR ) . 'bricks-text-widget.php' );

/* Theme setup class */
require_once( trailingslashit( BRICKS_DIR ) . 'class.bricks-theme-setup.php' );
$bricks_theme_setup = new Bricks_Theme_Setup();

/* Theme functions */
require_once( trailingslashit( get_template_directory() ) . 'functions/template-tags.php' );
require_once( trailingslashit( get_template_directory() ) . 'functions/post-formats.php' );
require_once( trailingslashit( get_template_directory() ) . 'functions/bricks-slider.php' );
require_once( trailingslashit( get_template_directory() ) . 'functions/page-category-field.php' );

/* Justin Tadlock's Theme Hybid extensions */
require_once( trailingslashit( get_template_directory() ) . 'functions/custom-hooks.php' );
require_once( trailingslashit( get_template_directory() ) . 'functions/get-the-image.php' );