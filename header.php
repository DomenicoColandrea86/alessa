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
			        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			        	<i class="fa fa-bars fa-2x"></i>
			        </button>
			        <a class="navbar-brand" href="index.html"></a>
			        <div class="collapse navbar-collapse" id="navbarResponsive">
			            <ul class="navbar-nav ml-auto">
			                <li class="nav-item">
			                    <a class="nav-link text-uppercase" href="index.html">Home</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link text-uppercase" href="about.html">Our Team</a>
			                </li>
			            </ul>
			        </div>
			    </div>
			</nav>
		</header><!-- #masthead -->
		<div id="content" class="site-content">
