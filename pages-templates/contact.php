<?php
/*
Template Name: Contact
*/
?>
<?php
get_header(); ?>
<section class="contact-page">
    <div class="container">
        <div class="block-title wow fadeInUp" data-wow-delay="0.3s">
            <h1 class="h2"><?php the_title() ?></h1>
        </div>

        <div class="row">
            <div class="col-8 col-lg-3">
                <?php the_content(); ?>
            </div>
            <div class="col-8 col-lg-5">
                <div class="contact-row">
                    <div class="contact-col">
                        <div class="contact-item">
                            <?php get_template_part('inc/location'); ?>
                        </div>
                        <div class="contact-item">
                            <?php get_template_part('inc/phone'); ?>
                        </div>
                    </div>
                    <div class="contact-col">
                        <div class="contact-item">
                            <?php get_template_part('inc/email'); ?>
                        </div>
                        <div class="contact-item">
                            <?php get_template_part('inc/social'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d162562.51383428287!2d30.55599047941166!3d50.46502484656153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1668107679324!5m2!1sru!2sua" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<?php get_footer(); ?>