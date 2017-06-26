<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Golden_Age_Horror_Podcast
 */

?>

	</div><!-- #content -->

	<?php if( !is_home() && !is_front_page() ): ?>
		<?php if ( is_active_sidebar( 'sidebar-4' ) ): ?>
		<div class="widgets _below" role="complementary">
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		</div><!-- #secondary -->
		<?php endif; ?>
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<?php if ( is_active_sidebar( 'sidebar-2' ) ): ?>
			<div class="widgets subfooter" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div><!-- #secondary -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-3' ) ): ?>
			<div class="widgets footer" role="complementary">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div><!-- #secondary -->
		<?php endif; ?>


		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'goldenagehorror' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'goldenagehorror' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			Made in the <a href="http://www.twilitgrotto.com">Twilit Grotto</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
