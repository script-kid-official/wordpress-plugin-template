<?php

function sk_dismiss_pending_admin_notice()
{
    if (!isset($_POST['notice_type'])) {
        return;
    }

    // Get current options
    $sk_option_name =  'sk_options';
    $sk_new_options =  get_option($sk_option_name);

    switch ($_POST['notice_type']) {
        case 'warning':
            $sk_new_options['sk_admin_warning_notice'] = 0;
            break;
        case 'error':
            $sk_new_options['sk_admin_error_notice'] = 0;
            break;
        case 'success':
            $sk_new_options['sk_admin_success_notice'] = 0;
            break;
        case 'info':
            $sk_new_options['sk_admin_info_notice'] = 0;
            break;
        default:
            return;
            break;
    }

    // Update the existing options with the new options
    update_option($sk_option_name, $sk_new_options);
}
