<?php
get_header(); ?>
<main class="general-page">
    <!-- Hero -->
    <?php get_template_part('/template-parts/hero-page'); ?>
    <!-- Page Content -->
    <section class="page-content">
        <div class="content-wrap container">
            <?php
            $page_content = get_field('page_content');
            if ($page_content) : ?>
                <div class="block-content">
                    <?php echo $page_content; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>