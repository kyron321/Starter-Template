<?php
function register_acf_blocks()
{
    // Check if function exists and hook into setup.
    if (function_exists('acf_register_block_type')) {
        // Register a banner block.
        acf_register_block_type([
            'name' => 'banner',
            'title' => __('Banner'),
            'description' => __('A custom banner block.'),
            'render_callback' => 'theme_block_render_callback',
            'category' => 'formatting',
            'icon' => 'block-default',
            'keywords' => ['banner', 'custom'],
        ]);
    }
}

// Automatically include block template files.
function theme_block_render_callback($block)
{
    $slug = str_replace('acf/', '', $block['name']);
    if (file_exists(get_theme_file_path("/blocks/{$slug}.php"))) {
        include get_theme_file_path("/blocks/{$slug}.php");
    }
}

add_action('acf/init', 'register_acf_blocks');

// Disable Gutenberg default blocks except for custom ACF blocks
add_filter('allowed_block_types', 'disable_default_blocks_except_acf', 10, 2);
function disable_default_blocks_except_acf($allowed_blocks, $post)
{
    $registered_blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();
    $allowed_blocks = [];
    foreach ($registered_blocks as $block_name => $block_type) {
        if (strpos($block_name, 'acf/') === 0) {
            $allowed_blocks[] = $block_name;
        }
    }

    return $allowed_blocks;
}
