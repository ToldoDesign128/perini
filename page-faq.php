<?php
get_header(); ?>
<main class="faq">
    <!-- Hero Faq -->
    <?php get_template_part('/template-parts/hero-page'); ?>
    <!-- FAQ Content -->
    <section class="content-faq">
        <div class="faq-wrap container">
            <?php

            // Check rows exists.
            if (have_rows('repeater_faq')):
                // Loop through rows.
                while (have_rows('repeater_faq')) : the_row();

                    // Load sub field value.
                    $block_title = get_sub_field('titolo_blocco');
                    $block_extra = get_sub_field('testo_extra'); ?>

                    <div class="faq-block">
                        <?php if ($block_title) : ?>
                            <p class="block-title title-2 medium"><?php echo esc_html($block_title); ?></p>
                        <?php endif;

                        // Check rows exists.
                        if (have_rows('repeater_domande')): ?>
                            <ul class="faq-list">

                                <?php
                                // Loop through rows.
                                while (have_rows('repeater_domande')) : the_row();

                                    // Load sub field value.
                                    $domanda = get_sub_field('domanda');
                                    $risposta = get_sub_field('risposta'); ?>

                                    <li class="faq-item">
                                        <div class="domanda">
                                            <p class="title-5"><?php echo esc_html($domanda); ?></p>
                                            <span class="icon-plus">+</span>
                                        </div>
                                        <div class="risposta">
                                            <div><?php echo $risposta; ?></div>
                                        </div>
                                    </li>

                                <?php
                                endwhile; ?>

                            </ul>

                        <?php
                        endif;
                        if ($block_extra) : ?>

                            <div class="block-extra text-body"><?php echo $block_extra; ?></div>

                    </div>
        <?php endif;
                    endwhile;
                endif; ?>

        </div>

    </section>
</main>
<?php get_footer(); ?>