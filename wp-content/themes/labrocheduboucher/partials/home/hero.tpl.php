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
        L’Art de la viande à la broche
        <!--Un savoir-faire unique.-->
    </p>

    <p class="hero-part content">
        Découvrez notre savoir-faire
    </p>

    <div class="cta">
        <a class="button">Contactez-nous</a>
    </div>
</section>