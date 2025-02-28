<?php
/* Template Name: Cart */

get_header(); ?>

<main class="carrello">
    <div class="cart-content container">
        <?php echo do_shortcode('[woocommerce_cart]'); ?>
    </div>
</main>

<?php
get_footer();
?>