<?php

function sk_enqueue_scripts()
{
    // Register styles
    wp_register_style('sk_styles', plugins_url('/assets/css/sk-styles.css', SK_PLUGIN_URL));
    wp_enqueue_style('sk_styles');

    // Register scripts
    wp_register_script(
        'sk_script',
        plugins_url('/assets/js/sk-scripts.js', SK_PLUGIN_URL),
        ['jquery'],
        '1.0.0',
        true
    );
    wp_enqueue_script('sk_script');


    // Localize Ajax object
    wp_localize_script('sk_ajax', 'sk_obj', [
        'ajax_url'      =>  admin_url('admin-ajax.php'),
        'home_url'      =>  home_url('/')
    ]);
    wp_enqueue_script('sk_ajax');
    

    // Enqueues all scripts, styles, settings, and templates necessary to use all media JS APIs.
    wp_enqueue_media();
}
