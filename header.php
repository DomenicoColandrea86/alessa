
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package G7-Marketing
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<!-- Page Header -->
		<header id="masthead" class="site-header">
			<!-- Navigation -->
			<nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
			    <div class="container">
			        <a class="navbar-brand" href="<?php echo home_url('/'); ?>"></a>
		        	<?php

		        	wp_nav_menu([
					    'theme_location' => '',
					    'depth' => 2,
					    'container' => 'div',
					    'container_class' => 'collapse navbar-collapse',
					    'container_id' => 'navbarResponsive',
					    'menu_class' => 'navbar-nav ml-auto',
					    'fallback_cb' => '__return_empty_string',
					    'walker' => new \G7\NavWalker\WalkerNavMenu()
					]);

		        	?>
			    </div>
			</nav>
		</header><!-- #masthead -->
		<div id="content" class="site-content">
