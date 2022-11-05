<div class="faq">
   <div class="container">
      <div class="block-title"><h3><?php the_field('faq-title') ?></h3></div>
      <div class="faq__wrapper">
         <?php while (have_rows('faq')) : the_row(); ?>
         <div class="faq__item accordion-tab-js">
            <h3 class="accordion-preview">
               <?php the_sub_field('title') ?>
            </h3>
            <div class="accordion-content accordion-content-js">
               <?php the_sub_field('content') ?>
            </div>
         </div>
         <?php endwhile; ?>
      </div>
   </div>
</div>