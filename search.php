<?php get_header(); ?>

<main class="search">
    <div class="search-results container">
        <h1><?php printf(__('Risultati di ricerca per: %s', 'textdomain'), get_search_query()); ?></h1>

        <?php if (have_posts()) : ?>
            <div class="search-results-wrap">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="search-result-item">
                        <a href="<?php the_permalink(); ?>">
                            <p class="title-4"><?php the_title(); ?></p>
                        </a>
                        <div class="search-result-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php
                // Aggiungi la paginazione
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('Indietro', 'textdomain'),
                    'next_text' => __('Avanti', 'textdomain'),
                ));
                ?>
            </div>
        <?php else : ?>
            <div class="no-results">
                <h2><?php _e('Nessun risultato trovato', 'textdomain'); ?></h2>
                <p><?php _e('Prova a fare una nuova ricerca con termini diversi.', 'textdomain'); ?></p>
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>