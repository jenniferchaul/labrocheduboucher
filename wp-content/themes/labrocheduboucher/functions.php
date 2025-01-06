<?php

require __DIR__ . '/customizers/hero-image.tpl.php';

add_action('after_setup_theme', 'labrocheduboucher_initializeTheme');

if (!function_exists('labrocheduboucher_initializeTheme')) {
    function labrocheduboucher_initializeTheme()
    {
        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        add_theme_support('menus');

        add_theme_support('page-attributes');
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

    wp_enqueue_style(
        'lightbox-css',
        'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css',
        [],
        '2.11.3'
    );

    wp_enqueue_script(
        'lightbox-js',
        'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js',
        [],
        '2.11.3',
        true
    );
});

// Ajouter ajaxUrl pour les requêtes AJAX
function add_ajax_url_to_script()
{
?>
    <script type="text/javascript">
        var ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
    <?php
}
add_action('wp_head', 'add_ajax_url_to_script');

// Enregistrer un Custom Post Type pour les prestations
function labrocheduboucher_register_prestations_cpt()
{
    $labels = array(
        'name'               => 'Prestations',
        'singular_name'      => 'Prestation',
        'menu_name'          => 'Prestations',
        'name_admin_bar'     => 'Prestation',
        'add_new'            => 'Ajouter une prestation',
        'add_new_item'       => 'Ajouter une nouvelle prestation',
        'edit_item'          => 'Modifier la prestation',
        'new_item'           => 'Nouvelle prestation',
        'view_item'          => 'Voir la prestation',
        'search_items'       => 'Rechercher des prestations',
        'not_found'          => 'Aucune prestation trouvée',
        'not_found_in_trash' => 'Aucune prestation trouvée dans la corbeille',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-carrot',
        'show_in_rest'       => true,
    );

    register_post_type('prestation', $args);
}
add_action('init', 'labrocheduboucher_register_prestations_cpt');

// Enregistrer une taxonomie pour les Types de Prestations
function labrocheduboucher_register_types_taxonomy()
{
    $labels = array(
        'name'              => 'Types de Prestations',
        'singular_name'     => 'Type de Prestation',
        'search_items'      => 'Rechercher des Types de Prestations',
        'all_items'         => 'Tous les Types de Prestations',
        'edit_item'         => 'Modifier le Type de Prestation',
        'update_item'       => 'Mettre à jour le Type de Prestation',
        'add_new_item'      => 'Ajouter un nouveau Type de Prestation',
        'new_item_name'     => 'Nom du nouveau Type de Prestation',
        'menu_name'         => 'Types de Prestations',
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'type-prestation'),
        'show_in_rest'      => true,
    );

    register_taxonomy('type_prestation', 'prestation', $args);
}
add_action('init', 'labrocheduboucher_register_types_taxonomy');


// Enregistrer le CPT pour les actualités
function labrocheduboucher_register_news_cpt()
{
    $labels = array(
        'name'               => 'Actualités',
        'singular_name'      => 'Actualité',
        'menu_name'          => 'Actualités',
        'name_admin_bar'     => 'Actualité',
        'add_new'            => 'Ajouter une actualité',
        'add_new_item'       => 'Ajouter une nouvelle actualité',
        'edit_item'          => 'Modifier l’actualité',
        'new_item'           => 'Nouvelle actualité',
        'view_item'          => 'Voir l’actualité',
        'search_items'       => 'Rechercher des actualités',
        'not_found'          => 'Aucune actualité trouvée',
        'not_found_in_trash' => 'Aucune actualité trouvée dans la corbeille',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-megaphone',
        'show_in_rest'       => true,
    );

    register_post_type('actualite', $args);
}
add_action('init', 'labrocheduboucher_register_news_cpt');

