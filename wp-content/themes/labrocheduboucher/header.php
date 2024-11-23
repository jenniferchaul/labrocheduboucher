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
</head>

<body>

    <header>
        <div class="container-menu">
            <div class="logo-menu">
                <img class="img-logo" src="<?= get_theme_file_uri('assets/images/logo.webp') ?>" alt="logo">
            </div>
            <div class="toggle-menu">
                <span class="svg-container">
                    <svg version="1.1" class="burger-menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
                        <rect class="burger-menu top" width="512" height="102"></rect>
                        <rect class="burger-menu middle" y="205" width="512" height="102"></rect>
                        <rect class="burger-menu bottom" y="410" width="512" height="102"></rect>
                    </svg>
                </span>
            </div>

            <nav class="menu">
                <ul class="main-menu">
                    <li class="menu-item">Accueil</li>
                    <li class="menu-item">Présentation</li>
                    <li class="menu-item">Nos prestations</li>
                    <li class="menu-item">Actualités</li>
                    <li class="menu-item">Galerie</li>
                    <li class="menu-item">Avis clients</li>
                    <li class="menu-item">Contact</li>
                </ul>
            </nav>
        </div>
    </header>