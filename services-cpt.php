<?php
/*
Plugin Name: Service Post Types
Description: Add post types for custom services
*/

add_action( 'init', 'custom_post_service' );

function custom_post_service() {
 
    $labels = array(
        'name'               => __( 'Custom Services' ),
        'singular_name'      => __( 'Custom Service' ),
        'add_new'            => __( 'Add New Custom Service' ),
        'add_new_item'       => __( 'Add New Custom Service' ),
        'edit_item'          => __( 'Edit Custom Service' ),
        'new_item'           => __( 'New Custom Service' ),
        'all_items'          => __( 'All Custom Service' ),
        'view_item'          => __( 'View Custom Service' ),
        'search_items'       => __( 'Search Custom Service' ),
        'menu_name'          => 'Services'
    );

    $args = array(
        'labels'            => $labels,
        'description'       => 'Holds our custom article post specific data',
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => true,
    );
    register_post_type('services', $args);
}