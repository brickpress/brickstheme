<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Cubricks
 * @since Cubricks 1.0.0
 */
?><!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php 
	if( is_page_template('page-templates/showcase.php') && get_theme_mod('slider_position') == 'before_header' )
    		cubricks_showcase_slider(); ?>
   
    <div id="header" class="wrapper">
        <header id="masthead" class="site-header inner" role="banner">
        	<?php if( '' != get_theme_mod('site_logo') ) : ?>
				<a class="sitelogo" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod('site_logo'); ?>" alt="<?php __( 'Site Logo', 'cubricks' ); ?>" /></a>
            <?php endif; ?>
            <hgroup>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            </hgroup>
			<?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_class' => 'header-menu' ) ); ?>
            <?php $header_image = get_header_image();
            if ( ! empty( $header_image ) ) : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
            <?php endif; ?>
        </header><!-- #masthead .inner -->
    </div><!-- #header .wrapper -->

    <div id="sub-head" class="wrapper">
    <?php // Call the theme's primary navigation.
	cubricks_nav_menu(); ?>
    </div><!-- #sub-head .inner -->

    <?php 
	if( is_page_template('page-templates/showcase.php') && get_theme_mod('slider_position') == 'after-header' || is_page_template('page-templates/slider-homepage.php') && get_theme_mod('slider_position') == 'after-header')
          cubricks_showcase_slider();
		  ?>
    <div id="main-content" class="wrapper">
        <div id="main" class="inner">