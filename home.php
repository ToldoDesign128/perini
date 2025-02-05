<?php
get_header(); ?>
<main class="blog">
    <!-- Hero -->
    <?php get_template_part('/template-parts/hero-blog'); ?>
    <!-- Blog Content -->
    <section class="blog-content container">
        <div class="blog-wrap">
            <div class="post-block">
                <?php /* Custom Loop */

                $custom_loop = new WP_Query(array(
                    'post_type'     => 'post',
                    'posts_per_page' => -1,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                )); ?>

                <?php if ($custom_loop->have_posts()) : while ($custom_loop->have_posts()) : $custom_loop->the_post(); ?>

                        <div class="post-item" data-category="<?php echo esc_attr(get_the_category()[0]->slug); ?>">
                            <?php the_post_thumbnail('large', array('class' => '', 'alt' => get_the_title())); ?>
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>

                        <?php wp_reset_postdata(); ?>
                <?php endwhile;
                endif; ?>
            </div>
            <div class="category">
                <h4 class="cat-title title-3 medium">Categorie</h4>
                <ul class="cat-list">
                    <li><a href="#" class="category-filter" data-category="all">Tutti i post</a></li>
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        echo '<li><a href="#" class="category-filter" data-category="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

<script>
jQuery(document).ready(function($) {
    $('.category-filter').on('click', function(e) {
        e.preventDefault();
        var category = $(this).data('category');
        if (category === 'all') {
            $('.post-item').show();
        } else {
            $('.post-item').hide();
            $('.post-item[data-category="' + category + '"]').show();
        }
    });
});
</script>