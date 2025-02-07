<?php
get_header(); ?>
<main class="woocommerce">
    <!-- Hero -->
    <?php get_template_part('/template-parts/hero-shop'); ?>
    <!-- Content -->
    <section class="">
        <div class="woocommerce-content container">
            <?php woocommerce_content(); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>