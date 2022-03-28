<?php

namespace App\Models;

class CustomModel
{

  public static function register()
  {
    $instance = new Self;

    add_action('init', [$instance, 'registerPostType']);

    // Do things related to post type
  }

  public function registerPostType()
  {
    $label = [
      "name"                => "custom_post_type",
      "singular_name"       => "custom_post_type",
      "menu_name"           => "custom_post_type",
      "all_items"           => "All custom_post_type",
      "view_item"           => "Bekijk custom_post_type",
      "add_new_item"        => "Nieuwe custom_post_type",
      "add_new"             => "Voeg nieuwe custom_post_type toe",
      "edit_item"           => "Bewerk custom_post_type",
      "update_item"         => "custom_post_type bijwerken",
      "search_items"        => "Zoek custom_post_type",
      "not_found"           => "Niet gevonden",
      "not_found_in_trash"  => "Niet gevonden in prullenbak",
    ];

    register_post_type('custom_post_type', [
      "hierarchical"        => true,
      "public"              => true,
      "show_ui"             => true,
      "show_in_menu"        => true,
      "show_in_nav_menus"   => true,
      "show_in_admin_bar"   => true,
      "menu_position"       => 5,
      "can_export"          => false,
      "has_archive"         => false,
      "exclude_from_search" => false,
      "publicly_queryable"  => true,
      "capability_type"     => "post",
      "query_var"           => true,
      "menu_icon"           => "dashicons-calendar-alt",
    ]);
  }
}
