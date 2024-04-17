<?php
add_theme_support('post-thumbnails');
add_theme_support('editor-styles');
add_theme_support('wp-block-styles');

// Load JS and CSS files
function vc_enqueue_script() {
    wp_enqueue_style("style-css", get_template_directory_uri() . "/style.css", false, "1.1", "all");
    wp_enqueue_style("main-css", get_template_directory_uri() . "/assets/css/main.css", false, "1.1", "all");

    wp_enqueue_script("nav-js", get_template_directory_uri() . "/assets/js/nav.js", [], 1, true);
    wp_enqueue_script("home-carousel-js", get_template_directory_uri() . "/assets/js/home-carousel.js", [], 1, true);

}
add_action("wp_enqueue_scripts", "vc_enqueue_script");

/**
 * Add built-in function create_post_type() 
 * adding the different custom post type
 */
function vc_statue_post_type() {

    register_post_type('statue', [
        'labels' => [
            'name' => __('Statue'),
            'singular_name' => __('Statua'),
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => ['slug' => 'statue'],
        'show_in_rest' => true,
    ]);

}

add_action('init', 'vc_statue_post_type');