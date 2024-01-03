<!-- post card section start -->
<div class="a2n_post-section">
    <div class="container">
        <div class="row">
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <div class="col-md-12 text-center">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail("large", array("class" => "img-fluid"));
                    }
                    ?>
                    <?php echo the_title(); ?>
                    <?php the_author(); ?>
                    <?php echo get_the_date(); ?>
                    <?php the_content(); ?>

                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- post card section end -->