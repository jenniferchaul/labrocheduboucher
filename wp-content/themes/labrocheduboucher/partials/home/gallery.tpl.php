<section class="gallery-preview">
    <h2>Galerie</h2>
    <div class="gallery-grid">
        <?php
        $gallery_args = array(
            'post_type'      => 'gallery',
            'posts_per_page' => 6, // Limite à 6 images
            'orderby'        => 'date',
            'order'          => 'DESC',
        );
        $gallery_query = new WP_Query($gallery_args);

        if ($gallery_query->have_posts()) :
            while ($gallery_query->have_posts()) : $gallery_query->the_post(); ?>
                <a href="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" data-lightbox="gallery" data-title="<?= esc_html(get_the_title()); ?>">
                    <div class="gallery-item">
                        <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?= esc_attr(get_the_title()); ?>">
                    </div>
                </a>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Aucune image disponible pour la galerie.</p>';
        endif;
        ?>
    </div>

    <div class="cta">
        <a class="button" href="<?= home_url('/galerie'); ?>" class="button">Voir toute la galerie</a>
    </div>
</section>
