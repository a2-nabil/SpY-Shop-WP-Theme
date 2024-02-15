<!-- blog area start  -->
<div id="blog" class="latest-news-area section">

    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>latest news</h6>
                        <h2 class="fw-bold">Latest News &amp; Blog</h2>
                        <p>
                            There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>





    <?php
    $args = array(
        'post_type' => 'post', // Default WordPress post type
        'posts_per_page' => 3,      // Number of posts to display
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // Pagination
    );

    $the_query = new WP_Query($args);

    if ($the_query->have_posts()):
        ?>
        <div class="container">
            <div class="row">
                <?php
                while ($the_query->have_posts()):
                    $the_query->the_post();
                    // Display your post content here
                    ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-news">
                            <div class="image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('post'); ?>
                                </a>
                                <div class="meta-details">
                                    <?php
                                    if ($author_id = get_the_author_meta('ID')) {
                                        echo get_avatar($author_id, 32);
                                    }
                                    ?>
                                    <span>BY
                                        <?php the_author(); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="content-body">
                                <h4 class="title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php
                endwhile;


                // Restore original post data
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <?php
    else:
        // No posts found
        echo 'No posts found';
    endif;
    ?>

<!-- blog area end  -->