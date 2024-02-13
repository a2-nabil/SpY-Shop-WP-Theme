<?php


if (site_url()) {
    define("VIRSION", time());
} else {
    define("VIRSION", wp_get_theme()->get("version"));
}


//  theme bootstrapping 
function a2n_bootstrapping()
{
    load_theme_textdomain("a2n_business");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    $a2n_custom_header_details = array(
        'header-text' => true,
        'default-text-color' => '#ffffff',
    );
    add_theme_support("custom-header", $a2n_custom_header_details);
    $a2n_custom_logo_default = array(
        "width" => '185',
        "height" => '40'
    );
    add_theme_support("custom-logo", $a2n_custom_logo_default);
    add_theme_support("custom-background");
    add_theme_support("header-text");
    register_nav_menu("primary_menu", __("Primary Menu", "a2n_business"));
    register_nav_menu("footer_menu", __("Footer Menu", "a2n_business"));
    add_theme_support("dashicons");

}
add_action("after_setup_theme", "a2n_bootstrapping");

// theme all assets 
function a2n_assets()
{
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null, '5.2.3');
    // enqueue fontawesome 
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/assets/css/fontawesome.min.css', null, '6.5.1');
    // enqueue lineicons 
    wp_enqueue_style('lineicons-css', get_template_directory_uri() . '/assets/css/lineicons.css', null, VIRSION);
    // enqueue glightbox 
    wp_enqueue_style('glightbox-css', get_template_directory_uri() . '/assets/css/glightbox.min.css', null, '3.2.0');
    // enqueue swiper slider 
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', null, '11.0.6');
    // enqueue fontawesome 
    wp_enqueue_style('aos-css', get_template_directory_uri() . '/assets/css/aos.css', null, '2.3.1');
    // enqueue font
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap', array(), null, 'all');


    wp_enqueue_style("a2n_business", get_stylesheet_uri(), null, VIRSION);


    // Enqueue Jquery
    wp_enqueue_script('jquery', true);


    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', null, '5.2.3', true);
    // enqueue fontawesome 
    wp_enqueue_script('fontawesome-js', get_template_directory_uri() . '/assets/js/fontawesome.min.js', null, '6.5.1', true);
    // enqueue glightbox
    wp_enqueue_script('glightbox-js', get_template_directory_uri() . '/assets/js/glightbox.min.js', null, '3.2.0', true);
    // enqueue swiper slider 
    wp_enqueue_style('swiper-js', get_template_directory_uri() . '/assets/css/swiper-bundle.min.js', array('jquery'), '11.0.6', true);
    // enqueue aos 
    wp_enqueue_script('aos-js', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), '2.3.1', true);
    // enqueue app 
    wp_enqueue_script('app-js', get_theme_file_uri('/assets/js/app.js'), array('jquery'), VIRSION, true);
    // enqueue custom 
    wp_enqueue_script('custom-js', get_theme_file_uri('/assets/js/custom.js'), null, VIRSION, true);


}
add_action('wp_enqueue_scripts', 'a2n_assets');


// sidebar widgets 

