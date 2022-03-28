<?php

/**
 * Load composer autoloader
 */
require __DIR__ . '/vendor/autoload.php';

/**
 * Redirect all requests to index.php so the Vue app is loaded and 404s aren't thrown
 */
if (!function_exists('remove_redirects')) {
  function remove_redirects()
  {
    add_rewrite_rule('^/(.+)/?', 'index.php', 'top');
  }
}

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
      $version_string,
      true
    );

    wp_register_style(
      'standout-css',
      get_template_directory_uri() . '/public/css/main.css',
      array(),
      $version_string
    );

    wp_enqueue_script('standout-javascript');
    wp_enqueue_style('standout-css');
  }
}

/**
 * Register Models & Controllers
 */
require('app/includes/models.php');
require('app/Includes/controllers.php');

// Remove all default WP template redirects/lookups
remove_action('template_redirect', 'redirect_canonical');
add_action('init', 'remove_redirects');
add_action('wp_enqueue_scripts', 'standout_theme_scripts');
