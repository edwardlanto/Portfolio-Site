<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<section class="top-nav">
			<div>
			Logo Here
			</div>
				<input id="menu-toggle" type="checkbox" />
				<label class='menu-button-container' for="menu-toggle">
				<div class='menu-button'></div>
			</label>
			<ul class="menu">
				<li>One</li>
				<li>Two</li>
				<li>Three</li>
				<li>Four</li>
				<li>Five</li>
			</ul>
  			</section>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
