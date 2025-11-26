<?php

// Aktiverar funktonalitet i temat
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('html5', [    // förbättrar HTML-markup
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
]);

// Registreration av menyför admin
function labb1_register_menus() {
    register_nav_menus([
        'primary' => 'Huvudmeny',   // den vi kommer använda i headern
    ]);
}
add_action('init', 'labb1_register_menus');

// Funktion för att ladda CSS och JS-filer
function labb1_enqueue_files() {
    $theme_uri = get_template_directory_uri();

    // style.css i roten (som i sin tur importerar bootstrap/font-awesome/style.css)
    wp_enqueue_style('labb1-style', get_stylesheet_uri());
    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'labb1-script',
        $theme_uri . '/js/script.js',
        ['jquery'],
        null,
        true  // laddar i footern
    );
}
add_action('wp_enqueue_scripts', 'labb1_enqueue_files');
