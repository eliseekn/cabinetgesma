<?php
if( have_posts() ) {
    while( have_posts() ) {
        the_post();
?>

<header class="text-center" id="header" style="<?php echo set_background('/assets/img/logos/vague.png'); ?>">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</header>

<?php
    }
}
?>
