<?php get_header(); ?>
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
                                <?php echo get_the_date(); ?> by
                                <?php the_author(); ?>
                            </div>
                            <!-- Post categories-->
                            <?php echo get_the_tag_list("<ul class=\"list-unstyled a2n_tags\"><li class=\"badge bg-secondary text-decoration-none link-light\">", "</li><li class=\"badge bg-secondary text-decoration-none link-light\">", "</li></ul>"); ?>
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
                    <?php if (is_active_sidebar('sidebar-1')) { ?>
                        <section id="a2n_sidebar">
                            <?php dynamic_sidebar('sidebar-1'); ?>
                        </section>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- post card section end -->
<?php get_footer(); ?>