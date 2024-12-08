<?php
function get_block_classes($block_settings)
{
    $classes = [];

    if (isset($block_settings['block_settings'])) {
        $settings = $block_settings['block_settings'];

        if (!empty($settings['padding_top'])) {
            $classes[] = 'padding-top-' . esc_attr($settings['padding_top']);
        }

        if (!empty($settings['padding_bottom'])) {
            $classes[] = 'padding-bottom-' . esc_attr($settings['padding_bottom']);
        }

        if (!empty($settings['background_color'])) {
            $classes[] = 'background-color-' . esc_attr($settings['background_color']);
        }
    }

    return implode(' ', $classes);
}
