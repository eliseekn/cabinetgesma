<?php
if ( isset( $_POST['submitted'] ) ) {
    $args = array(
		'to' => 'contact@cabinetgesma.com',
        'subject' => $_POST['contact-subject'],
        'message' => "<" . $_POST['contact-name'] . ": " . $_POST['contact-phone'] . ">\r\n\r\n" . $_POST['contact-message'],
        'headers' => array(
			'From: Cabinet GESMA <noreply@cabinetgesma.com>',
			"Reply-To: " . $_POST['contact-name'] . " <" . $_POST['contact-email'] . ">"
        )
    );

    $email_sent = send_mail( $args );
}
?>

<?php get_header(); ?>

<?php include_once( get_template_directory() . '/templates/page-header.php' ); ?>

<?php if ( isset( $email_sent ) ) { ?>

<section class="section-header">
    <div class="container text-center">
        <p class="lead mb-4">
            Merci, votre message a bien été envoyé! <br>
            Nous vous recontacterons dans les plus brefs délais.
        </p>

        <a href="<?php echo home_url( '/' ); ?>" class="btn-link">Retourner à l'accueil</a>
    </div>
</section>

<?php } else { ?>

<section class="section-header">
    <div class="container text-center">
        <h4 data-aos="fade-left">Localisation</h4>
        <h2 data-aos="fade-right" data-aos-offset="200">Où sommes-nous situés?</h2>
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
        <h4 data-aos="fade-left">Plus d'informations?</h4>
        <h2 data-aos="fade-right" data-aos-offset="200">Remplissez le formulaire ci-dessous</h2>
        <hr>
    </div>
</section>

<section id="section-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <form action="<?php the_permalink(); ?>" method="post">
                    <div class="row">
                        <div class="col form-group">
                            <label for="">Nom (Obligatoire)</label>
                            <input type="text" name="contact-name" required="required" class="form-control">
                        </div>

                        <div class="col form-group">
                            <label for="">Email (Obligatoire)</label>
                            <input type="email" name="contact-email" required="required" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Téléphone (Obligatoire)</label>
                        <input type="text" name="contact-phone" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="">Objet (Obligatoire)</label>
                        <input type="text" name="contact-subject" class="form-control" required="required">
                    </div>

                    <div class="form-group mb-4">
                        <label for="">Message (Obligatoire)</label>
                        <textarea name="contact-message" required="required" class="form-control" rows="8"></textarea>
                    </div>

                    <input type="hidden" name="submitted" value="true">
                    <input type="submit" value="Envoyer" class="btn-link">
                </form>
            </div>

            <div class="col-lg-4 col-sm-6 ml-lg-4" data-aos="zoom-in">
                <h4>Coordonnées</h4>
                <hr>
                <p class="mt-4">
                    <li class="fas fa-map-marker-alt"></li>
                    <span class="ml-2">
                        Daloa, quartier Baoulé, Rue de l'ancienne station Bra
                        Kanon à 150 m de la Chambre Régionale des Métiers
                    </span>
                </p>

                <p>
                    <li class="fas fa-headset"></li>
                    <span class="ml-2">
                        <a href="tel:+22532767963">(+225) 32 76 79 63</a>
                    </span>
                </p>

                <p>
                    <li class="fas fa-envelope"></li>
                    <span class="ml-2">
                        <a href="mailto:contact@cabinetgesma.com">contact@cabinetgesma.com</a>
                    </span>
                </p>

                <p class="mt-4">
                    <li class="fas fa-mail-bulk"></li>
                    <span class="ml-2">BP 755 Daloa</span>
                </p>

                <p>
                    <li class="fab fa-facebook-f"></li>
                    <span class="ml-2">
                        <a href="https://web.facebook.com/cabinetgesma/">Cabinet GESMA Sarl</a>
                    </span>
                </p>

                <!-- <p class="mt-4">
                    <li class="fab fa-linkedin"></li>
                    <span class="ml-2">
                        <a href="">cabinetgesma</a>
                    </span>
                </p> -->

                <!-- <p>
                    <li class="fab fa-twitter"></li>
                    <span class="ml-2">
                        <a href="">@cabinetgesma</a>
                    </span>
                </p> -->

                <!-- <p>
                    <li class="fab fa-instagram"></li>
                    <span class="ml-2">
                        <a href="">@cabinetgesma</a>
                    </span>
                </p> -->

                <p>
                    <li class="fab fa-youtube"></li>
                    <span class="ml-2">
                        <a href="https://www.youtube.com/channel/UCCiL1taRK1me9XshXo7rhGg/featured">Cabinet GESMA Sarl</a>
                    </span>
                </p>

                <!-- <h4 class="mt-4">Localisation</h4>
                <hr>
                <p class="mt-4">
                    <li class="fas fa-map-marker-alt"></li>
                    <span class="ml-2">
                        Daloa, quartier Baoulé, Rue de l'ancienne staation Bra
                        Kanon à 150 m de la Chambre Régionale des Métiers
                    </span>
                </p> -->
            </div>
        </div>
    </div>
</section>

<?php } ?>

<?php get_footer(); ?>
