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

	<?php if( is_home() || is_front_page() ) : 

		get_template_part( 'template-parts/content', 'masthead'); 
		get_template_part( 'template-parts/content', 'featured-category' );
			
	endif; ?>

	<div id="primary" class="content-area ">

	<div class="flex-wrap">

		<main id="home-main" class="site-main grid" role="main">

		<?php

			wp_reset_postdata();

			$query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 10 ) );
			
			if ( $query->have_posts() ) :

				/* Start the Loop */
				while ( $query->have_posts() ) : $query->the_post();

					get_template_part( 'template-parts/content', 'home-template' ); 

				endwhile;

			endif; 

			the_posts_navigation();

			wp_reset_postdata(); ?>


	
		</main><!-- #main -->

		<?php

			get_sidebar(); ?>

	</div>
		<?php 
		
			$cat = get_theme_mod('featured_category');
			$cat = get_the_category_by_ID( $cat ); 	?>

		<h3 style="text-align: center;"><a href="<?php echo home_url('/category/'. $cat); ?>">Read More</a></h3>
	</div><!-- #primary -->


	

<?php
get_footer();
