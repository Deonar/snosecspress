<div class="nav__item nav__call">
    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.00195 13.4688C9.50195 18.3125 13.1738 21.9844 18.0176 24.4844L21.6895 20.8125C22.2103 20.2917 22.7832 20.1615 23.4082 20.4219C25.2832 21.0469 27.2624 21.3594 29.3457 21.3594C29.8145 21.3594 30.2051 21.5156 30.5176 21.8281C30.8301 22.1406 30.9863 22.5312 30.9863 23V28.8594C30.9863 29.3281 30.8301 29.7188 30.5176 30.0312C30.2051 30.3438 29.8145 30.5 29.3457 30.5C21.5332 30.5 14.8405 27.7396 9.26758 22.2188C3.74675 16.6458 0.986328 9.95312 0.986328 2.14062C0.986328 1.67188 1.14258 1.28125 1.45508 0.96875C1.76758 0.65625 2.1582 0.5 2.62695 0.5H8.48633C8.95508 0.5 9.3457 0.65625 9.6582 0.96875C9.9707 1.28125 10.127 1.67188 10.127 2.14062C10.127 4.22396 10.4395 6.20312 11.0645 8.07812C11.2728 8.75521 11.1426 9.32812 10.6738 9.79688L7.00195 13.4688Z" />
    </svg>

    <div>
        <?php while (have_rows('phone', 'option')) : the_row(); ?>
            <a href="tel:<?php the_sub_field('item') ?>"><?php the_sub_field('item') ?></a>
        <?php endwhile; ?>
    </div>
</div>