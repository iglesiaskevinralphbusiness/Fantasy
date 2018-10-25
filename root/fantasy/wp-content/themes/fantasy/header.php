<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fantasy
 */

?>
	<!doctype html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<!-- header -->
		<div class="header">
			<div class="w3layouts_header_left">
				<div class="top-nav-text">
					<?php if ( is_active_sidebar( 'widget-areas-105' ) ) : ?>
					<div id="widget-areas-105" class="widget-areas ">
						<?php dynamic_sidebar( 'widget-areas-105' ); ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="w3layouts_header_right">
				<?php if ( is_active_sidebar( 'widget-areas-107' ) ) : ?>
				<div id="widget-areas-107" class="widget-areas ">
					<?php dynamic_sidebar( 'widget-areas-107' ); ?>
				</div>
				<?php endif; ?>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="w3_navigation">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="w3_navigation_pos">
							<h1><a href="index.html"><span>Fantasy</span> World</a></h1>
						</div>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-5" id="cl-effect-5">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.html"><span data-hover="Home">Home</span></a></li>
								<li><a href="#about" class="scroll"><span data-hover="About">About</span></a></li>
								<li><a href="#services" class="scroll"><span data-hover="Services">Services</span></a></li>
								<li><a href="#work" class="scroll"><span data-hover="Gallery">Gallery</span></a></li>
								<li><a href="#projects" class="scroll"><span data-hover="News">News</span></a></li>
								<li><a href="#mail" class="scroll"><span data-hover="Contact">Contact</span></a></li>
							</ul>
						</nav>
					</div>
				</nav>
			</div>
		</div>
		<!-- //header -->


		<div id="content" class="site-content">
