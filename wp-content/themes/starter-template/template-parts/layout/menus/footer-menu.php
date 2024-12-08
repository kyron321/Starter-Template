<section>
    <?php
if (has_nav_menu('footer-menu')) {
    wp_nav_menu([
        'theme_location' => 'footer-menu',
        'container' => 'nav',
        'container_class' => 'footer-menu',
        'menu_class' => 'footer-menu__list',
        'depth' => 1,
    ]);
}
?>
</section>