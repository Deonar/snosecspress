<div class="main-block" style="background-image: url(<?php the_field('main-block-img') ?>)">
    <div class="container">
        <div class="main-block__row row">
            <div class="col-md-8 col-lg-5">
                <h1 class="wow fadeInLeft" data-wow-delay="0.3s" data-title-js="<?php the_field('main-block-title') ?>"><?php the_field('main-block-title') ?></h1>
            </div>
            <div class="col-md-8 col-lg-3">
                <div class="consult-form form text-center wow fadeInRight" data-wow-delay="0.3s">
                    <?php echo do_shortcode('[contact-form-7 id="76" title="Консультация"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>