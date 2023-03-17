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


// Enqueue font style
    wp_enqueue_style('google-font-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap', array(), null);


    // Enqueue the main stylesheet
    wp_enqueue_style( 'main-styles', get_template_directory_uri(). '/css/style.css' );
    
    // Enqueue scripts
    wp_enqueue_script( 'gsap-script', get_template_directory_uri() . '/js/gsap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'scroll-trigger-script', get_template_directory_uri() . '/js/ScrollTrigger.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );

  
}
add_action( 'wp_enqueue_scripts', 'ideatheorem_scripts' );





  

  function custom_theme_customizer( $wp_customize ) {
    $wp_customize->add_setting( 'logo_image' );
  
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_image', array(
      'label' => __( 'Logo Image', 'custom-theme' ),
      'section' => 'title_tagline',
      'settings' => 'logo_image',
    ) ) );
  }
  
  add_action( 'customize_register', 'custom_theme_customizer' );
  
  


  add_theme_support( 'menus' );

  function register_my_menus() {
    register_nav_menus(
      array(
        'primary' => __( 'Primary Menu' ),
        'footer' => __( 'Footer Menu' ),
      )
    );
  }
  add_action( 'init', 'register_my_menus' );
  


