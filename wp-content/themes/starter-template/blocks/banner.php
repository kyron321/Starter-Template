<?php
// Retrieve ACF fields
$banner_image = get_field('banner_image');
$banner_heading = get_field('banner_heading');
$banner_copy = get_field('banner_copy');
$banner_link = get_field('banner_link');

// Retrieve cloned block settings
$block_settings = get_field('block_settings');
$block_classes = get_block_classes($block_settings);

if ($banner_image || $banner_heading || $banner_link) : ?>
<div class="banner <?php echo esc_attr($block_classes); ?>">
    <?php if ($banner_image) : ?>
    <img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>" />
    <?php endif; ?>

    <div class="text-container">
        <?php if ($banner_heading) : ?>
        <h1><?php echo esc_html($banner_heading); ?></h1>
        <?php endif; ?>

        <?php if ($banner_copy) : ?>
        <?php echo $banner_copy; ?>
        <?php endif; ?>

        <?php if ($banner_link) : ?>
        <a href="<?php echo esc_url($banner_link['url']); ?>" target="<?php echo esc_attr($banner_link['target']); ?>">
            <?php echo esc_html($banner_link['title']); ?>
        </a>
    </div>
    <?php endif; ?>
</div>
<?php endif; ?>