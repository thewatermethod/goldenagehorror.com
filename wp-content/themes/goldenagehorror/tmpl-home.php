<?php // Template Name: Home 

/**
 *
 * Custom home page template
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Golden_Age_Horror_Podcast
 */

get_header(); ?>

	<div id="primary" class="content-area ">
		<h2>Browse our archives</h2>
		<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'secondary-menu' ) ); ?>

		<main id="home-main" class="site-main grid" role="main">




<?php
		wp_reset_postdata();

		$query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 6 ) );
		
		if ( $query->have_posts() ) :

			/* Start the Loop */
			while ( $query->have_posts() ) : $query->the_post();

				get_template_part( 'template-parts/content', 'home-template' ); 

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; 

		the_posts_navigation();

		wp_reset_postdata(); ?>
	
		</main><!-- #main -->
	</div><!-- #primary -->


	<div class="masthead sidebar--masthead"></div>

<?php
get_sidebar();
get_footer();
