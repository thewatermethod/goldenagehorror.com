<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Golden_Age_Horror_Podcast
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		// $categories_list = get_the_category_list( esc_html__( ' ', 'goldenagehorror' ) );
		// if ( $categories_list && goldenagehorror_categorized_blog() ) {
		// 	printf( '<span class="cat-links">' . esc_html__( '%1$s', 'goldenagehorror' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		// }

 ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'goldenagehorror' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			?>


	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php goldenagehorror_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
