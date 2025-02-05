<?php
/*
  *
  * Template Name: Gallery
  *
  */
get_header(); ?>
<main class="gallery">
    <!-- Hero -->
    <?php get_template_part('/template-parts/hero-page'); ?>
    <!-- Gallery Content -->
    <?php get_template_part('/template-parts/gallery-block'); ?>
</main>
<?php get_footer(); ?>