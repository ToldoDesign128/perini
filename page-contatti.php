<?php
/*
  *
  * Template Name: Contatti
  *
  */
get_header(); ?>
<main class="contatti">
    <!-- Hero -->
    <?php get_template_part('/template-parts/hero-page'); ?>
    <!-- Content Contatti -->
    <section class="contatti-content">
        <div class="content-wrap container">
            <div class="block-card">
                <?php
                if (have_rows('repeater_card')): ?>
                    <ul class="repeater-card">
                        <?php
                        while (have_rows('repeater_card')) : the_row();
                            $icon = get_sub_field('icona');
                            $title = get_sub_field('titolo_card');
                            $btn_1 = get_sub_field('link_1');
                            $btn_2 = get_sub_field('link_2'); ?>
                            <li class="card-item">
                                <div class="card-icon">
                                    <img class="icon-sizer" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                                </div>
                                <div class="card-content">
                                    <p class="title title-4 medium"><?php echo $title; ?></p>
                                    <div class="card-link">
                                        <?php if ($btn_1) :
                                            $btn_1_url = $btn_1['url'];
                                            $btn_1_title = $btn_1['title'];
                                            $btn_1_target = $btn_1['target'] ? $btn_1['target'] : '_self';  ?>
                                            <a href="<?php echo esc_url($btn_1_url); ?>" class="link" target="<?php echo esc_attr($btn_1_target); ?>"><?php echo esc_html($btn_1_title); ?></a>
                                        <?php endif;
                                        if ($btn_2) :
                                            $btn_2_url = $btn_2['url'];
                                            $btn_2_title = $btn_2['title'];
                                            $btn_2_target = $btn_2['target'] ? $btn_2['target'] : '_self'; ?>
                                            <a href="<?php echo esc_url($btn_2_url); ?>" class="link" target="<?php echo esc_attr($btn_2_target); ?>"><?php echo esc_html($btn_2_title); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                        <?php
                        endwhile; ?>
                    </ul>
                <?php
                endif; ?>
            </div>
            <div class="mappa">
                <?php
                $mappa = get_field('mappa');
                if ($mappa) {
                    echo $mappa;
                }; ?>
            </div>
        </div>
    </section>
    <!-- Form Block -->
    <?php get_template_part('/template-parts/form-block'); ?>
    <!-- Brand Block -->
    <?php get_template_part('/template-parts/brand-block'); ?>
</main>
<?php get_footer(); ?>