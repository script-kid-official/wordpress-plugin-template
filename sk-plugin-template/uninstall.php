<?php

/*
* Use to remove any custom tables permanently.
*/

if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

global $wpdb;
$wpdb->query("DROP TABLE IF EXISTS `" . $wpdb->prefix . "table_name`");
