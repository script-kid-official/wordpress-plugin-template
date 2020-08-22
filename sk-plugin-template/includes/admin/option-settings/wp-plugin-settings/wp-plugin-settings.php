<?php

function sk_wp_plugin_settings_admin_menus()
{
    include('template/wp-settings-template.php');

    add_menu_page(
        'WP - Script Kiddy Options',
        'WP - Script Kiddy Options',
        'edit_theme_options',
        'sk_plugin_options',
        'sk_plugin_options_page'
    );
}

function sk_settings_api()
{
    register_setting('sk_options_group', 'sk_options');
    
    add_settings_section(
        'script_kid_settings',
        'Script Kid Settings',
        'sk_settings_section',
        'sk_options_sections'
    );

    add_settings_field(
        'sk_admin_warning_notice',
        'Show admin warning notice',
        'script_kid_toggle_admin_warning_notice',
        'sk_options_sections',
        'script_kid_settings'
    );
    add_settings_field(
        'sk_admin_info_notice',
        'Show admin info notice',
        'script_kid_toggle_admin_info_notice',
        'sk_options_sections',
        'script_kid_settings'
    );
    add_settings_field(
        'sk_admin_success_notice',
        'Show admin success notice',
        'script_kid_toggle_admin_success_notice',
        'sk_options_sections',
        'script_kid_settings'
    );
    add_settings_field(
        'sk_admin_error_notice',
        'Show admin error notice',
        'script_kid_toggle_admin_error_notice',
        'sk_options_sections',
        'script_kid_settings'
    );
}
