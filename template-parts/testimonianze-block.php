<section class="testimonianze">
    <div class="testimonianze-wrap testimonialSwiper container">
        <p class="titoletto text-body uppercase">Testimonianze</p>
        <p class="title title-3 medium">La parola ai nostri clienti</p>
        <?php /* Custom Loop */

        $testimonianze_loop = new WP_Query(array(
            'post_type'     => 'testimonianze',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC'
        )); ?>

        <?php if ($testimonianze_loop->have_posts()) : ?>

            <ul class="swiper-wrapper">


                <?php while ($testimonianze_loop->have_posts()) : $testimonianze_loop->the_post(); ?>

                    <li class="swiper-slide">
                        <span class="quote">
                            <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M7 10.4142L2.70711 14.7071L1.29289 13.2929L5 9.58579V9L1 9V2H7V10.4142Z" fill="#ffffff"></path>
                                    <path d="M9 9L13 9V9.58579L9.29289 13.2929L10.7071 14.7071L15 10.4142L15 2H9L9 9Z" fill="#ffffff"></path>
                                </g>
                            </svg>
                        </span>
                        <p class="title title-5 bold"><?php the_title(); ?></p>
                        <div class="text">
                            <?php the_field('testo_testimonianza'); ?>
                        </div>
                        <div class="star-box">
                            <?php
                            $rating = get_field('stelle'); // Assumendo che il campo ACF si chiami 'rating'
                            for ($i = 0; $i < $rating; $i++) {
                                echo '<svg class="star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24"><path d="M12 .587l3.668 7.568L24 9.423l-6 5.849 1.417 8.268L12 18.897l-7.417 4.643L6 15.272 0 9.423l8.332-1.268z"/></svg>';
                            }
                            ?>
                        </div>
                    </li>

                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>

            </ul>
        <?php endif; ?>

    </div>
</section>