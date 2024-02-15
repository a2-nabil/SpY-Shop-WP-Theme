<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- header section start  -->
    <header class="a2n_header navbar-area navbar-nine">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <div class="logo">
                            <?php
                            if (current_theme_supports("custom-logo")) {
                                if (has_custom_logo()) {
                                    the_custom_logo();
                                } else {
                                    bloginfo('name');
                                }

                            }
                            ?>
                        </div>
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNine" aria-controls="navbarNine" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse sub-menu-bar collapse" id="navbarNine" style="">
                            <?php
                            if (has_nav_menu('primary_menu')) {
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary_menu',
                                        'menu_id' => 'primary_nav',
                                        'menu_class' => 'menu navbar-nav me-auto',
                                        'container' => 'false',
                                    )
                                );
                            } ?>
                        </div>
                        <div class="navbar-btn d-none d-lg-inline-block">
                            <a class="menu-bar" href="#side-menu-left"><i class="lni lni-menu"></i></a>
                        </div>
                    </nav>

                </div>
            </div>

        </div>

    </header>

    <!-- custom side menu  -->
    <div class="sidebar-left">
        <div class="sidebar-close">
            <a class="close" href="#close"><i class="lni lni-close"></i></a>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-logo">
                <a href="<?php echo site_url(); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo"></a>
            </div>
            <p class="text">Lorem ipsum dolor sit amet adipisicing elit. Sapiente fuga nisi rerum iusto intro.</p>

            <div class="sidebar-menu">
                <h5 class="menu-title">Quick Links</h5>
                <ul>
                    <li><a href="javascript:void(0)">About Us</a></li>
                    <li><a href="javascript:void(0)">Our Team</a></li>
                    <li><a href="javascript:void(0)">Latest News</a></li>
                    <li><a href="javascript:void(0)">Contact Us</a></li>
                </ul>
            </div>

            <div class="sidebar-social align-items-center justify-content-center">
                <h5 class="social-title">Follow Us On</h5>
                <ul>
                    <li>
                        <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="lni lni-youtube"></i></a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
    <div class="overlay-left"></div>
    <!-- header section end  -->