<div class="facebook-intro">
    <?php
    $post_titoletto = get_field('titoletto_post');
    if (!empty($post_titoletto)): ?>
        <h5 class="facebook-titoletto title-6"><?php echo $post_titoletto; ?></h5>
    <?php endif;
    $post_titolo = get_field('titolo_post');
    if (!empty($post_titolo)): ?>
        <p class="facebook-titolo title-3 medium"><?php echo $post_titolo; ?></p>
    <?php endif; ?>
</div>
<div class="facebook-loop">
</div>