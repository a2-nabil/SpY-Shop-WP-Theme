<?php

// function a2n_theme_options(){
//     register_post_type(
//         'spy',
//         array(
//             'labels' => array (
//                 'name' => ('Spy Options'),
//                 'singular_name' => ('Spy'),

//             ),

//         )
//     );

// }

// add_action('init', 'a2n_theme_options');
// Settings Page: Spy Options

// Register Custom Post Type Spy Option
function create_spyoption_cpt()
{

    $labels = array(
        'name' => _x('Spy Options', 'Post Type General Name', 'Spy'),
        'singular_name' => _x('Spy Option', 'Post Type Singular Name', 'Spy'),
        'menu_name' => _x('Spy Options', 'Admin Menu text', 'Spy'),
        'name_admin_bar' => _x('Spy Option', 'Add New on Toolbar', 'Spy'),
        'archives' => __('Spy Option Archives', 'Spy'),
        'attributes' => __('Spy Option Attributes', 'Spy'),
        'parent_item_colon' => __('Parent Spy Option:', 'Spy'),
        'all_items' => __('All Courses', 'Spy'),
        'add_new' => __('Add New Course', 'Spy'),
        'add_new_item' => __('Add New Spy Option', 'Spy'),
        'new_item' => __('New Spy Option', 'Spy'),
        'edit_item' => __('Edit Spy Option', 'Spy'),
        'update_item' => __('Update Spy Option', 'Spy'),
        'view_item' => __('View Spy Option', 'Spy'),
        'view_items' => __('View Spy Options', 'Spy'),
        'search_items' => __('Search Spy Option', 'Spy'),
        'not_found' => __('Not found', 'Spy'),
        'not_found_in_trash' => __('Not found in Trash', 'Spy'),
        'featured_image' => __('Featured Image', 'Spy'),
        'set_featured_image' => __('Set featured image', 'Spy'),
        'remove_featured_image' => __('Remove featured image', 'Spy'),
        'use_featured_image' => __('Use as featured image', 'Spy'),
        'insert_into_item' => __('Insert into Spy Option', 'Spy'),
        'uploaded_to_this_item' => __('Uploaded to this Spy Option', 'Spy'),
        'items_list' => __('Spy Options list', 'Spy'),
        'items_list_navigation' => __('Spy Options list navigation', 'Spy'),
        'filter_items_list' => __('Filter Spy Options list', 'Spy'),
    );
    $args = array(
        'label' => __('Spy Option', 'Spy'),
        'description' => __('Here you can customize your theme', 'Spy'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-universal-access',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
        // 'taxonomies' => array('allcourses', 'allunits', 'allquizzes', 'allquestions', 'payouts', 'certificatetemplates', 'statistics', 'settings', 'lmstree', 'live', 'addons', 'coursecategory', 'quiztype', 'unittag', 'level', 'location', 'linkage'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 10,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    $all_units_tax = array(
        'label' => __('All Units'),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_admin_column' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'allunits'),
    );
    $courses_tags_tax = array(
        'label' => __('Courses Tags'),
        'rewrite' => array('slug' => 'coursestags'),
    );
    register_post_type('spyoption', $args);
    register_taxonomy('allunits', array('spyoption'), $all_units_tax);
    register_taxonomy('coursestags', array('spyoption'), $courses_tags_tax);

}
add_action('init', 'create_spyoption_cpt', 0);
// Register Taxonomy Course Category 
// Register Taxonomy Course Category 
function create_coursecategory_tax()
{

    $labels = array(
        'name' => _x('Course Categories', 'taxonomy general name', 'Spy'),
        'singular_name' => _x('Course Category ', 'taxonomy singular name', 'Spy'),
        'search_items' => __('Search Course Categories', 'Spy'),
        'all_items' => __('All Course Categories', 'Spy'),
        'parent_item' => __('Parent Course Category ', 'Spy'),
        'parent_item_colon' => __('Parent Course Category :', 'Spy'),
        'edit_item' => __('Edit Course Category ', 'Spy'),
        'update_item' => __('Update Course Category ', 'Spy'),
        'add_new_item' => __('Add New Course Category ', 'Spy'),
        'new_item_name' => __('New Course Category  Name', 'Spy'),
        'menu_name' => __('Course Category ', 'Spy'),
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Courses Categories here', 'Spy'),
        'hierarchical' => true,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
    );
    register_taxonomy('coursecategory', array('spyoption'), $args);

}
add_action('init', 'create_coursecategory_tax');