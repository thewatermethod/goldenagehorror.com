<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package The_Golden_Age_Horror_Podcast
 */

get_header(); ?>

	<div id="primary" class="content-area">
			
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

		

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				?><h2>Discuss this Episode</h2><?php

				comments_template();
			endif;

		endwhile; // End of the loop.
		?>



		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php
get_sidebar();

get_footer();
