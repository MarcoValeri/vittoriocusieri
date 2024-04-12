<?php
add_theme_support('post-thumbnails', ['post', 'page']);
add_theme_support('editor-styles');
add_theme_support('wp-block-styles');

// Load JS and CSS files
function vc_enqueue_script() {
    wp_enqueue_style("style-css", get_template_directory_uri() . "/style.css", false, "1.1", "all");
    wp_enqueue_style("main-css", get_template_directory_uri() . "/assets/css/main.css", false, "1.1", "all");
}
add_action("wp_enqueue_scripts", "vc_enqueue_script");