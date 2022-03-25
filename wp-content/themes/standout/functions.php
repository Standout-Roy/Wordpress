<?php

/**
 * Standout Vue Wordpress theme functions and definitions
 */

if (!function_exists('standout_theme_scripts')) {

  /**
   * Enqueue scripts.
   * 
   * @return void
   */
  function standout_theme_scripts()
  {
    // Register theme javascript.
    $them_version = wp_get_theme()->get('Version');

    $version_string = is_string($them_version) ? $them_version : false;

    wp_register_script(
      'standout-javascript',
      get_template_directory_uri() . '/public/js/main.js',
      array(),
      $version_string
    );

    wp_enqueue_script('standout-javascript');
  }
}

add_action('wp_enqueue_scripts', 'standout_theme_scripts');
