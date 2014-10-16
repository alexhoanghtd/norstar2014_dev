<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Norstar</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,600' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
	<link href='<?php print CSSDIRECTORY; ?>/ipaper.css' rel='stylesheet' type='text/css'>

</head>
<script type="text/javascript" src="<?php print JSDIRECTORY; ?>/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php print JSDIRECTORY; ?>/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php print JSDIRECTORY; ?>/main.js"></script>

<script type="text/javascript">
    Norstar.Session.baseUrl = "http://norstar.dk";
    Norstar.Session.user = null;
	Norstar.Session.catalogueUrl = "";
</script>

<body>
	<header id="main-header" class="masthead clearfix">
		<nav id="top-nav" class="clearfix">
			<div class="page-wrapper">
				<ul id="menu-main-menu" class="nav navbar-nav navbar-right">
						<li><a href="<?php print URLOmnorstar;?>">Om norstar</a></li>
						<li><a href="<?php print URLPresses;?>">Presses</a></li>
						<li><a href="<?php print URLCONTACT;?>">Konkakt</a></li>
				</ul>	
			</div>
		</nav>
		<div id="main-nav" class="page-wrapper">
			<div  class="row">
				<div class="navbar-header clearfix">
					<div id="logo" class="clearfix">
						<a href="/" class="navbar-brand"><img src="<?php print IMAGES; ?>/logo.png"></a>
					</div>
				</div>
				<ul id="main-menu-nav" class="nav navbar-nav navbar-right">
						<li><a href="/">Forside</a></li>
						<li><a href="<?php print URLKatalog;?>">Katalog</a></li>
						<li><a href="<?php print URLForhandlere;?>">Forhandlere</a></li>
						<li><a href="<?php print URLKonkurrence;?>">Konkurrence</a></li>
						<li><a href="<?php print URLSPIL;?>">Spil</a></li>
						<li><a href="<?php print URLNEWS;?>">Nyheder</a></li>
				</ul>	
			</div>
		</div>
	</header>
	