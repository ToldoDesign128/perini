<?php
/* Template Name: My Account */

get_header(); ?>

<main class="account-page">
    <!-- Hero -->
    <?php get_template_part('/template-parts/hero-page'); ?>
    
    <div class="account-content container"> 
        <?php echo do_shortcode('[woocommerce_my_account]'); ?>
    </div>
</main>

<?php
get_footer();
?>