<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- header section start  -->
    <header class="a2n_header">
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="logo">
                    <?php
                    // if (current_theme_supports("custom-logo")) {
                    //     bloginfo("name");

                    // }
                    ?>
                    <?php
                    if (has_custom_logo()):
                        the_custom_logo();
                    else:
                        ?>
                        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php bloginfo('name'); ?>
                        </a>

                    <?php endif; ?>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'primary_menu',
                            'menu_id' => 'primary_nav',
                            'menu_class' => 'menu navbar-nav me-auto mb-2 mb-lg-0',
                        )
                    ); ?>
                </div>
                <div class="a2n_right_side">
                    <ul>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Account</a></li>
                    </ul>


                </div>

            </div>
        </nav>

    </header>
    <!-- header section end  -->