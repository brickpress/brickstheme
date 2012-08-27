<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Cubricks
 * @since Cubricks 1.0.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged, $theme_options;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'bricks' ), max( $paged, $page ) );

	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
</head>

<?php bricks_before_html(); ?>
<body <?php body_class(); ?>>
	
	<?php if( is_page_template('showcase.php') && bricks_theme_option('slider_position') == 'topnav' )
          bricks_featured_slider(); ?>
              
    <?php if( bricks_theme_option('show_topbar_nav') ) : ?>
	<div id="topbar-wrapper">
    	<div class="inner-topbar">
       	<?php bricks_topbar(); ?>
        </div>
    </div>
    <?php endif; ?>
    
    <?php if( is_page_template('showcase.php') && bricks_theme_option('slider_position') == 'before-header' )
			  bricks_featured_slider(); ?>

	<header id="branding" role="banner">
    	<div class="inner-header">
            <div id="site-header">
			<?php $site_logo = bricks_theme_option('site_logo');
                  if( $site_logo ) : ?>
                <div class="header-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $site_logo ); ?>" /></a>
                </div>	
            <?php endif; ?>
            
                <ul>
                    <li>
                    <?php if( bricks_theme_option( 'show_site_title' ) ) : ?>
                    <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
                    <?php endif; ?>
                    
                    <?php if( bricks_theme_option( 'show_site_description' ) ) : ?>
                    <span class="site-description"><?php bloginfo( 'description' ); ?></span> 
                    <?php endif; ?>
                    </li>
                </ul>

        	<?php if( bricks_theme_option('social_module') == 'header-right' )
					  bricks_social_media(); ?>    
            </div><!-- #site-header -->
            
            <?php if( ! is_page_template('showcase.php') && bricks_theme_option('enable_custom_header') )
				  bricks_custom_header(); ?>
                  
        </div><!-- .inner-header -->
	</header><!-- #branding -->
    <?php if( is_page_template('showcase.php') && bricks_theme_option('slider_position') == 'after-header' )
			  bricks_featured_slider(); ?>
                
	<?php // Secondary navigation menu. ?>
    <div id="nav-wrapper">
        <div class="inner-navigation">
            <?php bricks_nav_menu(); ?>
        </div>
    </div>
 	
	<?php if( is_page_template('showcase.php') && bricks_theme_option('slider_position') == 'after-main-nav' )
              bricks_featured_slider(); ?>
              
    <div id="content-wrapper">
    	<div class="inner-content">

            <?php bricks_before_main(); ?>
            <div id="main">