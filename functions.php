<?php

function wpt_theme_styles() {
  wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundations.css' );
  wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

?>
