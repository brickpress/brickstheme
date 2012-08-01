<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Bricks
 * @since Bricks 1.0.0
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
	
    <?php if( bricks_theme_option('enable_custom_header') && bricks_theme_option('header_image_pos') == 'topnav' )
				bricks_custom_header(); ?>
    
    <?php if( bricks_theme_option('show_topbar_nav') ) : ?>
	<div id="topbar-wrapper">
    	<div class="inner-topbar">
       	<?php bricks_topbar(); ?>
        </div>
    </div>
    <?php endif; ?>
    

    <?php if( bricks_theme_option('enable_custom_header') && bricks_theme_option('header_image_pos') == 'before-header' )
				bricks_custom_header(); ?>
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

        <?php bricks_social_media(); ?>    
            

            </div><!-- #site-header -->
           
            </div><!-- .inner-header -->
	</header><!-- #branding -->
    <?php if( bricks_theme_option('enable_custom_header') && bricks_theme_option('header_image_pos') == 'after-header' )
				bricks_custom_header(); ?>
     
        <?php // Secondary navigation menu // ?>
        <div id="subnav-wrapper">
            <div class="inner-subnav">
            	<?php bricks_nav_menu(); ?>
            </div>
        </div>

    <div id="content-wrapper">
    	<div class="inner-content">
        
        <?php if(is_page_template('showcase.php')) {
			
			
	wp_enqueue_script( 'nivo-slider', trailingslashit( BRICKS_JS ) . 'jquery.nivo.slider.js', array( 'jquery' ), BRICKS_VERSION );		
			wp_enqueue_style( 'nivo-slider-style', trailingslashit( BRICKS_CSS ) . 'bricks-nivo-slider.css' );
wp_enqueue_style( 'page-templates', trailingslashit( BRICKS_CSS ) . 'page-templates.css' );
//wp_enqueue_script( 'nivo-slider', trailingslashit( BRICKS_CSS ) . 'jquery.nivo.slider.js', array( 'jquery' ), BRICKS_VERSION );

$slider_timer = bricks_theme_option( 'slider_timer' ); ?>

<input type="hidden" id="slider_timer" name="slider_timer" value="<?php if( $slider_timer ) { echo $slider_timer; } else { echo '5'; } ?>"/>

                <!-- <div id="slider">-->
                						<div id="slider-small">
							<div class="slides_container small-slider">     
				<?php
				$sticky = get_option( 'sticky_posts' );

				$slider_items = bricks_theme_option( 'slider_items' );
				$slider_effects = bricks_theme_option( 'slider_effects' );

				// Proceed only if sticky posts exist.
				if ( ! empty( $sticky ) ) :

				$featured_args = array(
					'post__in' => $sticky,
					'post_status' => 'publish',
					'posts_per_page' => $slider_items,
					'no_found_rows' => true,
				);
				// The Featured Posts query.
				$featured = new WP_Query( $featured_args );
				
				// Proceed only if published posts exist
				if ( $featured->have_posts() ) :
				/**
				 * We will need to count featured posts starting from zero
				 * to create the slider navigation.
				 */
				$counter_slider = 0;
					
	while ( $featured->have_posts() ) : $featured->the_post();
	
	// Increase the counter.
	$counter_slider++;
	
 if ( has_post_thumbnail()) {
   
   //echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
   echo '<a href="' . the_permalink() . '" title="' . the_title_attribute('echo=0') . '" >';
   echo get_the_post_thumbnail($post->ID, 'bricks-slider-medium' );
   echo the_title();
   echo '</a>';
 }

			endwhile;	?>
</div>
			</div><!-- #slider .nivoSlider -->
			<div class="clearfix"></div>
			<br />
			
			<?php endif; // End check for published posts. ?>
			<?php endif; // End check for sticky posts. ?>
		
<script type="text/javascript"> 
jQuery(window).load(function() {
	jQuery('#slider-small').nivoSlider({ pauseTime: parseInt(jQuery('#slider_timer').val() * 1000), pauseOnHover: true, effect: '<?php echo $slider_effects; ?>', captionOpacity: 1, controlNav: true, controlNavThumbs:false, controlNavThumbsFromRel:true, boxCols:8, boxRows:4, afterLoad: function(){ 
		//jQuery('#slider_loading').css('display', 'none');
		//jQuery('#slider_wrapper').css('visibility', 'visible');
	} });
}); 
</script> <?php
			
		} ?>
        </div>
        
        <div id="headline-container">
        
            <?php
                  if(is_archive() ) {
                    bricks_archive_header();
                  } elseif( is_search() || is_404() ) {
                      bricks_search_header();
                  } ?>
        </div>
    	<div class="clearfix"></div>
   	 
    	<?php bricks_before_main(); ?>
			<div id="main">