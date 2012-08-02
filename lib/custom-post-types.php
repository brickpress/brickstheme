<?php
/** 
 * Bricks Custom Post Types.
 *
 * @package Bricks Theme
 * @subpackage Classes
 */

/**
 * Displays Bricks primary navigation menu.
 *
 * @since 1.0.0
 */
class bricks_post_type {
	
	function bricks_post_type() {
		add_action('init',array($this,'create_post_type'));
	}
	
	function create_post_type() {
		$labels = array(
		    'name' => 'Posts',
		    'singular_name' => 'Post',
		    'add_new' => 'Add New',
		    'all_items' => 'All Posts',
		    'add_new_item' => 'Add New Post',
		    'edit_item' => 'Edit Post',
		    'new_item' => 'New Post',
		    'view_item' => 'View Post',
		    'search_items' => 'Search Posts',
		    'not_found' =>  'No Posts found',
		    'not_found_in_trash' => 'No Posts found in trash',
		    'parent_item_colon' => 'Parent Post:',
		    'menu_name' => 'Posts'
		);
		$args = array(
			'labels' => $labels,
			'description' => "A description for your post type",
			'public' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'show_ui' => true, 
			'show_in_nav_menus' => false, 
			'show_in_menu' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 5,
			'menu_icon' => '/absolute/url/to/icon',
			'capability_type' => 'page',
			'hierarchical' => false,
			'supports' => array('title','editor','thumbnail','trackbacks','custom-fields','page-attributes','post-formats'),
			'has_archive' => true,
			'rewrite' => false,
			'query_var' => true,
			'can_export' => true
		); 
		register_post_type('bricks_post_type',$args);
	}
}

$bricks_post_type = new bricks_post_type();							