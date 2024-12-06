<?php
// Define theme version
define('THEME_VERSION', '1.0.0');

// Enqueue theme styles
function theme_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/dist/css/style.min.css', [], THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'theme_styles');

// Enqueue admin styles
function admin_styles() {
    wp_enqueue_style('admin-style', get_template_directory_uri() . '/dist/css/admin.min.css', [], THEME_VERSION);
}
add_action('admin_enqueue_scripts', 'admin_styles');

// Enqueue theme fonts
function enqueue_google_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts');

// Disable gutenburg default blocks
add_filter('allowed_block_types', 'disable_default_blocks', 10, 2);
function disable_default_blocks($allowed_blocks, $post) {
    return [];
}
?>