<?php

function sk_activate_plugin()
{
    if (version_compare(get_bloginfo('version'), '5.0', '<')) {
        wp_die(__("You must update WordPress to use this plugin.", 'sk-plugin-template'));
    }

    if (function_exists('sk_custom_post_type_init')) {
        sk_custom_post_type_init();
    }

    if (function_exists('sk_plugin_db_init')) {
        sk_plugin_db_init();
    }

    if (function_exists('sk_schedule_event')) {
        sk_schedule_event();
    }

    if (function_exists('sk_plugin_options')) {
        sk_plugin_options();
    }

    if (function_exists('sk_plugin_roles')) {
        sk_plugin_roles();
    }
    
    if (function_exists('sk_plugin_schedule')) {
        sk_plugin_schedule();
    }
}
