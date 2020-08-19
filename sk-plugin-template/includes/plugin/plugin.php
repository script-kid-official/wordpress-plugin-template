<?php

if (!function_exists('add_action')) {
    echo "You cannot access this plugin directly -  Script Kid";
    exit;
}

// Comment out any files that you are not going to use for possible use later
include('custom-post-type.php');
include('db.php');
include('options.php');
include('roles.php');
include('schedule.php');

// Activate and Deactivate Plugin
include('activate.php');
include('deactivate.php');
