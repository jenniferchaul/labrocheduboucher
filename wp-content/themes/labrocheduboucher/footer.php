<footer class="footer">
    <div class="footer__container">
        <!-- Logo -->
        <div class="footer__logo">
            <img src="<?= get_theme_file_uri('assets/images/logo.webp') ?>" alt="Logo du restaurant">
        </div>

        <div class="footer__main-info">
            <!-- Informations -->
            <div class="footer__info">
                <div class="footer__info-item">
                    <i class="fas fa-phone-alt footer__icon"></i>
                    <p><a href="tel:+33612345678">06 12 34 56 78</a></p>
                </div>
                <div class="footer__info-item">
                    <i class="fas fa-envelope footer__icon"></i>
                    <p><a href="mailto:contact@labrocheduboucher.com">contact@labrocheduboucher.com</a></p>
                </div>
                <div class="footer__info-item">
                    <i class="fas fa-map-marker-alt footer__icon"></i>
                    <p>1427 Rue des Guérins, 69840 CENVES</p>
                </div>
            </div>

            <!-- Réseaux sociaux -->
            <div class="footer__socials">
                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>


            <!-- Liens d'accès rapides -->
            <nav class="footer__links">
                <a href="<?php echo home_url('/présentation'); ?>">Présentation</a>
                <a href="<?php echo home_url('/services'); ?>">Nos prestations</a>
                <a href="<?php echo home_url('/actualités'); ?>">Actualités</a>
                <a href="<?php echo home_url('/contact'); ?>">Contact</a>
            </nav>

        </div>

        <!-- Mentions légales et copyright -->
        <div class="footer__legal">
            <p>© Copyright 2024 la Broche du Boucher. Tous droits réservés.</p>
            <nav>
                <a href="<?php echo home_url('/mentions-legales'); ?>">Mentions légales</a>
                -
                <a href="<?php echo home_url('/politique-confidentialite'); ?>">Politique de confidentialité</a>
            </nav>
            <p>
                <a href="www.jcdevandcode.fr">Site web crée par jc dev&code</a>
            </p>
        </div>

    </div>
</footer>

<div id="back-to-top">
    <i class="fas fa-arrow-up"></i>
</div>


<?php wp_footer(); ?>
</body>

</html>