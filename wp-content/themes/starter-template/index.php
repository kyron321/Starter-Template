<?php
get_header(); 
?>

<main>
    <section>
        <h1><?php the_title(); ?></h1>
        <h2><?php the_title(); ?></h2>
        <h3><?php the_title(); ?></h3>
        <h4><?php the_title(); ?></h4>
        <h5><?php the_title(); ?></h5>
        <h6><?php the_title(); ?></h6>
        <p><?php the_title(); ?></p>
        <p><?php the_title(); ?></p>
        <?php the_content(); ?>
    </section>
</main>

<?php 
get_footer(); 
?>