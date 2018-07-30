<?php

if ( !function_exists( 'bezel_parent_css' ) ){
  function bezel_parent_css() {
    wp_enqueue_style( 'bezel-parent-style', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bundle-css' ) );
    wp_dequeue_style( 'style');
    wp_enqueue_style( 'style');
  }
}
add_action( 'wp_enqueue_scripts', 'bezel_parent_css', 14 );