function a2n_sidebar()
{
    register_sidebar(
        array(
            'name' => __('Post Sidebar', 'a2n_business'),
            'id' => 'sidebar-1',
            'description' => __('Widgets in this area will be shown on all posts and pages', 'a2n_business'),
            'before_widget' => '<div id="%1$s" class="widget">',
            'after_widget' => '',
            'before_title' => '<h2 class=" card-header">',
            'after_title' => '</h2> </div>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Post Sidebar_2', 'a2n_business'),
            'id' => 'sidebar-2',
            'description' => __('Widgets in this area will be shown on all posts and pages', 'a2n_business'),
            'before_widget' => '<div id="%1$s" class="widget">',
            'after_widget' => '</div">',
            'before_title' => '<h2 class=" card-header">',
            'after_title' => '</h2></div>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Post Sidebar_3', 'a2n_business'),
            'id' => 'sidebar-3',
            'description' => __('Widgets in this area will be shown on all posts and pages', 'a2n_business'),
            'before_widget' => '<div id="%1$s" class="widget">',
            'after_widget' => '</div">',
            'before_title' => '<h2 class="card-header">',
            'after_title' => '</h2></div>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Post Sidebar_4', 'a2n_business'),
            'id' => 'sidebar-4',
            'description' => __('Widgets in this area will be shown on all posts and pages', 'a2n_business'),
            'before_widget' => '<div id="%1$s" class="widget">',
            'after_widget' => '</div">',
            'before_title' => '<h2 class="card-header">',
            'after_title' => '</h2></div>',
        )
    );
    
    // Home about area widgets 

    register_sidebar(
        array(
            'name' => __('About Area', 'a2n_business'),
            'id' => 'about_area-1',
            'description' => __('Widgets in this area will be shown on all title and images', 'a2n_business'),
            'before_widget' => '<div id="%1$s" class="about">',
            'after_widget' => '</div">',
            'before_title' => '<h2 class="card-header">',
            'after_title' => '</h2></div>',
        )
    );



    // footer area widgets 
    register_sidebar(
        array(
            'name' => __('footer_1', 'a2n_business'),
            'id' => 'footer_1',
            'description' => __('Widgets in this area will be shown on Footer', 'a2n_business'),
            'before_widget' => '<div id="%1$s" class="widget company-intro-widget">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('footer_2', 'a2n_business'),
            'id' => 'footer_2',
            'description' => __('Widgets in this area will be shown on Footer', 'a2n_business'),
            'before_widget' => '<div id="%1$s" class="widget course-links-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="widget-title">',
            'after_title' => '</h5>',
        )
    );
    register_sidebar(
        array(
            'name' => __('footer_3', 'a2n_business'),
            'id' => 'footer_3',
            'description' => __('Widgets in this area will be shown on Footer', 'a2n_business'),
            'before_widget' => '<div id="%1$s" class="widget latest-news-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="widget-title">',
            'after_title' => '</h5>',
        )
    );
    register_sidebar(
        array(
            'name' => __('footer_4', 'a2n_business'),
            'id' => 'footer_4',
            'description' => __('Widgets in this area will be shown on Footer', 'a2n_business'),
            'before_widget' => '<div id="%1$s" class="widget newsletter-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="widget-title">',
            'after_title' => '</h5>',
        )
    );
    register_sidebar(
        array(
            'name' => __('footer_bottom_left', 'a2n_business'),
            'id' => 'footer_bottom_left',
            'description' => __('Widgets in this area will be shown on Footer', 'a2n_business'),
            'before_widget' => '<div id="%1$s" class="widget copy-right-text">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('footer_bottom_right', 'a2n_business'),
            'id' => 'footer_bottom_right',
            'description' => __('Widgets in this area will be shown on Footer', 'a2n_business'),
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
    if (is_page()) {
        $thumbnail_url = get_the_post_thumbnail_url(null, "large");
        ?>
        <style>
           

            .page_header {
                background-color: #000;
            }

            .home-side {
                background-image: url(<?php echo $thumbnail_url; ?>);
            }
        </style>

        <?php
    }
    if (is_page()) {
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
            <?php
        }
    }
}

add_action("wp_head", "a2n_page_template_banner", 11);

// for svg support 
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Create a Custom Post Type
function custom_portfolios()
{
    register_post_type(
        'portfolio',
        array(
            'labels' => array(
                'name' => ('Portfolios'),
                'singular_name' => ('Portfolio'),
                'add_new' => ('Add New Portfolio'),
                'add_new_item' => ('Add New Portfolio'),
                'edit_item' => ('Edit Portfolio'),
                'new_item' => ('New Portfolio'),
                'view_item' => ('View Portfolio'),
                'not_found' => ('Sorry, we cound\'n find the portfolio you are looking for.'),
            ),
            'menu_icon' => 'dashicons-networking',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slag' => 'portfolio'),
            'supports' => array('title', 'thumbnail', 'editor'),
        )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_portfolios');



// Thumbnil Image Area
add_theme_support('post-thumbnails', array('page', 'post', 'portfolio', ));
add_image_size('portfolio', 380, 300, true);
add_image_size('post-thumbnails', 970, 350, true);


function custom_nav_menu_css_class($classes, $item, $args, $depth)
{
    $classes[] = 'nav-item';

    return $classes;
}
add_filter('nav_menu_css_class', 'custom_nav_menu_css_class', 10, 4);
function custom_nav_menu_link_attributes($atts, $item, $args, $depth)
{

    if ($args->theme_location == 'primary_menu') {
        $atts['class'] = 'page-scroll';
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 10, 4);