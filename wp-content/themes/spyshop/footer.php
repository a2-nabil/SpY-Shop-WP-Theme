<footer class="footer-section">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-right" data-aos-offset="200"
                    data-aos-easing="ease-in-sine">
                    <?php
                    if (is_active_sidebar('footer_1')) {
                        dynamic_sidebar('footer_1');
                    }
                    ?>
                    <!-- <div class="widget company-intro-widget">
                        <a href="" class="site-logo logo">A2N</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever.</p>
                        <ul class="company-footer-contact-list">
                            <li><i class="fa-solid fa-phone"></i>0123456789</li>
                            <li><i class="fa-solid fa-clock"></i>Mon - Sat 8.00 - 18.00</li>
                        </ul>
                    </div> -->
                </div><!-- widget end -->
                <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <?php
                    if (is_active_sidebar('footer_2')) {
                        dynamic_sidebar('footer_2');
                    }
                    ?>
                    <!-- <div class="widget course-links-widget">
                        <h5 class="widget-title">Popular Courses</h5>
                        <ul class="courses-link-list">
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Academic English</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Web Technology</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>PC Systems</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Ui Web Design</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Web Development</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Apps Development</a></li>
                        </ul>
                    </div> -->
                </div><!-- widget end -->
                <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <?php
                    if (is_active_sidebar('footer_3')) {
                        dynamic_sidebar('footer_3');
                    }
                    ?>
                </div><!-- widget end -->
                <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-left" data-aos-offset="200"
                    data-aos-easing="ease-in-sine">
                    <?php
                    if (is_active_sidebar('footer_4')) {
                        dynamic_sidebar('footer_4');
                    }
                    ?>
                    <!-- <div class="widget newsletter-widget">
                        <h5 class="widget-title">Newsletter</h5>
                        <div class="footer-newsletter">
                            <p>Sign Up to Our Newsletter to Get Latest Updates & Services</p>
                            <form class="news-letter-form">
                                <input type="email" name="news-email" id="news-email" placeholder="Your email address">
                                <input type="submit" value="Send">
                            </form>
                        </div>
                    </div> -->
                </div><!-- widget end -->
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-sm-left text-center">
                    <?php
                    if (is_active_sidebar('footer_bottom_left')) {
                        dynamic_sidebar('footer_bottom_left');
                    }
                    ?>
                </div>
                <div class="col-md-6 col-sm-6">
                    <?php
                    if (is_active_sidebar('footer_bottom_right')) {
                        dynamic_sidebar('footer_bottom_right');
                    }
                    ?>
                    <!-- <ul class="terms-privacy d-flex justify-content-sm-end justify-content-center">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div><!-- footer-bottom end -->
</footer>




<?php
wp_footer();
?>
</body>

</html>