document.addEventListener('DOMContentLoaded', function() {
    const toggleMenuButton = document.querySelector('.toggle-menu');
    const menu = document.querySelector('.menu');
    const burgerIcon = document.querySelector('.burger-menu');
    
    toggleMenuButton.addEventListener('click', function() {
        menu.classList.toggle('active'); // Afficher ou masquer le menu
        burgerIcon.classList.toggle('active'); // Permet d'ajouter un effet visuel au burger
    });
});

document.addEventListener('DOMContentLoaded', () => {
  const backToTop = document.getElementById('back-to-top');

  // Afficher le bouton au scroll
  window.addEventListener('scroll', () => {
      if (window.scrollY > 300) {
          backToTop.classList.add('visible');
      } else {
          backToTop.classList.remove('visible');
      }
  });

  // Remonter la page au clic
  backToTop.addEventListener('click', () => {
      window.scrollTo({
          top: 0,
          behavior: 'smooth',
      });
  });
});



jQuery(document).ready(function () {
    const $carousel = jQuery("#carousel-actus");
  
    // Détruire toute instance existante avant de réinitialiser
    if ($carousel.hasClass("owl-loaded")) {
      $carousel.trigger("destroy.owl.carousel");
      $carousel.removeClass("owl-loaded");
    }
  
    // Réinitialiser proprement
    $carousel.owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      dots: true, // Gère les points
      autoplay: true,
      autoplayTimeout: 5000,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
        },
        1024: {
          items: 3,
        },
      },
    });
  });
  
  document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.prestations-subtitle');
    const prestationsContent = document.querySelector('.prestations-content');

    function fetchPrestations(category) {
        prestationsContent.innerHTML = '<p>Chargement...</p>';
        fetch(`${ajaxUrl}?action=get_prestations&category=${category}`)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    prestationsContent.innerHTML = data.data.html;
                } else {
                    prestationsContent.innerHTML = `<p>Impossible de charger les prestations. Veuillez réessayer plus tard.</p>`;
                }
            })
            .catch(() => {
                prestationsContent.innerHTML = '<p>Erreur lors du chargement. Réessayez plus tard.</p>';
            });
    }

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Désactiver tous les onglets
            tabs.forEach(t => t.classList.remove('active'));

            // Activer celui cliqué
            tab.classList.add('active');

            // Charger les prestations pour la catégorie correspondante
            const category = tab.dataset.category;
            fetchPrestations(category);
        });
    });

    // Par défaut, afficher les viandes
    fetchPrestations('viandes');
});

document.addEventListener('DOMContentLoaded', function () {
  const header = document.querySelector('header');
  const stickyClass = 'sticky';

  window.addEventListener('scroll', function () {
      if (window.scrollY > 50) {
          header.classList.add(stickyClass);
      } else {
          header.classList.remove(stickyClass);
      }
  });
});

//document.addEventListener("DOMContentLoaded", () => {
//  const menuLinks = document.querySelectorAll("a[href^='#']"); // Sélectionne tous les liens avec une ancre
//
//  menuLinks.forEach(link => {
//      link.addEventListener("click", function (e) {
//          e.preventDefault();
//
//          const targetID = this.getAttribute("href").substring(1); // Récupère l'ID cible
//          const targetSection = document.getElementById(targetID);
//
//          if (targetSection) {
//              const offset = 50; // Ajuste ce chiffre à la hauteur du header
//              const topPosition = targetSection.offsetTop - offset;
//
//              window.scrollTo({
//                  top: topPosition,
//                  behavior: "smooth"
//              });
//          }
//      });
//  });
//});

