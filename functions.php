<?php

// disable comments
function disable_comments() {
    // Remove comments support from all post types
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
add_action( 'init', 'disable_comments' );


// Enqueue stylesheets and scripts
function ideatheorem_scripts() {
    // Enqueue the main stylesheet
    wp_enqueue_style( 'main-styles', get_template_directory_uri(). '/css/style.css' );
    
    // Enqueue scripts
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'ideatheorem_scripts' );
