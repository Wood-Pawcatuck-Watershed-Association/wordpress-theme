<?php

$labels = array(
    'name' => __('Newsletters', 'Post Type General Name', 'sage'),
    'singular_name' => __('Newsletter', 'Post Type Singular Name', 'sage'),
    'menu_name' => __('Newsletters', 'sage'),
    'name_admin_bar' => __('Newsletter', 'sage'),
    'archives' => __('Newsletter Archives', 'sage'),
    'attributes' => __('Newsletter Attributes', 'sage'),
    'parent_item_colon' => __('Parent Newsletter:', 'sage'),
    'all_items' => __('All Newsletters', 'sage'),
    'add_new_item' => __('Add New Newsletter', 'sage'),
    'add_new' => __('Add New', 'sage'),
    'new_item' => __('New Newsletter', 'sage'),
    'edit_item' => __('Edit Newsletter', 'sage'),
    'update_item' => __('Update Newsletter', 'sage'),
    'view_item' => __('View Newsletter', 'sage'),
    'view_items' => __('View Newsletters', 'sage'),
    'search_items' => __('Search Newsletter', 'sage'),
    'not_found' => __('Not found', 'sage'),
    'not_found_in_trash' => __('Not found in Trash', 'sage'),
    'featured_image' => __('Featured Image', 'sage'),
    'set_featured_image' => __('Set featured image', 'sage'),
    'remove_featured_image' => __('Remove featured image', 'sage'),
    'use_featured_image' => __('Use as featured image', 'sage'),
    'insert_into_item' => __('Insert into Newsletter', 'sage'),
    'uploaded_to_this_item' => __('Uploaded to this Newsletter', 'sage'),
    'items_list' => __('Newsletters list', 'sage'),
    'items_list_navigation' => __('Newsletters list navigation', 'sage'),
    'filter_items_list' => __('Filter Newsletters list', 'sage'),
);
$args = array(
    'label' => __('Newsletter', 'sage'),
    'description' => __('Newsletters', 'sage'),
    'labels' => $labels,
    'menu_icon' => 'dashicons-book',
    'supports' => array('title', 'thumbnail',),
    'taxonomies' => array(),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => false,
    'rewrite' => array('slug' => 'newsletter'),
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
);
register_post_type('cpt_newsletters', $args);