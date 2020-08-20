<?php

function sk_deactivate_plugin()
{
    // Clear any scheduled events, scripts or roles on deactivation

    // Remove custom options
    delete_option('sk_options');

    flush_rewrite_rules();
}
