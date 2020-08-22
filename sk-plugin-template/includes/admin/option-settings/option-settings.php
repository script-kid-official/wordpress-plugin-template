<?php

include('wp-plugin-settings/wp-plugin-settings.php');

// Wordpress Default Plugin Dashboard Settings
add_action('admin_init', 'sk_settings_api');
add_action('admin_menu', 'sk_wp_plugin_settings_admin_menus');
