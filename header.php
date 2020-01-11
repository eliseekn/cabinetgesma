<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="eliseekn">
        <meta name="description" content="Le Cabinet GESMA SARL est un centre d'assistance 
        et de conseil en gestion d'entreprise qui est agréé par le FDFP pour la formation 
        professionnelle. Nous accompagnons au quotidien des responsables et dirigeants 
        de PME soucieux d’une bonne organisation et d'un suivi administratif rigoureux de 
        leurs structures.">

        <?php wp_head(); ?>

        <title><?php bloginfo( 'name' ); ?></title>
    </head>
    <body <?php body_class(); ?> id="page-top">
        <div class="container d-flex justify-content-between align-items-end py-4" id="infos-header-block">
            <a href="<?php echo home_url( '/' ); ?>">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/logos/gesma.png'?>" class="img-fluid" alt="Logo Cabinet GESMA" title="Cabinet GESMA">
            </a>

            <ul class="d-flex align-items-center" id="infos-header">
                <div class="d-flex align-items-center pr-lg-3 pr-md-3">
                    <li class="fas fa-map-marker-alt"></li>
                    <div class="d-flex flex-column px-3">
                        <span class="font-weight-bold">Daloa, Quartier Baoulé</span>
                        <span class="text-muted">Rue Station Bra Kanon</span>
                    </div>
                </div>

                <div class="d-flex align-items-center pr-lg-3 pr-md-3">
                    <li class="far fa-clock"></li>
                    <div class="d-flex flex-column px-3">
                        <span class="font-weight-bold">Lun-Ven 8h-17h30</span>
                        <span class="text-muted">Horaires d'Ouverture</span>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <li class="fas fa-headset"></li>
                    <div class="d-flex flex-column px-3">
                        <span class="font-weight-bold">(+225) 32 76 79 63</span>
                        <span class="text-muted">Secrétariat de Direction</span>
                    </div>
                </div>
            </ul>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark" id="nav-menu">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?php if ( is_front_page() ) { echo ' active'; } ?>" href="<?php echo home_url( '/' ); ?>">Accueil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ( is_page( 'a-propos' ) ) { echo ' active'; } ?>" href="<?php echo site_url( '/a-propos' ); ?>">A propos</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ( is_page( 'expertise' ) ) { echo ' active'; } ?>" href="" id="navbarDropdownMenu1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Expertise
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenu1">
                                <a class="dropdown-item" href="<?php echo site_url( '/expertise' ); ?>#gestion">Gestion</a>
                                <a class="dropdown-item" href="<?php echo site_url( '/expertise' ); ?>#marketing">Marketting</a>
                                <a class="dropdown-item" href="<?php echo site_url( '/expertise' ); ?>#management">Management</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ( is_page( 'formations' ) ) { echo ' active'; } ?>" href="" id="navbarDropdownMenu2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Formations
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenu2">
                                <a class="dropdown-item" href="<?php echo site_url( '/formations' ); ?>#certifications">Certifications professionnelles</a>
                                <a class="dropdown-item" href="<?php echo site_url( '/formations' ); ?>#fdfp">Formations agréées FDFP</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ( get_post_type() == 'post' ) { echo ' active'; } ?>" href="<?php echo site_url( '/actualite' ); ?>">Actualité</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ( get_post_type() == 'emploi' ) { echo ' active'; } ?>" href="<?php echo site_url( '/emploi' ); ?>">Offres d'emploi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ( is_page( 'contact' ) ) { echo ' active'; } ?>" href="<?php echo site_url( '/contact' ); ?>">Contact</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto" id="social-icons-nav">
                        <a href="https://web.facebook.com/cabinetgesma/" class="nav-item nav-link pr-3">
                            <li class="fab fa-facebook-f"></li>
                        </a>
                        <!-- <a href="" class="nav-item nav-link pr-3">
                            <li class="fab fa-linkedin-in"></li>
                        </a> -->
                        <!-- <a href="" class="nav-item nav-link pr-3">
                            <li class="fab fa-twitter"></li>
                        </a> -->
                        <!-- <a href="" class="nav-item nav-link">
                            <li class="fab fa-instagram"></li>
                        </a> -->
                        <a href="https://www.youtube.com/channel/UCCiL1taRK1me9XshXo7rhGg/featured" class="nav-item nav-link">
                            <li class="fab fa-youtube"></li>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
