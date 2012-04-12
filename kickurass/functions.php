<?php
/**
 *
 * Contains the code for grabbing the images and messages and displaying them on the page
 *
*/
session_start();
// store session data

$q= $_GET["q"];
// echo "This is q: " .$q. "<br/>";

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
$randImage = (rand() % $imageCount);
$randPhrase = $images[1][$randImage];
$randImage = $images[0][$randImage];

function get_next_image(){
	$images = get_all_images();
	$imageCount = count($images[0]);
	$i = 0;
	while($i<$imageCount){
		echo $i;
		$i++;
	}
}

?>