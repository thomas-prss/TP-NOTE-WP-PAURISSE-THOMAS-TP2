<?php

function tp_outdoor_register_post_types() {
    register_post_type('randonnee', [
        'labels' => [
            'name' => 'Randonnées',
            'singular_name' => 'Randonnée',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'randonnee'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-location-alt',
    ]);
}
add_action('init', 'tp_outdoor_register_post_types');


function tp_outdoor_register_taxonomies() {
    register_taxonomy('difficulte', ['randonnee'], [
        'labels' => ['name' => 'Difficultés', 'singular_name' => 'Difficulté'],
        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => ['slug' => 'difficulte'],
    ]);
}
add_action('init', 'tp_outdoor_register_taxonomies');


function tp_outdoor_enqueue_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style(
        'main-style', 
        get_template_directory_uri() . '/assets/css/main.css',
        array('theme-style'), 
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'tp_outdoor_enqueue_styles');