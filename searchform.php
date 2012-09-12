<?php
/**
 * The template for displaying search forms in Cubricks Theme.
 *
 * @package Cubricks Theme
 * @subpackage Page Templates
 * @since Cubricks 1.0.0
 */
?>
<?php

/* Set up some variables for the search form. */
global $search_form_num;
$search_num = ( ( $search_form_num ) ? '-' . esc_attr( $search_form_num ) : '' ); ?>
            
	<form method="get" id="searchform<?php echo $search_num; ?>" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'bricks' ); ?></label>
		<input type="text" class="field" name="s" id="s<?php echo $search_num; ?>" placeholder="<?php esc_attr_e( 'Search', 'bricks' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit<?php echo $search_num; ?>" value="<?php esc_attr_e( 'Search', 'bricks' ); ?>" />
	</form>
    
    <?php $search_form_num++; ?>
    