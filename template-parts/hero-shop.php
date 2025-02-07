<section class="hero-page">
    <div class="hero-page-content container">
        <h1 class="title title-1 medium">
            <?php
            if (is_shop()) {
                echo esc_html(get_the_title(get_option('woocommerce_shop_page_id')));
            } elseif (is_product_category()) {
                single_cat_title();
            } else {
                echo esc_html(get_the_title());
            }
            ?>
        </h1>
    </div>
    <span class="bg-gradient"></span>
    <?php
    $img_bg = get_field('immagine_sfondo', 6);
    if (!empty($img_bg)): ?>
        <img class="img-bg" src="<?php echo esc_url($img_bg['url']); ?>" alt="<?php the_title(); ?>" />
    <?php endif; ?>
</section>