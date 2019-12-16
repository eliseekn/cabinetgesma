<?php
if (isset($_POST['submitted'])) {
    $contact_name = $_POST['contact-name'];
    $contact_email = $_POST['contact-email'];
    $contact_phone = $_POST['contact-phone'];
    $contact_subject = $_POST['contact-subject'];
    $contact_message = $_POST['contact-message'];

    $to = get_option( 'tz_email' );
    $subject = $contact_subject;
    $message = "Message de " . $contact_name . " (" . $contact_phone . ")\r\n" . $contact_message;
    $headers[] = 'From: Cabinet GESMA <noreply@cabinetgesma.com>';
    $headers[] = 'Reply-To: ' . $contact_email;

    $email_sent = wp_mail($to, $subject, $message, $headers);
}
?>

<?php get_header(); ?>

<?php include_once( get_template_directory() . '/templates/page-header.php' ); ?>

<?php if (isset($email_sent)) { ?>

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
                <form action="<?php the_permalink(); ?>" method="post">
                    <div class="d-flex justify-content-between mb-4">
                        <div class="d-flex flex-column">
                            <label for="">Nom (Obligatoire)</label>
                            <input type="text" name="contact-name" required="required" class="form-control" style="width:330px">
                        </div>

                        <div class="d-flex flex-column">
                            <label for="">Email (Obligatoire)</label>
                            <input type="email" name="contact-email" required="required" class="form-control" style="width:330px">
                        </div>
                    </div>

                    <div class="d-flex flex-column mb-4">
                        <label for="">Téléphone (Obligatoire)</label>
                        <input type="text" name="contact-phone" class="form-control" required="required">
                    </div>

                    <div class="d-flex flex-column mb-4">
                        <label for="">Objet (Obligatoire)</label>
                        <input type="text" name="contact-subject" class="form-control" required="required">
                    </div>

                    <div class="d-flex flex-column mb-4">
                        <label for="">Message (Obligatoire)</label>
                        <textarea name="contact-message" required="required" class="form-control" rows="8"></textarea>
                    </div>

                    <input type="hidden" name="submitted" value="true">
                    <input type="submit" value="Envoyer" class="btn-link">
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

<?php } ?>

<?php get_footer(); ?>
