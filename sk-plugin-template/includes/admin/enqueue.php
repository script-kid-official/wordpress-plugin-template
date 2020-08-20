<?php
function sk_admin_enqueue_scripts()
{
    // Register admin scripts
    wp_register_script(
        'sk_admin_script',
        plugins_url('/assets/js/sk-admin-scripts.js', SK_PLUGIN_URL),
        ['jquery'],
        '1.0.0',
        true
    );
    wp_enqueue_script('sk_admin_script');
}
