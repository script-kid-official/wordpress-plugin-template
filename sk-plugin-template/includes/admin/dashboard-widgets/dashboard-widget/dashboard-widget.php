<?php

function sk_dashboard_widget_display()
{
    // Load Dashboard  Widget Template Contents
    $dashboardWidgetHtml = file_get_contents('dashboard-widget-template.php', true);
    $dashboardWidgetHtml = str_replace(
        'SK_DASHBOARD_WIDGET_CONTENT',
        'Script Kid - Widget Display',
        $dashboardWidgetHtml
    );
    $dashboardWidgetHtml = str_replace(
        'SK_DASHBOARD_WIDGET_IMAGE_CONTENT',
        'https://www.script-kiddie.co.za/external-images/rainbow_dash__hoodie.png',
        $dashboardWidgetHtml
    );
    echo $dashboardWidgetHtml;
}
