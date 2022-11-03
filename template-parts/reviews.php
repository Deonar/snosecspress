<div class="reviews" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/img/reviews/bg.png')">
   <div class="container">
      <div class="block-title"><h3>відгуки</h3></div>
      <div class="reviews__slider swiper">
         <div class="reviews__slider-wrapper swiper-wrapper">
            <?php for ($i = 1; $i <= 10; $i++) {  ?>
               <div class="reviews__item swiper-slide">
                  <div class="client">
                     <div class="avatar"></div>
                     <div>
                        <p>Ім’я</p>
                        <p>Прізвище</p>
                     </div>
                  </div>
                  <div class="content">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
               </div>
            <?php } ?>
         </div>
      </div>
      <div class="swiper-button-next reviews-slider-button-next">
         <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.98372 5.4489L0.16272 9.1889C0.111165 9.2392 0.0701942 9.29931 0.0422211 9.36569C0.0142479 9.43206 -0.000160217 9.50337 -0.000160217 9.5754C-0.000160217 9.64743 0.0142479 9.71873 0.0422211 9.78511C0.0701942 9.85148 0.111165 9.91159 0.16272 9.9619L0.501717 10.2889C0.607653 10.3914 0.749301 10.4487 0.896721 10.4487C1.04414 10.4487 1.18578 10.3914 1.29172 10.2889L5.84072 5.8359C5.89224 5.78526 5.93316 5.72488 5.9611 5.65826C5.98903 5.59164 6.00342 5.52013 6.00342 5.4479C6.00342 5.37566 5.98903 5.30415 5.9611 5.23753C5.93316 5.17091 5.89224 5.11053 5.84072 5.0599L1.29572 0.610895C1.18978 0.508376 1.04814 0.451061 0.900719 0.451061C0.753299 0.451061 0.611658 0.508376 0.505722 0.610895L0.170715 0.938895C0.119036 0.989128 0.0779629 1.04922 0.0499115 1.1156C0.0218601 1.18199 0.00740051 1.25333 0.00740051 1.3254C0.00740051 1.39747 0.0218601 1.4688 0.0499115 1.53519C0.0779629 1.60158 0.119036 1.66166 0.170715 1.71189L3.98372 5.4489Z" fill="white" />
         </svg>
      </div>
      <div class="swiper-button-prev reviews-slider-button-prev">
         <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.01628 5.4489L6.83728 9.1889C6.88884 9.2392 6.92981 9.29931 6.95778 9.36569C6.98575 9.43206 7.00016 9.50337 7.00016 9.5754C7.00016 9.64743 6.98575 9.71873 6.95778 9.78511C6.92981 9.85148 6.88884 9.91159 6.83728 9.9619L6.49828 10.2889C6.39235 10.3914 6.2507 10.4487 6.10328 10.4487C5.95586 10.4487 5.81422 10.3914 5.70828 10.2889L1.15928 5.8359C1.10776 5.78526 1.06684 5.72488 1.0389 5.65826C1.01097 5.59164 0.996582 5.52013 0.996582 5.4479C0.996582 5.37566 1.01097 5.30415 1.0389 5.23753C1.06684 5.17091 1.10776 5.11053 1.15928 5.0599L5.70428 0.610895C5.81022 0.508376 5.95186 0.451061 6.09928 0.451061C6.2467 0.451061 6.38834 0.508376 6.49428 0.610895L6.82928 0.938895C6.88096 0.989128 6.92204 1.04922 6.95009 1.1156C6.97814 1.18199 6.9926 1.25333 6.9926 1.3254C6.9926 1.39747 6.97814 1.4688 6.95009 1.53519C6.92204 1.60158 6.88096 1.66166 6.82928 1.71189L3.01628 5.4489Z" fill="white" />
         </svg>
      </div>
      <div class="swiper-pagination reviews-slider-pagination"></div>
   </div>
</div>