/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 * Things like site title, description, and background color changes.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).html( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).html( to );
		} );
	} );
	wp.customize( 'copyright_notice', function( value ) {
		value.bind( function( to ) {
			$( '.copyright-notice' ).html( to );
		} );
	} );
	wp.customize( 'slider_timer', function( value ) {
		value.bind( function( to ) {
			$( '.slider_timer' ).html( to );
		} );
	} );
	wp.customize( 'slider_effects', function( value ) {
		value.bind( function( to ) {
			$( '.slider_effects' ).html( to );
		} );
	} );
	wp.customize( 'slider_items', function( value ) {
		value.bind( function( to ) {
			$( '.slider_items' ).html( to );
		} );
	} );
	wp.customize( 'large_slider_width', function( value ) {
		value.bind( function( to ) {
			$( '.large_slider_width' ).html( to );
		} );
	} );
	wp.customize( 'large_slider_height', function( value ) {
		value.bind( function( to ) {
			$( '.large_slider_height' ).html( to );
		} );
	} );
	

	// Hook into background color change and adjust body class value as needed.
	wp.customize( 'background_color', function( value ) {
		value.bind( function( to ) {
			if ( '#ffffff' == to || '#fff' == to || '' == to )
				$( 'body' ).addClass( 'custom-background-white' );
			else if ( '' == to )
				$( 'body' ).addClass( 'custom-background-empty' );
			else
				$( 'body' ).removeClass( 'custom-background-empty custom-background-white' );
		} );
	} );
} )( jQuery );