<div class="price" id="price">
   <div class="container">
      <div class="block-title wow fadeInUp" data-wow-delay="0.3s">
         <h3>ціни</h3>
      </div>

      <div class="price__tab">
         <div class="tab-btn-wrapper">

            <a class="price__tab-btn tab-btn active" data-tab="#tab-1">
               Алмазна різка бетону
            </a>
            <a class="price__tab-btn tab-btn" data-tab="#tab-2">
               Демонтаж
            </a>
            <a class="price__tab-btn tab-btn" data-tab="#tab-3">
               Послуги вантажників
            </a>
            <a class="price__tab-btn tab-btn" data-tab="#tab-4">
               Вивіз сміття
            </a>
            <a class="price__tab-btn tab-btn" data-tab="#tab-5">
               Свердління отворів
            </a>

         </div>
         <div class="tab-item-wrapper">
            <div class="price__tab-item tab-item active" id="tab-1">
               <?php get_template_part('inc/acf-table', '', array('table' => get_field('price_diamond', 'option'))); ?>
            </div>
            <div class="price__tab-item tab-item" id="tab-2">
               <?php get_template_part('inc/acf-table', '', array('table' => get_field('price_dismantling', 'option'))); ?>
            </div>
            <div class="price__tab-item tab-item" id="tab-3">
               <?php get_template_part('inc/acf-table', '', array('table' => get_field('price_porters', 'option'))); ?>
            </div>
            <div class="price__tab-item tab-item" id="tab-4">
               <?php get_template_part('inc/acf-table', '', array('table' => get_field('price_garbage', 'option'))); ?>
            </div>
            <div class="price__tab-item tab-item" id="tab-5">
               <?php get_template_part('inc/acf-table', '', array('table' => get_field('price_drilling', 'option'))); ?>
            </div>
         </div>

      </div>

   </div>
</div>