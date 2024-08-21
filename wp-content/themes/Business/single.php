<?php
get_header();
?>
<!-- post card section start -->
<div class="a2n_post-section">
    <div class="container mt-5">
        <div class="row">
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">
                                <?php echo the_title(); ?>
                            </h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">
                                <?php __("Posted on", "a2n_business");
                                echo get_the_date(); ?> by
                                <?php the_author(); ?>
                            </div>
                            <!-- Post categories-->
                            <?php echo get_the_category_list(" "); ?>
                            <!-- <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> -->
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4 a2n-single_img">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail("large", array("class" => "img-fluid rounded"));
                            }
                            ?>
                        </figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">
                                <?php the_content(); ?>
                            </p>
                        </section>
                    </article>
                    <!-- Comments section-->
                    <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->
                                <?php if (comments_open()) {
                                    comments_template();
                                } ?>

                                <form class="mb-4"><textarea class="form-control" rows="3"
                                        placeholder="Join the discussion and leave a comment!"></textarea></form>
                                <!-- Comment with nested comments-->
                                <div class="d-flex mb-4">
                                    <!-- Parent comment-->
                                    <div class="flex-shrink-0"><img class="rounded-circle"
                                            src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        If you're going to lead a space frontier, it has to be government; it'll never be
                                        private enterprise. Because the space frontier is dangerous, and it's expensive, and
                                        it has unquantified risks.
                                        <!-- Child comment 1-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle"
                                                    src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Commenter Name</div>
                                                And under those conditions, you cannot establish a capital-market evaluation
                                                of that enterprise. You can't get investors.
                                            </div>
                                        </div>
                                        <!-- Child comment 2-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle"
                                                    src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Commenter Name</div>
                                                When you put money directly to a problem, it makes a good headline.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single comment-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle"
                                            src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        When I look at the universe and all the ways the universe wants to kill us, I find
                                        it hard to reconcile that with statements of beneficence.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="a2n_post-Button_box">
                            <?php next_post_link();
                            previous_post_link();
                            ?>
                        </div>
                    </section>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                        <?php echo get_search_form(); ?>

                            <!-- <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..."
                                    aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div> -->

                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php
                                    $categories = get_categories(
                                        array(
                                            'hide_empty' => false,
                                            'orderby' => 'name',
                                            'order' => 'ASC',
                                        )
                                    );

                                    if (!empty($categories) && !is_wp_error($categories)) {
                                        $half_count = ceil(count($categories) / 2); // Calculate half the number of categories
                                
                                        echo '<ul class="list-unstyled">';
                                        foreach (array_slice($categories, 0, $half_count) as $category) {
                                            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                                        }
                                        echo '</ul>';
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    if (!empty($categories) && !is_wp_error($categories)) {
                                        $half_count = ceil(count($categories) / 2); // Calculate half the number of categories
                                
                                        echo '<ul class="list-unstyled">';
                                        foreach (array_slice($categories, $half_count) as $category) {
                                            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                                        }
                                        echo '</ul>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to
                            use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- post card section end -->
<?php get_footer(); ?>