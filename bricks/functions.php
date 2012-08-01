<?php
/**
 * Bricks Theme Initialize Setup
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
 *
 * @package Bricks Theme
 * @subpackage Theme Functions
 * @since Bricks 1.0.0
 */
require( trailingslashit( dirname( __FILE__ ) ) . 'lib/class.bricks-theme-options.php' );
$theme_options = new Bricks_Theme_Options();

global $theme_options, $bricks_theme_setup;

function bricks_theme_option( $option ) {
	$options = get_option( 'theme_options' );
	if ( isset( $options[$option] ) )
		return $options[$option];
	else
		return false;
}
require_once( trailingslashit( BRICKS_DIR ) . 'bricks-category-posts-widget.php' );
require_once( trailingslashit( BRICKS_DIR ) . 'bricks-search-widget.php' );
require_once( trailingslashit( BRICKS_DIR ) . 'bricks-tabs-widget.php' );

require_once( trailingslashit( BRICKS_DIR ) . 'class.bricks-theme-setup.php' );
$bricks_theme_setup = new Bricks_Theme_Setup();

require_once( trailingslashit( get_template_directory() ) . 'functions/template-tags.php' );
require_once( trailingslashit( get_template_directory() ) . 'functions/post-formats.php' );
require_once( trailingslashit( get_template_directory() ) . 'functions/custom-hooks.php' );
require_once( trailingslashit( get_template_directory() ) . 'functions/sidebar-tabs.php' );
require_once( trailingslashit( get_template_directory() ) . 'functions/entry-views.php' );

require_once( trailingslashit( get_template_directory() ) . 'functions/cleaner-gallery.php' );
require_once( trailingslashit( get_template_directory() ) . 'functions/get-the-image.php' );
//require_once( trailingslashit( get_template_directory() ) . 'functions/bricks-slider.php' );