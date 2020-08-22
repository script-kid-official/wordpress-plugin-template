<?php

/*** Admin ***/
// Enqueue Scripts
add_action('admin_enqueue_scripts', 'sk_admin_enqueue_scripts');

// Custom Post Type
add_action('init', 'sk_custom_post_type_init');

// Notices
add_action('admin_notices', 'sk_show_all_notices');
add_action('wp_ajax_sk_dismiss_pending_admin_notice', 'sk_dismiss_pending_admin_notice');

// Widgets
add_action('widgets_init', 'sk_widgets_init');

// Dashboard Widgets
add_action('wp_dashboard_setup', 'sk_dashboard_widgets_init');
/*** /Admin ***/


/*** Frontend ***/
// Plugin styles and scripts
add_action('wp_enqueue_scripts', 'sk_enqueue_scripts', 100);

/* Shortcodes */
add_shortcode('sk_shortcode', 'sk_plugin_shortcode');
add_shortcode('sk_shortcode_with_attributes', 'sk_plugin_shortcode_with_attributes');
/*** /Frontend ***/
