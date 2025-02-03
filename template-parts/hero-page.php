<section class="hero-page">
    <div class="hero-page-content container">
        <h1 class="title title-1 medium">
            <?php
            $title = get_field('titolo_hero');
            if ($title) {
                echo $title;
            }; ?>
        </h1>
    </div>
    <span class="bg-gradient"></span>
    <?php
    $img_bg = get_field('immagine_sfondo');
    if (!empty($img_bg)): ?>
        <img class="img-bg" src="<?php echo esc_url($img_bg['url']); ?>" alt="<?php the_title(); ?>" />
    <?php endif; ?>
</section>