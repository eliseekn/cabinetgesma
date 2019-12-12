<?php get_header(); ?>

<?php include_once( get_template_directory() . '/templates/page-header.php' ); ?>

<section class="section-header">
    <div class="container text-center">
        <h4>Localisation</h4>
        <h2>Où sommes-nous situés?</h2>
        <hr>
    </div>
</section>

<section id="section-map">
    <div class="container">
        <div id="mapid"></div>
    </div>
</section>

<section class="section-header">
    <div class="container text-center">
        <h4>Plus d'informations?</h4>
        <h2>Remplissez le formulaire ci-dessous</h2>
        <hr>
    </div>
</section>

<section id="section-contact">
    <div class="container">
        <div class="row">
            <div class="col">
                <form id="contact-form">
                    <div class="d-flex justify-content-between mb-4">
                        <div class="d-flex flex-column">
                            <label for="">Nom (Obligatoire)</label>
                            <input type="text" id="contact-name" required="required" style="width:330px">
                        </div>

                        <div class="d-flex flex-column">
                            <label for="">Email (Obligatoire)</label>
                            <input type="email" id="contact-email" required="required" style="width:330px">
                        </div>
                    </div>

                    <div class="d-flex flex-column mb-4">
                        <label for="">Téléphone (Obligatoire)</label>
                        <input type="text" id="contact-phone" required="required">
                    </div>

                    <div class="d-flex flex-column mb-4">
                        <label for="">Objet (Obligatoire)</label>
                        <input type="text" id="contact-subject" required="required">
                    </div>

                    <div class="d-flex flex-column mb-4">
                        <label for="">Message (Obligatoire)</label>
                        <textarea id="contact-message" required="required" rows="8"></textarea>
                    </div>

                    <div class="d-flex flex-direction-between">
                        <input type="submit" value="Envoyer" class="btn-link">
                        <p id="feedback-message"></p>
                    </div>
                </form>
            </div>

            <div class="col-4 ml-4">
                <h4>Coordonnées</h4>
                <hr>
                <p class="mt-4">
                    <li class="fas fa-headset"></li>
                    <span class="ml-2">(+225) 32 76 79 63</span>
                </p>

                <p>
                    <li class="fas fa-envelope"></li>
                    <span class="ml-2">Cabinetgesma@gmail.com</span>
                </p>

                <p class="mt-4">
                    <li class="fas fa-mail-bulk"></li>
                    <span class="ml-2">BP 755 Daloa</span>
                </p>

                <p>
                    <li class="fab fa-facebook-f"></li>
                    <span class="ml-2">facebook.com/cabinetgesma</span>
                </p>

                <p class="mt-4">
                    <li class="fab fa-linkedin"></li>
                    <span class="ml-2">linkedin.com/in/cabinetgesma</span>
                </p>

                <p>
                    <li class="fab fa-twitter"></li>
                    <span class="ml-2">@cabinetgesma</span>
                </p>

                <p>
                    <li class="fab fa-youtube"></li>
                    <span class="ml-2">youtube.com/cabinetgesma</span>
                </p>

                <h4 class="mt-4">Localisation</h4>
                <hr>
                <p class="mt-4">
                    <li class="fas fa-map-marker-alt"></li>
                    <span class="ml-2">
                        Daloa, quartier Baoulé, Rue de l'ancienne staation Bra
                        Kanon à 150 m de la Chambre Régionale des Métiers
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
