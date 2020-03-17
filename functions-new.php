<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    
    wp_enqueue_style( 'fonts', get_stylesheet_directory_uri() . 'https://fonts.googleapis.com/css?family=Josefin+Sans:100' );
    wp_enqueue_style( 'icons', get_stylesheet_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/ionicons/1.5.2/css/ionicons.min.css' );
    wp_enqueue_style( 'build-css', get_stylesheet_directory_uri() . '/static/css/main.49b44338.chunk.css' );

    wp_enqueue_script( 'build-js', get_stylesheet_directory_uri() . '/build/static/js/2.d51db097.chunk.js' );
    wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/build/static/js/main.daf1256f.chunk.js' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );
