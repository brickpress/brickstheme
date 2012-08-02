<?php
/** 
 * Bricks Theme post formats.
 *
 * @package Bricks Theme
 * @subpackage Functions
 *
 * @since 1.0.0
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
 * Adds a featured image to content.
 *
 * @since 1.0.0
 */
function bricks_audio_content() {
	
	global $post; ?>
    
    <div class="audio-content">
        <div class="audio-icon">
            <?php // Gets the attachment image
                  echo get_the_image(); ?>
        </div>
        <?php the_content(); ?>
	</div>
    <?php
}

add_shortcode( 'mp3', 'mp3_shortcode' );
/**
 * Audio post format MP3 wrapper.
 *
 * @since 1.0.0
 */
function caption_shortcode( $atts, $content = null ) {
   return '<div class="mp3-wrap">' . $content . '</div>';
}


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
			
			$rowclass = ( $i % 2 == 0 ? ' class="chat-even"' : '' );
			
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
	
	global $post; 
	
	$post_format = get_post_format();

	if( ! is_author() && $post_format == 'link' ) { ?>
    	<div class="link-content">
        	<div class="link-icon"></div>
			<?php the_content(); ?>
		</div>
    <?php
	}
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