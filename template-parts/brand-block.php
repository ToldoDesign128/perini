<section class="brand">
    <div class="brand-wrap container brandSwiper">
        <?php
        if (have_rows('brand_repeater', 'option')): ?>

            <ul class="repeater-brand swiper-wrapper">

                <?php
                while (have_rows('brand_repeater', 'option')) : the_row();
                    $img_brand = get_sub_field('immagine_brand');
                    $link_brand = get_sub_field('link_brand');

                    if ($link_brand) :
                        $link_brand_url = $link_brand['url'];
                        $link_brand_title = $link_brand['title'];
                        $link_brand_target = $link_brand['target'] ? $link_brand['target'] : '_self' ?>

                        <li class="repeater-item swiper-slide">
                            <a class="link" href="<?php echo esc_url($link_brand_url); ?>" target="<?php echo esc_attr($link_brand_target); ?>">
                                <img src="<?php echo esc_url($img_brand['url']); ?>" alt="<?php echo esc_attr($img_brand['alt']); ?>" />
                            </a>
                        </li>

                <?php
                    endif;
                endwhile; ?>

            </ul>

        <?php
        endif; ?>
    </div>
</section>