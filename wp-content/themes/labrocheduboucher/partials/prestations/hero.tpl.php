<?php
$backgroundImage = get_theme_mod('hero-picture');

$style = '';
if ($backgroundImage) {
    $style = 'background:' .
        'url(' . $backgroundImage . ')';
}
?>

<section class="hero" style="<?= $style; ?>">

    <h1 class="hero-part title">
        Nos Prestations
</h1>

    <p class="hero-part content">
        Nos viandes et spécialités maison.
    </p>

    <div class="cta">
        <a href="<?= home_url('/contact') ?>" class="button">Contactez-nous</a>
    </div>
</section>