<?php

// Plugin Activation and Deactivation
include(dirname(__FILE__) .'/plugin/plugin.php');

// Admin
include(dirname(__FILE__) .'/admin/admin.php');

// Frontend scripts
include(dirname(__FILE__) .'/frontend/enqueue.php');
