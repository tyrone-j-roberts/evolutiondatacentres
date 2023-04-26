<?php
// Register Custom Post Type
function cpt_job()
{

    $labels = array(
        'name'                  => 'Jobs',
        'singular_name'         => 'Job',
        'menu_name'             => 'Jobs',
        'name_admin_bar'        => 'Jobs',
        'archives'              => 'Item Archives',
        'attributes'            => 'Item Attributes',
        'parent_item_colon'     => 'Parent Item:',
        'all_items'             => 'All Jobs',
        'add_new_item'          => 'Add New Item',
        'add_new'               => 'Add New Job',
        'new_item'              => 'New Job',
        'edit_item'             => 'Edit Job',
        'update_item'           => 'Update Job',
        'view_item'             => 'View Job',
        'view_items'            => 'View Jobs',
        'search_items'          => 'Search Jobs',
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
        'label'                 => 'Job',
        'description'           => 'Job',
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail'),
        'taxonomies'            => array(), //'category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25,
        'menu_icon'             => 'dashicons-nametag',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('Job', $args);
}
add_action('init', 'cpt_job', 0);
