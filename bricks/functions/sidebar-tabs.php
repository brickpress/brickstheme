<?php
/** 
 * Bricks Theme sidbar tabs functions.
 *
 * @package Bricks Theme
 * @subpackage Functions
 *
 * @since 1.0.0
 */
/*-----------------------------------------------------------------------------------*/
/* WooTabs - Popular Posts */
/*-----------------------------------------------------------------------------------*/
if (!function_exists('bricks_tabs_popular')) {
	function bricks_tabs_popular( $posts = 5, $size = 35 ) {
		global $post;
		$popular = get_posts('ignore_sticky_posts=1&orderby=comment_count&showposts=' . $posts . '&suppress_filters=0' );
		foreach($popular as $post) :
			setup_postdata($post);
	?>
	<li>
		<?php //if ($size <> 0) bricks_image('height='.$size.'&width='.$size.'&class=thumbnail&single=true'); ?>
		<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		<span class="meta"><?php the_time( get_option( 'date_format' ) ); ?></span>
		<div class="fix"></div>
	</li>
	<?php endforeach;
	}
}


/*-----------------------------------------------------------------------------------*/
/* WooTabs - Latest Posts */
/*-----------------------------------------------------------------------------------*/
if (!function_exists('bricks_tabs_latest')) {
	function bricks_tabs_latest( $posts = 5, $size = 35 ) {
		global $post;
		$latest = get_posts('ignore_sticky_posts=1&showposts='. $posts .'&orderby=post_date&order=desc&suppress_filters=0');
		foreach($latest as $post) :
			setup_postdata($post);
	?>
	<li>
		<?php if ($size <> 0) //bricks_image('height='.$size.'&width='.$size.'&class=thumbnail&single=true'); ?>
		<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		<span class="meta"><?php the_time( get_option( 'date_format' ) ); ?></span>
		<div class="fix"></div>
	</li>
	<?php endforeach; 
	}
}



/*-----------------------------------------------------------------------------------*/
/* WooTabs - Latest Comments */
/*-----------------------------------------------------------------------------------*/
if (!function_exists('bricks_tabs_comments')) {
	function bricks_tabs_comments( $posts = 5, $size = 35 ) {
		global $wpdb;
		$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID,
		comment_post_ID, comment_author, comment_author_email, comment_date_gmt, comment_approved,
		comment_type,comment_author_url,
		SUBSTRING(comment_content,1,50) AS com_excerpt
		FROM $wpdb->comments
		LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID =
		$wpdb->posts.ID)
		WHERE comment_approved = '1' AND comment_type = '' AND
		post_password = ''
		ORDER BY comment_date_gmt DESC LIMIT ".$posts;
		
		//$comments = $wpdb->get_results($sql);
		$comments = get_comments( apply_filters( 'widget_comments_args', array( 'number' => $number, 'status' => 'approve', 'post_status' => 'publish' ) ) );
		
		foreach ($comments as $comment) {
		?>
		<li>
			<?php echo get_avatar( $comment, $size ); ?>
		<?php sprintf(_x('%1$s on %2$s', 'widgets', 'bricks'), get_comment_author_link(), '<a href="' . esc_url( get_comment_link($comment->comment_ID) ) . '">' . get_the_title($comment->comment_post_ID) . '</a>'); ?>
			<div class="fix"></div>
		</li>
		<?php 
		}
	}
}