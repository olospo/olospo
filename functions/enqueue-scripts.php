<?php

// Enqueue styles and scripts
add_action( 'wp_enqueue_scripts', 'theme_enqueue_assets' );
function theme_enqueue_assets() {
    // Styles
    wp_enqueue_style( 'main', get_stylesheet_directory_uri().'/css/main.css', [], wp_get_theme()->get('Version'));
    
    // Scripts
    wp_deregister_script( 'jquery' ); // Deregister to put jQuery into footer
    wp_register_script( 'jquery', get_stylesheet_directory_uri().'/js/jquery.min.js', [], null, true);
    wp_enqueue_script( 'jquery' ); // Re-register jQuery
    
    wp_enqueue_script( 'applications', get_stylesheet_directory_uri().'/js/application.min.js', ['jquery'], wp_get_theme()->get('Version'), true);
    wp_enqueue_script( 'theme-functions', get_stylesheet_directory_uri().'/js/wordpress.js', ['jquery'], wp_get_theme()->get('Version'), true);
    wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/0ab207164e.js', 'jquery', NULL , true ); 
}
// Disable Emoji Loading: Prevents WordPress from including emoji scripts and styles.
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Disable WP Embed: Prevents WordPress from embedding content automatically.
function my_deregister_scripts() {
    wp_dequeue_script('wp-embed');
}
add_action('wp_footer', 'my_deregister_scripts');