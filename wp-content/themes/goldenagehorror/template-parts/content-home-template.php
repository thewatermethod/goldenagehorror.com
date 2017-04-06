<?php
/**
 * Template part for displaying posts on home page index
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Golden_Age_Horror_Podcast
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>>
	<header class="entry-header">
	
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		
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

</article><!-- #post-## -->
