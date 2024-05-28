<?php

// Theme Setup
function theme_setup() {
		// Menus
		register_nav_menus( array(
				'main'   => 'Main Menu',
				'footer' => 'Footer Menu'
		) );

		// RSS Feed
		add_theme_support( 'automatic-feed-links' );

		// Thumbnails
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'thumb', 150, 150, true ); // Normal thumbnail size
		add_image_size( 'large-thumb', 300, 300, true ); // Large thumbnail size
		add_image_size( 'featured-img', 920, 500, true ); // Featured Image size 
		add_image_size( 'background-img', 1400, 740, true ); // Featured Image size 
}
add_action( 'after_setup_theme', 'theme_setup' );

// Enqueue styles and scripts
add_action( 'wp_enqueue_scripts', 'theme_enqueue_assets' );
function theme_enqueue_assets() {
		// Styles
		wp_enqueue_style( 'main', get_stylesheet_directory_uri().'/css/main.css', false, filemtime( get_stylesheet_directory() . '/style.css' ) );
		
		// Scripts
		wp_deregister_script( 'jquery' ); // Deregister to put jQuery into footer
		wp_register_script( 'jquery', get_stylesheet_directory_uri().'/js/jquery.min.js', false, NULL, true );
		wp_enqueue_script( 'jquery' ); // Re-register jQuery
		
		wp_enqueue_script( 'applications', get_stylesheet_directory_uri().'/js/application.min.js', 'jquery', NULL, true, filemtime( get_stylesheet_directory() . '/style.css' ) );
		wp_enqueue_script( 'theme-functions', get_stylesheet_directory_uri().'/js/wordpress.js', 'jquery', NULL , true, filemtime( get_stylesheet_directory() . '/style.css' ) ); 
		wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/0ab207164e.js', 'jquery', NULL , true ); 
}

// Disable Emoji Loading
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Disable WP Embed
function my_deregister_scripts() {
		wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );