<?php

include('wp-plugin-settings/wp-plugin-settings.php');
include('bootstrap-plugin-settings/bootstrap-plugin-settings.php');

// Wordpress Default Plugin Dashboard Settings
add_action('admin_init', 'sk_settings_api');
add_action('admin_menu', 'sk_wp_plugin_settings_admin_menus');

// Bootstrap Plugin Dashboard Settings
add_action('admin_enqueue_scripts', 'sk_bootstrap_plugin_settings_admin_enqueue');
add_action('admin_menu', 'sk_bootstrap_plugin_settings_admin_menus');
add_action( 'admin_post_sk_bootstrap_plugin_settings_save_options', 'sk_bootstrap_plugin_settings_save_options' );