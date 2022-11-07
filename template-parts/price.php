<?php if (have_rows('prices')) : ?>
   <div class="price" id="price">
      <div class="container">
         <div class="block-title wow fadeInUp" data-wow-delay="0.3s">
            <h3>ціни</h3>
         </div>

         <div class="price__tab">
            <div class="tab-btn-wrapper">
               <?php while (have_rows('prices')) : the_row(); ?>
                  <a class="price__tab-btn tab-btn <?php echo (get_row_index() == 1 ? 'active' : ''); ?>" data-tab="#tab-<?php echo get_row_index(); ?>">
                     <?php the_sub_field('title'); ?>
                  </a>
               <?php endwhile; ?>
            </div>
            <div class="tab-item-wrapper">

               <?php while (have_rows('prices')) : the_row(); ?>
                  <div class="price__tab-item tab-item <?php echo (get_row_index() == 1 ? 'active' : ''); ?>" id="tab-<?php echo get_row_index(); ?>">
                     <?php the_sub_field('content'); ?>

                     <?php
                     $table = get_sub_field('table');

                     if (!empty($table)) {

                        echo '<table border="0">';

                        if (!empty($table['caption'])) {

                           echo '<caption>' . $table['caption'] . '</caption>';
                        }

                        if (!empty($table['header'])) {

                           echo '<thead>';

                           echo '<tr>';

                           foreach ($table['header'] as $th) {

                              echo '<th>';
                              echo $th['c'];
                              echo '</th>';
                           }

                           echo '</tr>';

                           echo '</thead>';
                        }

                        echo '<tbody>';

                        foreach ($table['body'] as $tr) {

                           echo '<tr>';

                           foreach ($tr as $td) {

                              echo '<td>';
                              echo $td['c'];
                              echo '</td>';
                           }

                           echo '</tr>';
                        }

                        echo '</tbody>';

                        echo '</table>';
                     }
                     ?>
                  </div>
               <?php endwhile; ?>

            </div>

         </div>

      </div>
   </div>
<?php endif; ?>