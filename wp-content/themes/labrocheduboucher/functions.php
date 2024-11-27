<?php

require __DIR__. '/customizers/hero-image.tpl.php';

add_action('after_setup_theme', 'labrocheduboucher_initializeTheme');

if (!function_exists('labrocheduboucher_initializeTheme')) {
    function labrocheduboucher_initializeTheme()
    {
        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        add_theme_support('menus');
    }
}

add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style(
        'labrocheduboucher-styles',
        get_theme_file_uri('assets/css/style.css'),
        [],
        '1.0.0'
    );

    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
        [],
        '5.15.4'
    );

    wp_enqueue_script(
        'main-js',
        get_theme_file_uri('assets/js/main.js'),
        [],
        '1.0.0',
        true
    );
});