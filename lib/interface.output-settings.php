<?php
/**
 * Renders Cubricks theme options form fields.
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
 * @package    Cubricks Theme
 * @subpackage Cubricks Theme Options
 * @author     Raphael Villanea <support@brickpress.us>
 * @copyright  Copyright (c) 2011, BrickPress
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @since      1.0.0
 */

		extract( $args );
		$options = get_option( 'theme_options' );

		if( !isset( $options[$id] ) && $type != 'no-data' ) {
			$options[$id] = $std;
		} elseif( !isset( $options[$id] ) ) {
			$options[$id] = 0;
		}
		
		switch ( $type ) {

			case 'no-data':
			if( $class == 'subsectiontabs' ) {
				echo '<div id="' . $id . '" class="subsectiontabs">
					  	<div class="subsection-tabs">
							<ul>';
				foreach( $choices as $section_tab => $label ) {
					echo '<li><a href="#' . $section_tab . '" />' . $label . '</a></li>';
				}
				echo '</ul>';
				echo '<script type="text/javascript"><!--//--><![CDATA[//><!--
					  jQuery(document).ready(function($) {
						  $(".subsectiontabs").tabs({ fx: { opacity: "toggle",duration: 500 } });	
					   });
					  //--><!]]> 
					  </script>';
				} elseif( $class == 'headings' ) {
					echo '<div id="' .$id. '" class="' .$class. '"><label for="' .$id. '"><h3>' .$title. '</h3></label>';	
					echo '<div class="clearfix"></div>';
					if ( $desc != '' ) {
						echo '<span class="description" style="float:left;">' .$desc. '</span>';
						echo '<div class="clearfix"></div>';
					}
				echo '</div>';
				} elseif( $class == 'open_subsection' ) {
					echo '<div id="' . $id . '">';
				} elseif( $class == 'close_subsection' || $class == 'close_controller_wrap' ) {
					echo '</div>';
				} elseif( $class == 'close_subsection_wrap' ) {
					echo '</div></div></div>';
				} elseif( $class == 'controller_wrap' ) {
					echo '<div id="' .$id. '" class="' .$class. '"><label for="' .$id. '"><h3>' .$title. '</h3></label>';	
				echo '<div class="clearfix"></div>';
					if ( $desc != '' ) {
						echo '<span class="description" style="float:left;">' .$desc. '</span>';
						echo '<div class="clearfix"></div>';
					}
				}
			break;
			
		
			case 'checkbox':
				echo '<fieldset><legend class="screen-reader-text"><span>' . esc_attr( $id ) . '</span></legend>';
				echo '<div class="clearfix"></div>';
				echo '<input class="' .$class. '" type="checkbox" id="' .$id. '" name="theme_options[' .$id. ']" value="1" ' . checked( $options[$id], 1, false ) . ' /><br />';
				echo '<div class="clearfix"></div>';
				if( '' != $options[$id] ) {
					set_theme_mod( $id, $options[$id] );
				}
				if ( $desc != '' ) {
					echo '<span class="description">' .$desc. '</span>';
				}
				echo '</fieldset>';
			break;
			
			
			case 'textarea':
				echo '<fieldset><legend class="screen-reader-text"><span>' . esc_attr( $id ) . '</span></legend>';
				echo '<textarea class="textarea" id="' . $id . '" name="theme_options[' . $id . ']" placeholder="' .get_theme_mod( $id ). '" rows="5" cols="30">' . wp_htmledit_pre( $options[$id] ) . '</textarea>';
				echo '<div class="clearfix"></div>';
				if ( $desc != '' )
					echo '<span class="description">' .$desc. '</span>';
				echo '</fieldset>';
			break;
				
				
			case 'password':
				echo '<fieldset><legend class="screen-reader-text"><span>' . esc_attr( $id ) . '</span></legend>';
				echo '<input class="password' . $class . '" type="password" id="' . $id . '" name="theme_options[' . $id . ']" value="' . esc_attr( $options[$id] ) . '" />';
				echo '<div class="clearfix"></div>';
				if ( $desc != '' )
					echo '<span class="description">' .$desc. '</span>';
				echo '</fieldset>';
			break;
			
			
			case 'select':
				echo '<fieldset><legend class="screen-reader-text"><span>' . esc_attr( $id ) . '</span></legend>';
				if( $class == 'font-face' ) {
					echo '<select id="' .$id. '" class="' .$class. '" name="theme_options[' .$id. ']" style="width:260px;">';
					foreach ( $choices as $choice => $value ) {
						echo '<option value="' . esc_attr( $choice ) . '"' . selected( $options[$id], $choice, false ) . '>' . esc_attr( $value ) . '</option>';
					}
				echo '</select>';
				// Preview selected font family
				echo '<div id="' .$id. '_sample" class="text-sample">' .__( 'Sample Text', 'cubricks' ). '</div>';
				echo '<input class="' .$class. '" type="text" id="' . $id . '" value="' .esc_attr( $options[$id] ). '" style="width:60px; padding: 6px; display: none;" />';
					
				} else {
				echo '<select id="' .$id. '" class="' .$class. '" name="theme_options[' .$id. ']" style="width:260px;">';
					foreach ( $choices as $choice ) {
						echo '<option value="' . esc_attr( $choice ) . '"' . selected( $options[$id], $choice, false ) . '>' . esc_attr( $choice ) . '</option>';
					}
				}
				echo '</select>';
				echo '<div class="clearfix"></div>';
				if ( $desc != '' )
					echo '<span class="description">' .$desc. '</span>';
				echo '</fieldset>';
			break;
			
			
			case 'radio':
				echo '<fieldset><legend class="screen-reader-text"><span>' . esc_attr( $id ) . '</span></legend>';
				if( $class == 'radio-image' ) {
					echo '<div id="' .$id. '" class="' .$class. '">';
					foreach ( $choices as $value => $label ) {
						echo '<label id="' . $value . '" class="' . $class . '">';
						echo '<input type="radio" class="' . $class . '" name="theme_options[' . $id . ']" id="' . $id . '" value="' . esc_attr( $value ) . '" ' . checked( $options[$id], $value, false ) . ' style="display: none;" />';
						echo '<span class="' . $class . '"><img onclick="jQuery(\'#' . $value . '\').click()" class="' . $class . '" src="' . esc_url( trailingslashit( BRICKS_IMAGES ) ) . 'admin/' . esc_attr( $value ) . '.png' . '" width="125" height="125" alt="' .$label. '" />' .$label. '</span><span id="' .$value. '" class="overlay"></span></label>';	
					}
					
				} elseif( $class == 'radio-button' ) {
					echo '<div id="' .$id. '" class="' .$class. '">';
					foreach ( $choices as $value => $label ) {
						echo '<label id="' . $value . '" class="' . $class . '">';
						echo '<input type="radio" class="' . $class . '" name="theme_options[' . $id . ']" id="' . $id . '" value="' . esc_attr( $value ) . '" ' . checked( $options[$id], $value, false ) . ' style="display: none;" />';
						echo '<span id="' .$value. '" class="' . $class . '">' .$label. '</span></label>';	
					}
					echo '</div><br />';
							
				} elseif( $class == 'ui-buttonset' ) {
					echo '<div id="radio' .$id. '" class="' .$class. '">';
					foreach ( $choices as $value => $label ) {
						
						echo '<input type="radio" name="theme_options[' . $id . ']" id="' . $value . '" value="' . esc_attr( $value ) . '" ' . checked( $options[$id], $value, false ) . '/><label for="' .$value. '">' .$label. '</label>';
					}
					echo '</div>';	
					echo '<script type="text/javascript">jQuery(document).ready(function($) {
						$(function() {
							$("#radio'.$id.'").buttonset();
						});
						$("#radio'.$id.'").click(function() {
							$(this).buttonset("refresh");
						});
					});
					</script>';
				}
				echo '<div class="clearfix"></div>';
				if( $subtype = 'wp_theme_mod' ) {
					set_theme_mod( $id, $options[$id] );
				}
				if ( $desc != '' )
					echo '<span class="description">' .$desc. '</span>';
				echo '</fieldset>';
			break;
				
			
			case 'image':
				echo '<fieldset><legend class="screen-reader-text"><span>' .esc_attr( $id ). '</span></legend>';
				echo '<input name="theme_options[' .$id. ']" id="' .$id. '" type="text" class="' .$class. '" placeholder="' .esc_attr(  $options[$id] ). '" value="' .esc_attr(  $options[$id] ). '" />';
				echo '<div class="upload_buttons">
						<input type="button" id="' .$id. '_remove" class="upload_image_remove" value="' .__('Remove Image', 'cubricks'). '" />
						<input type="button" id="' .$id. '_reset" class="upload_image_reset" value="' .__('Reset', 'cubricks'). '" />
						<input type="button" onclick="jQuery(\'#' . $id . '\').click()" value="' .__('Upload Image', 'cubricks'). '" />
					  </div>';
		
				echo '<div class="preview-image">
						<img src="' .esc_attr(  $options[$id] ). '" alt="Preview Image" />
					  </div>';
				echo '<div class="clearfix"></div>';
				if ( $desc != '' )
					echo '<br /><span class="description">' .$desc. '</span>';
				echo '</fieldset>';
		 	break;


			case 'jslider':
				echo '<fieldset><legend class="screen-reader-text"><span>' . esc_attr( $id ) . '</span></legend>';
				echo '<div id="' .$id. '" class="default-values">';
				echo '<div id="slider-range-min" style="width: 200px; padding: 0 !important;">';
				echo '<input id="' .$id. '" name="theme_options[' .$id. ']" value="' .esc_attr( $options[$id] ). '" type="text" class="' .$class. '" style="width:40px;" /><em>' .$unit. '</em>';
				echo '<div id="slider_' .$id. '"></div></div>';
					echo '<script type="text/javascript">jQuery(document).ready(function($) {
					$( "div#' .$id. ' #slider_' .$id. '" ).slider({ range: "min", value: ' .$options[$id]. ', min: ' .$min. ', max: ' .$max. ', step: ' .$step. ',
							slide: function( event, ui ) {
								$( "div#' .$id. ' #' .$id. '" ).val( ui.value );
							}
						});
						$( "div#' .$id. '#' .$id. '" ).val( $( "div#' .$id. ' #slider_' .$id. '" ).slider( "value" ) );
					});
					</script>';
				echo '</div>';
				echo '<div class="clearfix"></div>';
				if ( $desc != '' )
					echo '<span class="description">' .$desc. '</span>';
				echo '</fieldset>';
			break;


			case 'colorpicker':
				echo '<fieldset><legend class="screen-reader-text"><span>' . esc_attr( $id ) . '</span></legend>';
				echo '<input type="colorpicker" name="theme_options[' .$id. ']" id="' . $id . '" value="' .esc_attr( $options[$id] ). '" style="width:60px; padding: 6px; visibility: hidden;" class="' .$class. '" />';
				echo '<div id="' . $id . '_bg" class="colorpicker_bg" onclick="jQuery(\'#' . $id . '\').click()" style="width:170px; background-color:' .esc_attr( $options[$id] ). ';" /></div><br />';
				echo '<a id="default-color" href="#" class="pickcolor hide-if-no-js" style="background-color:' . $std . ';" /></a>'. __( 'Default Color: ', 'cubricks' ) . '<span class="default-color">' . $std . '</span>';
				echo '<div class="clearfix"></div>';
				if( $subtype = 'wp_theme_mod' )
					set_theme_mod( $id, $options[$id] );
				if ( $desc != '' )
					echo '<span class="description">' .$desc. '</span>';
				echo '</fieldset>';
			break;


			case 'text':
			default:
				echo '<fieldset><legend class="screen-reader-text"><span>' . esc_attr( $id ) . '</span></legend>';

				echo '<input name="theme_options[' .$id. ']" id="' .$id. '" type="text" class="' .$class. '" placeholder="' .esc_attr(get_theme_mod( $id )). '" value="' .esc_attr(  $options[$id] ). '" style="width: 230px;" /><em>' .$unit. '</em>';
				if( '' != $options[$id] && $class == 'constant' )
					set_theme_mod( $id, $options[$id] );
				if( $class == 'constant' )
					echo '<div class="upload_buttons"><input type="button" id="' .$id. '_remove" class="clear-field" value="' .__('Clear Field', 'cubricks'). '" /></div>';
	
				if ( $desc != '' )
					echo '<span class="description">' .$desc. '</span>';
				echo '</fieldset>';
			break;
		}	