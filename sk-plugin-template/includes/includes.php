<?php

// Plugin Activation and Deactivation
include(SK_PLUGIN_DIR_URL .'/includes/plugin/plugin.php');

// Admin
include(SK_PLUGIN_DIR_URL .'/includes/admin/admin.php');

// Frontend scripts
include(SK_PLUGIN_DIR_URL .'/includes/frontend/enqueue.php');

// Shortcodes
include(SK_PLUGIN_DIR_URL .'/includes/shortcodes/shortcodes.php');
