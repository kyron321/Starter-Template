<?php
function get_block_classes($block_settings)
{
    $classes = [];

    if (isset($block_settings['block_settings'])) {
        $settings = $block_settings['block_settings'];

        if (!empty($settings['margin_top'])) {
            $classes[] = 'margin-top-' . esc_attr($settings['margin_top']);
        }

        if (!empty($settings['margin_bottom'])) {
            $classes[] = 'margin-bottom-' . esc_attr($settings['margin_bottom']);
        }

        if (!empty($settings['background_color'])) {
            $classes[] = 'background-color-' . esc_attr($settings['background_color']);
        }
    }

    return implode(' ', $classes);
}
