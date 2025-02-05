<section class="hero-page">
    <div class="hero-page-content container">
        <h1 class="title title-1 medium">
            <?php echo get_the_title( get_option('page_for_posts', true) ) ?>
        </h1>
    </div>
    <span class="bg-gradient"></span>
    <?php
    $img_bg = get_field('immagine_sfondo', 5395);
    if (!empty($img_bg)): ?>
        <img class="img-bg" src="<?php echo esc_url($img_bg['url']); ?>" alt="<?php the_title(); ?>" />
    <?php endif; ?>
</section>