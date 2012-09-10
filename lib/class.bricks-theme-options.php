<?php
/**
 * Class Cubricks Theme Options
 *
 * Modeled after Bolts Theme Options by Alison Barrett <alison@themejack.net>
 * 
 * This is the main theme options class. This is required by the functions.php
 * file. The global variable $theme_options is an instance of this class.
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
 * @subpackage Cubricks Theme Options
 * @author     Raphael Villanea <support@brickpress.us>
 * @copyright  Copyright (c) 2011, BrickPress
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @since      1.0.0
 */
interface IDisplay_Options_Settings {
	
	public function output_settings( $args = array() );
}

class Bricks_Theme_Options implements IDisplay_Options_Settings {
	
	private $sections;
	private $settings;
	private $checkboxes;

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		
		$this->bricks_constants();
		$this->sections = array(
							'general'     	=> __( 'General Settings', 'bricks' ),
							'header'		=> __( 'Header', 'bricks' ),
							'navigation'	=> __( 'Navigation', 'bricks' ),
							'content'		=> __( 'Content', 'bricks' ),
							'sidebars'		=> __( 'Sidebars', 'bricks' ),
							'social' 		=> __( 'Social', 'bricks' ),
							'footer' 		=> __( 'Footer', 'bricks' ),
							'layout' 		=> __( 'Layout', 'bricks' ),
							'reset'         => __( 'Reset to Defaults', 'bricks' )
						);
		
		$this->checkboxes = array();
		$this->settings = array();
		$this->bricks_theme_options();

		add_action( 'admin_menu', array( &$this, 'add_admin_panel_pages' ) );
		add_action( 'admin_init', array( &$this, 'register_theme_settings' ) );
		add_action( 'admin_init', array( &$this, 'remove_custom_background_submenu' ) );
		add_action( 'admin_bar_menu', array( &$this, 'bricks_admin_bar_menu' ), 99 );
		
