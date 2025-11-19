<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function labb1_register_menus() {
    register_nav_menus([
        'primary' => 'Huvudmeny'
    ]);
}
add_action('init', 'labb1_register_menus');

function labb1_enqueue_files() {
    $theme_uri = get_template_directory_uri();

    wp_enqueue_style('labb1-style', get_stylesheet_uri());
    wp_enqueue_script('labb1-script', $theme_uri . '/js/script.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'labb1_enqueue_files');
