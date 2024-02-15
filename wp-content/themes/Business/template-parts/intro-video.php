<!-- Intro Video area start  -->


<section id="video-area" class="video-area video-one">

    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>
                            <?php
                            $VideoAreaTitle = get_post_meta(get_the_ID(), "Video Area Title", true);
                            echo esc_html($VideoAreaTitle);
                            ?>
                        </h6>
                        <h2 class="fw-bold">
                            <?php
                            $VideoAreaMainTitle = get_post_meta(get_the_ID(), "Video Area Main Title", true);
                            echo esc_html($VideoAreaMainTitle);
                            ?>
                        </h2>
                        <p>
                            <?php
                            if (is_active_sidebar('video_area-text')) {
                                dynamic_sidebar('video_area-text');
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="video-content text-center">
                    <?php
                    if (is_active_sidebar('video_area-image')) {
                        dynamic_sidebar('video_area-image');
                    }
                    ?>
                    <a class="video-popup glightbox" href="
                    <?php
                    $videoAreaVideo_link = get_post_meta(get_the_ID(), "Video Area Popup Link", true);
                    echo esc_attr($videoAreaVideo_link);
                    ?>">
                        <i class="lni lni-play"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- Intro Video area end  -->
