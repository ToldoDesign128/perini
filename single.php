<?php
get_header(); ?>
<main class="post-blog">
    <!-- Hero -->
    <?php get_template_part('/template-parts/hero-single'); ?>
    <!-- Post Content -->
    <section class="post-content container">
        <div class="post-wrap">
            <?php the_content();?>
        </div>
        <div class="post-tags">
            <?php
            $post_tags = get_the_tags();
            if ($post_tags) {
                echo '<h4>Tags:</h4>';
                echo '<ul class="tags-list">';
                foreach ($post_tags as $tag) {
                    echo '<li>' . esc_html($tag->name) . '</li>';
                }
                echo '</ul>';
            }
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>