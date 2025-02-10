<?php
/* Template Name: Cart */

get_header(); ?>

<main class="carrello">
    <!-- Hero -->
    <?php get_template_part('/template-parts/hero-page'); ?>
    <div class="cart-content container">
        <?php echo do_shortcode('[woocommerce_cart]'); ?>
    </div>
</main>

<?php
get_footer();
?>