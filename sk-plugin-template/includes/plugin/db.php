<?php

function sk_plugin_db_init()
{
    require(ABSPATH . "/wp-admin/includes/upgrade.php");

    global $wpdb;
    $createSQL = "
    CREATE TABLE IF NOT EXISTS`" . $wpdb->prefix . "table_name` (
        `ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        `intName` BIGINT(20) UNSIGNED NOT NULL,
        `strName` VARCHAR(50) NOT NULL,
        PRIMARY KEY (`ID`)
    ) ENGINE=InnoDB " . $wpdb->get_charset_collate() . ";";

    dbDelta($createSQL);
}
