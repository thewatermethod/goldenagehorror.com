<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Golden_Age_Horror_Podcast
 */
		wp_reset_postdata();
		$cat = get_theme_mod('featured_category');

		if( $cat != 0 ){			
		
			$args = array( 'posts_per_page' => '1', 'category' => $cat);
			$featured_post = new WP_Query($args);

			if( $featured_post->have_posts() ) : ?>

				<?php while ( $featured_post->have_posts() ) : $featured_post->the_post(); ?>

					<div <?php post_class('featured-category'); ?>>
						
						<h2><?php echo get_theme_mod('featured_category_text'); ?></h2>

						<article>

							<header class="entry-header">
								<h3 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
								
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php //the_post_thumbnail('medium'); ?>
								<img class="feat-thumb" src="<?php echo goldenagehorror_get_post_thumbnail( get_the_ID() ); ?>" alt="" />
								<?php the_excerpt(); ?>
								<?php the_powerpress_content(); ?>
								<a class="button" href="<?php the_permalink(); ?>">Listen Now</a>

							</div><!-- .entry-content -->

						</article><!-- #post-## -->

					</div>
			<?php 	

				endwhile;

			endif;

			wp_reset_postdata();
		}