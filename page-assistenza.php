<?php
/*
  *
  * Template Name: Assistenza
  *
  */
get_header(); ?>
<main class="assistenza">
    <!-- Hero -->
    <?php get_template_part('/template-parts/hero-page'); ?>
    <section class="assistenza-content container">
        <?php
        $intro_text = get_field('intro');
        if ($intro_text) {
            echo '<div class="intro-text">' . $intro_text . '</div>';
        };

        if (have_rows('repeater_assistenza')): ?>
            <div class="repeater-assistenza">
                <?php
                while (have_rows('repeater_assistenza')) : the_row();
                    $img_assistenza = get_sub_field('foto'); ?>
                    <div class="assistenza-card">
                        <?php if (!empty($img_assistenza)): ?>
                            <div class="image">
                                <img src="<?php echo esc_url($img_assistenza['url']); ?>" alt="<?php echo esc_attr($img_assistenza['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                        <p class="assistenza-name title-5 medium"><?php echo esc_html(get_sub_field('nome')); ?></p>
                        <p class="assistenza-role text-body"><?php echo esc_html(get_sub_field('ruolo')); ?></p>
                        <?php
                        $tel = get_sub_field('link_telefono');
                        if ($tel):
                            $tel_url = $tel['url'];
                            $tel_title = $tel['title'];
                            $tel_target = $tel['target'] ? $tel['target'] : '_self';
                        ?>
                            <a class="assistenza-link" href="<?php echo esc_url($tel_url); ?>" target="<?php echo esc_attr($tel_target); ?>"><?php echo esc_html($tel_title); ?></a>
                        <?php endif;
                        $mail = get_sub_field('link_mail');
                        if ($mail):
                            $mail_url = $mail['url'];
                            $mail_title = $mail['title'];
                            $mail_target = $mail['target'] ? $mail['target'] : '_self';
                        ?>
                            <a class="assistenza-link" href="<?php echo esc_url($mail_url); ?>" target="<?php echo esc_attr($mail_target); ?>"><?php echo esc_html($mail_title); ?></a>
                        <?php endif; ?>
                    </div>
                <?php
                endwhile; ?>

            </div>
        <?php
        endif; ?>
        <div class="ricambi">
            <?php
            $intro_text = get_field('titolo_ricambi');
            if ($intro_text) {
                echo '<h3 class="ricambi-title title-3 medium">' . $intro_text . '</h3>';
            }; ?>
            <?php
            if (have_rows('repeater_ricambi')): ?>
                <ul class="repeater-ricambi">
                    <?php
                    while (have_rows('repeater_ricambi')) : the_row();
                        $img_ricambi = get_sub_field('logo');
                        $text_ricambi = get_sub_field('testo_ricambio'); ?>
                        <li class="ricambi-item">
                            <?php
                            if (!empty($img_ricambi)): ?>
                                <img src="<?php echo esc_url($img_ricambi['url']); ?>" alt="<?php echo esc_attr($img_ricambi['alt']); ?>" />
                            <?php endif;
                            echo esc_html($text_ricambi); ?>
                        </li>
                    <?php
                    endwhile; ?>
                </ul>
            <?php
            endif; ?>
        </div>
        <div class="centro">
            <?php
            $intro_text = get_field('titolo_centro_assistenza');
            if ($intro_text) {
                echo '<h4 class="centro-title title-3 medium">' . $intro_text . '</h4>';
            }; ?>
            <?php
            if (have_rows('repeater_centro_assistenza')): ?>
                <ul class="repeater-centro">
                    <?php
                    while (have_rows('repeater_centro_assistenza')) : the_row();
                        $img_centro = get_sub_field('logo_centro');
                        $text_centro = get_sub_field('testo_item'); ?>
                        <li class="centro-item">
                            <?php
                            if (!empty($img_centro)): ?>
                                <img src="<?php echo esc_url($img_centro['url']); ?>" alt="<?php echo esc_attr($img_centro['alt']); ?>" />
                            <?php endif;
                            echo esc_html($text_centro); ?>
                        </li>
                    <?php
                    endwhile;
                    ?>
                </ul>
            <?php
            endif; ?>
        </div>
    </section>
    <!-- Form Block -->
    <?php get_template_part('/template-parts/form-block'); ?>
    <!-- Brand Block -->
    <?php get_template_part('/template-parts/brand-block'); ?>
</main>
<?php get_footer(); ?>