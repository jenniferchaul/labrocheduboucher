<?php
/*
Template Name: Prestations
*/

get_header();
?>

<section class="hero-prestations">
    <div class="hero-content">
        <h1>Découvrez Nos Prestations</h1>
        <p>Des viandes de qualité et des recettes uniques pour vos événements.</p>
    </div>
</section>

<section class="prestations">
    <h2 class="prestations-title">Nos Prestations</h2>

    <div class="prestations-tabs">
        <h3 class="prestations-subtitle active" data-category="viandes">
            <i class="fas fa-fire"></i> Nos Viandes à la Broche
        </h3>
        <h3 class="prestations-subtitle" data-category="plats">
            <i class="fas fa-utensils"></i> Spécialités Maison
        </h3>
    </div>

    <div class="prestations-content">
        <!-- Contenu dynamique des prestations sera chargé ici -->
    </div>
</section>


<script>
    const ajaxUrl = '<?= admin_url('admin-ajax.php'); ?>';
</script>

<?php
get_footer();
?>
