<?php

function sk_deactivate_plugin()
{
    // Clear any scheduled events, scripts or roles on deactivation
    flush_rewrite_rules();
}
