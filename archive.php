<?php get_header(); ?>

<header class="text-center" id="header" style="<?php echo set_background( get_template_directory_uri() . '/assets/img/logos/vague.png'); ?>">
    <div class="container">
        <h1 data-aos="fade-left">Blog</h1>
    </div>
</header>

<?php if( have_posts() ) { ?>

<section id="section-blog">
    <div class="container">
        <div class="row">

            <?php
            while( have_posts() ) {
                the_post();
            ?>

            <div class="col-lg-6 col-sm-6 my-5">
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'large', ['class' => 'img-fluid'] );
                }
                ?>

                <h4><?php echo the_title(); ?></h4>
                <p class="text-muted">Publié le <?php the_date(); ?></p>
                <div class="text-justify mb-4">
                    <?php the_content(); ?>
                </div>

                <a href="<?php the_permalink(); ?>" class="btn-link">
                    Lire la suite
                </a>
            </div>

            <?php } ?>

        </div>

        <div class="d-flex mt-5 align-items-center justify-content-center">

            <?php
            the_posts_pagination(
                array(
                    'mid_size' => 5,
                    'screen_reader_text' => ' ',
                    'prev_text' => '<span style="margin-right:1em" class="btn-link">Page précédente</span>',
                    'next_text' => '<span style="margin-left:1em" class="btn-link">Page suivante</span>'
                )
            );
            ?>

        </div>
    </div>
</section>

<?php } ?>

<?php get_footer(); ?>