		// If our database options is still empty, let's set our default options. 
		if ( ! get_option( 'theme_options' ) )
			$this->initialize_settings();
	}

	/**
	 * Defines contant paths used by the theme function class, parent theme, and child theme.
	 *
	 * @since 1.0.0
	 */
	public function bricks_constants() {
		
		define( 'THEMENAME', 'Cubricks' );
		define( 'SHORTNAME', 'bricks' );
		define( 'BRICKS_VERSION', '1.0.1' );
		define( 'THEME_DIR', get_template_directory() );
		define( 'THEME_URI', get_template_directory_uri() );
		define( 'BRICKS_DIR', trailingslashit( THEME_DIR ) . basename( dirname( __FILE__ ) ) );
		define( 'BRICKS_URI', trailingslashit( THEME_URI ) . basename( dirname( __FILE__ ) ) );	
		define( 'BRICKS_FUNCTIONS', trailingslashit( THEME_URI ) . 'functions' );
		define( 'BRICKS_SECTIONS', trailingslashit( BRICKS_DIR ) . 'sections' );
		define( 'BRICKS_IMAGES', trailingslashit( THEME_URI ) . 'images' );
		define( 'BRICKS_CSS', trailingslashit( THEME_URI ) . 'css' );
		define( 'BRICKS_JS', trailingslashit( THEME_URI ) . 'js' );
	}
	
	
	/**
	 * Adds the admin settings page.
	 *
	 * @since 1.0.0
	 */
	public function add_admin_panel_pages() {
				
		$admin_page = add_theme_page(
			__( 'Theme Options', 'bricks' ),
			__( 'Theme Options', 'bricks' ),							
			'edit_theme_options',						    
			'theme-options',								
			array( &$this, 'render_theme_settings_page' ) );
			
		if ( ! $admin_page )
			return;
		
		add_action( 'load-'.$admin_page, array( &$this, 'bricks_admin_help' ) );
		add_action( 'admin_print_scripts-' . $admin_page, array( &$this, 'scripts' ) );
		add_action( 'admin_print_styles-' . $admin_page, array( &$this, 'styles' ) );
	}
	
	
	/**
	 * Add help tab to the theme admin settings page.
	 *
	 * @return false if not on the theme options page
	 * @since Cubricks 1.0.0
	 */
	public function bricks_admin_help() {
		
		$current_screen = get_current_screen();
		$theme_url = strip_tags('http://brickpress.us/');
		$author_url = strip_tags('http://cubrick.brickpress.us/');
		$theme_demo = strip_tags('http://brickstheme.brickpress.us/');
		$github_repo = strip_tags('https://github.com/brickpress/bricks-theme/');

		// Overview
		$current_screen->add_help_tab( array(
			'id'		=> 'overview',
			'title'		=> __( 'Overview', 'bricks' ),
			'content'	=>
				'<p><strong>' . __( 'Cubricks Theme by ', 'bricks' ) . '<a href="' .esc_url($author_url). '" target="_blank">Raphael Villanea</a></strong></p>' .
				'<p>' . __( 'Thank you for using Cubricks theme. I hope you will have as much fun in customizing your blog as I have in building this theme; believing that while knowledge can be taught, imagination and creativity can not - it can be inspired.', 'bricks' ) . '</p>' .
				'<p>' . __( 'Cubricks theme gives you control over your website\'s look stylesheet and positioning of some HTML blocks such as the custom header, navigation menu and image slider.', 'bricks' ) . '</p>'
		) );

		// Screen Content
		$current_screen->add_help_tab( array(
			'id'		=> 'sections',
			'title'		=> __( 'Sections', 'bricks' ),
			'content'	=>
				'<p>' . __( '<strong>General Section</strong> &mdash; sets the overall layout of your website and <strong><em>global</em></strong> styles. This section also sets HTML elements found on your content and your website\'s custom background.', 'bricks' ) . '</p>' .
				'<p>' . __( '<strong>Header Section</strong> &mdash; sets site logo, site header and site description. This also sets your custom header.', 'bricks' ) . '</p>' .
				'<p>' . __( '<strong>Navigation Section</strong> &mdash; Cubricks theme comes with three navigation menus. You may choose to disable topbar and footer navigation.', 'bricks' ) . '</p>' .
				'<p>' . __( '<strong>Content Section</strong> &mdash; sets the style for your content boxes.', 'bricks' ) . '</p>' .
				'<p>' . __( '<strong>Sidebars Section</strong> &mdash; when setting an image as custom background, your primary sidebar text may not stand out, thus difficult to read. If so, you can try increase the primary widget background opacity or change it\'s color altogether. ', 'bricks' ) . '</p>' .
				'<p>' . __( '<strong>Social Section</strong> &mdash; add your social network profiles. This also lets you add webmaster tools meta data if you haven\'t done so already.', 'bricks' ) . '</p>' .
				'<p>' . __( '<strong>Footer Section</strong> &mdash; sets footer logo, copyright notice and a site badge or a wide ad banner.', 'bricks' ) . '</p>' .
				'<p>' . __( '<strong>Layout Section</strong> &mdash; exlpore advanced styling options. Try setting background images for sections with wrappers, manipulate opacity to reveal images in the background, or just about anything you can imagine.', 'bricks' ) . '</p>' .
				'<p>' . __( '<strong>Reset Section</strong> &mdash; resets theme settings to defaults. This does not reset text entries such as copyright notice, Creative Commons license, and footer ads. This does not reset social media entries and webmaster tools entries as well. To remove the aforementioned entries, click on the the <strong>Clear Field</strong> button found at the bottom of each entry field.', 'bricks' ) . '</p>'
		) );

		// Help Sidebar
		$current_screen->set_help_sidebar(
			'<p><strong>' . __( 'For more information:', 'bricks' ) . '</strong></p>' .
			'<p><a href="' .esc_url($theme_demo). '" target="_blank">' . __( 'Theme Documentation', 'bricks' ) . '</a></p>' .
			'<p><a href="' .esc_url($theme_url). '" target="_blank">' . __( 'Cubricks Support', 'bricks' ) . '</a></p>' .
			'<p><strong>' . __( 'For developers:', 'bricks' ) . '</strong></p>' .
			'<p><a href="' .esc_url($github_repo). '" target="_blank">' . __( 'Github Repository', 'bricks' ) . '</a></p>'
		);
	}
	
	/**
	 * Removes the Custom Background, Custom Header and Theme Editor submenu pages.
	 *
	 * @since 1.0.0
	 */
	public function remove_custom_background_submenu() {
		
		global $submenu;
		
		$submenu_pages = array( 'custom-background', 'theme-editor.php', 'custom-header' );
		foreach ( $submenu_pages as $submenu_page )
			remove_submenu_page( 'themes.php', $submenu_page );
	}
	
	
	/**
	 * Register the form settings for the theme_options array.
	 *
	 * This function is attached to the admin_init action hook.
	 *
	 * This call to register_setting() registers a validation callback, validate_settings(), which
	 * is used when the option is saved, to ensure that our option values are complete, properly
	 * formatted, and safe.
	 *
	 * We also use this function to add our theme option if it doesn't already exist.
	 *
	 * @since 1.0.0
	 */
	public function register_theme_settings() {
		
		register_setting( 'theme_options', 'theme_options', array ( &$this, 'validate_settings' ) );
		foreach ( $this->sections as $slug => $title ) {
			add_settings_section( $slug, $title, array( &$this, 'output_settings' ), 'theme-options' );
		}
		$this->bricks_theme_options();
		
		foreach ( $this->settings as $id => $setting ) {
			$setting['id'] = $id;
			$this->create_setting( $setting );
		}			
	}
	
	
	/**
	 * Create settings fieldAdd a new field to a section of a settings page
	 *
	 * @uses add_settings_fields
	 *
	 * Use this to define a settings field that will show
	 * as part of a settings section inside a settings page. The fields are shown using
	 * bricks_settings_fields() in bricks_settings_sections()
	 *
	 * The $callback argument should be the name of a function that echoes out the
	 * html input tags for this setting field. Use get_option() to retrieve existing
	 * values to show.
	 *
	 * @param	string	$id	Slug-name to identify the field. Used in the 'id' attribute of tags.
	 * @param	string	$title Formatted title of the field. Shown as the label for the field during output.
	 * @param	string	$output_settings Function that fills the field with the desired form inputs. The function should echo its output.
	 * @param	string	$page The slug-name of the settings page on which to show the section (general, reading, writing, ...).
	 * @param	string	$section The slug-name of the section of the settings page in which to show the box (default, ...).
	 * @param	array 	$field_args Additional arguments
	 *
	 * @since 1.0.0
	 */
	public function create_setting( $args = array() ) {
		
		$defaults = array(
			'id'       => '',
			'section'  => 'general',
			'title'    => '',
			'desc'     => '',
			'archtype' => 'data',
			'family'   => '',
			'type'     => 'text',
			'subtype'  => '',
			'class'    => '',
			'std'      => '',
			'choices'  => array(),
			'min'	   => '',
			'max'	   => '',
			'step'	   => '',
			'unit'	   => ''
		);
			
		extract( wp_parse_args( $args, $defaults ) );
		
		$field_args = array(
			'id'        => $id,
			'title'     => $title,
			'label_for' => $id,
			'desc'      => $desc,
			'archtype'  => $archtype,
			'family'    => $family,
			'type'      => $type,
			'subtype'   => $subtype,
			'class'     => $class,
			'std'       => $std,
			'choices'   => $choices,
			'min'	    => $min,
			'max'	    => $max,
			'step'	    => $step,
			'unit'		=> $unit
		);
		
		if ( $type == 'checkbox' )
			$this->checkboxes[] = $id;
		add_settings_field( $id, $title, array( $this, 'output_settings' ), 'theme-options', $section, $field_args );
	}
	
	
	/**
	 * Overrides the Settings API function do_settings_sections
	 * Prints out all settings sections added to a particular settings page
	 *
	 * Part of the Settings API. Use this in a settings page callback function
	 * to output all the sections and fields that were added to that $page with
	 * add_settings_section() and add_settings_field()
	 *
	 * @global $wp_settings_sections Storage array of all settings sections added to admin pages
	 * @global $wp_settings_fields Storage array of settings fields and info about their pages/sections
	 *
	 * @param string $page The slug name of the page whos settings sections you want to output
	 *
	 * @since 1.0.0
	 */
	public function bricks_display_section( $page ) {
	
		global $wp_settings_sections, $wp_settings_fields;
	
		if ( !isset($wp_settings_sections) || !isset($wp_settings_sections[$page]) )
			return;
		foreach ( (array) $wp_settings_sections[$page] as $section ) {
			if ( !isset($wp_settings_fields)  || !isset($wp_settings_fields[$page]) || !isset($wp_settings_fields[$page][$section['id']])  )
				continue;
			echo '<div id="bricks_menu_' . esc_attr( $section['id'] ) . '" class="settings-section">'; 
			$this->bricks_settings_fields( $page, $section['id'] );
			echo '</div>';
		}
	}
	
	
	/**
	 * Overrides the Settings API function do_settings_fields
	 * Print out the settings fields for a particular settings section
	 *
	 * Part of the Settings API. Use this in a settings page to output
	 * a specific section. Should normally be called by do_settings_sections()
	 * rather than directly.
	 *
	 * @global $wp_settings_fields Storage array of settings fields and their pages/sections
	 *
	 * @param string $page Slug title of the admin page who's settings fields you want to show.
	 * @param section $section Slug title of the settings section who's fields you want to show.
	 * @since 1.0.0
	 */
	public function bricks_settings_fields( $page, $section ) {
		
		global $wp_settings_fields;
	
		if ( !isset($wp_settings_fields) || !isset($wp_settings_fields[$page]) || !isset($wp_settings_fields[$page][$section]) )
			return;
		foreach ( (array) $wp_settings_fields[$page][$section] as $field ) {
			if ( !empty( $field['args']['archtype']) ) {
	
				switch($field['args']['archtype']) {
					
					case 'structure':
						call_user_func($field['callback'], $field['args']);
						break;
	
					case 'data':
					default:
						if( !empty( $field['args']['family'] ) ) {
							echo '<div class="theme-option' .$field['args']['family']. '"><label for="' .$field['args']['label_for']. '">' . $field['title'] . '</label><br />';
								call_user_func( $field['callback'], $field['args']);
							echo '</div>';
						} else {
						echo '<div class="theme-option' .$field['args']['family']. '"><label for="' . $field['args']['label_for'] . '">' . $field['title'] . '</label>';
							call_user_func($field['callback'], $field['args']);
						echo '</div>';
						break;
					}
				}
			}
		}
	}
	
	
	/**
	 * Displays the theme options page.
	 *
	 * @since 1.0.0
	 */
	public function render_theme_settings_page() {
		
		echo '<input type="hidden" name="current_tab" id="current_tab" value="#bricks_menu_general" />';
		echo '<form action="options.php" method="post" enctype="multipart/form-data">';
			
		settings_fields( 'theme_options' );
		
		echo '<div id="bricks_menu" class="default-state"><ul class="default-state">';	
		foreach ( $this->sections as $section_slug => $section ) {	
			$active = '';
			if ( $section_slug == 'general' ) {
				$active = ' nav-tab-active';
			}
			echo '<li>
					<a id="bricks_menu_' . $section_slug . '_a" href="#bricks_menu_' . $section_slug . '" class="nav-tab' . $active . '">
						<div class="section-nav-icon" style="background: url(' .trailingslashit( BRICKS_IMAGES ). 'admin/' .$section_slug. '32.png' .') no-repeat 0% 50% scroll;"></div>
						<div class="section-nav-text">' .$section. '</div>
					</a>
				  </li>';
		}
        echo '<li style="border: 0; box-shadow: none;">
		<div id="toggle-sections" class="default-state" onclick="jQuery(\'#collapse-menu-button\').click()">
        	<div class="default-state"></div>';
		echo '<div class="toggle-button-text">' .__( 'Collapse Menu', 'bricks' ). '</div>';
        echo '<input type="button" id="collapse-menu-button" style="display: none;" />
		</div>
        </li>';
        echo '<li style="border: 0; box-shadow: none;">
		<div id="options-form-submit">
        	<div class="default-state" onclick="jQuery(\'#save-theme-options\').click()"></div>
			<input type="submit" id="save-theme-options" name="submit" style="display: none;" />
			<div class="submit-button-text" onclick="jQuery(\'#save-theme-options\').click()">' .__( 'Save Changes', 'bricks' ). '</div>
		</div>
        </li>
        </ul>
        </div><!-- #bricks_menu -->';
        
		$this->bricks_display_section( $_GET['page'] );
     
		echo '</form><!-- end of options form -->';
	}
	
	
	/**
	 * Renders HTML output for theme settings fields
	 *
	 * @since 1.0.0
	 */
	public function output_settings( $args = array() ) {
	
		require( trailingslashit( BRICKS_DIR ) . 'interface.output-settings.php' );
	}
	
	/**
	 * Sets the setting fields in each section with their values and defaults.
	 * 
	 * @since 1.0.0
	 */
	public function bricks_theme_options( $settings = array() ) {
		
		$options = get_option( 'theme_options' );
		$fontfamily = array(
			'Arial, Helvetica, sans-serif' => 'arial',
			'Arial Black, Gadget, sans-serif' => 'arial-black',
			'"Comic Sans MS", cursive, sans-serif' => 'comic-sans',
			'"Courier New", Courier, monospace' => 'courier-new',
			'"Georgia", Times, serif' => 'georgia',
			'"Helvetica Neue", Helvetica, Arial, sans-serif' => 'helvetica-neue',
			'Impact, Charcoal, sans-serif' => 'impact',
			'"Lucida Console", Monaco, monospace' => 'lucida-console',
			'"Lucida Grande", Arial, Verdana, sans-serif' => 'lucida-grande',
			'"Lucida Sans Unicode", "Lucida Grande", sans-serif' => 'lucida-sans',
			'"Palatino Linotype", "Book Antiqua", Palatino, serif' => 'palatino',
			'Tahoma, Geneva, sans-serif' => 'tahoma',
			'"Times New Roman", Times, serif' => 'times',
			'"Trebuchet MS", Helvetica, sans-serif' => 'trebuchet',
			'Verdana, Geneva, sans-serif' => 'verdana'
		);
		
		$site_name = get_option( 'blogname' );

		require( trailingslashit( BRICKS_SECTIONS ) . 'general-section.php' );
		require( trailingslashit( BRICKS_SECTIONS ) . 'header-section.php' );
		require( trailingslashit( BRICKS_SECTIONS ) . 'navigation-section.php' );
		require( trailingslashit( BRICKS_SECTIONS ) . 'content-section.php' );
		require( trailingslashit( BRICKS_SECTIONS ) . 'sidebars-section.php' );
		require( trailingslashit( BRICKS_SECTIONS ) . 'social-section.php' );
		require( trailingslashit( BRICKS_SECTIONS ) . 'footer-section.php' );
		require( trailingslashit( BRICKS_SECTIONS ) . 'layout-section.php' );
		require( trailingslashit( BRICKS_SECTIONS ) . 'reset-section.php' );
	}
	
	/**
	 * Sets settings to default values.
	 * 
	 * @since 1.0.0
	 */
	public function initialize_settings() {
		
		$default_settings = array();
		foreach ( $this->settings as $id => $setting ) {
			if( $setting['type'] != 'no-data' ) {
				$default_settings[$id] = $setting['std'];
			} 
		}
		update_option( 'theme_options', $default_settings );	
	}
	
	/**
	 * Enqueue javascript used by theme options page.
	 *
	 * @since 1.0.0
	 */
	public function scripts() {
		
		wp_enqueue_script( 'media-upload' );
		wp_enqueue_script( 'thickbox' );
		wp_enqueue_script( 'theme-options', trailingslashit( BRICKS_JS ) . 'theme-options.js', false, BRICKS_VERSION );
		wp_enqueue_script( 'colorpicker_script', trailingslashit( BRICKS_JS ) . 'colorpicker/js/colorpicker.js', false, BRICKS_VERSION );
		wp_enqueue_script( 'colorpicker-eye', trailingslashit( BRICKS_JS ) . 'colorpicker/js/eye.js', false, BRICKS_VERSION );
		wp_enqueue_script( 'jquery-ui', trailingslashit( BRICKS_JS ) . 'jquery-ui-1.8.17.custom.min.js', false, BRICKS_VERSION );
		wp_enqueue_script( 'iphone-checkboxes', trailingslashit( BRICKS_JS ) . 'iphone-checkboxes.js', false, BRICKS_VERSION );
	}
	
	
	/**
	 * Enqueue stylesheet used by theme options page.
	 *
	 * @since 1.0.0
	 */
	public function styles() {
		
		wp_register_style( 'bricks-admin', trailingslashit( BRICKS_CSS ) . 'admin/theme-options.css' );
		wp_enqueue_style( 'bricks-admin' );
		wp_enqueue_style( 'thickbox' );
		wp_enqueue_style( 'colorpicker_css', trailingslashit( BRICKS_JS ) . 'colorpicker/css/colorpicker.css' );
		wp_enqueue_style( 'jquery-custom-css', trailingslashit( BRICKS_JS ) . 'redmond/jquery-ui-1.8.17.custom.css' );
	}
	
	
	/**
	 * Validate settings
	 *
	 * @since 1.0.0
	 */
	public function validate_settings( $input ) {
		
		if ( ! isset( $input['reset_theme'] ) ) {
			$options = get_option( 'theme_options' );
			foreach ( $this->checkboxes as $id ) {
				if ( isset( $options[$id] ) && isset( $input[$id] ) ) {
					unset( $options[$id] );
				}
			}	
			return $input;
		}
		return false;
	}
	
	
	/**
	 * Convert a hexadecimal color code to its RGB equivalent
	 *
	 * @param	string	$hexStr (hexadecimal color value)
	 * @param	boolean $returnAsString (if set true, returns the value separated by the separator character. Otherwise returns associative array)
	 * @param	string 	$seperator (to separate RGB values. Applicable only if second parameter is true.)
	 * @return 	array or string (depending on second parameter. Returns False if invalid hex color value)
	 *
	 * @since 1.0.0
	 */                                                                                           
	public function hex_to_rgb($hexStr, $returnAsString = true, $seperator = ',') {
		
		$hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
		$rgbArray = array();
		if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
			$colorVal = hexdec($hexStr);
			$rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
			$rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
			$rgbArray['blue'] = 0xFF & $colorVal;
		} elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
			$rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
			$rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
			$rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
		} else {
			return false; //Invalid hex color code
		}
		return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray; // returns the rgb string or the associative array
	}
	
	
	/**
	 * Add a menu item to wp_admin_bar.
	 * 
	 * @param     $wp_admin_bar
	 * @access    public
	 *
	 * @since     1.0.0
	 */
	public function bricks_admin_bar_menu( $wp_admin_bar ) {
		
		global $wp_admin_bar;
		
		// Bail early if current user can not edit theme options.
		if ( !current_user_can( 'edit_theme_options' ) )
			return;
			
		$bricks_url = admin_url( 'themes.php?page=theme-options' );
		
		$wp_admin_bar->add_menu( array( 'id' => 'bricks-menu', 'title' => __( 'Cubricks Theme', 'bricks' ), 'href'  => $bricks_url ) );
	}
}