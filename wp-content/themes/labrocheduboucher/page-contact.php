<?php
/*
Template Name: Contact
*/

get_header();
?>

<div class="contact-details">
    <h2>Nos coordonnées</h2>
    <p><strong>Adresse :</strong> 175 chemin Grand Fontaine, 38490 CHIMILIN</p>
    <p><strong>Téléphone :</strong> 04 76 66 82 06</p>
    <p><strong>Horaires :</strong> Du lundi au vendredi de 08h00 à 17h30.</p>
</div>

<h2>Nous contacter</h2>
<?php echo do_shortcode('[contact-form-7 id="eccba69" title="Contact form 1"]'); ?>


<div class="google-map">
    <!-- Utilise un shortcode ou un code intégré Google Maps -->
    [wp_google_maps id="1"]
</div>


<?php
get_footer();
?>
