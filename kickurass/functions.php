<?php

function get_all_images(){
$args = array(
  'post_type' => 'attachment',
  'post_mime_type' =>'image',
  'post_status' => 'inherit',
  'posts_per_page' => -1,	
);
$query_images = new WP_Query( $args );
$images = array();
$captions = array();
foreach ( $query_images->posts as $image) {
  $images[]= $image->guid;
  $captions[]= $image->post_excerpt;
}
return (array($images, $captions));
}

$images = get_all_images();
$imageCount = count($images[0]);

?>