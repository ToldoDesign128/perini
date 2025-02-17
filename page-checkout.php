<?php

/**
 * Template Name: Checkout
 */

get_header(); ?>

<main class="checkout-page">
    <section class="checkout-content container">
        <?php
        // Verifica se WooCommerce è attivo
        if (class_exists('WooCommerce')) {
            // Mostra il modulo di checkout
            echo do_shortcode('[woocommerce_checkout]');
        } else {
            echo '<p>WooCommerce non è attivo.</p>';
        }
        ?>
    </section>
</main>

<?php get_footer(); ?>