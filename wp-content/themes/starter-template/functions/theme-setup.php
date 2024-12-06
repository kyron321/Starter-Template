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

// Enqueue theme scripts
function theme_scripts() {
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/dist/js/main.min.js', [], THEME_VERSION, true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');
?>