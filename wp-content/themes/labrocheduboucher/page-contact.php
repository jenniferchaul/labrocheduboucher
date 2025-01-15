<?php
/*
Template Name: Contact
*/

get_header();
?>

<section class="contact-page">

    <h1>Contact</h1>

    <p class="contact-intro"><strong>La Broche du Boucher</strong> se déplace dans toute la <strong>France</strong>, avec une forte présence en <strong>Auvergne-Rhône-Alpes</strong> et <strong>Bourgogne-Franche-Comté</strong>. Contactez-nous pour organiser un événement mémorable, où que vous soyez !</p>

    <div class="main-form">
        <div class="contact-details">
            <h3>Nos coordonnées</h3>
            <p><strong>Adresse :</strong> 1427 Rue des Guérins, 69840 CENVES</p>
            <p><strong>Téléphone :</strong> 06 29 84 15 79</p>
            <p><strong>Horaires :</strong> Du lundi au samedi de 09h00 à 19h00.</p>
            <p><strong>Email :</strong> labrocheduboucher@gmail.com</p>
        </div>

        <div class="contact-form">
            <h3>Demandez votre devis</h3>
            <?php echo do_shortcode('[contact-form-7 id="eccba69" title="Contact form 1"]'); ?>
        </div>
    </div>

    <div class="map-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2756.510344855554!2d4.655109475848899!3d46.299701177307256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f377a248c4a9bb%3A0x37855f6be04c26f1!2sLa%20Broche%20du%20Boucher!5e0!3m2!1sfr!2sfr!4v1736277954241!5m2!1sfr!2sfr"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>


</section>

<?php
get_footer();
?>