<?php 

	function cj_themes() {

		// Bootstrap CDN
		wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');

		// Font Awesome CDN
		wp_enqueue_style( 'Font-Awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

		// Fonts.com
		// Bootstrap CDN
		wp_enqueue_style( 'Fonts-com', 'http://fast.fonts.net/cssapi/56ac419f-c533-4ed5-9ef1-2a080453b194.css');


		// Main CSS
		wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css');

		// JQuery
		wp_enqueue_script( 'JQuery', '//code.jquery.com/jquery-1.11.2.min.js', array(), true); 

		// Bootstrap JS
		wp_enqueue_script( 'bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js', array('jquery'), true);

		
		// MAIN JS
		wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), true); 

	}

	add_action('wp_enqueue_scripts', 'cj_themes');
	add_theme_support( 'menus' );

	function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');





