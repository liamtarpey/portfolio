<?php

// Remove default pagination
function get_all_posts_query( $query ) {

	if ( isset( $_GET['json'] ) ){
		$query->set( 'posts_per_page', -1 );
	}	
	return;
}
add_action( 'pre_get_posts', 'get_all_posts_query', 1 );




// Custom Image JSON response
function add_image_to_posts_data($response) {

	if (isset($response['posts'])) {
		foreach ($response['posts'] as $post) {
			$image = get_field('image', $post->id);
			$post->image_url = $image['url'];
		}
	} else if (isset($response['post'])) {
		$image = get_field('image', $response['post']->id);
		$response['post']->image_url = $image['url'];
	}
	return $response;

}
add_filter('json_api_encode', 'add_image_to_posts_data');

// Custom image sizes
add_image_size('thumb-size', 410);
add_image_size('single-size', 930);
add_image_size('large-size', 1400);

// Remove WP things
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

?>