<!DOCTYPE html>
<html lang="<?= get_bloginfo('language'); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Balise Titre -->
    <title>Traiteur à la broche - Rhône-Alpes & Bourgogne | La Broche du Boucher</title>

    <!-- Meta Description -->
    <meta name="description" content="La Broche du Boucher, traiteur spécialiste de la cuisson à la broche en Rhône-Alpes, Bourgogne, et partout en France. Mariages, fêtes privées, séminaires.">

    <!-- Meta Keywords (facultatif, mais peut aider légèrement) -->
    <meta name="keywords" content="traiteur cuisson à la broche, viande à la broche, traiteur événementiel, animation culinaire, mariage, fête privée, séminaire, viande au feu de bois">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.labrocheduboucher.fr">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="La Broche du Boucher - Traiteur cuisson viande à la broche">
    <meta property="og:description" content="Découvrez La Broche du Boucher, spécialiste de la cuisson à la broche pour vos événements : mariage, séminaire, fêtes privées. Contactez-nous pour un service de traiteur sur mesure !">
    <meta property="og:image" content="<?= get_theme_file_uri('assets/images/logo.webp'); ?>">
    <meta property="og:url" content="<?= home_url(); ?>">
    <meta property="og:type" content="website">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GS803MP2NR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-GS803MP2NR');
    </script>

    <?php wp_head(); ?>

</head>

<body>

    <div class="top-bar">
        <div class="top-bar__container">
            <!-- Réseaux sociaux -->
            <div class="top-bar__socials">
                <a href="tel:+33629841579">
                    <i class="fas fa-phone-alt"></i>
                </a>
                <a href="mailto:labrocheduboucher@gmail.com">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=61557097838150" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/labrocheduboucher/?locale=en_US%2Cen_GB" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>

    <header>
        <div class="container-menu">
            <div class="logo-menu"><a href="<?= home_url('/') ?>">
                    <img class="img-logo" src="<?= get_theme_file_uri('assets/images/logo.webp') ?>" alt="logo la Broche du Boucher">
                </a>
            </div>

            <div class="toggle-menu" id="menuToggle">
                <div class="icon-span"></div>
                <svg x="0" y="0" width="54px" height="54px" viewBox="0 0 54 54">
                    <circle cx="27" cy="27" r="26"></circle>
                </svg>
            </div>

            <nav class="menu">
                <ul class="main-menu">
                    <li class="menu-item">
                        <a class="item-link" href="<?= home_url('/') ?>">Accueil</a>
                    </li>
                    <li class="menu-item">
                        <a class="item-link" href="<?= home_url('/#intro') ?>">Présentation</a>
                    </li>
                    <li class="menu-item">
                        <a class="item-link" href="<?= home_url('/prestations') ?>">Nos prestations</a>
                    </li>
                    <li class="menu-item">
                        <a class="item-link" href="<?= home_url('/actualites') ?>">Actualités</a>
                    </li>
                    <li class="menu-item">
                        <a class="item-link" href="<?= home_url('/galerie') ?>">Galerie</a>
                    </li>
                    <!--<li class="menu-item reviews">
                    <a class="item-link" href="<?= home_url('/#reviews') ?>">Avis clients</a>
                    </li>-->
                    <li class="menu-item">
                        <a class="item-link" href="<?= home_url('/contact') ?>">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>