<div class="service">
   <div class="container">
      <div class="block-title"><h3>послуги</h3></div>
      <div class="service__wrapper row">
      <?php for ($i = 1; $i <= 4; $i++) {  ?>
         <div class="col-lg-4 col-sm-8 service__item-wrapper">
            <div class="service__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/img/service/item-bg.png)">
               <div class="content">
                  <h3>Алмазне нарізання бетону</h3>
                  <ul>
                     <p>Алмазна різка бетону застосовується при переплануванні квартири:</p>
                     <li>Організація додаткових виходів на балкон;</li>
                     <li>Видалення перегородок (для перетворення кухні в студію);</li>
                     <li>Поєднання кухні з балконом або лоджією.</li>
                  </ul>
                  <a href="#" class="more">Дізнатися більше</a>
               </div>

               <div class="btn-wrapper"><a href="#" class="btn">Замовити послугу</a></div>

               <img src="<?php echo get_template_directory_uri(); ?>/dist/img/service/1.png" alt="" class="bg-img">
            </div>
         </div>
      <?php } ?>
      </div>
   </div>
</div>