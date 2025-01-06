<?php
/*
Template Name: Contact
*/

get_header();
?>

<section class="contact-page">

    <h2>Contact</h2>

    <div class="main-form">
        <div class="contact-details">
            <h3>Nos coordonnées</h3>
            <p><strong>Adresse :</strong> 1427 Rue des Guérins, 69840 CENVES</p>
            <p><strong>Téléphone :</strong> 06 29 84 15 79</p>
            <p><strong>Horaires :</strong> Du lundi au samedi de 09h00 à 19h00.</p>
        </div>

        <div class="contact-form">
            <h3>Demandez votre devis</h3>
            <?php echo do_shortcode('[contact-form-7 id="eccba69" title="Contact form 1"]'); ?>
        </div>

    </div>

    <div class="google-map">
        [wp_google_maps id="1"]
    </div>

</section>

<?php
get_footer();
?>