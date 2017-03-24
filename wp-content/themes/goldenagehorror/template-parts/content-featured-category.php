<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Golden_Age_Horror_Podcast
 */


		$cat = get_theme_mod('featured_category');
		$args = array(

			'posts_per_page' => '1',
			'category' => $cat

		);
?>

<div <?php post_class('featured-category'); ?>>
	
	<h2><?php echo get_theme_mod('featured_category_text'); ?></h2>

	<article>

		<header class="entry-header">
			<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
			
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'goldenagehorror' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'goldenagehorror' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php goldenagehorror_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	</article><!-- #post-## -->

</div>
