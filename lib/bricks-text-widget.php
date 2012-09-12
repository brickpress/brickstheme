<?php 
/**
 * Cubricks Text widget class
 *
 * @since 1.0.1
 */
class Bricks_Text_Widget extends WP_Widget {

	function __construct() {

		/* Set up the widget options. */
		$widget_options = array(
			'classname' => 'bricks_text',
			'description' => esc_html__( 'Cubricks Arbitrary text or HTML ideal for the Slider Homepage Page Template.', 'bricks' )
		);

		/* Create the widget. */
		$this->WP_Widget(
			'bricks-text',					    // $this->id_base
			__( 'Cubricks Text', 'bricks' ),	// $this->name
			$widget_options						// $this->widget_options
		);
	}

	function widget( $args, $instance ) {
		
		extract($args);
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$text = apply_filters( 'widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance );
		$post_link = apply_filters( 'widget_link', empty( $instance['post_link'] ) ? '' : $instance['post_link'], $instance );
		echo $before_widget;
		if ( !empty( $title ) ) { echo $before_title . $title . $after_title; } ?>
			<div class="textwidget">
			<?php echo !empty( $instance['filter'] ) ? wpautop( $text ) : $text; ?>
            	<div class="clearfix"></div>
            <?php if( !empty( $post_link ) ) {
				echo '<a class="post-link" href="'. esc_url($post_link) . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bricks' ) . '</a>';
			} ?> 
            </div>
		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		if ( current_user_can('unfiltered_html') )
			$instance['text'] =  $new_instance['text'];
		else
			$instance['text'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['text']) ) ); // wp_filter_post_kses() expects slashed
		$instance['filter'] = isset($new_instance['filter']);
		$instance['post_link'] = strip_tags($new_instance['post_link']);
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '' ) );
		$title = strip_tags($instance['title']);
		$text = esc_textarea($instance['text']);
		$post_link = strip_tags($instance['post_link']);
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'bricks'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

		<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

		<p><input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox" <?php checked(isset($instance['filter']) ? $instance['filter'] : 0); ?> />&nbsp;<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs', 'bricks'); ?></label></p>
        
        <p><label for="<?php echo $this->get_field_id('post_link'); ?>"><?php _e('Link to Post:', 'bricks'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('post_link'); ?>" name="<?php echo $this->get_field_name('post_link'); ?>" type="text" value="<?php echo esc_url($post_link); ?>" /></p>
        <p><?php _e('Adds a <strong><em>Continue Reading</em></strong> link to post/page if a URL is provided.', 'bricks'); ?></p>
<?php
	}
}