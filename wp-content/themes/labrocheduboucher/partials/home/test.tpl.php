<section class="actus">

    <h2>Actualités</h2>

    <div class="actu-container">
        <?php
        $args = array(
            'post_type' => 'actualite',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <article>

                    <div class="actu-item">
                        <div class="img-box">
                            <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?= esc_attr(get_the_title()); ?>">
                        </div>

                        <div class="actu-description">
                            <div class="actu-title">
                                <h3><?= esc_html(get_the_title()); ?></h3>
                            </div>

                            <div class="actu-text">
                                <p><?= esc_html(get_the_content()); ?></p>
                            </div>
                        </div>
                    </div>

                <?php endwhile;
            wp_reset_postdata(); ?>
            <?php else : ?>
                <p>Aucune actualité disponible.</p>
            <?php endif; ?>


                </article>
    </div>
</section>