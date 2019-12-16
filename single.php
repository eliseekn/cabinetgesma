<?php get_header(); ?>

<header class="text-center" id="header" style="<?php echo set_background( get_template_directory_uri() . '/assets/img/logos/vague.png'); ?>">
    <div class="container">
        <h1 data-aos="fade-left">Blog</h1>
    </div>
</header>

<?php
if( have_posts() ) {
    while( have_posts() ) {
        the_post();
?>

<section id="section-blog">
    <div class="container">
        <div class="row">
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

                <div class="d-flex justify-content-between align-items-center mt-5 posts-pagination">
                    <?php previous_post_link('%link', 'Article précédent', true); ?>
                    <?php next_post_link('%link', 'Article suivant', true); ?>
                </div>

                <?php if (comments_open()) { ?>

                <div class="mt-5">
                    <h4 class="mb-4">Commentaires (<?php comments_number( '0', '1', '%' ) ?>)</h4>

                    <?php
                    $comments = get_comments(
                        array(
                            'post_id' => get_the_ID(),
                            'status' => 'approve'
                        )
                    );

                    foreach($comments as $comment) {
                    ?>

                    <p style="margin-bottom: 0">
                        <strong><?php echo $comment->comment_author; ?></strong> (<?php echo $comment->comment_author_email; ?>)
                    </p>
                    <p class="text-muted" style="margin-bottom: 0">
                        Publié le <?php echo get_comment_date( '', $comment->comment_ID ); ?>
                    </p>
                    <p class="text-justify">
                        <?php echo $comment->comment_content; ?>
                    </p>
                    <hr>

                    <?php } ?>
                </div>

                <div class="mt-5" id="section-contact">

                    <?php
                    $fields =  array(
                        'author'  => '<div class="form-group"><label>Nom (Obligatoire)</label><input class="form-control" name="name" type="text" placeholder="Entrez votre nom ici" required="required"/></div>',
                        'email'  => '<div class="form-group"><label>Adresse email (Obligatoire)</label><input class="form-control" name="email" type="email" placeholder="Entrez votre adresse email ici" required="required"/></div>'
                    );

                    $comments_args = array(
                        'title_reply' => '<h4 class="mb-4">Laisser un commentaire</h4>',
                        'title_reply_before' => '',
                        'logged_in_as' => '',
                        'comment_notes_before' => '',
                        'comment_field' => '<div class="form-group"><label>Commentaire (Obligatoire)</label><textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Entrez votre commentaire ici" required="required"></textarea></div>',
                        'fields' =>  $fields,
                        'class_submit' => 'btn-link mt-2',
                        'label_submit' => 'Publier'
                    );

                    comment_form( $comments_args );
                    ?>

                </div>

                <?php } ?>

            </div>

<?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php
    }
}
?>

<?php get_footer(); ?>
