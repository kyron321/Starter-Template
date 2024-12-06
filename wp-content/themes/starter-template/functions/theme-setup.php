<?php
/**
 * Theme setup
 */
?>

<?php
// Define theme version
define('THEME_VERSION', '1.0.0');

// Enqueue theme styles
function theme_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/dist/css/style.min.css', [], THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'theme_styles');
?>