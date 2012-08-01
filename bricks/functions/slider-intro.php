<?php
/**
 * Template Name: Showcase Template
 * Description: A Page Template that showcases Sticky Posts 
 *
 * The content slider template in Bricks consists of two sections. Each section can be customized
 * on the theme options admin panel. The first section showcases sticky posts as featured posts. The
 * second section contains recent posts, showing an excerpt of the latest post and a list of subsequent
 * posts in reverse chronological order.
 *
 * We are creating two queries to fetch the proper posts.
 *
 * @package Bricks
 * @subpackage Page Templates
 * @since Bricks 1.0.0
 */

// Enqueue script for the slider
wp_enqueue_script( 'nivo-slider', trailingslashit( BRICKS_JS ) . 'jquery.nivo.slider.js', array( 'jquery' ), BRICKS_VERSION );
wp_enqueue_style( 'nivo-slider-style', trailingslashit( BRICKS_CSS ) . 'nivo-slider.css' );
wp_enqueue_style( 'page-style', trailingslashit( BRICKS_CSS ) . 'page.css' ); ?>

				<div class="one">
					<div class="slideshow">
						<!-- COLUMNS CONTAINER STARTS-->
						<div class="one-third">
							<!--COLUMN STARTS -->
							<h4>We are <span class="colored">CorporatePro</span>, Powerfull Web Design Studio.</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat nunc ut nibh interdum tempus. Donec at lorem eget sapien iaculis porttitor id quis ligula feugiat nunc ut nibh justo eget elit aliquet interdum tempus.
							</p>
							<p>
								Donec at lorem eget sapien iaculis porttitor id quis ligula feugiat nunc ut nibh justo eget elit aliquet interdum tempus.Lorem ipsum dolor sit ametLaetare quod una non dum Suam in rei completo litusIussit sed dominum in deinde Animae tuae lacrimis non potentiae.Praestetur cubiculo forma non dum Palpat venas tanquam vero quo Neminem habere homo tu illumTunc Stet consequat eiusdem ea.
							</p>
							<a href="#" class="blue">KEEP READING</a>
						</div>
						<!-- COLUMN ENDS-->
						<div id="slider-small">
							<div class="slides_container small-slider">
								<!-- SLIDER STARTS-->
								<!-- SLIDER CONTENT STARTS-->
								<img src="images/slide-small-01.jpg" alt=" " width="620" height="350"/>
								<img src="images/slide-small-02.jpg" alt=" " width="620" height="350"/>
								<img src="images/slide-small-03.jpg" alt=" " width="620" height="350"/>
								<img src="images/slide-small-04.jpg" alt=" " width="620" height="350"/>
							</div>
							<!-- SLIDESHOW CONTAINER ENDS-->
						</div>
					</div>
					<!-- SLIDESHOW ENDS-->
				</div>