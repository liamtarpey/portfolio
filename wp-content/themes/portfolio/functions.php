<?php


// Load CSS
function theme_styles() {

	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


// Custom Navigation Menu
add_theme_support( 'menus' );



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





?>