<div class="nav">

   <?php if ($args['header']) : ?>
      <a href="/" class="nav__logo">
         <img src="<?php the_field('logo_header', 'option'); ?>" alt="SNOSECSPRESS" />
      </a>
      <div class="header-burger" id="header-burger">
         <span></span>
         <span></span>
         <span></span>
      </div>
   <?php else : ?>
      <a href="/" class="nav__logo">
         <img src="<?php the_field('logo_footer', 'option'); ?>" alt="SNOSECSPRESS" />
      </a>
   <?php endif ?>
   <?php get_template_part('inc/location'); ?>
   <?php get_template_part('inc/email'); ?>
   <?php get_template_part('inc/social'); ?>
   <?php get_template_part('inc/phone'); ?>
   <div class="nav__btn">
      <button type="button" class="btn popmake-222">Замовити Дзвінок</button>
   </div>

</div>