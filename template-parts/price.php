<div class="price">
   <div class="container">
      <div class="block-title"><h3>ціни</h3></div>
      <div class="price__tab">
         <div class="tab-btn-wrapper">
            <a class="price__tab-btn tab-btn" data-tab="#tab-1">Алмазне нарізання бетону</a>
            <a class="price__tab-btn tab-btn" data-tab="#tab-2">Демонтаж</a>
            <a class="price__tab-btn tab-btn" data-tab="#tab-3">Послуги вантажників</a>
            <a class="price__tab-btn tab-btn active" data-tab="#tab-4">Вивіз сміття</a>
         </div>
         <div class="tab-item-wrapper">
            <div class="price__tab-item tab-item" id="tab-1">
               tab 1 
            </div>
            <div class="price__tab-item tab-item" id="tab-2">
            </div>
            <div class="price__tab-item tab-item" id="tab-3">
            <table class="price__table">
                  <tbody>
                  <?php for ($i = 1; $i <= 10; $i++) {  ?>
                     <tr>
                        <td>Газель</td>
                        <td>900 грн (до 50 мішків)</td>
                     </tr>
                  <?php } ?>
                  </tbody>
               </table>
            </div>
            <div class="price__tab-item tab-item active" id="tab-4">
               <table class="price__table">
                  <tbody>
                  <?php for ($i = 1; $i <= 10; $i++) {  ?>
                     <tr>
                        <td>КаМаз</td>
                        <td>2200 грн</td>
                     </tr>
                  <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>