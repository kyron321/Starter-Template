<?php
// Retrieve ACF fields
$banner_image = get_field('banner_image');
$banner_heading = get_field('banner_heading');
$banner_link = get_field('banner_link');

// Retrieve cloned block settings
$block_settings = get_field('block_settings');

// Get the CSS classes
$block_classes = get_block_classes($block_settings);

// Display the banner
if ($banner_image || $banner_heading || $banner_link) : ?>
    <div class="banner <?php echo esc_attr($block_classes); ?>">
        <?php if ($banner_image) : ?>
            <img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>" />
        <?php endif; ?>

        <?php if ($banner_heading) : ?>
            <h2><?php echo esc_html($banner_heading); ?></h2>
        <?php endif; ?>

        <?php if ($banner_link) : ?>
            <a href="<?php echo esc_url($banner_link['url']); ?>" target="<?php echo esc_attr($banner_link['target']); ?>">
                <?php echo esc_html($banner_link['title']); ?>
            </a>
        <?php endif; ?>
    </div>
<?php endif; ?>