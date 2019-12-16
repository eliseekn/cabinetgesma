<?php get_header(); ?>

<?php include_once( get_template_directory() . '/templates/page-header.php' ); ?>

<section class="section-header" id="certifications">
    <div class="container text-center">
        <h4 data-aos="fade-left">Certifications Professionnelles</h4>
        <h2 data-aos="fade-right" data-aos-offset="200">Domaines de formations certifiantes</h2>
        <hr>
    </div>
</section>

<section class="section-formations" id="section-certifications">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column text-center" data-aos="zoom-in">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/formations/assistant-comptable.jpg'?>" class="img-fluid" alt="">

                <div class="desc">
                    <h4>Assistant Comptable</h4>
                    <p>
                        Permettre aux professionnels des chiffres d'assurer
                        l'enregistrement des mouvements financiers liés à
                        l'activité des entreprises ou organisations.
                    </p>
                </div>
            </div>

            <div class="col d-flex flex-column text-center" data-aos="zoom-in" data-aos-offset="200">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/formations/secretariat-direction.jpg'?>" class="img-fluid" alt="">
                <div class="desc">
                    <h4>Secrétariat de Direction</h4>
                    <p>
                        Permettre aux bénéficiaires d'être dotés de solides
                        qualités professionnelles et relationnelles en vue
                        de bien se positionner dans l'évolution du métier
                        de secrétaire.
                    </p>
                </div>
            </div>

            <div class="col d-flex flex-column text-center" data-aos="zoom-in" data-aos-offset="200">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/formations/ressources-humaines.jpg'?>" class="img-fluid" alt="">
                <div class="desc">
                    <h4>Gestionnaire de Personnel</h4>
                    <p>
                        Permettre une maitrise des outils et techniques
                        pour bâtir des dispositifs RH cohérents et alignés
                        à la stratégie de l'entreprise, facteur clé de
                        performance.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-header">
    <div class="container text-center">
        <h2 data-aos="fade-right">Ils ont bénéficié de nos formations</h2>
        <hr>
    </div>
</section>

<section id="section-team">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 team-card mb-5">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/team/P1490143.jpg'?>" class="img-fluid" alt="">
                <div class="text-center">
                    <h5 class="mt-2 font-weight-bold">Lowell Blé D.</h5>
                    <p class="_text-muted">Directeur</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 team-card mb-5">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/team/P1490150.jpg'?>" class="img-fluid" alt="">
                <div class="text-center">
                    <h5 class="mt-2 font-weight-bold">Lorem Ipsum</h5>
                    <p class="_text-muted">Lorem Ipsum</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 team-card mb-5">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/team/P1490152.jpg'?>" class="img-fluid" alt="">
                <div class="text-center">
                    <h5 class="mt-2 font-weight-bold">Lorem Ipsum</h5>
                    <p class="_text-muted">Lorem Ipsum</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center" data-aos="zoom-in">
        <a href="<?php echo site_url( '/gallerie-photos' ); ?>#formations" class="btn-link">Voir plus de photos</a>
    </div>
</section>

<section class="section-header" id="fdfp">
    <div class="container text-center">
        <h4 data-aos="fade-left">Formations FDFP</h4>
        <h2 data-aos="fade-right" data-aos-offset="200">Domaines d'habilitations agréés</h2>
        <hr>
    </div>
</section>

<section id="section-fdfp" class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center">
                <li class="fas fa-angle-right"></li>
                <h4>Management, Gestion d'Entreprise, Entrepreneuriat</h4>
            </div>

            <div class="col d-flex align-items-center">
                <li class="fas fa-angle-right"></li>
                <h4>Organisation, Gestion des Coopératives et Groupemements</h4>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex align-items-center">
                <li class="fas fa-angle-right"></li>
                <h4>Comptabilité, Gestion financière, Fiscalité</h4>
            </div>

            <div class="col d-flex align-items-center">
                <li class="fas fa-angle-right"></li>
                <h4>Spécialités plurivalentes de la Gestion des Ressources Humaines</h4>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex align-items-center">
                <li class="fas fa-angle-right"></li>
                <h4>Spécialités plurivalentes de l'Informatique</h4>
            </div>

            <div class="col d-flex align-items-center">
                <li class="fas fa-angle-right"></li>
                <h4>Commerce, Marketing et Vente</h4>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex align-items-center">
                <li class="fas fa-angle-right"></li>
                <h4>Secrétariat et Bureautique</h4>
            </div>

            <div class="col d-flex align-items-center">
                <li class="fas fa-angle-right"></li>
                <h4>Spécialités plurivalentes de la Communication</h4>
            </div>
        </div>
    </div>
</section>

<section class="section-header">
    <div class="container text-center">
        <h2 data-aos="fade-right">Ils nous font confiance</h2>
        <hr>
    </div>
</section>

<section id="section-partners">
    <div class="container">
        <div class="d-flex justify-content-around align-items-center">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/partners/linode.svg'?>" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/partners/linux.svg'?>" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/partners/lyft.svg'?>" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/partners/magento.svg'?>" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/partners/paypal.svg'?>" class="img-fluid" alt="">
        </div>
    </div>
</section>

<?php get_footer(); ?>
