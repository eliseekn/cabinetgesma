<?php
if( have_posts() ) {
    while( have_posts() ) {
        the_post();
?>

<header class="text-center" id="header" style="<?php echo set_background( get_template_directory_uri() . '/assets/img/logos/vague.png'); ?>">
    <div class="container">
        <h1 data-aos="fade-left"><?php the_title(); ?></h1>
    </div>
</header>

<?php
    }
}

wp_reset_query();
?>
