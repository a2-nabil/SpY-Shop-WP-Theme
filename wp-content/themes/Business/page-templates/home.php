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


<section id="hero-area" class="header-area header-eight">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-content">
                    <h1>
                        <?php echo esc_html($head_title); ?>
                    </h1>
                    <p>
                    <?php echo esc_html($banner_text); ?>
                    </p>
                    <div class="button">
                        <a href="javascript:void(0)" class="btn primary-btn"><?php echo esc_html($button_text); ?></a>
                        <a href="<?php echo esc_attr($button_link); ?>"
                            class="glightbox video-button">
                            <span class="btn icon-btn rounded-full">
                                <i class="lni lni-play"></i>
                            </span>
                            <span class="text"><?php echo esc_html($secondButton_text);?></span>
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


<div class="about-area">
    <div class="container">
        <row>
            <div class="col-lg-6">
                <?php 
                dynamic_sidebar("about_area-1");
                ?>
            </div>
            <div class="col-lg-6">
                
            </div>
        </row>
    </div>
</div>




<?php
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'project',
    'post_status' => 'publish',
    'order' => 'ASC',
    'paged' => '',
);

$the_query = new WP_Query($args);

if ($the_query->have_posts()):
    ?>

    <section id='body_area projects_area' class="heading-m">
        <div class="container">
            <div class="row gy-4">

                <?php while ($the_query->have_posts()):
                    $the_query->the_post();
                    ?>
                    <div class="col-md-4">
                        <div class="card" style="overflow: hidden;">
                            <div class="card-body">
                                <?php the_post_thumbnail('project'); ?>
                                <h2 class="card-title">
                                    <?php the_title(); ?>
                                </h2>
                                <p class="card-text">
                                    <?php the_excerpt(); ?>
                                </p>
                                <button class="btn primary_btn" type="button" data-bs-toggle="modal"
                                    data-bs-target="#Modal-<?php echo $i; ?>">View Project</button>
                            </div>
                        </div>
                    </div>



                    <?php

                endwhile;
                wp_reset_postdata(); ?>

            </div>
        </div>
    </section>



    <?php
else:
    echo ('Sorry, no project published today, please try tomorrow');
endif;
get_footer();




get_footer();