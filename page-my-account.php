<?php
/* Template Name: My Account */

get_header(); ?>

<main class="site-main">
    <!-- Hero -->
    <?php get_template_part('/template-parts/hero-page'); ?>
    
    <div class="container">
        <?php echo do_shortcode('[woocommerce_my_account]'); ?>
    </div>
</main>

<?php
get_footer();
?>