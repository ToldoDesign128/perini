<section class="hero-home">
    <div class="hero-wrap heroSwiper">
        <?php
        if (have_rows('slider_hero')): ?>

            <ul class="repeater-hero swiper-wrapper">

                <?php
                while (have_rows('slider_hero')) : the_row();
                    $img_bg = get_sub_field('immagine_sfondo');
                    $titoletto = get_sub_field('titoletto');
                    $titolo = get_sub_field('titolo');
                    $desc = get_sub_field('descrizione');
                    $cta = get_sub_field('cta');

                    if ($cta) :
                        $cta_url = $cta['url'];
                        $cta_title = $cta['title'];
                        $cta_target = $cta['target'] ? $cta['target'] : '_self' ?>

                        <li class="repeater-item swiper-slide">
                            <img src="<?php echo esc_url($img_bg['url']); ?>" alt="<?php echo esc_attr($img_bg['alt']); ?>" />
                            <?php if ($titoletto) : ?>
                                <p class="titoletto title-3"><?php echo esc_html($titoletto) ?></p>
                            <?php endif;
                            if ($titolo) : ?>
                                <p class="titolo medium"><?php echo esc_html($titolo); ?></p>
                            <?php endif;
                            if ($desc) : ?>
                                <p class="desc title-6"><?php echo esc_html($desc); ?></p>
                            <?php endif;
                            if ($cta) : ?>
                                <a class="cta btn link" href="<?php echo esc_url($cta_url); ?>" target="<?php echo esc_attr($cta_target); ?>"><?php echo esc_html($cta_title); ?></a>
                            <?php endif; ?>
                        </li>

                <?php
                    endif;
                endwhile; ?>
            </ul>
        <?php
        endif; ?>
    </div>
    <div class="hero-info container">
        <?php
        $titolo_info = get_field('titolo_info');
        if ($titolo_info) : ?>
            <p class="titolo-info title-4 medium"><?php echo esc_html($titolo_info) ?></p>
        <?php endif;

        // Check rows exists.
        if (have_rows('repeater_info')): ?>
            <div class="repeater-info">
                <?php
                while (have_rows('repeater_info')) : the_row();
                    $icon = get_sub_field('icona');
                    $sub_title_info = get_sub_field('titolo');
                    $desc_info = get_sub_field('descrizione');  ?>

                    <div class="info-item">
                        <?php if ($icon) : ?>
                            <img class="icon-sizer" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                        <?php endif;
                        if ($sub_title_info) : ?>
                            <p class="titolo title-5 medium"><?php echo esc_html($sub_title_info); ?></p>
                        <?php endif;
                        if ($desc_info) : ?>
                            <p class="desc text-body"><?php echo esc_html($desc_info); ?></p>
                        <?php endif; ?>
                    </div>

                <?php
                endwhile; ?>
            </div>
        <?php
        endif; ?>

    </div>
</section>