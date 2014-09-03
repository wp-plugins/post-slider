<?php

function mpsp_custom_post_type(){
  $labels = array(
    'name' => _x('Posts Slider','post type general name'),
    'singular_name' => _x('Posts Slider','post type singular name'),
    'add_new' => _x('Add New','Posts Slider'),
    'add_new_item' => __('Add new Posts Slider'),
    'edit_item' => __('Edit Posts Slider'),
    'new_item' => __('New Posts Slider'),
    'all_items' => __('All Posts Sliders'),
    'view_itme' => __('View Posts Slider'),
    'search_items' => __('Search Posts Slider'),
    'not_found' => __('No Posts Slider found'),
    'not_found_in_trash' => __('No Posts Slider found in trash'),
    'parent_item_colon' => "",
    'menu_name' => 'Posts Slider',

    );
  $args = array(
    'labels' => $labels,
    'description' => 'Create Posts Slider',
    'public' => true,
    'menu_position' => 10,
    'supports' => array('title','custom_fields'),
    'has_archive' => true,
    'capability_type' => 'post',
    'query_var' => 'mpsp_slider',
    'menu_icon' => 'dashicons-welcome-add-page',
    'show_in_menu' => true,
    );


  register_post_type('mpsp_slider',$args);
}

add_action('init','mpsp_custom_post_type');




 ?>