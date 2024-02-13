<?php get_header(); ?>

<?php get_template_part("/template-parts/common/hero"); ?>
<!-- post card section start -->
<div id="a2n_projects" class="a2n_post-section page_header">
    <div class="container mt-5">
        <div class="row">
            <?php
            $i = 1;
            while (have_posts()) {
                the_post();
                ?>
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="a2n_nxt-container" data-aos="fade-up">
                        <div class="nxt-start">
                            <?php
                            if (has_post_thumbnail()) {

                                // $post_thumbnail_url = get_the_post_thumbnail_url(null, "large");
                                $post_tt = get_the_title();
                                echo '<a class="a2n_popup" href="#" data-lightbox="image" data-title="' . $post_tt . '">';

                                // printf('<a href="%s" data-lightbox="image" data-title="%s">', $post_thumbnail_url, $post_tt);
                        
                                the_post_thumbnail("large", array("class" => "img-fluid"));
                                echo '</a>';
                            }
                            ?>
                        </div>

                        <div class="nxt-contents">
                            <a class="nxt_title" href="<?php the_permalink(); ?>" target="blank">
                                <?php echo the_title(); ?>
                            </a>
                            <div class="nxt_ratings">
                                <h5>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                        fill="none">
                                        <g clip-path="url(#clip0_802_5446)">
                                            <path
                                                d="M7.57832 7.58269C8.04243 7.58269 8.48753 7.76706 8.8157 8.09523C9.14388 8.4234 9.32824 8.8685 9.32824 9.33261L9.32708 10.2058C9.44724 12.3483 7.79706 13.4169 4.73645 13.4169C1.68634 13.4169 0 12.3623 0 10.2362V9.33261C0 8.8685 0.184366 8.4234 0.51254 8.09523C0.840714 7.76706 1.28581 7.58269 1.74992 7.58269H7.57832ZM12.2448 7.58269C12.7089 7.58269 13.154 7.76706 13.4822 8.09523C13.8103 8.4234 13.9947 8.8685 13.9947 9.33261V9.94683C14.0997 11.8688 12.6414 12.8325 9.9763 12.8325C9.61465 12.8325 9.27458 12.815 8.95668 12.78C9.58315 12.2013 9.91796 11.4168 9.9168 10.4251L9.90922 10.1732L9.91155 9.33261C9.91187 9.00149 9.84153 8.67411 9.70523 8.37234C9.56893 8.07057 9.36981 7.80136 9.12117 7.58269H12.2454H12.2448ZM4.66645 0.583008C5.44012 0.583008 6.1821 0.890346 6.72917 1.43741C7.27623 1.98448 7.58357 2.72646 7.58357 3.50013C7.58357 4.27379 7.27623 5.01577 6.72917 5.56284C6.1821 6.1099 5.44012 6.41724 4.66645 6.41724C3.89279 6.41724 3.15081 6.1099 2.60374 5.56284C2.05668 5.01577 1.74934 4.27379 1.74934 3.50013C1.74934 2.72646 2.05668 1.98448 2.60374 1.43741C3.15081 0.890346 3.89279 0.583008 4.66645 0.583008ZM10.4995 1.74962C11.1183 1.74962 11.7118 1.99544 12.1494 2.43301C12.5869 2.87057 12.8327 3.46404 12.8327 4.08285C12.8327 4.70166 12.5869 5.29513 12.1494 5.73269C11.7118 6.17025 11.1183 6.41608 10.4995 6.41608C9.88071 6.41608 9.28725 6.17025 8.84968 5.73269C8.41212 5.29513 8.1663 4.70166 8.1663 4.08285C8.1663 3.46404 8.41212 2.87057 8.84968 2.43301C9.28725 1.99544 9.88071 1.74962 10.4995 1.74962Z"
                                                fill="#ff2020" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_802_5446">
                                                <rect width="14" height="14" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p>
                                        <?php the_author(); ?>
                                    </p>
                                </h5>
                                <h5>
                                    <span>
                                        <?php echo get_the_date(); ?>
                                    </span>
                                    <svg onload="init()" width="14" height="14" xmlns="http://www.w3.org/2000/svg"
                                        aria-label="Calendar" role="img" viewBox="0 0 512 512">
                                        <path
                                            d="M512 455c0 32-25 57-57 57H57c-32 0-57-25-57-57V128c0-31 25-57 57-57h398c32 0 57 26 57 57z"
                                            fill="#e0e7ec" />
                                        <path
                                            d="M484 0h-47c2 4 4 9 4 14a28 28 0 1 1-53-14H124c3 4 4 9 4 14A28 28 0 1 1 75 0H28C13 0 0 13 0 28v157h512V28c0-15-13-28-28-28z"
                                            fill="#ff2020" />

                                        <g fill="#fff">
                                            <circle cx="470" cy="142" r="14" />
                                            <circle cx="470" cy="100" r="14" />
                                            <circle cx="427" cy="142" r="14" />
                                            <circle cx="427" cy="100" r="14" />
                                            <circle cx="384" cy="142" r="14" />
                                            <circle cx="384" cy="100" r="14" />
                                        </g>

                                        <text id="month" x="32" y="164" fill="#fff" font-family="monospace"
                                            font-size="140px" style="text-anchor: left">FEB</text>

                                        <text id="day" x="256" y="400" fill="#ff2020" font-family="monospace"
                                            font-size="256px" style="text-anchor: middle">29</text>

                                        <text id="weekday" x="256" y="480" fill="#ff2020" font-family="monospace"
                                            font-size="64px" style="text-anchor: middle">Sunday</text>
                                    </svg>
                                </h5>
                            </div>
                            <div class="nxt-divider"></div>
                            <div class="nxt-end">
                                <a href="#" class="nxt_button" data-bs-toggle="modal"
                                    data-bs-target="#Modal-<?php echo $i; ?>">View details</a>
                                <a href="<?php the_permalink(); ?>" target="blank" class="nxt_button">View Post</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Modal-<?php echo $i; ?>" tabindex="-1"
                    aria-labelledby="ModalLabel-<?php echo $i; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="fs-5 ModalLabel-<?php echo $i; ?>" id="exampleModalLabel">
                                    <?php the_title(); ?>
                                </h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <?php
                                if (!post_password_required() && has_post_thumbnail()) {
                                    the_post_thumbnail("large", array("class" => "img-fluid rounded"));
                                }
                                ?>
                                <div class="my-4">
                                    Tags:
                                    <?php echo get_the_tag_list("<ul class=\"list-unstyled a2n_tags\"><li class=\"badge bg-secondary link-light\">", "</li><li class=\"badge bg-secondary link-light\">", "</li></ul>"); ?>
                                </div>
                                <div class="mt-1">
                                    <?php
                                    the_excerpt();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $i++;
            } ?>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <?php
                the_posts_pagination(
                    array(
                        "screen_reader_text" => '',
                        "prev_text" => "New Posts",
                        "next_text" => "Old Posts"
                    )
                );
                ?>
            </div>
        </div>
    </div>
</div>
<!-- post card section end -->



<script type="text/ecmascript">< ![CDATA[
        function init() {
            var time = new Date();
            var locale = "en-gb";

            var DD = time.getDate();
            var DDD = time.toLocaleString(locale, { weekday: "long" });
            var MMM = time.toLocaleString(locale, { month: "short" }).toUpperCase();

            document.getElementById("day").textContent = DD;
            document.getElementById("weekday").textContent = DDD;
            document.getElementById("month").textContent = MMM;
            document.getElementsById("date").textContent = MM;
        }
    ]] ></script>
<?php get_footer(); ?>