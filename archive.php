<?php get_header(); ?>

<header class="text-center" id="header" style="<?php echo set_background('/assets/img/logos/vague.png'); ?>">
    <div class="container">
        <h1>Blog</h1>
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

                <div class="mt-5">
                    <h4>Derniers commentaires (<?php comments_number( '0', '1', '%' ) ?>)</h4>
                    <?php
                    $comments = get_comments( array( 'post_id' => get_the_ID() ) );
                    foreach($comments as $comment) {
                    ?>

                    <p style="margin-bottom: 0"><strong><?php echo $comment->comment_author; ?></strong></p>
                    <p class="text-muted">Publié le <?php echo get_comment_date( '', $comment->comment_ID ); ?></p>
                    <p class="text-justify">
                        <?php echo $comment->comment_content; ?>
                    </p>
                    <hr>

                    <?php } ?>
                </div>

                <div class="mt-5">
                    <?php
                    $fields =  array(
                        'email'  => '<div class="form-group"><label>Adresse email (facultatif)</label><input class="form-control" name="email" type="email" placeholder="Entrez votre adresse email ici" required="required"/></div>',
                    );

                    $comments_args = array(
                        'title_reply' => '<h4>Laisser un commentaire</h4>',
                        'title_reply_before' => '',
                        'comment_notes_before' => '',
                        'fields' =>  $fields,
                        'comment_field' => '<div class="form-group"><label>Commentaire</label><textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Entrez votre commentaire ici" required="required"></textarea></div>',
                        'class_submit' => 'btn-link mt-2',
                        'label_submit' => 'Publier'
                    );

                    comment_form( $comments_args );
                    ?>
                </div>
            </div>

            <div class="col-lg-4 px-5 mt-5">
                <div class="posts">
                    <h4>Derniers articles</h4>
                    <hr>
                    <ul class="list-group mt-3" style="list-style-type: none">
                    <?php
                    wp_get_archives(
                        array(
                            'type' => 'alpha',
                            'limit' => 10
                        )
                    );
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    }
}
?>

<?php get_footer(); ?>
