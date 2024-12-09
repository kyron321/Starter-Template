<?php
// Define theme version
define('THEME_VERSION', '1.0.0');

// Enqueue theme styles
function theme_styles()
{
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/dist/css/style.min.css', [], THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'theme_styles');

// Enqueue admin styles
function admin_styles()
{
    global $pagenow;
    if (is_user_logged_in() || $pagenow === 'wp-login.php') {
        wp_enqueue_style('admin-style', get_template_directory_uri() . '/dist/css/admin.min.css', [], THEME_VERSION);
    }
}
add_action('admin_enqueue_scripts', 'admin_styles');
add_action('login_enqueue_scripts', 'admin_styles');

// Enqueue theme scripts
function theme_scripts()
{
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/dist/js/main.min.js', [], THEME_VERSION, true);
}

// Enqueue theme fonts
function enqueue_google_fonts()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts');


// Add support for main-menu
function register_main_menu()
{
    register_nav_menu('main-menu', __('Main Menu'));
}
add_action('init', 'register_main_menu');

// Add support for footer-menu
function register_footer_menu()
{
    register_nav_menu('footer-menu', __('Footer Menu'));
}
add_action('init', 'register_footer_menu');

// Add support for ACF JSON
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point($path)
{
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point($paths)
{
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
}
