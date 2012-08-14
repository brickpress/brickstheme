<?php
/**
 * Custom Hooks
 *
 * @since 1.0.0
 * @package Bricks
 * @subpackage Functions
 */
 
/**
 * Before HTML.  Loaded just after <body> but before any content is displayed.
 * @since 1.0.0
 */
function bricks_before_html() {
	do_action( 'bricks_before_html' );
}

/**
 * After HTML.
 * Loaded just before </body> and after all content.
 * @since 1.0.0
 */
function bricks_after_html() {
	do_action( 'bricks_after_html' );
}

/**
 * Added to the header before wp_head().
 * @since 1.0.0
 */
function bricks_head() {
	do_action( 'bricks_head' );
}

/**
 * Before the header.
 * @since 1.0.0
 */
function bricks_before_header() {
	do_action( 'bricks_before_header' );
}

/**
 * Header.
 * @since 1.0.0
 */
function bricks_header() {
	do_action( 'bricks_header' );
}

/**
 * After the header.
 * @since 1.0.0
 */
function bricks_after_header() {
	do_action( 'bricks_after_header' );
}

/**
 * Before menu.
 * @since 1.0.0
 */
function bricks_before_menu() {
	do_action( 'bricks_before_menu' );
}

/**
 * Before main.
 * @since 1.0.0
 */
function bricks_before_main() {
	do_action( 'bricks_before_main' );
}

/**
 * Before primary menu.
 * @since 1.0.0
 */
function bricks_before_primary_menu() {
	do_action( 'bricks_before_primary_menu' );
}

/**
 * After primary menu.
 * @since 1.0.0
 */
function bricks_after_primary_menu() {
	do_action( 'bricks_after_primary_menu' );
}

/**
 * Before secondary menu.
 * @since 1.0.0
 */
function bricks_before_secondary_menu() {
	do_action( 'bricks_before_secondary_menu' );
}

/**
 * After secondary menu.
 * @since 1.0.0
 */
function bricks_after_secondary_menu() {
	do_action( 'bricks_after_secondary_menu' );
}

/**
 * Footer menu.
 * @since 1.0.0
 */
function bricks_footer_menu() {
	do_action( 'bricks_footer_menu' );
}

/**
 * Before footer menu.
 * @since 1.0.0
 */
function bricks_before_footer_menu() {
	do_action( 'bricks_before_footer_menu' );
}

/**
 * After footer menu.
 * @since 1.0.0
 */
function bricks_after_footer_menu() {
	do_action( 'bricks_after_footer_menu' );
}

/**
 * Before footer menu.
 * @since 1.0.0
 */
function bricks_before_404_menu() {
	do_action( 'bricks_before_404_menu' );
}

/**
 * After footer menu.
 * @since 1.0.0
 */
function bricks_after_404_menu() {
	do_action( 'bricks_after_404_menu' );
}

/**
 * Before the container.
 * @since 1.0.0
 */
function bricks_before_container() {
	do_action( 'bricks_before_container' );
}

/**
 * Before the content.
 * @since 1.0.0
 */
function bricks_before_content() {
	do_action( 'bricks_before_content' );
}

/**
 * Before the post on single post template.
 * @since 1.0.0
 */
function bricks_before_single() {
	do_action( 'bricks_before_single' );
}

/**
 * After the post on single post template.
 * @since 1.0.0
 */
function bricks_after_single() {
	do_action( 'bricks_after_single' );
}

/**
 * Before the article.
 * @since 1.0.0
 */
function bricks_before_article() {
	do_action( 'bricks_before_article' );
}

/**
 * Before the article.
 * @since 1.0.0
 */
function bricks_after_article() {
	do_action( 'bricks_after_article' );
}

/**
 * After the content.
 * @since 1.0.0
 */
function bricks_after_content() {
	do_action( 'bricks_after_content' );
}

/**
 * Before each entry.
 * @since 1.0.0
 */
function bricks_before_entry_title() {
	do_action( 'bricks_before_entry_title' );
}

/**
 * After each entry.
 * @since 1.0.0
 */
function bricks_after_entry_title() {
	do_action( 'bricks_after_entry_title' );
}

/**
 * Before each entry content.
 * @since 1.0.0
 */
function bricks_before_entry_content() {
	do_action( 'bricks_before_entry_content' );
}

/**
 * After each entry content.
 * @since 1.0.0
 */
function bricks_after_entry_content() {
	do_action( 'bricks_after_entry_content' );
}

/**
 * Before the primary sidebar.
 * @since 1.0.0
 */
function bricks_before_primary_sidebar() {
	do_action( 'bricks_before_primary_sidebar' );
}

/**
 * After the primary sidebar.
 * @since 1.0.0
 */
function bricks_after_primary_sidebar() {
	do_action( 'bricks_after_primary_sidebar' );
}

/**
 * Before the secondary sidebar.
 * @since 1.0.0
 */
function bricks_before_secondary_sidebar() {
	do_action( 'bricks_before_secondary_sidebar' );
}

/**
 * After the secondary sidebar.
 * @since 1.0.0
 */
function bricks_after_secondary_sidebar() {
	do_action( 'bricks_after_secondary_sidebar' );
}

/**
 * After singular views but before the comments template.
 * @since 0.7
 */
function bricks_after_singular() {
	do_action( 'bricks_after_singular' );
}

/**
 * After the container area.
 * @since 1.0.0
 */
function bricks_after_container() {
	do_action( 'bricks_after_container' );
}

/**
 * Before the footer.
 * @since 1.0.0
 */
function bricks_before_footer() {
	do_action( 'bricks_before_footer' );
}

/**
 * The footer.
 * @since 1.0.0
 */
function bricks_footer() {
	do_action( 'bricks_footer' );
}

/**
 * After the footer.
 * @since 1.0.0
 */
function bricks_after_footer() {
	do_action( 'bricks_after_footer' );
}

/**
 * Fires before each comment's information.
 * @since 1.0.0
 */
function bricks_before_comment() {
	do_action( 'bricks_before_comment' );
}

/**
 * Fires after each comment's information.
 * @since 1.0.0
 */
function bricks_after_comment() {
	do_action( 'bricks_after_comment' );
}

/**
 * Fires before the comment list.
 * @since 1.0.0
 */
function bricks_before_comment_list() {
	do_action( 'bricks_before_comment_list' );
}

/**
 * Fires after the comment list.
 * @since 1.0.0
 */
function bricks_after_comment_list() {
	do_action( 'bricks_after_comment_list' );
}