<?php
/*
Template Name: Service
*/
?>
<?php
get_header(); ?>

<div class="main-block" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="container">
        <div class="main-block__row row">
            <div class="col-md-8 col-lg-5">
                <h1 class="wow fadeInLeft" data-wow-delay="0.3s" data-title-js="<?php the_title() ?>"><?php the_title() ?></h1>
            </div>
            <div class="col-md-8 col-lg-3">
                <div class="consult-form form text-center wow fadeInRight" data-wow-delay="0.3s">
                    <?php echo do_shortcode('[contact-form-7 id="76" title="Консультация"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="page-content">
            <?php the_content(); ?>
            <?php if (get_field('price_table')) : ?>
                <div class="block-title wow fadeInUp" data-wow-delay="0.3s">
                    <h3>ціни</h3>
                </div>
                <?php get_template_part('inc/acf-table', '', array('table' => get_field(get_field('price_table'), 'option'))); ?>
            <?php endif ?>
        </div>
    </div>
<section>

<?php get_footer(); ?>