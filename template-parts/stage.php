<div class="stage">
   <div class="container">
      <div class="block-title"><h3>Етапи роботи з нами</h3></div>
      <div class="stage__wrapper row">
         <?php for ($i = 1; $i <= 7; $i++) {  ?>
            <div class="stage__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/img/stage/bg.png')">
               <span class="number">01</span>
               <div class="img">
                  <img src="<?php echo get_template_directory_uri(); ?>/dist/img/stage/1.png" alt="">
               </div>
               <div class="content">
                  <h3>Заявка або дзвінок</h3>
                  <p>Телефонуйте прямо зараз. Ми можемо зробити попередній розрахунок вартості по телефону.</p>
               </div>
            </div>
         <?php } ?>
      </div>
   </div>
</div>