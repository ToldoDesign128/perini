<?php
get_header(); ?>
<main class="single-product">
    <?php
    while (have_posts()) {
        the_post();
        wc_get_template_part('content', 'single-product');
    }
    ?>
</main>
<?php get_footer(); ?>