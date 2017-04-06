<?php

	function goldenagehorror_get_post_thumbnail( $ID ){

		if( get_the_post_thumbnail( $ID ) ){
			$thumb = get_the_post_thumbnail_url($ID, 'medium');
		} else {
			$post = get_post( $ID );
			$post_content = $post->post_content;
			$thumb = goldeagehorror_catch_that_image( $post_content );
		} 

		return $thumb;
	}