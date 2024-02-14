<?php
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'portfolio',
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
    echo ('Sorry, no portfolio published today, please try tomorrow');
endif;
?>
<section id="portfolio" class="portfolio-area portfolio-three">

    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Our Portfolio</h6>
                        <h2 class="fw-bold">Our Recent Works</h2>
                        <p>
                            There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-menu text-center">
                    <button data-filter="all" class="active">ALL WORK</button>
                    <button data-filter="branding" class="">BRANDING</button>
                    <button data-filter="marketing" class="">MARKETING</button>
                    <button data-filter="planning" class="">PLANNING</button>
                    <button data-filter="research" class="">RESEARCH</button>
                </div>

            </div>
        </div>

        <div class="row grid">
            <div class="col-lg-4 col-sm-6 branding-3 planning-3 show" data-filter="branding">
                <div class="portfolio-style-three">
                    <div class="portfolio-image">
                        <img src="assets/images/portfolio/pf1.jpg" alt="image">
                        <div class="
              portfolio-overlay
              d-flex
              align-items-center
              justify-content-center
            ">
                            <div class="portfolio-content">
                                <div class="portfolio-icon">
                                    <a class="image-popup-three glightbox3" href="assets/images/portfolio/pf1.jpg">
                                        <i class="lni lni-zoom-in"> </i>
                                    </a>
                                </div>
                                <div class="portfolio-icon">
                                    <a href="javascript:void(0)"> <i class="lni lni-link"> </i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h4 class="portfolio-title">
                            <a href="javascript:void(0)">Graphics Design</a>
                        </h4>
                        <p class="text">
                            Short description for the ones who look for something new.
                            Awesome!
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-sm-6 show" data-filter="research">
                <div class="portfolio-style-three">
                    <div class="portfolio-image">
                        <img src="assets/images/portfolio/pf2.jpg" alt="image">
                        <div class="
              portfolio-overlay
              d-flex
              align-items-center
              justify-content-center
            ">
                            <div class="portfolio-content">
                                <div class="portfolio-icon">
                                    <a class="image-popup-three glightbox3" href="assets/images/portfolio/pf2.jpg">
                                        <i class="lni lni-zoom-in"> </i>
                                    </a>
                                </div>
                                <div class="portfolio-icon">
                                    <a href="javascript:void(0)"> <i class="lni lni-link"> </i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h4 class="portfolio-title">
                            <a href="javascript:void(0)">Web Development</a>
                        </h4>
                        <p class="text">
                            Short description for the ones who look for something new.
                            Awesome!
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-sm-6 show" data-filter="marketing">
                <div class="portfolio-style-three">
                    <div class="portfolio-image">
                        <img src="assets/images/portfolio/pf3.jpg" alt="image">
                        <div class="
              portfolio-overlay
              d-flex
              align-items-center
              justify-content-center
            ">
                            <div class="portfolio-content">
                                <div class="portfolio-icon">
                                    <a class="image-popup-three glightbox3" href="assets/images/portfolio/pf3.jpg">
                                        <i class="lni lni-zoom-in"> </i>
                                    </a>
                                </div>
                                <div class="portfolio-icon">
                                    <a href="javascript:void(0)"> <i class="lni lni-link"> </i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h4 class="portfolio-title">
                            <a href="javascript:void(0)">App Development</a>
                        </h4>
                        <p class="text">
                            Short description for the ones who look for something new.
                            Awesome!
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-sm-6 show" data-filter="planning">
                <div class="portfolio-style-three">
                    <div class="portfolio-image">
                        <img src="assets/images/portfolio/pf4.jpg" alt="image">
                        <div class="
              portfolio-overlay
              d-flex
              align-items-center
              justify-content-center
            ">
                            <div class="portfolio-content">
                                <div class="portfolio-icon">
                                    <a class="image-popup-three glightbox3" href="assets/images/portfolio/pf4.jpg">
                                        <i class="lni lni-zoom-in"> </i>
                                    </a>
                                </div>
                                <div class="portfolio-icon">
                                    <a href="javascript:void(0)"> <i class="lni lni-link"> </i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h4 class="portfolio-title">
                            <a href="javascript:void(0)">Digital Marketing</a>
                        </h4>
                        <p class="text">
                            Short description for the ones who look for something new.
                            Awesome!
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-sm-6 show" data-filter="branding">
                <div class="portfolio-style-three">
                    <div class="portfolio-image">
                        <img src="assets/images/portfolio/pf5.jpg" alt="image">
                        <div class="
              portfolio-overlay
              d-flex
              align-items-center
              justify-content-center
            ">
                            <div class="portfolio-content">
                                <div class="portfolio-icon">
                                    <a class="image-popup-three glightbox3" href="assets/images/portfolio/pf5.jpg">
                                        <i class="lni lni-zoom-in"> </i>
                                    </a>
                                </div>
                                <div class="portfolio-icon">
                                    <a href="javascript:void(0)"> <i class="lni lni-link"> </i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h4 class="portfolio-title">
                            <a href="javascript:void(0)">SEO Services</a>
                        </h4>
                        <p class="text">
                            Short description for the ones who look for something new.
                            Awesome!
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-sm-6 show" data-filter="marketing">
                <div class="portfolio-style-three">
                    <div class="portfolio-image">
                        <img src="assets/images/portfolio/pf6.jpg" alt="image">
                        <div class="
              portfolio-overlay
              d-flex
              align-items-center
              justify-content-center
            ">
                            <div class="portfolio-content">
                                <div class="portfolio-icon">
                                    <a class="image-popup-three glightbox3" href="assets/images/portfolio/pf6.jpg">
                                        <i class="lni lni-zoom-in"> </i>
                                    </a>
                                </div>
                                <div class="portfolio-icon">
                                    <a href="javascript:void(0)"> <i class="lni lni-link"> </i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h4 class="portfolio-title">
                            <a href="javascript:void(0)">Product Design</a>
                        </h4>
                        <p class="text">
                            Short description for the ones who look for something new.
                            Awesome!
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>