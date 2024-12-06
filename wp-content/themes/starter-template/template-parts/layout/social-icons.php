<div class="social-icons">
    <?php if ($twitter_url = get_field('twitter__x', 'option')) : ?>
    <a href="<?php echo esc_url($twitter_url); ?>" target="_blank" rel="noopener noreferrer">
        <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/twitter.svg" alt="Twitter">
    </a>
    <?php endif; ?>

    <?php if ($facebook_url = get_field('facebook', 'option')) : ?>
    <a href="<?php echo esc_url($facebook_url); ?>" target="_blank" rel="noopener noreferrer">
        <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/facebook.svg" alt="Facebook">
    </a>
    <?php endif; ?>

    <?php if ($instagram_url = get_field('instagram', 'option')) : ?>
    <a href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener noreferrer">
        <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/instagram.svg"
            alt="Instagram">
    </a>
    <?php endif; ?>

    <?php if ($linkedin_url = get_field('linkedin', 'option')) : ?>
    <a href="<?php echo esc_url($linkedin_url); ?>" target="_blank" rel="noopener noreferrer">
        <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/linkedin.svg" alt="LinkedIn">
    </a>
    <?php endif; ?>
</div>