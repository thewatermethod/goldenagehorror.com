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

			$EpisodeData = powerpress_get_enclosure_data( get_the_ID() );
			
			if( $EpisodeData) : ?>

			<div class="info-box podcast-info">
				<ul>
					<?php goldenagehorror_posted_on(); ?>
					<li><!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/clock.svg">--><?php echo $EpisodeData['duration']; ?></li>
					<li><a href="<?php echo $EpisodeData["url"];?>">Download Episode</a></li>
				</ul>
			</div>
	 
			<?php else: ?>

			<div class="info-box article-info">
				<ul>
					<?php goldenagehorror_posted_on(); ?>				
				</ul>
			</div>		

			<?php endif;

		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

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
