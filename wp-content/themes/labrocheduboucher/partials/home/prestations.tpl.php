<section id="prestations" class="prestations">
    <h2 class="prestations-title">Nos Prestations</h2>

    <!-- Viandes à la Broche -->
    <h3 class="prestations-subtitle"><i class="fas fa-fire"></i>Nos Viandes à la Broche</h3>
    <div class="prestations-list">
        <?php
        $viandes_args = array(
            'post_type' => 'prestation',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'type_prestation',
                    'field'    => 'slug',
                    'terms'    => 'viandes-a-la-broche',
                ),
            ),
        );
        $viandes_query = new WP_Query($viandes_args);

        if ($viandes_query->have_posts()) :
            while ($viandes_query->have_posts()) : $viandes_query->the_post(); ?>
                <div class="prestation">
                    <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?= esc_attr(get_the_title()); ?>" class="prestation-img">
                    <div class="prestation-description">
                        <h4><?= esc_html(get_the_title()); ?></h4>
                        <p><?= esc_html(get_the_content()); ?></p>
                    </div>
                </div>
        <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Aucune prestation disponible pour les viandes à la broche.</p>';
        endif;
        ?>
    </div>

    <div class="cta">
        <a class="button" href="<?= home_url('/prestations') ?>">Toutes nos viandes</a>
    </div>

    <!-- Paella et Accompagnements -->
    <h3 class="prestations-subtitle"><i class="fas fa-utensils"></i>Spécialités Maison</h3>
    <div class="prestations-list">
        <?php
        $paella_args = array(
            'post_type' => 'prestation',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'type_prestation',
                    'field'    => 'slug',
                    'terms'    => 'paella-et-accompagnements',
                ),
            ),
        );
        $paella_query = new WP_Query($paella_args);

        if ($paella_query->have_posts()) :
            while ($paella_query->have_posts()) : $paella_query->the_post(); ?>
                <div class="prestation">
                    <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?= esc_attr(get_the_title()); ?>" class="prestation-img">
                    <div class="prestation-description">
                        <h4><?= esc_html(get_the_title()); ?></h4>
                        <p><?= esc_html(get_the_content()); ?></p>
                    </div>
                </div>
        <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Aucune prestation disponible pour la paella et les accompagnements.</p>';
        endif;
        ?>
    </div>

    <div class="cta">
        <a class="button" href="<?= home_url('/prestations') ?>">Toutes nos spécialités maison</a>
    </div>
</section>