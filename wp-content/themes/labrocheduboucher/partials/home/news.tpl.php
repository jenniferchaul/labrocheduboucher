<section id="news" class="wrap-actu-accueil">
  <div class="container">
    <div class="row">
      <h2>Les actualités</h2>
    </div>

    <div id="carousel-actus" class="owl-carousel">
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
          <div class="item">
            <div class="content-actu-accueil">
              <div class="media-actu-accueil">
                <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?= esc_attr(get_the_title()); ?>">
              </div>
              <div class="text-actu-accueil">
                <h3><?= esc_html(get_the_title()); ?></h3>
                <p><?= wp_trim_words(get_the_content()); ?></p>
              </div>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      <?php else : ?>
        <p>Aucune actualité disponible.</p>
      <?php endif; ?>
    </div>

    <div class="cta">
      <a href="<?= home_url('/actualites') ?>" class="button">Toutes nos actualités</a>
    </div>
  </div>
</section>