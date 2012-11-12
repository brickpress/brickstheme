<?php
/**
 * Custom Hooks
 *
 * @since 1.0.0
 * @package Cubricks
 * @subpackage Functions
 */
 
/**
 * Before HTML.  Loaded just after <body> but before any content is displayed.
 * @since 1.0.0
 */
function cubricks_before_html() {
	do_action( 'cubricks_before_html' );
}

/**
 * After HTML.
 * Loaded just before </body> and after all content.
 * @since 1.0.0
 */
function cubricks_after_html() {
	do_action( 'cubricks_after_html' );
}

/**
 * Added to the header before wp_head().
 * @since 1.0.0
 */
function cubricks_head() {
	do_action( 'cubricks_head' );
}

/**
 * Before the header.
 * @since 1.0.0
 */
function cubricks_before_header() {
	do_action( 'cubricks_before_header' );
}

/**
 * Header.
 * @since 1.0.0
 */
function cubricks_header() {
	do_action( 'cubricks_header' );
}

/**
 * After the header.
 * @since 1.0.0
 */
function cubricks_after_header() {
	do_action( 'cubricks_after_header' );
}

/**
 * Before menu.
 * @since 1.0.0
 */
function cubricks_before_menu() {
	do_action( 'cubricks_before_menu' );
}

/**
 * Before main.
 * @since 1.0.0
 */
function cubricks_before_main() {
	do_action( 'cubricks_before_main' );
}

/**
 * Before primary menu.
 * @since 1.0.0
 */
function cubricks_before_primary_menu() {
	do_action( 'cubricks_before_primary_menu' );
}

/**
 * After primary menu.
 * @since 1.0.0
 */
function cubricks_after_primary_menu() {
	do_action( 'cubricks_after_primary_menu' );
}

/**
 * Before secondary menu.
 * @since 1.0.0
 */
function cubricks_before_secondary_menu() {
	do_action( 'cubricks_before_secondary_menu' );
}

/**
 * After secondary menu.
 * @since 1.0.0
 */
function cubricks_after_secondary_menu() {
	do_action( 'cubricks_after_secondary_menu' );
}

/**
 * Footer menu.
 * @since 1.0.0
 */
function cubricks_footer_menu() {
	do_action( 'cubricks_footer_menu' );
}

/**
 * Before footer menu.
 * @since 1.0.0
 */
function cubricks_before_footer_menu() {
	do_action( 'cubricks_before_footer_menu' );
}

/**
 * After footer menu.
 * @since 1.0.0
 */
function cubricks_after_footer_menu() {
	do_action( 'cubricks_after_footer_menu' );
}

/**
 * Before footer menu.
 * @since 1.0.0
 */
function cubricks_before_404_menu() {
	do_action( 'cubricks_before_404_menu' );
}

/**
 * After footer menu.
 * @since 1.0.0
 */
function cubricks_after_404_menu() {
	do_action( 'cubricks_after_404_menu' );
}

/**
 * Before the container.
 * @since 1.0.0
 */
function cubricks_before_container() {
	do_action( 'cubricks_before_container' );
}

/**
 * Before the content.
 * @since 1.0.0
 */
function cubricks_before_content() {
	do_action( 'cubricks_before_content' );
}

/**
 * Before the post on single post template.
 * @since 1.0.0
 */
function cubricks_before_single() {
	do_action( 'cubricks_before_single' );
}

/**
 * After the post on single post template.
 * @since 1.0.0
 */
function cubricks_after_single() {
	do_action( 'cubricks_after_single' );
}

/**
 * Before the article.
 * @since 1.0.0
 */
function cubricks_before_article() {
	do_action( 'cubricks_before_article' );
}

/**
 * Before the article.
 * @since 1.0.0
 */
function cubricks_after_article() {
	do_action( 'cubricks_after_article' );
}

/**
 * After the content.
 * @since 1.0.0
 */
function cubricks_after_content() {
	do_action( 'cubricks_after_content' );
}

/**
 * Before each entry.
 * @since 1.0.0
 */
function cubricks_before_entry_title() {
	do_action( 'cubricks_before_entry_title' );
}

/**
 * After each entry.
 * @since 1.0.0
 */
function cubricks_after_entry_title() {
	do_action( 'cubricks_after_entry_title' );
}

/**
 * Before each entry content.
 * @since 1.0.0
 */
function cubricks_before_entry_content() {
	do_action( 'cubricks_before_entry_content' );
}

/**
 * After each entry content.
 * @since 1.0.0
 */
function cubricks_after_entry_content() {
	do_action( 'cubricks_after_entry_content' );
}

/**
 * Before the primary sidebar.
 * @since 1.0.0
 */
function cubricks_before_primary_sidebar() {
	do_action( 'cubricks_before_primary_sidebar' );
}

/**
 * After the primary sidebar.
 * @since 1.0.0
 */
function cubricks_after_primary_sidebar() {
	do_action( 'cubricks_after_primary_sidebar' );
}

/**
 * Before the secondary sidebar.
 * @since 1.0.0
 */
function cubricks_before_secondary_sidebar() {
	do_action( 'cubricks_before_secondary_sidebar' );
}

/**
 * After the secondary sidebar.
 * @since 1.0.0
 */
function cubricks_after_secondary_sidebar() {
	do_action( 'cubricks_after_secondary_sidebar' );
}

/**
 * After singular views but before the comments template.
 * @since 0.7
 */
function cubricks_after_singular() {
	do_action( 'cubricks_after_singular' );
}

/**
 * After the container area.
 * @since 1.0.0
 */
function cubricks_after_container() {
	do_action( 'cubricks_after_container' );
}

/**
 * Before the footer.
 * @since 1.0.0
 */
function cubricks_before_footer() {
	do_action( 'cubricks_before_footer' );
}

/**
 * The footer.
 * @since 1.0.0
 */
function cubricks_footer() {
	do_action( 'cubricks_footer' );
}

/**
 * After the footer.
 * @since 1.0.0
 */
function cubricks_after_footer() {
	do_action( 'cubricks_after_footer' );
}

/**
 * Fires before each comment's information.
 * @since 1.0.0
 */
function cubricks_before_comment() {
	do_action( 'cubricks_before_comment' );
}

/**
 * Fires after each comment's information.
 * @since 1.0.0
 */
function cubricks_after_comment() {
	do_action( 'cubricks_after_comment' );
}

/**
 * Fires before the comment list.
 * @since 1.0.0
 */
function cubricks_before_comment_list() {
	do_action( 'cubricks_before_comment_list' );
}

/**
 * Fires after the comment list.
 * @since 1.0.0
 */
function cubricks_after_comment_list() {
	do_action( 'cubricks_after_comment_list' );
}