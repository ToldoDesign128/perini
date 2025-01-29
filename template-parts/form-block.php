<section class="form-block">
    <div class="form-wrap container">

        <?php
        $titoletto = get_field('titoletto_form');
        $titolo = get_field('titolo_form');
        $form = get_field('form');

        if ($titoletto) : ?>

            <p class="form-titoletto text-body uppercase">
                <?php echo esc_html($titoletto); ?>
            </p>
        <?php endif;
        if ($titolo) : ?>
            <div class="form-title title-3 medium">
                <?php echo $titolo; ?>
            </div>
        <?php endif;
        if ($form) : ?>
            <div class="form-content">
                <?php echo $form; ?>
            </div>
        <?php endif; ?>
    </div>
</section>