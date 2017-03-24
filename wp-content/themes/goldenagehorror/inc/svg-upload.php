<?php

//Allows svg to be processed through the wordpress media uploader
function goldenagehorror_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'goldenagehorror_mime_types');