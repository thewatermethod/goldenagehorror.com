<?php
/**
 * Template part for displaying initial masthead
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Golden_Age_Horror_Podcast
 */

?>

<div class="masthead home--masthead">

	<p>Subscribe to our show -- it's free!</p>

	<?php $itunes_link = get_theme_mod('itunes'); ?>
	<?php if ($itunes_link != '' ): ?><a href="<?php echo $itunes_link;?>"><img src="<?php echo get_template_directory_uri(); ?>/svg/itunes.svg" alt="Get it on itunes"></a><?php endif; ?>
	
	<?php $google_play_link = get_theme_mod('google_play'); ?>
	<?php if ($google_play_link != '' ): ?><a href="<?php echo $google_play_link; ?>"><img src="<?php echo get_template_directory_uri(); ?>/svg/google.svg" alt="Get it on Google Play"></a><?php endif; ?>

	<?php $stitcher_link = get_theme_mod('stitcher'); ?>
	<?php if ($stitcher_link != '' ): ?><a href="<?php echo $stitcher_link; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/stitcher_button_small.png" alt="Available on Stitcher"></a><?php endif; ?>

	<?php 
		$homepagelink = get_theme_mod('homepagelink');
		$homepagelinktext = get_theme_mod('homepagelinktext'); 
	?>

	<p><a class="button" href="<?php echo $homepagelink; ?>"><?php echo $homepagelinktext; ?></a></p>

</div>
