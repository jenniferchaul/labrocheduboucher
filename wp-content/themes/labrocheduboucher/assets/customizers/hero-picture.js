// au chargement de la page
document.addEventListener("DOMContentLoaded", function() {

    // utilisation de la bibliothèque javascript worpdress dédiée au customizer (fournie par wordpress)
    wp.customize(
      // sur quelle variable le javascript doit gérer le live preview
      'hero-picture',
  
      // déclaration de la fonction qui "gère" la variable customisée
      function(value) {
        value.bind(function(newValue) {
  
          //=====CODE CUSTOM=========
          // cette fonction se déclenche lorsque la "variable customisée" change de valeur
          // nous ciblons la bannière
          console.log(newValue);
  
          let hero = document.querySelector('.hero');
          // nous changeons l'image
          hero.style.background =
            'radial-gradient(circle, rgba(255, 255, 255, 0.5) 45%, rgba(136, 81, 133, 0.5) 100%),' +
            'linear-gradient(100deg, aqua 0%, rgba(0, 255, 255, 0) 100%),'+
            'url(' + newValue + ')'
  
          //==========================
  
        });
      }
    );
  });