<?php
if (isset($_POST['submitted'])) {
    // $contact_name = $_POST['contact-name'];
    // $contact_email = $_POST['contact-email'];
    // $contact_cv = $_POST['contact-cv'];
    // $job_title = $_POST['job-title'];

    $allowed = array( 'doc', 'docx', 'pdf' );
    $ext = pathinfo( $_FILES['contact-cv']['name'], PATHINFO_EXTENSION );

    if ( !in_array( $ext, $allowed ) ) {
        $email_sent = false;
    } else {
        $attachement = WP_CONTENT_DIR . '/uploads/' . basename( $_FILES['contact-cv']['name'] );
    	move_uploaded_file( $_FILES['contact-cv']['tmp_name'], $attachement );

        // $to = get_option( 'tz_email' );
        // $subject = "Candidature pour l'offre d'emploi: " . $job_title;
        // $message = "Candidature de " . $contact_name . " (" . $contact_phone . ")";
        // $headers[] = 'From: Cabinet GESMA <noreply@cabinetgesma.com>';
        // $headers[] = 'Reply-To: ' . $contact_email;
        //
        // $email_sent = wp_mail( $to, $subject, $message, $headers, $attachement );

        $args = array(
            'subject' => "Candidature pour l'offre d'emploi: " . $_POST['job-title'],
            'message' => "Candidature de " . $_POST['contact-name'],
            'headers' => array(
                'From: Cabinet GESMA <noreply@cabinetgesma.com>',
                'Reply-To: ' . $_POST['contact-email']
            ),
            'attachment' => $attachement
        );

        $email_sent = send_mail( $args );
    }
}
?>

<?php get_header(); ?>

<header class="text-center" id="header" style="<?php echo set_background( get_template_directory_uri() . '/assets/img/logos/vague.png'); ?>">
    <div class="container">
        <h1 data-aos="fade-left">Offre d'emploi</h1>
    </div>
</header>

<?php if ( isset( $email_sent ) ) { ?>

<section class="section-header">
    <div class="container text-center">

        <?php if ( $email_sent == true ) { ?>

        <p class="lead mb-4">
            Merci, votre candidature a bien été envoyée! <br>
            Nous vous recontacterons dans les plus brefs délais.
        </p>

        <a href="<?php echo home_url( '/' ); ?>" class="btn-link">Retourner à l'accueil</a>

        <?php } else { ?>

        <p class="lead mb-4">
            Le format de CV est invalide! <br>
            Seuls les documents aux formats Microsoft Word (doc, docx) et PDF sont autorisés.
        </p>

        <?php } ?>
    </div>
</section>

<?php } else { ?>

<section id="section-blog">
    <div class="container">
        <div class="row">

            <?php
            if( have_posts() ) {
                while( have_posts() ) {
                    the_post();
            ?>

            <div class="col-lg-8">

                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'large', ['class' => 'img-fluid'] );
                }
                ?>

                <h1><?php the_title(); ?></h1>
                <p class="text-muted">Publié le <?php the_date(); ?></p>
                <div class="text-justify">
                    <?php the_content(); ?>
                </div>

                <!-- <div class="d-flex justify-content-between align-items-center mt-5 posts-pagination">
                    <?php previous_post_link('%link', 'Offre précédente', true); ?>
                    <?php next_post_link('%link', 'Offre suivante', true); ?>
                </div> -->

                <div id="section-contact">
                    <h4 class="mt-5 mb-4">Postuler à l'offre</h4>

                    <form action="<?php the_permalink(); ?>" method="post" enctype="multipart/form-data">
                        <div class="d-flex flex-column mb-4">
                            <label for="">Nom (Obligatoire)</label>
                            <input type="text" name="contact-name" class="form-control" required="required">
                        </div>

                        <div class="d-flex flex-column mb-4">
                            <label for="">Email (Obligatoire)</label>
                            <input type="email" name="contact-email" class="form-control" required="required">
                        </div>

                        <div class="d-flex flex-column mb-4">
                            <label for="">Curiculum Vitae (Obligatoire)</label>
                            <input type="file" name="contact-cv" class="form-control-file" required="required">
                        </div>

                        <input type="hidden" name="submitted" value="true">
                        <input type="hidden" name="job-title" value="<?php the_title(); ?>">
                        <input type="submit" value="Postuler" class="btn-link">
                    </form>
                </div>
            </div>

            <?php
                }
            }
            ?>

            <div class="col-lg-4 px-lg-5 mt-5">
                <div class="">
                    <h4 class="mb-3">Rechercher une offre</h4>

                    <form action="<?php echo home_url( '/' ); ?>" action="get" class="search-form">
                        <div class="input-group mb-5">
                            <input type="search" name="s" class="form-control" required="required">

                            <button type="submit" class="btn-link">
                                <li class="fas fa-search"></li>
                            </button>

                            <input type="hidden" value="emploi" name="post_type" id="post_type">
                        </div>
                    </form>
                </div>

                <div class="posts">
                    <h4>Offres récentes</h4>
                    <hr>
                    <ul class="list-group mt-3" style="list-style-type: none">

                    <?php
                    $args = array(
                        'post_type' => 'emploi',
                        'posts_per_page' => 10
                    );

                    $posts = new WP_Query( $args );

                    while ( $posts->have_posts() ) {
                        $posts->the_post();
                    ?>

                    <li>
                        <a href="<?php echo the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </li>

                    <?php } wp_reset_query(); ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php } ?>

<?php get_footer(); ?>
