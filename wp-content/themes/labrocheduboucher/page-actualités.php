<?php
/*
Template Name: Actualités
*/

get_header();
?>

<?php get_template_part('partials/actualités/hero.tpl'); ?>

<section id="actualites" class="wrap-actualites">

  <h2>Les actualités</h2>

  <p><strong>Les actualités </strong> de La Broche du Boucher : découvrez nos derniers événements et restez informés de toutes nos nouveautés et services.</p>

  <div id="actualites-container" class="actualites-container">
    <!-- Les actualités seront chargées ici via AJAX -->
    <?php
    // Initialisation de la requête avec tri par défaut (date_desc)
    $args = array(
      'post_type' => 'actualite',
      'posts_per_page' => -1,
      'orderby' => 'date',
      'order' => 'DESC',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post(); ?>
        <article class="actualite-item">
          <div class="img-box">
            <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?= esc_attr(get_the_title()); ?>">
          </div>
          <div class="actualite-description">
            <h3><?= esc_html(get_the_title()); ?></h3>
            <p><?= wp_trim_words(get_the_content()); ?></p>
          </div>
        </article>
      <?php endwhile;
      wp_reset_postdata(); ?>
    <?php else : ?>
      <p>Aucune actualité disponible.</p>
    <?php endif; ?>
  </div>
  </div>
</section>

<?php
get_footer();
?>