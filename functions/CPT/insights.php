<?php
// Register Custom Post Type
function cpt_insight()
{

    $labels = array(
        'name'                  => 'Insights',
        'singular_name'         => 'Insight',
        'menu_name'             => 'Insights',
        'name_admin_bar'        => 'Insights',
        'archives'              => 'Item Archives',
        'attributes'            => 'Item Attributes',
        'parent_item_colon'     => 'Parent Item:',
        'all_items'             => 'All Insights',
        'add_new_item'          => 'Add New Item',
        'add_new'               => 'Add New Insight',
        'new_item'              => 'New Insight',
        'edit_item'             => 'Edit Insight',
        'update_item'           => 'Update Insight',
        'view_item'             => 'View Insight',
        'view_items'            => 'View Insights',
        'search_items'          => 'Search Insights',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into item',
        'uploaded_to_this_item' => 'Uploaded to this item',
        'items_list'            => 'Items list',
        'items_list_navigation' => 'Items list navigation',
        'filter_items_list'     => 'Filter items list',
    );
    $args = array(
        'label'                 => 'Insight',
        'description'           => 'Insight',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'taxonomies'            => array(), //'category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-embed-post',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('insight', $args);
}
add_action('init', 'cpt_insight', 0);
