<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package start-wp
 */

get_header();
?>

<div class="main-block" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="container">
        <div class="main-block__row row">
            <div class="col-md-8 col-lg-5">
                <h1 class="wow fadeInLeft" data-wow-delay="0.3s" data-title-js="<?php the_title() ?>"><?php the_title() ?></h1>
            </div>
            <div class="col-md-8 col-lg-3">
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="page-content">
            <?php the_content(); ?>
        </div>
    </div>
<section>

<?php get_footer(); ?>


