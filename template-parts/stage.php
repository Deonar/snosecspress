<div class="stage">
   <div class="container">
      <div class="block-title"><h3><?php the_field('stage-title') ?></h3></div>
      <div class="stage__wrapper row">
         <?php while (have_rows('stage')) : the_row();
            $image = get_sub_field('img');
         ?>
            <div class="stage__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/img/stage/bg.png')">
               <span class="number">01</span>
               <div class="img">
                  <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="">
               </div>
               <div class="content">
                  <h3><?php the_sub_field('title') ?></h3>
                  <p><?php the_sub_field('text') ?></p>
               </div>
            </div>
         <?php endwhile; ?>
      </div>
   </div>
</div>