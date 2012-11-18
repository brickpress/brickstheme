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
if( ! isset( $content_width ) )
	$content_width = get_theme_mod('cubricks_content_width');

/* Theme setup class */
require( trailingslashit( get_template_directory() ) . 'lib/class.cubricks-theme-setup.php' );
$cubricks_theme_setup = new Cubricks_Theme_Setup();

global $cubricks_theme_setup;

/* Adds support for a custom header image. */
require( trailingslashit( get_template_directory() ) . 'lib/custom-header.php' );
require( trailingslashit( get_template_directory() ) . 'lib/cubricks-hooks.php' );
require( trailingslashit( get_template_directory() ) . 'lib/template-tags.php' );
require( trailingslashit( get_template_directory() ) . 'lib/post-formats.php' );
require( trailingslashit( get_template_directory() ) . 'lib/cubricks-slider.php' );
require( trailingslashit( get_template_directory() ) . 'lib/theme-customize.php' );


/**
 * Adjusts content_width value for full-width and single image attachment
 * templates, and when there are no active widgets in the sidebar.
 *
 * @since Cubricks 1.0.0
 */
function cubricks_content_width() {
	if ( is_page_template( 'page-templates/full-width.php' ) || is_attachment() || ! is_active_sidebar( 'sidebar-1' ) ) {
		global $content_width;
		//$content_width = get_theme_mod('cubricks_content_width');
		$content_width = get_theme_mod( 'cubricks_page_width' );
	}
}
add_action( 'template_redirect', 'cubricks_content_width' );


/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @since Cubricks 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @return void
 *
function cubricks_customize_register( $wp_customize ) {
	
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->cubricks_theme_option( 'link_color' )->transport = 'postMessage';
}
*/

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since Cubricks 1.0.0
 */
function cubricks_customize_preview_js() {
	wp_enqueue_script( 'cubricks-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), 'CUBRICKS_VERSION', true );
}
add_action( 'customize_preview_init', 'cubricks_customize_preview_js' );