<?php

function sk_bootstrap_plugin_settings_save_options()
{
    if (!current_user_can('edit_theme_options')) {
        wp_die(__('You are not allowed to be on this page.', 'recipe'));
    }

    check_admin_referer('sk_bootstrap_plugin_settings_form_verify');

    $sk_options                                      =   get_option('sk_options');
    $sk_options['sk_admin_warning_notice']             =   absint($_POST['sk_admin_warning_notice']);
    $sk_options['sk_admin_info_notice']  =   absint($_POST['sk_admin_info_notice']);
    $sk_options['sk_admin_error_notice']  =   absint($_POST['sk_admin_error_notice']);
    $sk_options['sk_admin_success_notice']  =   absint($_POST['sk_admin_success_notice']);

    update_option('sk_options', $sk_options);
    wp_redirect(admin_url('admin.php?page=sk_plugin_options_bootstrap&status=1'));
}
