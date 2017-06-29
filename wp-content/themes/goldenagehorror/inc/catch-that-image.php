<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

function goldeagehorror_catch_that_image( $post_content ) {
   
  $first_img = '';
  
  ob_start();
  ob_end_clean();

  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post_content, $matches);
  
  if( is_array( $matches[1] ) && !empty( $matches[1] ) ){
    $first_img = $matches[1][0];
  }

  return $first_img;
}	


// Here is the filter for activating lazy load

if( !is_home() || !is_front_page() ) : add_filter('the_content', 'filter_lazyload'); endif;

function filter_lazyload($content) {
    return preg_replace_callback('/(<\s*img[^>]+)(src\s*=\s*"[^"]+")([^>]+>)/i', 'preg_lazyload', $content);
}

function preg_lazyload($img_match) {
 	$img_replace = $img_match[1] . 'src="' . get_stylesheet_directory_uri() . '/img/static.gif" data-src' . substr($img_match[2], 3) . $img_match[3];
    $img_replace = preg_replace('/class\s*=\s*"/i', 'class="b-lazy ', $img_replace);
    $img_replace .= '<noscript>' . $img_match[0] . '</noscript>';
    return $img_replace;
}
