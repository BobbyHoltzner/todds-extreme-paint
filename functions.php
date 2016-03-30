<?php

// Register the Testimonials Post Type

function register_cpt_Testimonial() {

    $labels = array(
        'name' => _x( 'Testimonials', 'Testimonial' ),
        'singular_name' => _x( 'Testimonial', 'Testimonial' ),
        'add_new' => _x( 'Add New', 'Testimonial' ),
        'add_new_item' => _x( 'Add New Testimonial', 'Testimonial' ),
        'edit_item' => _x( 'Edit Testimonial', 'Testimonial' ),
        'new_item' => _x( 'New Testimonial', 'Testimonial' ),
        'view_item' => _x( 'View Testimonial', 'Testimonial' ),
        'search_items' => _x( 'Search Testimonials', 'Testimonial' ),
        'not_found' => _x( 'No Testimonials found', 'Testimonial' ),
        'not_found_in_trash' => _x( 'No Testimonials found in Trash', 'Testimonial' ),
        'parent_item_colon' => _x( 'Parent Testimonial:', 'Testimonial' ),
        'menu_name' => _x( 'Testimonials', 'Testimonial' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Customer Testimonials',
        'supports' => array( 'title'),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-editor-quote',
        'show_in_nav_menus' => true,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'Testimonial', $args );
}

// Register the Showcases post type

function register_cpt_Showcase() {

    $labels = array(
        'name' => _x( 'Showcases', 'Showcase' ),
        'singular_name' => _x( 'Showcase', 'Showcase' ),
        'add_new' => _x( 'Add New', 'Showcase' ),
        'add_new_item' => _x( 'Add New Showcase', 'Showcase' ),
        'edit_item' => _x( 'Edit Showcase', 'Showcase' ),
        'new_item' => _x( 'New Showcase', 'Showcase' ),
        'view_item' => _x( 'View Showcase', 'Showcase' ),
        'search_items' => _x( 'Search Showcases', 'Showcase' ),
        'not_found' => _x( 'No Showcases found', 'Showcase' ),
        'not_found_in_trash' => _x( 'No Showcases found in Trash', 'Showcase' ),
        'parent_item_colon' => _x( 'Parent Showcase:', 'Showcase' ),
        'menu_name' => _x( 'Showcases', 'Showcase' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Customer Showcases',
        'supports' => array( 'title'),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-view-site',
        'show_in_nav_menus' => true,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'Showcase', $args );
}

// Register the Sliders post type

function register_cpt_Slider() {

    $labels = array(
        'name' => _x( 'Sliders', 'Slider' ),
        'singular_name' => _x( 'Slider', 'Slider' ),
        'add_new' => _x( 'Add New', 'Slider' ),
        'add_new_item' => _x( 'Add New Slider', 'Slider' ),
        'edit_item' => _x( 'Edit Slider', 'Slider' ),
        'new_item' => _x( 'New Slider', 'Slider' ),
        'view_item' => _x( 'View Slider', 'Slider' ),
        'search_items' => _x( 'Search Sliders', 'Slider' ),
        'not_found' => _x( 'No Sliders found', 'Slider' ),
        'not_found_in_trash' => _x( 'No Sliders found in Trash', 'Slider' ),
        'parent_item_colon' => _x( 'Parent Slider:', 'Slider' ),
        'menu_name' => _x( 'Sliders', 'Slider' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Customer Sliders',
        'supports' => array( 'title'),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-images-alt2',
        'show_in_nav_menus' => true,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'Slider', $args );
}

function register_cpts(){
  register_cpt_Testimonial();
  register_cpt_Showcase();
  register_cpt_Slider();
}

add_action( 'init', 'register_cpts' );
