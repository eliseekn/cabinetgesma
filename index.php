<?php get_header(); ?>

<header class="d-flex flex-column justify-content-start" id="main-header"
    style="<?php echo set_background( get_template_directory_uri() . '/assets/img/header-bg.jpg'); ?>; background-attachment: fixed">
    <div class="container">
        <h1 class="display-3"> Cabinet GESMA</h1>
        <p>Une expertise à l'échelle des PME locales depuis 1998.</p>
        <a href="<?php echo site_url( '/a-propos' ); ?>" class="btn-link">En savoir plus</a>
        <a href="<?php echo site_url( '/contact' ); ?>" class="btn-link ml-4">Contactez-nous</a>
    </div>

    <img src="<?php echo get_template_directory_uri() . '/assets/img/logos/vague.png'; ?>" class="img-fluid" alt="Vague Cabinet GESMA">
</header>

<section class="section-header container">
    <h2>Qui sommes-nous?</h2>
    <hr>
</section>

<section id="section-about">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="mb-4">Présentation</h3>
                <p class="text-justify">
                    Le <span>Cabinet GESMA</span> est un centre d'assistance
                    et de conseil en gestion d'entreprise qui est agréé
                    par le FDFP pour la formation professionnelle.
                </p>

                <p class="text-justify">
                    Nous accompagnons au quotidien des responsables et dirigeants
                    de PME soucieux d’une bonne organisation et d'un suivi
                    administratif rigoureux de leurs structures.
                </p>
            </div>

            <div class="col">
                <h3 class="mb-4">Nos prestations</h3>
                <p class="text-justify">
                    <p>
                        <li class="far fa-plus-square"></li>
                        <span>Assitance</span> <br>
                        Consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </p>

                    <p>
                        <li class="far fa-plus-square"></li>
                        <span>Conseil</span> <br>
                        Consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </p>

                    <p>
                        <li class="far fa-plus-square"></li>
                        <span>Formations</span> <br>
                        Consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </p>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="section-word" style="<?php echo set_background( get_template_directory_uri() . '/assets/img/logos/vague.png'); ?>">
    <div class="container">
        <div class="d-flex justify-content-around align-items-center">
            <div class="d-flex flex-column align-items-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/director.png'?>" alt="Photo Directeur" class="img-fluid">
                <h5 class="mt-2 font-weight-bold">Lowell Blé D.</h5>
                <p class="_text-muted">Directeur</p>
            </div>

            <li class="fas fa-quote-left ml-5"></li>

            <div>
                <p class="text-justify">
                    Toute gestion est bonne, tant qu’elle satisfait aux attentes des intéressés. Mais elle
                    n’est meilleure <br> que lorsqu'elle leurs garantit les trois « P » que sont : la
                    Performance, le Profit et la Pérennité.
                </p>

                <p class="text-justify">
                    De même,
                    la notoriété se veut à la fois commerciale, managériale, mais aussi administrative.
                </p>
            </div>

            <li class="fas fa-quote-right"></li>
        </div>
    </div>
</section>

<section class="section-header">
    <div class="container text-center">
        <h4>Expertise</h4>
        <h2>Ce que nous savons faire</h2>
        <hr>
    </div>
</section>

<section class="section-expertise">
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center">
                <li class="fas fa-seedling"></li>

                <div class="mt-3">
                    <a href="">
                        <h4>Création d'Entreprise et Entrepreneuriat</h4>
                    </a>
                    <p>
                        Cconsectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>

            <div class="col d-flex align-items-center">
                <li class="fas fa-cash-register"></li>

                <div class="mt-3">
                    <a href="">
                        <h4>Assistance Comptable et Fiscale</h4>
                    </a>
                    <p>
                        Cconsectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex align-items-center">
                <li class="fas fa-hand-holding-usd"></li>

                <div class="mt-3">
                    <a href="">
                        <h4>Assistance et Conseil en Gestion d'Entreprise</h4>
                    </a>
                    <p>
                        Cconsectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>

            <div class="col d-flex align-items-center">
                <li class="fas fa-chart-line"></li>

                <div class="mt-3">
                    <a href="">
                        <h4>Conseil en Stratégie Marketing et Communication</h4>
                    </a>
                    <p>
                        Cconsectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-contact-now" class="mt-5" style="<?php echo set_background( get_template_directory_uri() . '/assets/img/logos/vague.png'); ?>">
    <div class="container d-flex align-items-start justify-content-center">
        <p class="mt-1">Besoin de notre expertise ou de plus d'informations?</p>
        <a href="contact.html" class="btn-link ml-4">Contactez-nous</a>
    </div>
