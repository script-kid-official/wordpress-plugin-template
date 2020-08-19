<?php
/*
 * Plugin Name: Script Kiddy Plugin Template
 * Plugin URI:  https://github.com/script-kid-official/
 * Description: Template for a Wordpress plugin
 * Version: 1.0
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
include(dirname(__FILE__) . '/includes/includes.php');
include(dirname(__FILE__) . '/hooks.php');

register_activation_hook(__FILE__, 'sk_activate_plugin');
register_deactivation_hook(__FILE__, 'sk_deactivate_plugin');
