<?php
get_header(); ?>
<main class="archive-product">

    <div class="container">
        <h1>Archivio</h1>
        <?php
        if (woocommerce_product_loop()) {
            woocommerce_output_all_notices();
            woocommerce_result_count();
            woocommerce_catalog_ordering();
            woocommerce_product_loop_start();

            if (wc_get_loop_prop('total')) {
                while (have_posts()) {
                    the_post();
                    do_action('woocommerce_shop_loop');
                    wc_get_template_part('content', 'product');
                }
            }

            woocommerce_product_loop_end();
            woocommerce_pagination();
        } else {
            do_action('woocommerce_no_products_found');
        }
        ?>
    </div>

</main>
<?php get_footer(); ?>