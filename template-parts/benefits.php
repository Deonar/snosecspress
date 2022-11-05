<div class="benefits">
   <div class="container">
      <div class="block-title"><h3><?php the_field('benefits-title') ?></h3></div>
      <div class="benefits__wrapper row">
         <?php while (have_rows('benefits')) : the_row();
            $image = get_sub_field('img');
         ?>
         <div class="col-lg-2 col-sm-4 benefits__item-wrapper">
            <div class="benefits__item">
               <h3><?php the_sub_field('title') ?></h3>
               <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="">
            </div>
         </div>
         <?php endwhile; ?>
      </div>
   </div>
</div>