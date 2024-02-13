
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

                        <!-- <div class="footer-widget f-about">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/logo.svg" alt="#" class="img-fluid">
                                </a>
                            </div>
                            <p>
                                Making the world a better place through constructing elegant
                                hierarchies.
                            </p>
                            <p class="copyright-text">
                                <span>© 2024 Ayro UI.</span>Designed and Developed by
                                <a href="javascript:void(0)" rel="nofollow"> Ayro UI </a>
                            </p>
                        </div> -->

                    </div>
                    <div class="col-lg-2 col-md-6 col-12">

                        <!-- <div class="footer-widget f-link">
                            <h5>Solutions</h5>
                            <ul>
                                <li><a href="javascript:void(0)">Marketing</a></li>
                                <li><a href="javascript:void(0)">Analytics</a></li>
                                <li><a href="javascript:void(0)">Commerce</a></li>
                                <li><a href="javascript:void(0)">Insights</a></li>
                            </ul>
                        </div> -->
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

                        <!-- <div class="footer-widget f-link">
                            <h5>Support</h5>
                            <ul>
                                <li><a href="javascript:void(0)">Pricing</a></li>
                                <li><a href="javascript:void(0)">Documentation</a></li>
                                <li><a href="javascript:void(0)">Guides</a></li>
                                <li><a href="javascript:void(0)">API Status</a></li>
                            </ul>
                        </div> -->

                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <?php
                        if (is_active_sidebar('footer_4')) {
                            dynamic_sidebar('footer_4');
                        }
                        ?>

                        <!-- <div class="footer-widget newsletter">
                            <h5>Subscribe</h5>
                            <p>Subscribe to our newsletter for the latest updates</p>
                            <form action="#" method="get" target="_blank" class="newsletter-form">
                                <input name="EMAIL" placeholder="Email address" required="required" type="email">
                                <div class="button">
                                    <button class="sub-btn">
                                        <i class="lni lni-envelope"></i>
                                    </button>
                                </div>
                            </form>
                        </div> -->

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