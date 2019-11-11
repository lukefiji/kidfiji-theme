<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' )
    )
  );
}
add_action( 'init', 'register_theme_menus' );

function kidfiji_theme_styles() {
  wp_enqueue_style( 'fonts_css', 'https://fonts.googleapis.com/css?family=Montserrat:400|Raleway');
  wp_enqueue_style( 'kidfiji_css', get_template_directory_uri() . '/css/kidfiji.css');
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'kidfiji_theme_styles' );

function kidfiji_theme_js() {
  wp_enqueue_script( 'modernizr_js', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', '', '', false );
  wp_enqueue_script( 'isotope_js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js', array('jquery'), '', true );
  wp_enqueue_script( 'imagesloaded_js', 'https://unpkg.com/imagesloaded@4.1/imagesloaded.pkgd.min.js', array('jquery'), '', true );

  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/kidfiji.js', array('jquery', 'isotope_js', 'imagesloaded_js'), '', true );
}
add_action( 'wp_enqueue_scripts', 'kidfiji_theme_js' );
