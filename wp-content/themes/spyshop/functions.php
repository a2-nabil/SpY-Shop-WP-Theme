<?php

//  theme bootstrapping 
function a2n_bootstrapping()
{
    load_theme_textdomain("spyShop");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");

}
add_action("after_setup_theme", "a2n_bootstrapping");

// theme all assets 
function a2n_assets()
{
    wp_enqueue_style("spyShop", get_stylesheet_uri());
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.2.3');
    // Enqueue Jquery
    // wp_enqueue_script('jquery');
    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.2.3', true);
}
add_action('wp_enqueue_scripts', 'a2n_assets');

