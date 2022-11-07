<div class="about-us" id="about-us"> 
   <div class="container">
      <div class="block-title wow fadeInUp" data-wow-delay="0.3s"><h3><?php the_field('about-us-title') ?></h3></div>
      <div class="about-us__wrapper">
         <div class="row">
            <div class="col-lg-3 col-md-8 about-us__img" style="background-image: url(<?php the_field('about-us-img') ?>)"></div>
            <div class="col-lg-5 col-md-8 about-us__content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/img/about-us/bg.jpg')">
               <?php the_field('about-us-content') ?>
            </div>
         </div>
      </div>
   </div>
</div>