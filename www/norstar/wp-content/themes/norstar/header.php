<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage NORSTAR
 * @since NORSTAR
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title>Norstar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/norstar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slider.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,600' rel='stylesheet' type='text/css'>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.als-1.7.min.js"></script>			
</head>
<body <?php body_class(); ?>>
	<header id="main-header" class="masthead clearfix">
		<nav id="top-nav" class="clearfix">
			<div class="page-wrapper">
				<ul id="menu-main-menu" class="nav navbar-nav navbar-right">
						<li><a href="#">Om norstar</a></li>
						<li><a href="#">Presses</a></li>
						<li><a href="#">Konkakt</a></li>
				</ul>	
			</div>
		</nav>
		<div id="main-nav" class="page-wrapper">
			<div  class="row">
				<div class="navbar-header clearfix">
					<div id="logo" class="clearfix">
						<a href="#" class="navbar-brand"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
					</div>
				</div>
				<ul id="main-menu-nav" class="nav navbar-nav navbar-right">
						<li><a href="#">Forside</a></li>
						<li><a href="#">Katalog</a></li>
						<li><a href="#">Forhandlere</a></li>
						<li><a href="#">Konkurrence</a></li>
						<li><a href="#">Spil</a></li>
						<li><a href="#">Nyheder</a></li>
				</ul>	
			</div>
		</div>
	</header>

	<div id="main-content">