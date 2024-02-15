<!-- portfolio area start  -->
<section id="portfolio" class="portfolio-area portfolio-three">

    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>
                            <?php
                            $portfolioAreaTitle = get_post_meta(get_the_ID(), "Portfolio Area Title", true);
                            echo esc_html($portfolioAreaTitle);
                            ?>
                        </h6>
                        <h2 class="fw-bold">
                        <?php
                            $portfolioAreaMainTitle = get_post_meta(get_the_ID(), "Portfolio Area Main Title", true);
                            echo esc_html($portfolioAreaMainTitle);
                            ?>
                        </h2>
                        <p>
                            <?php
                            if (is_active_sidebar('portfolio_area-text')) {
                                dynamic_sidebar('portfolio_area-text');
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <?php
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'portfolio',
        'post_status' => 'publish',
        'order' => 'ASC',
        'paged' => '',
    );

    $the_query = new WP_Query($args);

    $all_categories = array();

    if ($the_query->have_posts()):
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-menu text-center">
                        <button data-filter="all" class="active">ALL WORK</button>
                        <?php
                        while ($the_query->have_posts()):
                            $the_query->the_post();

                            // Get the categories for the current portfolio item
                            $categories = get_the_terms(get_the_ID(), 'categories');

                            if ($categories && !is_wp_error($categories)) {
                                foreach ($categories as $category) {
                                    // Collect all unique categories
                                    $all_categories[] = $category->slug;
                                }
                            }
                        endwhile;

                        // Display unique categories on buttons
                        foreach (array_unique($all_categories) as $unique_category):
                            ?>
                            <button data-filter="<?php echo esc_attr($unique_category); ?>" class="">
                                <?php echo esc_html($unique_category); ?>
                            </button>
                            <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>

            <div class="row grid">
                <?php
                $the_query = new WP_Query($args); // Reset the query to loop through posts again
            
                while ($the_query->have_posts()):
                    $the_query->the_post();

                    // Get the categories for the current portfolio item
                    $categories = get_the_terms(get_the_ID(), 'categories');

                    // Output the portfolio item HTML with data-filter attribute
                    ?>
                    <div class="col-lg-4 col-sm-6 <?php
                    if ($categories && !is_wp_error($categories)) {
                        foreach ($categories as $category) {
                            echo esc_attr($category->slug) . '';
                        }
                    }
                    ?> show" data-filter="<?php
                     if ($categories && !is_wp_error($categories)) {
                         foreach ($categories as $category) {
                             echo esc_attr($category->slug) . '';
                         }
                     }
                     ?>">
                        <div class="portfolio-style-three">
                            <div class="portfolio-image">
                                <?php
                                $thumbnailUrl = get_the_post_thumbnail_url(null, "large");
                                the_post_thumbnail('portfolio');
                                ?>
                                <div class="
              portfolio-overlay
              d-flex
              align-items-center
              justify-content-center
            ">
                                    <div class="portfolio-content">
                                        <div class="portfolio-icon">
                                            <a class="image-popup-three glightbox3" href="
                                            <?php
                                            echo ($thumbnailUrl);
                                            ?>">
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
                                    <a href="javascript:void(0)">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <p class="text">
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
    <!-- portfolio area end  -->
    <?php
    else:
        echo ('Sorry, no portfolio published today, please try tomorrow');
    endif;
    ?>