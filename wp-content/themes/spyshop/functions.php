<?php

//  theme bootstrapping 
function a2n_bootstrapping()
{
    load_theme_textdomain("spyShop");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    register_nav_menu("primary_Menu", __("Primary Menu", "spyShop"));
    register_nav_menu("footer_menu", __("Footer Menu", "spyShop"));

}
add_action("after_setup_theme", "a2n_bootstrapping");

// theme all assets 
function a2n_assets()
{
    wp_enqueue_style("spyShop", get_stylesheet_uri());
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.2.3');
    // enqueue fontawesome 
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '6.5.1');

    // Enqueue Jquery
    // wp_enqueue_script('jquery');
    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.2.3', true);
    // enqueue fontawesome 
    wp_enqueue_script('fontawesome-6', get_template_directory_uri() . '/assets/js/fontawesome.min.js', array('jquery'), '6.5.1', true);
}
add_action('wp_enqueue_scripts', 'a2n_assets');


// sidebar widgets 

function a2n_sidebar()
{
    register_sidebar(
        array(
            'name' => __('Post Sidebar', 'spyShop'),
            'id' => 'sidebar-1',
            'description' => __('Widgets in this area will be shown on all posts and pages', 'spyShop'),
            'before_widget' => '<div id="%1$s" class="widget %2$s card mb-4">',
            'after_widget' => '</div">',
            'before_title' => '<h2 class="widget-title card-header">',
            'after_title' => '</h2><div class="card-body">',
        )
    );
    register_sidebar(
        array(
            'name' => __('footer_1', 'spyShop'),
            'id' => 'footer_1',
            'description' => __('Widgets in this area will be shown on Footer', 'spyShop'),
            'before_widget' => '<div id="%1$s" class="widget company-intro-widget">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('footer_2', 'spyShop'),
            'id' => 'footer_2',
            'description' => __('Widgets in this area will be shown on Footer', 'spyShop'),
            'before_widget' => '<div id="%1$s" class="widget course-links-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="widget-title">',
            'after_title' => '</h5>',
        )
    );
    register_sidebar(
        array(
            'name' => __('footer_3', 'spyShop'),
            'id' => 'footer_3',
            'description' => __('Widgets in this area will be shown on Footer', 'spyShop'),
            'before_widget' => '<div id="%1$s" class="widget latest-news-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="widget-title">',
            'after_title' => '</h5>',
        )
    );
    register_sidebar(
        array(
            'name' => __('footer_4', 'spyShop'),
            'id' => 'footer_4',
            'description' => __('Widgets in this area will be shown on Footer', 'spyShop'),
            'before_widget' => '<div id="%1$s" class="widget newsletter-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="widget-title">',
            'after_title' => '</h5>',
        )
    );
    register_sidebar(
        array(
            'name' => __('footer_bottom_left', 'spyShop'),
            'id' => 'footer_bottom_left',
            'description' => __('Widgets in this area will be shown on Footer', 'spyShop'),
            'before_widget' => '<div id="%1$s" class="widget copy-right-text">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('footer_bottom_right', 'spyShop'),
            'id' => 'footer_bottom_right',
            'description' => __('Widgets in this area will be shown on Footer', 'spyShop'),
            'before_widget' => '<div id="%1$s" class="widget terms-privacy footer_right">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );
}
add_action('widgets_init', 'a2n_sidebar');

function a2n_the_excerpt($excerpt)
{
    if (!post_password_required()) {
        return $excerpt;
    } else {
        echo get_the_password_form();
    }
}
add_filter('the_excerpt', 'a2n_the_excerpt');

function a2n_protected_title_change()
{
    return "%s";
}

add_filter('protected_title_format', 'a2n_protected_title_change');


function a2n_menu_item_class($classes, $item)
{
    $classes[] = "list-inline-item";
    return $classes;
}

add_filter('nav_menu_css_class', 'a2n_menu_item_class', 10, 2);
