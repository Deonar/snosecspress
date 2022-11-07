<div class="service" id="service">
   <div class="container">
      <div class="block-title wow fadeInUp" data-wow-delay="0.3s">
         <h3><?php the_field('service-title') ?></h3>
      </div>
      <div class="service__wrapper row">
         <?php while (have_rows('service')) : the_row();
            $image = get_sub_field('img');
         ?>
            <div class="col-lg-4 col-sm-8 service__item-wrapper">
               <div class="service__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/img/service/item-bg.png)">
                  <div class="content">
                     <div>
                        <?php the_sub_field('content') ?>
                        <?php if (!empty(get_sub_field('link'))) :
                           $link =  get_sub_field('link');
                        ?>
                           <a href="<?php echo ($link['url']); ?>" class="more"><?php echo $link['title']; ?></a>
                        <?php endif; ?>
                     </div>

                     <div class="btn-wrapper"><a href="#" class="btn">Замовити послугу</a></div>
                  </div>
                  <div class="bg-img">
                     <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="" class="bg-img">
                  </div>
               </div>
            </div>
         <?php endwhile; ?>
      </div>
   </div>
</div>