<?php if (get_field('location', 'option') || get_field('work-time', 'option')) : ?>
    <a class="location item" href="#">
        <svg width="21" height="31" viewBox="0 0 21 31" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.81739 13.669C8.56856 14.3732 9.46058 14.7254 10.4934 14.7254C11.5263 14.7254 12.3949 14.3732 13.0991 13.669C13.8503 12.9178 14.2258 12.0258 14.2258 10.993C14.2258 9.96009 13.8503 9.09155 13.0991 8.38732C12.3949 7.63615 11.5263 7.26056 10.4934 7.26056C9.46058 7.26056 8.56856 7.63615 7.81739 8.38732C7.11316 9.09155 6.76105 9.96009 6.76105 10.993C6.76105 12.0258 7.11316 12.9178 7.81739 13.669ZM3.02866 3.59859C5.09439 1.53286 7.58265 0.5 10.4934 0.5C13.4042 0.5 15.869 1.53286 17.8878 3.59859C19.9535 5.61737 20.9864 8.08216 20.9864 10.993C20.9864 12.4484 20.6108 14.115 19.8596 15.993C19.1554 17.8709 18.2869 19.6315 17.254 21.2746C16.2211 22.9178 15.1883 24.4671 14.1554 25.9225C13.1695 27.331 12.3244 28.4577 11.6202 29.3028L10.4934 30.5C10.2118 30.1714 9.83617 29.7488 9.36669 29.2324C8.8972 28.669 8.05213 27.5892 6.83147 25.993C5.61082 24.3498 4.531 22.777 3.59204 21.2746C2.70002 19.7254 1.87842 17.9883 1.12725 16.0634C0.376075 14.1385 0.000488281 12.4484 0.000488281 10.993C0.000488281 8.08216 1.00988 5.61737 3.02866 3.59859Z" />
        </svg>

        <div>
            <?php if (get_field('location', 'option')) : ?>
                <p><?php the_field('location', 'option'); ?></p>
            <?php endif ?>
            <?php if (get_field('work-time', 'option')) : ?>
                <p><?php the_field('work-time', 'option') ?></p>
            <?php endif ?>
        </div>
    </a>
<?php endif ?>