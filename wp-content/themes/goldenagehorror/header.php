<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Golden_Age_Horror_Podcast
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'goldenagehorror' ); ?></a>

	<header id="masthead" class="site-header" role="banner" >
		<div class="site-header overlay" style="background-image: url('<?php echo get_header_image(); ?>')"></div>
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif; ?>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<span class="small-menu-button"><img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/menu.svg"></span>
				<span class="large-menu-button">Menu</span>
			</button>
			<?php //get_search_form(); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			<span id="closeMenu"> Close Menu </span>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content <?php if(is_home() || is_front_page() ): echo 'home'; endif; ?>">
