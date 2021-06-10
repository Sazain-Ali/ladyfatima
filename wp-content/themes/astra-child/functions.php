<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', 'enqueue_load_fa');


function my_theme_enqueue_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');

  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array(), '1.0.0', false);
}

?>

