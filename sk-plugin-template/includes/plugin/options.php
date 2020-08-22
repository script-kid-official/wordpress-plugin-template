<?php

function sk_plugin_options()
{
    // Set any custom plugin options
    if (!get_option('sk_options')) {
        $sk_options = [
            'sk_admin_warning_notice'  =>  1,
            'sk_admin_error_notice'  =>  1,
            'sk_admin_success_notice'  =>  1,
            'sk_admin_info_notice'  =>  1
        ];
    
        add_option('sk_options', $sk_options);
    }
}
