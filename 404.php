<?php get_header(); ?>

<header class="text-center" id="header" style="<?php echo set_background( get_template_directory_uri() . '/assets/img/logos/vague.png'); ?>">
    <div class="container">
        <h1 class="mb-5">La page que vous cherchez n'a pas été trouvée!</h1>
        <a href="<?php echo home_url( '/' ) ?>" class="btn-link">Revenir à l'accueil</a>
    </div>
</header>

<?php get_footer(); ?>
