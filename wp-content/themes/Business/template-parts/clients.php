<!-- clients area start  -->
<div id="clients" class="brand-area section">

    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Meet our Clients</h6>
                        <h2 class="fw-bold">Our Awesome Clients</h2>
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
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="clients-logos">
                    <?php
                    if (is_active_sidebar('clients_area-image')) {
                        dynamic_sidebar('clients_area-image');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- clients area end  -->