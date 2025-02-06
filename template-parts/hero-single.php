<section class="hero-page">
    <div class="hero-page-content container">
        <h1 class="title title-1 medium">
            <?php the_title(); ?>
        </h1>
    </div>
    <span class="bg-gradient"></span>
    <?php the_post_thumbnail('full', array('class' => 'img-bg', 'alt' => get_the_title())); ?>
</section>