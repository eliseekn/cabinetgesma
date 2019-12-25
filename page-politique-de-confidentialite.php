<?php get_header(); ?>

<?php include_once( get_template_directory() . '/templates/page-header.php' ); ?>

<?php
if( have_posts() ) {
    while( have_posts() ) {
        the_post();
?>

<section class="section-header">
    <style type="text/css">
        h2 {
            text-align: left !important;
        }
    </style>

    <div class="container text-justify">
        <?php the_content(); ?>
    </div>
</section>

<?php
    }
}

wp_reset_query();
?>

<?php get_footer(); ?>
