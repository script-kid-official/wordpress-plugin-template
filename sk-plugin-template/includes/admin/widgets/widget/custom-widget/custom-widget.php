<?php


class Sk_Custom_Widget extends WP_Widget
{
    /**
       * Sets up the widgets name etc
       */
    public function __construct()
    {
        $widget_options           =   array(
            'description'       =>  'Script Kiddy Custom Widget',
        );
        parent::__construct('sk_custom_widget', 'SK Widget', $widget_options);
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form($instance)
    {
        // outputs the options form on admin
        $default            = [ 'title' => 'SK Custom Widget' ];
        $instance           = wp_parse_args((array) $instance, $default);
        
        // Load Widget Template Contents
        $widgetFormHtml = file_get_contents('template/custom-widget-form.php', true);
        $widgetFormHtml = str_replace(
            'SK_LABEL_FOR',
            $this->get_field_id('title'),
            $widgetFormHtml
        );

        $widgetFormHtml = str_replace(
            'SK_INPUT_ID',
            $this->get_field_id('title'),
            $widgetFormHtml
        );
        $widgetFormHtml = str_replace(
            'SK_INPUT_NAME',
            $this->get_field_id('title'),
            $widgetFormHtml
        );

        $widgetFormHtml = str_replace(
            'SK_INPUT_VALUE',
            esc_attr($instance['title']),
            $widgetFormHtml
        );


        echo $widgetFormHtml;
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update($new_instance, $old_instance)
    {
        // processes widget options to be saved
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }

    /**
       * Outputs the content of the widget
       *
       * @param array $args
       * @param array $instance
       */
    public function widget($args, $instance)
    {
        // outputs the content of the widget
        extract($args);
        extract($instance);

        $title = apply_filters('widget_title', $title);

        echo $before_widget;
        echo $before_title . $title . $after_title;

        // Load Widget Template Contents
        $widgetHtml = file_get_contents('template/custom-widget-template.php', true);

        $widgetHtml = str_replace(
            'SK_WIDGET_CONTENT',
            'Script Kid - Widget Display',
            $widgetHtml
        );
        $widgetHtml = str_replace(
            'SK_WIDGET_IMAGE_CONTENT',
            'https://www.script-kiddie.co.za/external-images/rainbow_dash__hoodie.png',
            $widgetHtml
        );

        echo $widgetHtml;
        echo $after_widget;
    }
}
