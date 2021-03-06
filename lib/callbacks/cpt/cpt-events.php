<?php

$labels = array(
    'name' => __('Events', 'Post Type General Name', 'sage'),
    'singular_name' => __('Event', 'Post Type Singular Name', 'sage'),
    'menu_name' => __('Events', 'sage'),
    'name_admin_bar' => __('Event', 'sage'),
    'archives' => __('Event Archives', 'sage'),
    'attributes' => __('Event Attributes', 'sage'),
    'parent_item_colon' => __('Parent Event:', 'sage'),
    'all_items' => __('All Events', 'sage'),
    'add_new_item' => __('Add New Event', 'sage'),
    'add_new' => __('Add New', 'sage'),
    'new_item' => __('New Event', 'sage'),
    'edit_item' => __('Edit Event', 'sage'),
    'update_item' => __('Update Event', 'sage'),
    'view_item' => __('View Event', 'sage'),
    'view_items' => __('View Events', 'sage'),
    'search_items' => __('Search Event', 'sage'),
    'not_found' => __('Not found', 'sage'),
    'not_found_in_trash' => __('Not found in Trash', 'sage'),
    'featured_image' => __('Featured Image', 'sage'),
    'set_featured_image' => __('Set featured image', 'sage'),
    'remove_featured_image' => __('Remove featured image', 'sage'),
    'use_featured_image' => __('Use as featured image', 'sage'),
    'insert_into_item' => __('Insert into Event', 'sage'),
    'uploaded_to_this_item' => __('Uploaded to this Event', 'sage'),
    'items_list' => __('Events list', 'sage'),
    'items_list_navigation' => __('Events list navigation', 'sage'),
    'filter_items_list' => __('Filter Events list', 'sage'),
);
$args = array(
    'label' => __('Event', 'sage'),
    'description' => __('Events', 'sage'),
    'labels' => $labels,
    'menu_icon' => 'dashicons-star-filled',
    'supports' => array('title', 'thumbnail'),
    'taxonomies' => array(''),
    'public' => false,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 9,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => false,
    'can_export' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
);
register_post_type('cpt_events', $args);
