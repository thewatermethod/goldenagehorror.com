<?php // Template Name: Home ?>

<?php
/**
 *
 * Custom home page template
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Golden_Age_Horror_Podcast
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php get_template_part( 'template-parts/content', 'home-template' ); ?>
	
		</main><!-- #main -->
	</div><!-- #primary -->


	<div class="masthead sidebar--masthead"></div>

<?php
get_sidebar();
get_footer();
