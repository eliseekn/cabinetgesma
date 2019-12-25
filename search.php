<?php get_header(); ?>

<header class="text-center" id="header" style="<?php echo set_background( get_template_directory_uri() . '/assets/img/logos/vague.png'); ?>">
    <div class="container">
        <h1 class="mb-5" data-aos="fade-left">Résultats de la recherche pour "<?php echo get_search_query(); ?>"</h1>

        <form action="<?php echo site_url( '/' ); ?>" action="get" data-aos="zoom-in" data-aos-offset="200">
            <input type="search" name="s" id="search" value="<?php echo get_search_query(); ?>" required="required">
            <input type="submit" value="Rechercher" class="btn-link">

            <?php if ( get_post_type() == 'emploi' ) { ?>
            <input type="hidden" value="emploi" name="post_type" id="post_type">
            <?php } else if ( get_post_type() == 'post' ) { ?>
            <input type="hidden" value="post" name="post_type" id="post_type">
            <?php } ?>
        </form>
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

<?php }  else { ?>

<section class="section-header">
    <div class="container text-center">
        <p class="lead mb-4">
            Désolé, aucun résultat n'a été trouvé.
        </p>

        <a href="<?php echo home_url( '/' ); ?>" class="btn-link">Retourner à l'accueil</a>
    </div>
</section>

<?php } ?>

<?php get_footer(); ?>
