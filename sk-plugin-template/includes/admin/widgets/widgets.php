<?php
// Documentation: https://codex.wordpress.org/Widgets_API

// Adding a new Widget
// Duplicate custom-widget directory and change the name of the class, widget info and directory then register the new widget

function sk_widgets_init()
{
    // Custom Widget
    include('widget/custom-widget/custom-widget.php');

    register_widget('Sk_Custom_Widget');
}
