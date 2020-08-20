<?php

/* Admin */
// Enqueue Scripts
add_action('admin_enqueue_scripts', 'sk_admin_enqueue_scripts');

// Notices
add_action('admin_notices', 'sk_show_all_notices');
add_action('wp_ajax_sk_dismiss_pending_admin_notice', 'sk_dismiss_pending_admin_notice');


// Widgets
add_action('widgets_init', 'sk_widgets_init');


/* Frontend */
// Plugin styles and scripts
add_action('wp_enqueue_scripts', 'sk_enqueue_scripts', 100);


/* Process */


/* Shortcodes */
