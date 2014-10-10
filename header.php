<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package DrautaKit
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/h5bp.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/components/components.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/main.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="app-bar promote-layer" role="banner">
		<div class="site-branding app-bar-container">
			<button class="menu"><img src="<?php echo get_template_directory_uri(); ?>/images/hamburger.svg"></button>
			<h1 class="site-title logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<nav id="site-navigation" class="main-navigation navdrawer-container promote-layer" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
 </header><!-- #masthead -->




	<div id="content" class="site-content">
