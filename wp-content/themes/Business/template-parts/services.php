<!-- services area start  -->
<section id="services" class="services-area services-eight">
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>
                            <?php
                            $serviceAreaTitle = get_post_meta(get_the_ID(), "Service Area Title", true);
                            echo esc_html($serviceAreaTitle);
                            ?>
                        </h6>
                        <h2 class="fw-bold">
                            <?php
                            $serviceAreaMainTitle = get_post_meta(get_the_ID(), "Service Area Main Title", true);
                            echo esc_html($serviceAreaMainTitle);
                            ?>
                        </h2>
                        <p>
                            <?php
                            $serviceAreaText = get_post_meta(get_the_ID(), "Service Area Text", true);
                            echo esc_html($serviceAreaText);

                            ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <?php
    $args = array(
        'posts_per_page' => 6,
        'post_type' => 'services',
        'post_status' => 'publish',
        'order' => 'ASC',
        'paged' => '',
    );

    $the_query = new WP_Query($args);


    if ($the_query->have_posts()):
        ?>


        <div class="container">
            <div class="row">

                <?php while ($the_query->have_posts()):
                    $the_query->the_post();
                    $ServiceIcon = get_post_meta(get_the_ID(), "Service icon", true);
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <div class="service-icon">
                                <i class="lni lni-<?php echo esc_attr($ServiceIcon);?>"></i>
                            </div>
                            <div class="service-content">
                                <h4>
                                    <?php the_title(); ?>
                                </h4>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php

                endwhile;
                wp_reset_postdata(); ?>

            </div>
        </div>
    </section>
    <!-- services area end  -->


    <?php
    else:
        echo ('Sorry, no services published today, please try tomorrow');
    endif;
