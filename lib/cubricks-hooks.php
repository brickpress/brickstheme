<?php
/**
 * Cubricks custom hook functions.
 * Modeled after those in Hybrid by Justin Tadlock.
 *
 * @package Cubricks
 * @subpackage Functions
 * @since 1.0.0
 */
 
/**
 * Before the site header.
 * @since 1.0.0
 */
function cubricks_before_header() {
	do_action( 'cubricks_before_header' );
}

/**
 * After the site header.
 * @since 1.0.0
 */
function cubricks_after_header() {
	do_action( 'cubricks_after_header' );
}

/**
 * Before the site footer, right after the main div closing tag.
 * @since 1.0.0
 */
function cubricks_before_footer() {
	do_action( 'cubricks_before_footer' );
}

/**
 * At footer, before"Proudly powered by WordPress" is called.
 * @since 1.0.0
 */
function cubricks_credits() {
	do_action( 'cubricks_credits' );
}