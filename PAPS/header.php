<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="icon" href="favicon.ico" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="http://papsusedcars.com/wp-content/uploads/2013/08/logo.png" alt="Premier Auto Sales" /></a>
			<a class="phone"><i class="icon icon-phone"></i>972 360 PAPS (7277)</a>
			<aside id="nav-search" class="widget widget_search">
				<form id="searchform" class="searchform" action="/" method="get" role="search">
					<div>
					<input id="s" type="text" name="s" value="Search" onfocus="(this.value == 'Search') && (this.value = '')" onblur="(this.value == '') && (this.value = 'Search')" />
					</div>
				</form>
			</aside>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
	
	<div id="main" class="container">