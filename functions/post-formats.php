<?php
/** 
 * Cubricks Theme post formats.
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
 * @subpackage Cubricks Theme Functions
 * @author     Raphael Villanea <support@brickpress.us>
 * @copyright  Copyright (c) 2011, BrickPress
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @since      1.0.0
 */

/**
 * Displays the current post's format.
 * @since 1.0.0
 */
if( ! function_exists('bricks_post_format') ) :
function bricks_post_format() {

	$post_format = ucwords( get_post_format() );
	if ( is_sticky() ) {
		$post_format = __( 'Featured', 'bricks' );
	} elseif ( $post_format == '' ) {
		$post_format = __( 'Article', 'bricks' );
	}
	$format = apply_filters( 'bricks_post_format', '<h3 class="entry-format">' . $post_format . '</h3>' );

	echo $format;	
}
endif;


/**
 * Display an icon representing the current post's format.
 * @since 1.0.0
 */
if( ! function_exists('bricks_post_format_icon') ) :
function bricks_post_format_icon() {
	
	$post_format = strtolower( get_post_format() );
	
	if ( is_sticky() ) {
		$post_format = __( 'featured', 'bricks' );
	} elseif ( $post_format == '' ) {
		$post_format = __( 'standard', 'bricks' );
	}
	$format = apply_filters( 'bricks_post_format_icon', '<span class="entry-format-' .$post_format. '"></span>' );

	echo $format;	
}
endif;


/**
 * Convert a chat post into a definition list based on "Name: What they said" content
 *
 * @since 1.0.0
 */
function bricks_chat_content() {
	
	global $post;
	
	$output = '<ul class="bricks-chat">';
	
	$lines = preg_split( "/(\r*?\n)+/", $post->post_content );
	
	$i = 0;
	foreach ( $lines as $line ) :
		
		$i++;
		
		if ( strpos( $line, ':' ) !== false ) {
			
			$line_pieces = explode( ':', $line, 2 );
			$name = strip_tags( trim( $line_pieces[0] ) );
			$text = force_balance_tags( strip_tags( trim( $line_pieces[1] ), '<strong><em><a><img><del><ins><span>' ) );
			
			$rowclass = ( $i % 2 == 0 ? ' class="chat-even"' : ' class="chat-odd"' );
			
			$output .= '<li' .$rowclass. '><strong>' .$name. ': </strong>' .$text. '</li>';
			
		}
		else {
			$output .= '</ul>' . $line . '<ul class="bricks-chat">';
		}
		
	endforeach;
	
	$output .= '</ul>';
	
	// Remove any empty definition lists
	$output = str_replace( '<ul class="bricks-chat"></ul>', '', $output );
	
	return apply_filters( 'the_content', $output );
}


/**
 * Returns content for link post format.
 *
 * @since 1.0.0
 */
function bricks_link_content() {
	
	$output = '<div class="link-content"><div class="link-icon"></div>';
	
	$link = bricks_first_link();
	
	$output .= '<a href="' .esc_url( $link['url'] ). '" title="' .esc_attr( $link['title_attr'] ). '">' .esc_attr( $link['title'] ). '</a>';

	$output .= '</div>';
	
	$output .= esc_attr( $link['desc'] );
	
	$output = str_replace( '<div class="link-content"><div class="link-icon"></div></div>', '', $output );
	
	return apply_filters( 'the_content', $output );
}
	
	
/**
 * Returns content for quote post format.
 *
 * @since 1.0.0
 */
function bricks_quote_content() {

	global $post;
	
	if ( strpos( $post->post_content, '<blockquote' ) === false )
		echo '<blockquote>';
		
	the_content();

	if ( strpos( $post->post_content, '</blockquote' ) === false )
		echo '</blockquote>';
	
	//if ( strpos( $post->post_content, '<p' ) === false )
		//echo '<cite>&mdash;' . get_the_title() . '</cite>';
}


/**
 * Shows author avatar for status post format.
 *
 * @since 1.0.0
 */
if( ! function_exists('bricks_status_content') ) :
function bricks_status_content() {
		
	global $post;
	
	$post_format = get_post_format();
	$current_author = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(get_query_var('author'));
	
	if( ! is_author() && $post_format == 'status' ) { ?>
		<div class="avatar">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'bricks_status_avatar', '65' ) ); ?>
		</div>
	<?php
	}
	the_content();
}
endif;


/**
 * Returns content for gallery post format.
 *
 * @since 1.0.0
 */
function bricks_gallery_content() {
	
	global $post;
	
	$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
	if ( $images ) :
		$total_images = count( $images );
		$image = array_shift( $images );
		$image_img_tag = wp_get_attachment_image( $image->ID, 'full' );
	?>
	
	<figure class="gallery-thumb">
    <?php if ( has_post_thumbnail() ) : ?>
    	<a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('full'); ?></a>
    <?php else : ?>
		<a href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
    <?php endif; ?>
	</figure><!-- .gallery-thumb -->
	
	<p><em><?php printf( _n( 'This gallery contains <a %1$s>%2$s photo</a>.', 'This gallery contains <a %1$s>%2$s photos</a>.', $total_images, 'bricks' ),
			'href="' . esc_url( get_permalink() ) . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'bricks' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"',
			number_format_i18n( $total_images )
		); ?></em></p>
	<?php
    endif;
	
	the_excerpt();
}


/**
 * Returns content for image post format.
 *
 * @since 1.0.0
 */
function bricks_image_content() {
	
	global $post;
	
	$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image' ) );
		$image = array_shift( $images );
		$image_img_tag = wp_get_attachment_image( $image->ID, 'full' );
	?>

	<a href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
	
	<?php
}