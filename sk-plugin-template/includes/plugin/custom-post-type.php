<?php
// Documentation: https://developer.wordpress.org/reference/functions/register_post_type/

function sk_custom_post_type_init()
{
    $postTypeSingularName = 'Script Kid';
    $postTypePluralName = 'Script Kiddy';

    $labels = array(
        'name'                  => _x($postTypePluralName, 'Post type general name', 'sk-plugin-template'),
        'singular_name'         => _x($postTypeSingularName, 'Post type singular name', 'sk-plugin-template'),
        'menu_name'             => _x("All $postTypePluralName", 'Admin Menu text', 'sk-plugin-template'),
        'name_admin_bar'        => _x($postTypePluralName, 'Add New on Toolbar', 'sk-plugin-template'),
        'add_new'               => __('Add New', 'sk-plugin-template'),
        'add_new_item'          => __("Add New $postTypePluralName", 'sk-plugin-template'),
        'new_item'              => __("New $postTypePluralName", 'sk-plugin-template'),
        'edit_item'             => __("Edit $postTypePluralName", 'sk-plugin-template'),

    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  "A custom post type for $postTypePluralName",
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'sk-custom-post-type' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );
 
    register_post_type('script-kiddy', $args);

    register_taxonomy('customTaxonomy', 'script-kiddy', [
        'label'                 =>  __('customTaxonomy', 'script-kid'),
        'rewrite'               =>  [ 'slug' => 'customTaxonomy' ],
        'show_in_rest'          =>  true
    ]);
    // Create Custom post types or Taxonomies here
    flush_rewrite_rules();
}