// Enregistrer un Custom Post Type pour la galerie
function labrocheduboucher_register_gallery_cpt()
{
    $labels = array(
        'name'               => 'Galerie',
        'singular_name'      => 'Image de la Galerie',
        'menu_name'          => 'Galerie',
        'name_admin_bar'     => 'Image',
        'add_new'            => 'Ajouter une Image',
        'add_new_item'       => 'Ajouter une nouvelle image',
        'edit_item'          => 'Modifier l’image',
        'new_item'           => 'Nouvelle image',
        'view_item'          => 'Voir l’image',
        'search_items'       => 'Rechercher des images',
        'not_found'          => 'Aucune image trouvée',
        'not_found_in_trash' => 'Aucune image trouvée dans la corbeille',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'supports'           => array('title', 'thumbnail'),
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-format-gallery',
        'show_in_rest'       => true,
    );

    register_post_type('gallery', $args);
}
add_action('init', 'labrocheduboucher_register_gallery_cpt');

// Fonction pour charger les prestations via AJAX
function get_prestations_ajax()
{
    if (!isset($_GET['category'])) {
        wp_send_json_error('Catégorie non spécifiée.');
    }

    $category = sanitize_text_field($_GET['category']);
    $terms_map = [
        'viandes' => 'viandes-a-la-broche',
        'plats'   => 'paella-et-accompagnements',
    ];

    // Vérifie si la catégorie est valide
    if (!array_key_exists($category, $terms_map)) {
        wp_send_json_error('Catégorie invalide.');
    }

    $args = [
        'post_type' => 'prestation',
        'orderby'   => 'date',
        'order'     => 'ASC',
        'tax_query' => [
            [
                'taxonomy' => 'type_prestation',
                'field'    => 'slug',
                'terms'    => $terms_map[$category],
            ],
        ],
    ];

    $query = new WP_Query($args);

    ob_start();

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="item">
                <div class="prestation">
                    <img class="prestation-img" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?= esc_attr(get_the_title()); ?>">
                    <div class="prestation-description">
                        <h4><?= esc_html(get_the_title()); ?></h4>
                        <p><?= esc_html(get_the_excerpt()); ?></p>
                    </div>
                </div>
            </div>
<?php endwhile;
        wp_reset_postdata();
    else :
        echo '<p>Aucune prestation disponible pour cette catégorie.</p>';
    endif;

    $html = ob_get_clean();

    wp_send_json_success(['html' => $html]);
}
add_action('wp_ajax_get_prestations', 'get_prestations_ajax');
add_action('wp_ajax_nopriv_get_prestations', 'get_prestations_ajax');

// Fonction pour récupérer les images de la galerie via AJAX
function get_gallery_images_ajax()
{
    if (!isset($_GET['category'])) {
        wp_send_json_error('Catégorie non spécifiée.');
    }

    $category = sanitize_text_field($_GET['category']);

    // Si la catégorie est "toutes", on ignore la taxonomie
    $args = [
        'post_type' => 'gallery',
        'posts_per_page' => -1,
    ];

    // Filtrer par taxonomie si la catégorie n'est pas "toutes"
    if ($category !== 'toutes') {
        $args['tax_query'] = [
            [
                'taxonomy' => 'type_image',
                'field'    => 'slug',
                'terms'    => $category,
            ],
        ];
    }

    $query = new WP_Query($args);

    $images = [];
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $images[] = [
                'url' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                'thumbnail' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                'alt' => get_the_title(),
            ];
        }
    }

    wp_reset_postdata();

    wp_send_json_success(['images' => $images]);
}
add_action('wp_ajax_get_gallery_images', 'get_gallery_images_ajax');
add_action('wp_ajax_nopriv_get_gallery_images', 'get_gallery_images_ajax');


// Enregistrer une taxonomie pour le type de chaque image de la galerie
function labrocheduboucher_register_image_type_taxonomy()
{
    $labels = array(
        'name'              => 'Types d\'images',
        'singular_name'     => 'Type d\'image',
        'search_items'      => 'Rechercher des Types d\'images',
        'all_items'         => 'Tous les Types d\'images',
        'edit_item'         => 'Modifier le Type d\'image',
        'update_item'       => 'Mettre à jour le Type d\'image',
        'add_new_item'      => 'Ajouter un nouveau Type d\'image',
        'new_item_name'     => 'Nom du nouveau Type d\'image',
        'menu_name'         => 'Types d\'images',
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'type-image'),
        'show_in_rest'      => true,
    );

    register_taxonomy('type_image', 'gallery', $args);
}
add_action('init', 'labrocheduboucher_register_image_type_taxonomy');
