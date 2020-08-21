<?php

// Adding a new Widget
// Duplicate dashboard-widgets directory and change the name of the template file, content and then add widget to dashboard

function sk_dashboard_widgets_init()
{
    // Custom Widget
    include('dashboard-widget/dashboard-widget.php');

    wp_add_dashboard_widget(
        'sk_dashboard_widget',
        'Script Kid Dashboard Widget',
        'sk_dashboard_widget_display'
    );
}
