<?php

if (!function_exists('add_action')) {
    echo "You cannot access this plugin directly -  Script Kid";
    exit;
}

// Add shortcodes
include('shortcode/shortcode.php');
include('shortcode-with-attributes/shortcode-with-attributes.php');
