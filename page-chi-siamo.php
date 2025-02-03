<?php
/*
  *
  * Template Name: Chi siamo
  *
  */
get_header(); ?>
<main class="about">
    <!-- Hero -->
    <?php get_template_part('/template-parts/hero-page'); ?>
    <!-- About Content -->
    <section class="about-content container">
        <div class="noi-block">
            <?php
            if (have_rows('card_repeater')):
                while (have_rows('card_repeater')) : the_row();
                    $image = get_sub_field('immagine'); ?>
                    <div class="noi-card">
                        <div class="image">
                            <?php if (!empty($image)): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <p class="nome title-5 medium"><?php echo esc_html(get_sub_field('nome')); ?></p>
                        <p class="role text-body"><?php echo esc_html(get_sub_field('ruolo')); ?></p>
                    </div>
            <?php
                endwhile;
            endif; ?>
        </div>
        <div class="story-block">
            <h3 class="titoletto-story title-6"><?php echo esc_html(get_field('titoletto_blocco')); ?></h3>
            <p class="titolo-story title-3 medium"><?php echo esc_html(get_field('titolo_blocco')); ?></p>
            <?php
            $text_story = get_field('testo_blocco');
            if ($text_story) : ?>
                <div class="text-story text-body">
                    <?php echo $text_story; ?>
                </div>
            <?php endif; ?>
            <div class="repeater-valori">
                <?php
                if (have_rows('repeater_valori')):
                    while (have_rows('repeater_valori')) : the_row();
                        $icon_value = get_sub_field('icona_card'); ?>
                        <div class="valori-card">
                            <?php if (!empty($icon_value)): ?>
                                <img src="<?php echo esc_url($icon_value['url']); ?>" alt="<?php echo esc_attr($icon_value['alt']); ?>" />
                            <?php endif; ?>
                            <p class="titolo-valore title-4 medium"><?php echo esc_html(get_sub_field('titolo_card')); ?></p>
                            <div class="testo-valore text-body"><?php echo get_sub_field('testo_card'); ?></div>
                        </div>
                <?php
                    endwhile;
                endif; ?>
            </div>
        </div>
    </section>
    <section class="punti-block">
        <div class="punti-wrap container">
            <h4 class="titoletto-punti title-6 uppercase"><?php echo esc_html(get_field('titoletto_punti')); ?></h4>
            <p class="titolo-punti title-4 medium"><?php echo esc_html(get_field('titolo_punti')); ?></p>
            <div class="repeater-punti valueSwiper">
                <?php
                if (have_rows('repeater_punti')): ?>
                    <ul class="swiper-wrapper">
                        <?php
                        while (have_rows('repeater_punti')) : the_row();
                            $icon_point = get_sub_field('icona_punto'); ?>

                            <li class="valori-card swiper-slide">
                                <?php if (!empty($icon_point)): ?>
                                    <img src="<?php echo esc_url($icon_point['url']); ?>" alt="<?php echo esc_attr($icon_point['alt']); ?>" />
                                <?php endif; ?>
                                <p class="valori-title title-5 medium"><?php echo esc_html(get_sub_field('titolo_punto')); ?></p>
                                <p class="valori-text text-body"><?php echo esc_html(get_sub_field('testo_punto')); ?></p>
                            </li>

                        <?php
                        endwhile; ?>
                    </ul>
                <?php
                endif; ?>
            </div>
        </div>
    </section>
    <section class="team-block">
        <div class="team-wrap container">
            <h5 class="titoletto-team title-6 uppercase"><?php echo esc_html(get_field('titoletto_team')); ?></h5>
            <p class="titolo-team title-4 medium"><?php echo esc_html(get_field('titolo_team')); ?></p>
            <div class="repeater-team">
                <?php
                if (have_rows('repeater_team')):
                    while (have_rows('repeater_team')) : the_row();
                        $img_team = get_sub_field('foto_team'); ?>
                        <div class="team-card">
                            <?php if (!empty($img_team)): ?>
                                <div class="image">
                                    <img src="<?php echo esc_url($img_team['url']); ?>" alt="<?php echo esc_attr($img_team['alt']); ?>" />
                                </div>
                            <?php endif; ?>
                            <p class="team-name title-5 medium"><?php echo esc_html(get_sub_field('nome_team')); ?></p>
                            <p class="team-role text-body"><?php echo esc_html(get_sub_field('ruolo_team')); ?></p>
                        </div>
                <?php
                    endwhile;
                endif; ?>
            </div>
        </div>
    </section>
    <section class="cosa-facciamo-block">
        <div class="cosa-facciamo-wrap container">
            <h6 class="titolo-cosa-facciamo title-3 medium"><?php echo esc_html(get_field('titoletto_cosa_facciamo')); ?></h6>
            <div class="repeater-cosa-facciamo">
                <?php
                if (have_rows('repeater_cosa_facciamo')):
                    while (have_rows('repeater_cosa_facciamo')) : the_row();
                        $img_team = get_sub_field('icona_cosa_facciamo'); ?>
                        <div class="cosa-facciamo-card">
                            <?php if (!empty($img_team)): ?>
                                <img src="<?php echo esc_url($img_team['url']); ?>" alt="<?php echo esc_attr($img_team['alt']); ?>" />
                            <?php endif; ?>
                            <p class="title-card title-4 medium"><?php echo esc_html(get_sub_field('titolo_azione')); ?></p>
                            <p class="action-card"><?php echo esc_html(get_sub_field('testo_azione')); ?></p>
                        </div>
                <?php
                    endwhile;
                endif; ?>
            </div>
        </div>
    </section>
    <section class="cta-block">
        <div class="cta-wrap container">
            <p class="titoletto-cta title-3 medium"><?php echo esc_html(get_field('titolo_cta')); ?></p>
            <?php
            $link_cta = get_field('pulsante_cta');
            if ($link_cta):
                $link_cta_url = $link_cta['url'];
                $link_cta_title = $link_cta['title'];
                $link_cta_target = $link_cta['target'] ? $link_cta['target'] : '_self';
            ?>
                <a class="btn" href="<?php echo esc_url($link_cta_url); ?>" target="<?php echo esc_attr($link_cta_target); ?>"><?php echo esc_html($link_cta_title); ?></a>
            <?php endif; ?>
        </div>
    </section>
    <!-- Brand Block -->
    <?php get_template_part('/template-parts/brand-block'); ?>
</main>
<?php get_footer(); ?>