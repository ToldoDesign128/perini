<?php

$titoletto = get_field('titoletto_testimonianze');
$titolo = get_field('titolo_testimonianze');
$recensioni = get_field('trustindex_shortcode');

if ($recensioni) : ?>

    <section class="testimonianze">
        <div class="testimonianze-wrap testimonialSwiper container">
            <p class="titoletto text-body uppercase"><?php echo esc_html($titoletto); ?></p>
            <p class="title title-3 medium"><?php echo esc_html($titoletto); ?></p>
            <div class="recensioni">
                <?php echo $recensioni; ?>
            </div>
        </div>
    </section>

<?php endif ?>