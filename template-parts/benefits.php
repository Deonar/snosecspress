<div class="benefits" id="benefits">
   <div class="container">
      <div class="block-title wow fadeInUp" data-wow-delay="0.3s">
         <h3><?php the_field('benefits-title') ?></h3>
      </div>
      <div class="benefits__wrapper row">
         <?php while (have_rows('benefits')) : the_row();
            $image = get_sub_field('img');
         ?>
            <div class="col-lg-2 col-sm-4 benefits__item-wrapper">
               <div class="benefits__item">
                  <h3><?php the_sub_field('text') ?></h3>
                  <div class="benefits__img">
                     <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="">
                  </div>
               </div>
            </div>
         <?php endwhile; ?>
      </div>
   </div>
</div>