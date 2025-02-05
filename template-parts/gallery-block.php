<section class="gallery-block container">
    <?php
    if (have_rows('repeater_blocchi')):
        while (have_rows('repeater_blocchi')) : the_row();
            $block_title = get_sub_field('titolo_gallery');
            $block_text = get_sub_field('testo_gallery');
            $images = get_sub_field('gallery'); ?>

            <div class="gallery-group">
                <?php if ($block_title) : ?>
                    <p class="title-gallery title-3 medium">
                        <?php echo esc_html($block_title); ?>
                    </p>
                <?php endif;
                if ($block_text) : ?>
                    <p class="text-gallery text-body">
                        <?php echo esc_html($block_text); ?>
                    </p>
                <?php endif;
                $size = 'full';
                if ($images): ?>
                    <ul class="gallery-list" id="hgblu-gallery">
                        <?php foreach ($images as $image): ?>
                            <li class="gallery-item">
                                <a data-fslightbox="gallery" href="<?php echo esc_url($image['url']); ?>" data-pswp-width="<?php echo $image['width'] ?>" data-pswp-height="<?php echo $image['height'] ?>">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
    <?php
        endwhile;
    endif; ?>
</section>

<script type="text/javascript">
    import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe/dist/photoswipe-lightbox.esm.js';

    const lightbox = new PhotoSwipeLightbox({
        gallery: '#hgblu-gallery',
        children: 'a',
        pswpModule: () => import('https://unpkg.com/photoswipe'),
    });

    lightbox.init();
    singleLightbox.init();
</script>