document.addEventListener('DOMContentLoaded', function() {
    // Gestion du menu toggle
    const toggleMenuButton = document.querySelector('.toggle-menu');
    const menu = document.querySelector('.menu');
    const burgerIcon = document.querySelector('.burger-menu');

    if (toggleMenuButton) {
        toggleMenuButton.addEventListener('click', function() {
            if (menu) menu.classList.toggle('active');
            if (burgerIcon) burgerIcon.classList.toggle('active');
            toggleMenuButton.classList.toggle('is-opened');
        });
    }

    // Gestion du bouton "Back to Top"
    const backToTop = document.getElementById('back-to-top');
    if (backToTop) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        backToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Gestion des onglets "Prestations"
    const tabs = document.querySelectorAll('.prestations-subtitle');
    const prestationsContent = document.querySelector('.prestations-content');

    if (tabs.length && prestationsContent) {
        function fetchPrestations(category) {
            prestationsContent.innerHTML = '<p>Chargement...</p>';

            fetch(`${ajaxUrl}?action=get_prestations&category=${category}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        prestationsContent.innerHTML = data.data.html;
                    } else {
                        prestationsContent.innerHTML = '<p>Impossible de charger les prestations. Veuillez réessayer plus tard.</p>';
                    }
                })
                .catch(() => {
                    prestationsContent.innerHTML = '<p>Erreur lors du chargement. Réessayez plus tard.</p>';
                });
        }

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                const category = tab.dataset.category;
                fetchPrestations(category);
            });
        });

        // Par défaut, afficher les viandes
        fetchPrestations('viandes');
    }

    // Gestion de l'entête sticky
    const header = document.querySelector('header');
    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        });
    }

    // Gestion des filtres de galerie
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryContainer = document.querySelector('.gallery-container');

    if (filterButtons.length && galleryContainer) {
        function loadGalleryImages(category) {
            galleryContainer.innerHTML = '<p>Chargement...</p>';

            fetch(`${ajaxUrl}?action=get_gallery_images&category=${category}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        galleryContainer.innerHTML = '';
                        data.data.images.forEach(image => {
                            const imgElement = document.createElement('div');
                            imgElement.classList.add('gallery-item');
                            imgElement.innerHTML = `
                                <a href="${image.url}" data-lightbox="gallery">
                                    <img src="${image.thumbnail}" alt="${image.alt}">
                                </a>
                            `;
                            galleryContainer.appendChild(imgElement);
                        });
                    } else {
                        galleryContainer.innerHTML = '<p>Impossible de charger les images. Essayez plus tard.</p>';
                    }
                })
                .catch(() => {
                    galleryContainer.innerHTML = '<p>Erreur de chargement. Réessayez plus tard.</p>';
                });
        }

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                const category = this.dataset.category;
                loadGalleryImages(category);
            });
        });

        // Par défaut, afficher toutes les images
        loadGalleryImages('toutes');
    }
});

// Initialisation du carousel avec jQuery
jQuery(document).ready(function () {
    const $carousel = jQuery("#carousel-actus");

    if ($carousel.length) {
        if ($carousel.hasClass("owl-loaded")) {
            $carousel.trigger("destroy.owl.carousel");
            $carousel.removeClass("owl-loaded");
        }

        $carousel.owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: { items: 1 },
                768: { items: 2 },
                1024: { items: 3 }
            }
        });
    }
});