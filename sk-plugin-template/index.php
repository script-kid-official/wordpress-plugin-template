<?php
/*
 * Plugin Name: Script Kiddy Plugin Template
 * Plugin URI:  https://github.com/script-kid-official/wordpress-plugin-template
 * Description: Template for a Wordpress plugin
 * Version: 1.0.1
 * Author: Script Kid
 * Author URI: https://www.script-kiddie.co.za/
 * Text Domain: sk-plugin-template
 */

if (!function_exists('add_action')) {
    echo "You cannot access this plugin directly -  Script Kid";
    exit;
}

// Constants
define('SK_PLUGIN_URL', __FILE__);

// Includes
include(dirname(SK_PLUGIN_URL) . '/includes/includes.php');

// All add_action, add_filter and add_shortcode hooks
include(dirname(SK_PLUGIN_URL) . '/hooks.php');


// Processes
include(dirname(__FILE__) .'/process/process.php');


register_activation_hook(SK_PLUGIN_URL, 'sk_activate_plugin');
register_deactivation_hook(SK_PLUGIN_URL, 'sk_deactivate_plugin');
