<?php

function sk_plugin_options()
{
    // Set any custom plugin options
    $sk_options =  get_option('sk_options');

    if (!$sk_options) {
        $sk_options = [
            'sk_options' =>  1,
            'sk_options_text'  =>  'Script Kiddy Placeholder Text'
        ];
    
        add_option('sk_options', $sk_options);
    }
}
