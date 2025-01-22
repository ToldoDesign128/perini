    <!-- Footer -->
    <footer>
        <div class="footer-main">
            <div class="main-wrap container">
                <div class="info">
                    <p class="title title-4 bold"><?php echo esc_html(get_field('titolo_footer', 'option')); ?></p>

                    <?php
                    $ind = get_field('indirizzo_link', 'option');
                    if ($ind):
                        $ind_url = $ind['url'];
                        $ind_title = $ind['title'];
                        $ind_target = $ind['target'] ? $ind['target'] : '_self';
                    ?>
                        <a class="link-info text-body" href="<?php echo esc_url($ind_url); ?>" target="<?php echo esc_attr($ind_target); ?>"><?php echo esc_html($ind_title); ?></a>
                    <?php endif; ?>

                    <?php
                    $cel = get_field('cellulare_link', 'option');
                    if ($cel):
                        $cel_url = $cel['url'];
                        $cel_title = $cel['title'];
                        $cel_target = $cel['target'] ? $cel['target'] : '_self';
                    ?>
                        <a class="link-info text-body" href="<?php echo esc_url($cel_url); ?>" target="<?php echo esc_attr($cel_target); ?>"><?php echo esc_html($cel_title); ?></a>
                    <?php endif; ?>

                    <?php
                    $tel = get_field('telefono_link', 'option');
                    if ($tel):
                        $tel_url = $tel['url'];
                        $tel_title = $tel['title'];
                        $tel_target = $tel['target'] ? $tel['target'] : '_self';
                    ?>
                        <a class="link-info text-body" href="<?php echo esc_url($tel_url); ?>" target="<?php echo esc_attr($tel_target); ?>"><?php echo esc_html($tel_title); ?></a>
                    <?php endif;

                    $piva = get_field('piva', 'option');
                    $rea = get_field('rea', 'option');

                    if ($piva): ?>

                        <p class="text-info text-body"><?php echo esc_html($piva); ?></p>

                    <?php endif;

                    if ($rea): ?>

                        <p class="text-info text-body"><?php echo esc_html($rea); ?></p>

                    <?php endif; ?>

                </div>
                <div class="orari">
                    <p class="title title-4 bold"><?php echo esc_html(get_field('orari_titolo', 'option')); ?></p>
                    <?php
                    if (have_rows('repeater_orari', 'option')): ?>

                        <ul class="repeater-day">

                            <?php
                            while (have_rows('repeater_orari', 'option')) : the_row();
                                $day = get_sub_field('giorno');
                                $time = get_sub_field('orario'); ?>

                                <li class="repeater-item">
                                    <span class="day title-6 medium"><?php echo esc_html($day); ?></span>
                                    <span class="time text-body"><?php echo esc_html($time); ?></span>
                                </li>

                            <?php
                            endwhile; ?>

                        </ul>

                    <?php
                    endif; ?>
                </div>
                <div class="newsletter">
                    <p class="title title-4 bold"><?php echo esc_html(get_field('newsletter_titolo', 'option')); ?></p>
                    <div class="newsletter-content">
                        <?php
                        $content = get_field('newsletter_content', 'option');

                        if ($content) {
                            echo $content;
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-extra">
            <div class="extra-wrap container">
                <div class="text-box">
                    <p class="title title-5 bold"><?php echo esc_html(get_field('titolo_copyright', 'option')); ?></p>
                    <p class="text"><?php echo esc_html(get_field('info', 'option')); ?></p>
                </div>
                <div class="link-box">
                    <?php
                    if (have_rows('repeater_link', 'option')): ?>

                        <div class="repeater-link">

                            <?php
                            while (have_rows('repeater_link', 'option')) : the_row();
                                $link = get_sub_field('link_vari');

                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self'
                            ?>
                                    <a class="link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            <?php
                                endif;
                            endwhile; ?>

                        </div>

                    <?php
                    endif;
                    if (have_rows('repeater_immagini', 'option')): ?>

                        <div class="repeater-pay">

                            <?php
                            while (have_rows('repeater_immagini', 'option')) : the_row();
                                $img_footer = get_sub_field('immagine_pagamento'); ?>

                                <img src="<?php echo esc_url($img_footer['url']); ?>" alt="<?php echo esc_attr($img_footer['alt']); ?>" />
                            <?php
                            endwhile; ?>

                        </div>

                    <?php
                    endif; ?>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

    </body>
    </html>