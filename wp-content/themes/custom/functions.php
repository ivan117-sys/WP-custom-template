<?php

function mytheme_enqueue_styles()
{
  wp_enqueue_style('mytheme-style', get_template_directory_uri() . '/dist/style.css', array(), '1.0.0');
  wp_enqueue_script('mytheme-scripts', get_template_directory_uri() . '/dist/bundle.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
