<?php


if (site_url()) {
    define("VIRSION", time());
} else {
    define("VIRSION", wp_get_theme()->get("version"));
}


//  theme bootstrapping 
function a2n_bootstrapping()
{
    load_theme_textdomain("spyShop");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    $a2n_custom_header_details = array(
        'header-text' => true,
        'default-text-color' => '#ff2020',
    );
    add_theme_support("custom-header", $a2n_custom_header_details);
    $a2n_custom_logo_default = array(
        "width" => '100',
        'height' => '100'
    );
    add_theme_support("custom-logo");
    add_theme_support("header-text");
    register_nav_menu("primary_menu", __("Primary Menu", "spyShop"));
    register_nav_menu("footer_menu", __("Footer Menu", "spyShop"));

}
add_action("after_setup_theme", "a2n_bootstrapping");

// theme all assets 
function a2n_assets()
{
    wp_enqueue_style("spyShop", get_stylesheet_uri(), null, VIRSION);
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null, '5.2.3');
    // enqueue fontawesome 
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/assets/css/fontawesome.min.css', null, '6.5.1');
    // enqueue lightbox 
    wp_enqueue_style('lightbox-css', get_template_directory_uri() . '/assets/css/lightbox.min.css', null, '2.11.4');
    // enqueue fontawesome 
    wp_enqueue_style('aos-css', get_template_directory_uri() . '/assets/css/aos.css', null, '2.3.1');


    // Enqueue Jquery
    wp_enqueue_script('jquery', true);
    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', null, '5.2.3', true);
    // enqueue fontawesome 
    wp_enqueue_script('fontawesome-js', get_template_directory_uri() . '/assets/js/fontawesome.min.js', null, '6.5.1', true);
    // enqueue lightbox 
    wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/assets/js/lightbox.min.js', array('jquery'), '2.11.4', true);
    // enqueue aos 
    wp_enqueue_script('aos-js', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), '2.3.1', true);
    // enqueue app 
    wp_enqueue_script('app-js', get_theme_file_uri('/assets/js/app.js'), null, VIRSION, true);
    // enqueue main 
    wp_enqueue_script('spyShop-main', get_theme_file_uri('/assets/js/main.js'), array('jquery', 'lightbox-js'), VIRSION, true);
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
            'before_widget' => '<div id="%1$s" class="widget">',
            'after_widget' => '',
            'before_title' => '<h2 class=" card-header">',
            'after_title' => '</h2> </div>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Post Sidebar_2', 'spyShop'),
            'id' => 'sidebar-2',
            'description' => __('Widgets in this area will be shown on all posts and pages', 'spyShop'),
            'before_widget' => '<div id="%1$s" class="widget">',
            'after_widget' => '</div">',
            'before_title' => '<h2 class=" card-header">',
            'after_title' => '</h2></div>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Post Sidebar_3', 'spyShop'),
            'id' => 'sidebar-3',
            'description' => __('Widgets in this area will be shown on all posts and pages', 'spyShop'),
            'before_widget' => '<div id="%1$s" class="widget">',
            'after_widget' => '</div">',
            'before_title' => '<h2 class="card-header">',
            'after_title' => '</h2></div>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Post Sidebar_4', 'spyShop'),
            'id' => 'sidebar-4',
            'description' => __('Widgets in this area will be shown on all posts and pages', 'spyShop'),
            'before_widget' => '<div id="%1$s" class="widget">',
            'after_widget' => '</div">',
            'before_title' => '<h2 class="card-header">',
            'after_title' => '</h2></div>',
        )
    );




    // footer area widgets 
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


// function a2n_menu_item_class($classes, $item)
// {
//     $classes[] = "list-inline-item";
//     return $classes;
// }

// add_filter('nav_menu_css_class', 'a2n_menu_item_class', 10, 2);

function a2n_page_template_banner()
{
    if (!is_page()) {
        ?>
        <style>
            .page_header {
                background-color: #000;
            }
        </style>
    <?
    }
    if (is_front_page()) {
        if (current_theme_supports("custom-header")) {
            ?>
            <style>
                .a2n_header .menu li>a,
                .a2n_right_side ul li>a {
                    color: #<?php echo get_header_textcolor(); ?> !important;
                    
                }

                .logo {
                    color: #<?php echo get_header_textcolor(); ?> !important;
                    <?php
                    if (!display_header_text()) {
                        echo "display: none;";
                    }
                    ?>
                }
            </style>
        <?
        }
    }
}

add_action("wp_head", "a2n_page_template_banner", 11);

