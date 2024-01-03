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
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h2 class="logo">
                        <?php bloginfo("name"); ?>
                    </h2>
                </div>
                <div class="col-md-7">
                    <ul class="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Home</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="a2n-right_side">
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end  -->
    




    <?php
    wp_footer();
    ?>
</body>

</html>