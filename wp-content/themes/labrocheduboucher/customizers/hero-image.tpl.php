<?php


add_action(
    'customize_register',   
    'register_hero_picture_customizer'
);

function register_hero_picture_customizer(WP_Customize_Manager $themeCustomizerObject)
{

    // identifiant de la section qui s'affichera dans le backoffice de wordpress (appearance->customize)
    $customSectionName = 'custom-section-pictures';

    // création d'une variable configurable grace à un customizer
    $customizableVariableName = 'hero-picture';

    // une valeur par défaut pour la variable définie au dessus
    $defaultValue = 'https://picsum.photos/300/200?random=1';

    // selecteur css pour cibler la "bannière" dans notre thème
    $customizerButtonCssSelector = '.hero';

    $themeCustomizerObject->add_section(
        $customSectionName,    
        [
            'title' => __("Theme pictures"), 
            'priority' => 0   
        ]
    );


    $themeCustomizerObject->add_setting(
        $customizableVariableName,   
        [
            'default' => $defaultValue, 
            'transport' => 'postMessage' 
        ]
    );

    $themeCustomizerObject->add_control(

        // WP_Customize_Image_Control est un composant wordpress qui permet de choisir une image
        new WP_Customize_Image_Control(
            $themeCustomizerObject, 
            'hero-picture-selector',  
            [
                'label' => __('Hero picture'),    
                'section' => $customSectionName,   
                'settings' => $customizableVariableName, 
            ]
        )
    );

    $themeCustomizerObject->selective_refresh->add_partial(
        // pour quelle variable "le petit crayon" va s'appliquer
        $customizableVariableName, // (banner-picture)
        [
            // selecteur css pour indiquer dans quel élément de la page le petit crayon du customizer doit s'afficher
            'selector' => $customizerButtonCssSelector,
            'fallback_refresh' => false
        ]
    );
}

//==================================================================

add_action(
    'customize_preview_init',   // Event pour charger les assets dédié à la préview du customizer
    'oprofile_load_hero_picture_customizer_assets'
);

function oprofile_load_hero_picture_customizer_assets()
{
    // Nous chargeons notre css pour la preview du customizer afin de pouvoir surcharger les styles
    wp_enqueue_style(
        'customizer-style',
        get_theme_file_uri('assets/customizers/style.css'),
    );

    wp_enqueue_script(
        'hero-picture-customizer-js',
        get_theme_file_uri('assets/customizers/hero-picture.js'),
        [], 
        false,
        true
    );
}