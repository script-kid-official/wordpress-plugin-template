<?php

function sk_plugin_shortcode_with_attributes($attributes)
{
    $attributes         =   shortcode_atts([
        'content'    =>  "This is the default content. Add the 'content' attribute to the shortcode"
      ], $attributes);

    $shortcodeHtml = file_get_contents('template/shortcode-with-attributes-template.php', true);
    
    return $shortcodeHtml = str_replace(
        'SK_SHORTCODE_CONTENT',
        $attributes['content'],
        $shortcodeHtml
    );
}
