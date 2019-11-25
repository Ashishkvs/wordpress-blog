<?php
//Add Theme Support for document title tag
function custom_theme_support(){
  add_theme_support( 'title-tag');
  add_theme_support( 'post-thumbnails' );

}
add_action('after_setup_theme','custom_theme_support');

//custom style css
function imagegrafia_files(){
  wp_enqueue_style( 'style', get_stylesheet_uri() , NULL , microtime());
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
   wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:700,900' );
}
add_action('wp_enqueue_scripts','imagegrafia_files');










//customized Login screen
function ourHeaderUrl(){
  return esc_url(site_url('/'));
}
add_filter('login_headerurl', 'ourHeaderUrl');
function ourLoignCSS(){
  wp_enqueue_style( 'style', get_stylesheet_uri());
  wp_enqueue_style( 'w32', 'https://fonts.googleapis.com/css?family=Lato' );
}
add_action('login_enqueue_scripts', 'ourLoignCSS');
