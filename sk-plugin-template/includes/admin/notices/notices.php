<?php

function sk_show_all_notices()
{
    if (!get_option('sk_options')) {
        return;
    }

    // Comment out any unused notices for possible use later
    if (function_exists('sk_admin_warning_notice')) {
        sk_admin_warning_notice(get_option('sk_options')['sk_admin_warning_notice']);
    }

    if (function_exists('sk_admin_error_notice')) {
        sk_admin_error_notice(get_option('sk_options')['sk_admin_error_notice']);
    }

    if (function_exists('sk_admin_success_notice')) {
        sk_admin_success_notice(get_option('sk_options')['sk_admin_success_notice']);
    }

    if (function_exists('sk_admin_info_notice')) {
        sk_admin_info_notice(get_option('sk_options')['sk_admin_info_notice']);
    }
}


function sk_admin_warning_notice($option)
{
    if (!$option) {
        return;
    } ?>
    <div class="notice notice-warning is-dismissible sk-pending-admin-notice" data-notice-type='warning' id="sk-pending-admin-warning-notice">
        <p><?php _e('Script Kid - Admin warning notice', 'sk-plugin-template') ; ?></p>
    </div>

<?php
}

function sk_admin_error_notice($option)
{
    if (!$option) {
        return;
    } ?>
    <div class="notice notice-error is-dismissible sk-pending-admin-notice" data-notice-type='error' id="sk-pending-admin-error-notice">
        <p><?php _e('Script Kid - Admin error notice', 'sk-plugin-template') ; ?></p>
    </div>
<?php
}


function sk_admin_success_notice($option)
{
    if (!$option) {
        return;
    } ?>
    <div class="notice notice-success is-dismissible sk-pending-admin-notice" data-notice-type='success' id="sk-pending-admin-success-notice">
        <p><?php _e('Script Kid - Admin success notice', 'sk-plugin-template') ; ?></p>
    </div>
<?php
}


function sk_admin_info_notice($option)
{
    if (!$option) {
        return;
    } ?>
    <div class="notice notice-info is-dismissible sk-pending-admin-notice" data-notice-type='info' id="sk-pending-admin-info-notice">
        <p><?php _e('Script Kid - Admin info notice', 'sk-plugin-template') ; ?></p>
    </div>
<?php
}
