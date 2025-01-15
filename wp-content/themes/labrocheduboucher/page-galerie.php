<?php
/*
Template Name: Galerie
*/

get_header();
?>

<section class="gallery-page">

    <h1>Galerie</h1>

    <div class="gallery-filters">
        <button class="filter-btn active" data-category="toutes">Toutes</button>
        <button class="filter-btn" data-category="boeuf">Boeuf</button>
        <button class="filter-btn" data-category="porc">Porc</button>
        <button class="filter-btn" data-category="agneau">Agneau</button>
        <button class="filter-btn" data-category="accompagnement">Autres</button>
    </div>

    <div class="gallery-container">
        <!-- Les images seront insérées ici via AJAX -->
    </div>

</section>

<?php
get_footer();
?>