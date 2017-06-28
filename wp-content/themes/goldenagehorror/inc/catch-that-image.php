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


function blazy_image_tag( $html, $id, $alt, $title)  {
	
	return str_replace( 'src="', 'src="'. get_stylesheet_directory_uri() .'/img/static.gif" data-src="', $html );
	
}

add_filter('get_image_tag', 'blazy_image_tag', 10, 4);