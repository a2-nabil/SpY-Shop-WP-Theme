
<footer class="footer-area footer-eleven">

    <div class="footer-top">
        <div class="container">
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <?php
                        if (is_active_sidebar('footer_1')) {
                            dynamic_sidebar('footer_1');
                        }
                        ?>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <?php
                        if (is_active_sidebar('footer_2')) {
                            dynamic_sidebar('footer_2');
                        }
                        ?>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <?php
                        if (is_active_sidebar('footer_3')) {
                            dynamic_sidebar('footer_3');
                        }
                        ?>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <?php
                        if (is_active_sidebar('footer_4')) {
                            dynamic_sidebar('footer_4');
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>




<?php
wp_footer();
?>
</body>

</html>