</section>

<section class="section-header">
    <div class="container text-center">
        <h4>Formations</h4>
        <h2>Une formation, un diplôme, un métier</h2>
        <hr>
    </div>
</section>

<section class="section-formations">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column text-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/graduate.jpeg'; ?>" alt="Image étudiant diplômé" width="100%" height="250px">
                <div class="desc">
                    <a href="">
                        <h4>Certifications professionnelles</h4>
                    </a>
                    <p>
                        Nous proposons des formations professionnelles certifiées
                        dans les domaines de la comptabilité, la gestion des
                        ressources humaines et du secrétariat de direction.
                    </p>
                </div>
            </div>

            <div class="col d-flex flex-column text-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/logos/fdfp.png'; ?>" alt="Logo FDFP" width="100%" height="250px">
                <div class="desc">
                    <a href="">
                        <h4>Formations agréées FDFP</h4>
                    </a>
                    <p>
                        Nous sommes agréés FDFP et nous avons l'hablitation de former
                        dans les domaines de la gestion, du management, de la
                        comptabilité, de la communication et bien d'autres.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if( have_posts() ) { ?>

<section class="section-header">
    <div class="container text-center">
        <h4>Actualité</h4>
        <h2>Nos derniers articles</h2>
        <hr>
    </div>
</section>

<section id="section-news">
    <div class="container">
        <div class="row">

            <?php $recent_posts = wp_get_recent_posts( array( 'numberposts' => '2' ) ); ?>

            <?php if ( has_post_thumbnail( $recent_posts[0]['ID'] ) ) { ?>
            <div class="col-lg-7" style="<?php echo set_background( get_the_post_thumbnail_url( $recent_posts[0]['ID'], 'full' ) ); ?>">
            <?php } else { ?>
            <div class="col-lg-7">
            <?php } ?>
                <a href="<?php echo get_permalink( $recent_posts[0]['ID'] ); ?>"><?php echo $recent_posts[0]['post_title']; ?></a>
    			<p class="_text-muted">Publié le <?php echo get_the_date( 'j F Y', $recent_posts[0]['ID'] ); ?></p>
    			<p><?php echo mb_strimwidth($recent_posts[0]['post_content'], 0, 250, '...'); ?></p>
                <a href="<?php echo get_permalink( $recent_posts[0]['ID'] ); ?>" class="read-more">
                    Lire la suite
                </a>
            </div>

            <div class="col">
                <a href="<?php echo get_permalink( $recent_posts[0]['ID'] ); ?>"><?php echo $recent_posts[1]['post_title']; ?></a>
    			<p class="_text-muted">Publié le <?php echo get_the_date( 'j F Y', $recent_posts[1]['ID'] ); ?></p>
    			<p><?php echo mb_strimwidth( $recent_posts[1]['post_content'], 0, 130, '...' ); ?></p>
                <a href="<?php echo get_permalink( $recent_posts[1]['ID'] ); ?>" class="read-more">
                    Lire la suite
                </a>
            </div>

            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<?php } ?>

<section id="section-newsletter" style="<?php echo set_background( get_template_directory_uri() . '/assets/img/logos/vague.png'); ?>">
    <div class="container">
        <p class="mb-4">Inscrivez-vous à notre newsletter pour ne rien manquer de notre actualité</p>

        <form action="">
            <input name="newsletter-email" type="email" placeholder="Votre adresse email" required="required">
            <input type="submit" value="S'inscrire" class="btn-link">
        </form>
    </div>
</section>

<?php include_once( get_template_directory() . '/templates/testimonials.php' ); ?>

<?php get_footer(); ?>
