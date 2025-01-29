<?php
get_header(); ?>
<main class="front-page">
    <!-- Hero Block -->
    <?php get_template_part('/template-parts/page/hero-home'); ?>
    <!-- Block Content -->
    <section class="content container">
        <div class="banner">
            <?php
            $image_banner_1 = get_field('immagine_banner_brand_1');
            if (!empty($image_banner_1)): ?>

                <img src="<?php echo esc_url($image_banner_1['url']); ?>" alt="<?php echo esc_attr($image_banner_1['alt']); ?>" />

            <?php endif;
            $banner_title = get_field('testo_banner_brand');
            if (!empty($banner_title)): ?>

                <h3 class="banner-title title-4 medium"><?php echo $banner_title; ?></h3>

            <?php endif;
            $image_banner_1 = get_field('immagine_banner_brand_2');
            if (!empty($image_banner_1)): ?>

                <img src="<?php echo esc_url($image_banner_1['url']); ?>" alt="<?php echo esc_attr($image_banner_1['alt']); ?>" />

            <?php endif; ?>
        </div>
        <div class="chi-siamo">
            <div class="chi-siamo-info">
                <?php
                $about_titoletto = get_field('titoletto_chi_siamo');
                if (!empty($about_titoletto)): ?>
                    <h4 class="about-titoletto title-6"><?php echo $about_titoletto; ?></h4>
                <?php endif;
                $about_titolo = get_field('titolo_chi_siamo');
                if (!empty($about_titolo)): ?>
                    <p class="about-titolo title-3 medium"><?php echo $about_titolo; ?></p>
                <?php endif;
                $about_text = get_field('testo_chi_siamo');
                if (!empty($about_text)): ?>
                    <div class="about-text text-body">
                        <?php echo $about_text; ?>
                    </div>
                <?php endif;
                $about_quote = get_field('frase_chi_siamo');
                if (!empty($about_quote)): ?>
                    <div class="about-quote title-5 medium">
                        <?php echo $about_quote; ?>
                    </div>
                <?php endif;

                $cta_about = get_field('cta_chi_siamo');
                if ($cta_about):
                    $cta_about_url = $cta_about['url'];
                    $cta_about_title = $cta_about['title'];
                    $cta_about_target = $cta_about['target'] ? $cta_about['target'] : '_self';
                ?>
                    <a class="btn" href="<?php echo esc_url($cta_about_url); ?>" target="<?php echo esc_attr($cta_about_target); ?>"><?php echo esc_html($cta_about_title); ?></a>
                <?php endif; ?>
            </div>
            <div class="video">
                <?php
                $video_url = get_field('video_chi_siamo');
                if (!empty($video_url)): ?>
                    <iframe width="560" height="315" src="<?php echo esc_url($video_url); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Banner Number -->
    <section class="number">
        <ul class="number-wrap container">
            <?php
            if (have_rows('repeater_punti')):
                while (have_rows('repeater_punti')) : the_row();
                    $img_number = get_sub_field('icona');
                    $title_number = get_sub_field('titolo');
                    $value_number = get_sub_field('valore');
                    $text_number = get_sub_field('descrizione'); ?>

                    <li class="repeater-item">
                        <img src="<?php echo esc_url($img_number['url']); ?>" alt="<?php echo esc_attr($img_number['alt']); ?>" />
                        <h4 class="title title-4 medium"><?php echo $title_number; ?></h4>
                        <span class="value title-2 medium"><?php echo $value_number; ?></span>
                        <p class="text text-body"><?php echo $text_number; ?></p>
                    </li>

            <?php
                endwhile;
            endif; ?>
        </ul>
    </section>
    <!-- Loop Prodotti -->
    <section class="prodotti container">
        <div class="prodotti-intro">
            <?php
            $prodotti_titoletto = get_field('titoletto_prodotti');
            if (!empty($prodotti_titoletto)): ?>
                <h5 class="prodotti-titoletto title-6"><?php echo $prodotti_titoletto; ?></h5>
            <?php endif;
            $prodotti_titolo = get_field('titolo_prodotti');
            if (!empty($prodotti_titolo)): ?>
                <p class="prodotti-titolo title-3 medium"><?php echo $prodotti_titolo; ?></p>
            <?php endif; ?>
        </div>
        <div class="prodotti-loop">
            <?php
            $args = array(
                'limit' => 4,
                'status' => 'publish',
                'featured' => true
            );

            $featured_products = wc_get_products($args);

            if (!empty($featured_products)) {
                woocommerce_output_all_notices();
                woocommerce_result_count();
                woocommerce_catalog_ordering();
                woocommerce_product_loop_start();

                foreach ($featured_products as $product) {
                    $post_object = get_post($product->get_id());
                    setup_postdata($GLOBALS['post'] = &$post_object);
                    wc_get_template_part('content', 'product');
                }

                woocommerce_product_loop_end();
                woocommerce_pagination();
                wp_reset_postdata();
            } else {
                do_action('woocommerce_no_products_found');
            }
            ?>
        </div>
    </section>
    <!-- Testimonianze Block -->
    <?php get_template_part('/template-parts/testimonianze-block'); ?>
    <!-- Loop Post -->
    <section class="post container">

        <?php
        //    get_template_part('/template-parts/page/facebook-block');
        ?>

        <div class="post-block">
            <div class="post-intro">
                <?php
                $post_titoletto = get_field('titoletto_news');
                if (!empty($post_titoletto)): ?>
                    <h5 class="post-titoletto title-6"><?php echo $post_titoletto; ?></h5>
                <?php endif;
                $post_titolo = get_field('titolo_news');
                if (!empty($post_titolo)): ?>
                    <p class="post-titolo title-3 medium"><?php echo $post_titolo; ?></p>
                <?php endif; ?>
            </div>
            <div class="post-loop">
                <?php /* Post Loop */

                $post_loop = new WP_Query(array(
                    'post_type'     => 'post',
                    'posts_per_page' => 4,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                )); ?>

                <?php if ($post_loop->have_posts()) : ?>
                    <ul class="post-list">
                        <?php while ($post_loop->have_posts()) : $post_loop->the_post(); ?>
                            <li class="post-item">
                                <a href="<?php echo the_permalink(); ?>" class="post-link">
                                    <div class="post-img">
                                        <p class="date">
                                            <?php the_time('j M') ?>
                                        </p>
                                        <?php the_post_thumbnail('thumbnail', array('class' => '', 'alt' => get_the_title())); ?>
                                    </div>
                                    <div class="post-content">
                                        <?php
                                        $categories = get_the_category();
                                        if (!empty($categories)) {
                                            echo '<p class="post-categories">';
                                            foreach ($categories as $category) {
                                                echo esc_html($category->name) . ' ';
                                            }
                                            echo '</?php>';
                                        }
                                        ?>
                                        <p class="post-title title-4"><?php the_title(); ?></p>
                                        <p class="read-more">Leggi tutto</p>
                                    </div>
                                </a>
                            </li>

                            <?php wp_reset_postdata(); ?>
                        <?php endwhile; ?>
                    </ul>

                <?php endif; ?>
            </div>
            <div class="post-cta">
                <?php
                $link_news = get_field('link_blog');
                if ($link_news):
                    $link_news_url = $link_news['url'];
                    $link_news_title = $link_news['title'];
                    $link_news_target = $link_news['target'] ? $link_news['target'] : '_self';
                ?>
                    <a class="btn" href="<?php echo esc_url($link_news_url); ?>" target="<?php echo esc_attr($link_news_target); ?>"><?php echo esc_html($link_news_title); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Form Block -->
    <?php get_template_part('/template-parts/form-block'); ?>
    <!-- Brand Block -->
    <?php get_template_part('/template-parts/brand-block'); ?>
</main>
<?php get_footer(); ?>