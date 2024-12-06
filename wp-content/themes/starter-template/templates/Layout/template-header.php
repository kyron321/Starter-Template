<header>
    <div class="container">
        <?php
        $logo = get_field('brand_logo', 'option');
        if ($logo) : $logo_url = $logo['url'];
        ?>
        <div class="site-logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo esc_url($logo_url); ?>" alt="Site Logo">
            </a>
        </div>
        <?php endif; ?>
    </div>
</header>