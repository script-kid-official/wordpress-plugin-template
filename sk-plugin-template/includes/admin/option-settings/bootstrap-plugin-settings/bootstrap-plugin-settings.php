<?php

function sk_bootstrap_plugin_settings_admin_enqueue()
{
    if (!isset($_GET['page']) || $_GET['page'] != "sk_plugin_options_bootstrap") {
        return;
    }
  
    wp_register_style('sk_bootstrap_admin_plugin_settings', plugins_url('/assets/css/bootstrap.min.css', SK_PLUGIN_URL));
    wp_enqueue_style('sk_bootstrap_admin_plugin_settings');
}

function sk_bootstrap_plugin_settings_admin_menus()
{
    include('template/bootstrap-settings-template.php');

    add_menu_page(
        'Bootstrap - Script Kiddy Options',
        'Bootstrap - Script Kiddy Options',
        'edit_theme_options',
        'sk_plugin_options_bootstrap',
        'sk_bootstrap_plugin_options_page'
    );
}
