<?php
// Documentation: https://codex.wordpress.org/Widgets_API

// Custom Widget
include('widget/custom-widget/custom-widget.php');

// Adding a new Widget
// Duplicate custom-widget directory and change the name of the class, widget info and directory then register the new widget

function sk_widgets_init()
{
    register_widget('Sk_Custom_Widget');
}
