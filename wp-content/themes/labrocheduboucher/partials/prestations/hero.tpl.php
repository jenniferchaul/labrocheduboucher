<?php
$backgroundImage = get_theme_mod('hero-picture');

$style = '';
if ($backgroundImage) {
    $style = 'background:' .
        'url(' . $backgroundImage . ')';
}


?>

<section class="hero" style="<?= $style; ?>">

    <p class="hero-part title">
    Découvrez Nos Prestations
        <!--Un savoir-faire unique.-->
    </p>

    <p class="hero-part content">
    Des viandes de qualité et des spécialités maison pour vos événements.
    </p>

    <div class="cta">
        <a class="button">Contactez-nous</a>
    </div>
</section>