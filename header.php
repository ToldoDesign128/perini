<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php $viewport_content = apply_filters('perini_viewport_content', 'width=device-width, initial-scale=1'); ?>
    <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#fff">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>" type="image/x-icon">

    <title>
        <?php
        if (is_front_page()) {
            bloginfo('name');
        } else {
            wp_title('');
        };
        ?>
    </title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Top Bar -->
    <section class="top-bar">
        <div class="top-bar-wrap container">
            <div class="link-wrap">

                <?php
                $icon_ind = get_field('icona_indirizzo', 'option');
                $link_ind = get_field('indirizzo', 'option');

                if ($link_ind):
                    $link_ind_url = $link_ind['url'];
                    $link_ind_title = $link_ind['title'];
                    $link_ind_target = $link_ind['target'] ? $link_ind['target'] : '_self';
                ?>

                    <div class="indirizzo">
                        <?php if ($icon_ind) : ?>
                            <img src="<?php echo esc_url($icon_ind['url']); ?>" alt="<?php echo esc_attr($icon_ind['alt']); ?>" />
                        <?php endif; ?>
                        <a class="text-small" href="<?php echo esc_url($link_ind_url); ?>" target="<?php echo esc_attr($link_ind_target); ?>"><?php echo esc_html($link_ind_title); ?></a>
                    </div>

                <?php endif;

                $icon_tel = get_field('icona_telefono', 'option');
                $link_tel_1 = get_field('telefono', 'option');
                $link_tel_2 = get_field('telefono_2', 'option');

                if ($link_tel_1) {
                    $link_tel_1_url = $link_tel_1['url'];
                    $link_tel_1_title = $link_tel_1['title'];
                    $link_tel_1_target = $link_tel_1['target'] ? $link_tel_1['target'] : '_self';
                };
                if ($link_tel_2) {
                    $link_tel_2_url = $link_tel_2['url'];
                    $link_tel_2_title = $link_tel_2['title'];
                    $link_tel_2_target = $link_tel_2['target'] ? $link_tel_2['target'] : '_self';
                };

                if ($link_tel_1 || $link_2) :
                ?>

                    <div class="telefono">
                        <?php if ($icon_tel) : ?>
                            <img src="<?php echo esc_url($icon_tel['url']); ?>" alt="<?php echo esc_attr($icon_tel['alt']); ?>" />
                        <?php endif; ?>
                        <div class="telefono-link">
                            <?php if ($link_tel_1) : ?>
                                <a class="text-small" href="<?php echo esc_url($link_tel_1_url); ?>" target="<?php echo esc_attr($link_tel_1_target); ?>"><?php echo esc_html($link_tel_1_title); ?></a>
                            <?php endif;
                            if ($link_tel_2) : ?>
                                <a class="text-small" href="<?php echo esc_url($link_tel_2_url); ?>" target="<?php echo esc_attr($link_tel_2_target); ?>"><?php echo esc_html($link_tel_2_title); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endif; ?>

            </div>
            <div class="link-page">

                <?php
                $link_1 = get_field('link_1', 'option');
                if ($link_1):
                    $link_1_url = $link_1['url'];
                    $link_1_title = $link_1['title'];
                    $link_1_target = $link_1['target'] ? $link_1['target'] : '_self';
                ?>

                    <a class="link-1 text-small" href="<?php echo esc_url($link_1_url); ?>" target="<?php echo esc_attr($link_1_target); ?>"><?php echo esc_html($link_1_title); ?></a>

                <?php endif;

                $link_2 = get_field('link_2', 'option');
                if ($link_2):
                    $link_2_url = $link_2['url'];
                    $link_2_title = $link_2['title'];
                    $link_2_target = $link_2['target'] ? $link_2['target'] : '_self';
                ?>

                    <a class="link-2 text-small" href="<?php echo esc_url($link_2_url); ?>" target="<?php echo esc_attr($link_2_target); ?>"><?php echo esc_html($link_2_title); ?></a>

                <?php endif;

                $link_cta = get_field('link_preventivo', 'option');
                if ($link_cta):
                    $link_cta_url = $link_cta['url'];
                    $link_cta_title = $link_cta['title'];
                    $link_cta_target = $link_cta['target'] ? $link_cta['target'] : '_self';
                ?>

                    <a class="cta" href="<?php echo esc_url($link_cta_url); ?>" target="<?php echo esc_attr($link_cta_target); ?>"><?php echo esc_html($link_cta_title); ?></a>

                <?php endif;

                if (have_rows('repeater_social', 'option')): ?>
                    <ul class="social">

                        <?php
                        // Loop through rows.
                        while (have_rows('repeater_social', 'option')) : the_row();

                            // Load sub field value.
                            $icon_social = get_sub_field('icona_social', 'option');
                            $link_social = get_sub_field('link_social', 'option');

                            if ($link_social):
                                $link_social_url = $link_social['url'];
                                $link_social_title = $link_social['title'];
                                $link_social_target = $link_social['target'] ? $link_social['target'] : '_self'; ?>

                                <li class="social-link">
                                    <a href="<?php echo esc_url($link_social_url); ?>" target="<?php echo esc_attr($link_social_target); ?>">
                                        <?php if ($icon_social) : ?>
                                            <img src="<?php echo esc_url($icon_social['url']); ?>" alt="<?php echo esc_attr($icon_social['alt']); ?>" />
                                        <?php endif; ?>
                                    </a>
                                </li>

                        <?php
                            endif;
                        // End loop.
                        endwhile; ?>

                    </ul>
                <?php
                endif; ?>

            </div>
        </div>
    </section>
    <!-- Header -->
    <header>
        <div class="header-wrap container">
            <a href="<?php echo home_url(); ?>" class="header-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo.png" alt="Logo">
            </a>
            <nav class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav-menu',
                    'walker' => new Custom_Walker_Nav_Menu()
                ));
                ?>
            </nav>

            <div class="header-extras">
                <!-- Sezione di ricerca -->
                <div class="header-search">
                    <?php get_search_form(); ?>
                </div>

                <!-- Icone di wishlist e carrello -->
                <div class="header-icons">
                    <a href="<?php echo esc_url(get_permalink(get_option('yith_wcwl_wishlist_page_id'))); ?>" class="header-icon">
                        <i class="fas fa-heart"></i>
                    </a>
                    <a href="<?php echo wc_get_cart_url(); ?>" class="cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                    </a>
                </div>
            </div>

            <div id="hamburgerBtn" class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <div id="mobileMenu" class="mobile-panel">
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav-menu',
                'walker' => new Custom_Walker_Nav_Menu()
            ));
            ?>
        </nav>

        <div class="header-extras">
            <!-- Sezione di ricerca -->
            <div class="header-search">
                <?php get_search_form(); ?>
            </div>

            <div class="mobile-shop">
                <?php
                $link_2 = get_field('link_2', 'option');
                if ($link_2):
                    $link_2_url = $link_2['url'];
                    $link_2_title = $link_2['title'];
                    $link_2_target = $link_2['target'] ? $link_2['target'] : '_self';
                ?>

                    <a class="link-2 text-small" href="<?php echo esc_url($link_2_url); ?>" target="<?php echo esc_attr($link_2_target); ?>"><?php echo esc_html($link_2_title); ?></a>

                <?php endif; ?>

                <!-- Icone di wishlist e carrello -->
                <div class="header-icons">
                    <a href="<?php echo esc_url(get_permalink(get_option('yith_wcwl_wishlist_page_id'))); ?>" class="header-icon">
                        <i class="fas fa-heart"></i>
                    </a>
                    <a href="<?php echo wc_get_cart_url(); ?>" class="cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                    </a>
                </div>
            </div>

        </div>
    </div>