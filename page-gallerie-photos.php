<?php get_header(); ?>

<?php include_once( get_template_directory() . '/templates/page-header.php' ); ?>

<style type="text/css">
    img {
        max-width: 100%;
        height: auto;
    }

    li {
        list-style-type: none;
    }

    #locaux {
        margin-bottom: 5em;
    }
</style>

<section class="section-header">
    <div class="container text-center">
        <h2>Formations</h2>
        <hr>
    </div>
</section>

<section id="formations">
    <div class="container">
        <?php dynamic_sidebar('gallery_sidebar'); ?>
    </div>
</section>

<section class="section-header">
    <div class="container text-center">
        <h2>Locaux</h2>
        <hr>
    </div>
</section>

<section id="locaux">
    <div class="container">
        <?php dynamic_sidebar('gallery_sidebar-2'); ?>
    </div>
</section>

<?php get_footer(); ?>
