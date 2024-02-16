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
    // Thumbnail Image Area
    add_theme_support('post-thumbnails', array('page', 'post', 'portfolio', 'service'));
    add_image_size('portfolio', 350, 280, true);
    add_image_size('post', 700, 500, true);
    add_image_size('post-thumbnails', 970, 350, true);
    add_image_size('service', 300, 300, true);
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
    wp_enqueue_style('lineicons-font', get_template_directory_uri() . '/assets/fonts/LineIcons.woff2', null, VIRSION);
    // enqueue glightbox 
    wp_enqueue_style('glightbox-css', get_template_directory_uri() . '/assets/css/glightbox.min.css', null, '3.2.0');
    // enqueue tiny slider 
    wp_enqueue_style('tiny-slider-css', get_template_directory_uri() . '/assets/css/tiny-slider.css', null, VIRSION);
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
    // enqueue tiny slider 
    wp_enqueue_script('tiny-slider-js', get_template_directory_uri() . '/assets/js/tiny-slider.js', null, VIRSION, true);
    // enqueue aos 
    wp_enqueue_script('aos-js', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), '2.3.1', true);
    // enqueue app 
    wp_enqueue_script('app-js', get_theme_file_uri('/assets/js/app.js'), array('jquery'), VIRSION, true);
    // enqueue custom 
    wp_enqueue_script('custom-js', get_theme_file_uri('/assets/js/custom.js'), null, VIRSION, true);


}
add_action('wp_enqueue_scripts', 'a2n_assets');


// custom post type function here 
include_once('inc/custom_post-functions.php');



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

    // Home about area widgets start

    //  about left widget
    register_sidebar(
        array(
            'name' => __('About Area Image', 'a2n_business'),
            'id' => 'about_area-1',
            'description' => __('Widgets in this area will be shown on images of about area', 'a2n_business'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );

    // about tab widgets 
    register_sidebar(
        array(
            'name' => __('About Area Tab One Content', 'a2n_business'),
            'id' => 'about_area-tab-1',
            'description' => __('Widgets in this area will be shown on images of about area', 'a2n_business'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('About Area Tab Two Content', 'a2n_business'),
            'id' => 'about_area-tab-2',
            'description' => __('Widgets in this area will be shown on images of about area', 'a2n_business'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('About Area Tab Three Content', 'a2n_business'),
            'id' => 'about_area-tab-3',
            'description' => __('Widgets in this area will be shown on images of about area', 'a2n_business'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );

    // Home about area widgets end

    // Video area widgets start
    register_sidebar(
        array(
            'name' => __('Video Area text', 'a2n_business'),
            'id' => 'video_area-text',
            'description' => __('Widgets in this area will be shown on text of video area', 'a2n_business'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('Video Area image', 'a2n_business'),
            'id' => 'video_area-image',
            'description' => __('Widgets in this area will be shown on image of video area', 'a2n_business'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    // Video area widgets end

    // Portfolio area widgets start
    register_sidebar(
        array(
            'name' => __('Portfolio Area text', 'a2n_business'),
            'id' => 'portfolio_area-text',
            'description' => __('Widgets in this area will be shown on text of Portfolio area', 'a2n_business'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );




    // Portfolio area widgets end
    // clients area widgets start
    register_sidebar(
        array(
            'name' => __('Clients Area image', 'a2n_business'),
            'id' => 'clients_area-image',
            'description' => __('Widgets in this area will be shown on images of clients area', 'a2n_business'),
            'before_widget' => '<div class="single-image">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );
    // clients area widgets end

    // footer area widgets 
    register_sidebar(
        array(
            'name' => __('footer_1', 'a2n_business'),
            'id' => 'footer_1',
            'description' => __('Widgets in this area will be shown on Footer', 'a2n_business'),
            'before_widget' => '<div id="%1$s" class="footer-widget f-about">',
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
            'before_widget' => '<div id="%1$s" class="footer-widget f-link">',
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
            'before_widget' => '<div id="%1$s" class="footer-widget f-link">',
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
            'before_widget' => '<div id="%1$s" class="footer-widget newsletter">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="widget-title">',
            'after_title' => '</h5>',
        )
    );
    // scroll to top widget 
    register_sidebar(
        array(
            'name' => __('Scroll To Top Icon ', 'a2n_business'),
            'id' => 'scroll-top_icon',
            'description' => __('Widgets in this area will be shown on bottom', 'a2n_business'),
            'before_widget' => '<a href="#" class="scroll-top btn-hover" style="display: flex;">',
            'after_widget' => '</a>',
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

// Creates Custom Post Type for portfolio
function custom_Services()
{
    register_post_type(
        'services',
        array(
            'labels' => array(
                'name' => ('Services'),
                'singular_name' => ('Service'),
                'add_new' => ('Add New Service'),
                'add_new_item' => ('Add New Service'),
                'edit_item' => ('Edit Service'),
                'new_item' => ('New Service'),
                'view_item' => ('View Service'),
                'not_found' => ('Sorry, we cound\'n find the Service you are looking for.'),
            ),
            'menu_icon' => 'dashicons-hammer',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 4,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slag' => 'portfolio'),
            'supports' => array('title', 'thumbnail', 'editor', 'custom-fields'),
        )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_Services');

// Creates Custom Post Type for portfolio
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
            'supports' => array('title', 'thumbnail', 'editor', 'custom-fields'),
        )
    );
    register_taxonomy(
        'categories',
        'portfolio',
        array(
            'label' => __('Categories'),
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_admin_column' => true,
            'rewrite' => array('slug' => 'categories'),
        )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_portfolios');






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


