<?php
/**
 *  Template Name: Home
 */
get_header();
the_post();
$head_title = get_post_meta(get_the_ID(), "Head Title", true);
$banner_text = get_post_meta(get_the_ID(), "Banner Text", true);
$button_text = get_post_meta(get_the_ID(), "Button Text", true);
$button_link = get_post_meta(get_the_ID(), "Button Link", true);
$secondButton_text = get_post_meta(get_the_ID(), "Second Button Text", true);


?>

<!-- hero section start  -->
<section id="hero-area" class="header-area header-eight">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-content">
                    <h1>
                        <?php
                        echo esc_html($head_title);
                        ?>
                    </h1>
                    <p>
                        <?php echo esc_html($banner_text); ?>
                    </p>
                    <div class="button">
                        <a href="javascript:void(0)" class="btn primary-btn">
                            <?php echo esc_html($button_text); ?>
                        </a>
                        <a href="<?php echo esc_attr($button_link); ?>" class="glightbox video-button">
                            <span class="btn icon-btn rounded-full">
                                <i class="lni lni-play"></i>
                            </span>
                            <span class="text">
                                <?php echo esc_html($secondButton_text); ?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-image">
                    <?php echo get_the_post_thumbnail(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- hero section end  -->


<?php
get_template_part('/template-parts/about-area');
get_template_part('/template-parts/services');
get_template_part('/template-parts/intro-video');
get_template_part('/template-parts/portfolio');
get_template_part('/template-parts/pricing');
get_template_part('/template-parts/team');
get_template_part('/template-parts/call-action');
get_template_part('/template-parts/testimonial');
get_template_part('/template-parts/blog');
get_template_part('/template-parts/clients');
get_template_part('/template-parts/contact');
?>













<?php
// scroll to top 
if (is_active_sidebar('scroll-top_icon')) {
    dynamic_sidebar('scroll-top_icon');
}
get_footer();




