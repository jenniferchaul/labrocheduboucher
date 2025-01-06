<!DOCTYPE html>
<html lang="<?= get_bloginfo('language'); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</head>

<body>

    <div class="top-bar">
        <div class="top-bar__container">
            <!-- Réseaux sociaux -->
            <div class="top-bar__socials">
                <a href="tel:+33612345678">
                    <i class="fas fa-phone-alt"></i>
                </a>
                <a href="mailto:contact@labrocheduboucher.com">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=61557097838150" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/labrocheduboucher/?locale=en_US%2Cen_GB" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>

    <header>
        <div class="container-menu">
            <div class="logo-menu"><a href="<?= home_url('/') ?>">
                    <img class="img-logo" src="<?= get_theme_file_uri('assets/images/logo.webp') ?>" alt="logo">
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