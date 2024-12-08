<nav class="main-menu">
    <?php
    wp_nav_menu([
    'theme_location' => 'main-menu',
    'container' => false,
    'menu_class' => 'menu',
    'menu_id' => 'main-menu',
    'depth' => 2,
    'fallback_cb' => 'wp_page_menu',
    'walker' => new Custom_Walker_Nav_Menu(),
    ]);
    ?>
</nav>