<?php
function sk_plugin_roles()
{
    // Create custom roles here
    global $wp_roles;
    add_role(
        'sk_script_kiddy',
        __('Script Kid', 'recipe'),
        [
            'read' =>  true,
            'edit_posts' =>  true,
            'upload_files' =>  true
        ]
    );
}
