<div class="col-lg-4 px-5">
    <div class="">
        <h4 class="mb-3">Rechercher un article</h4>
        <?php get_search_form(); ?>
    </div>

    <div class="posts">
        <h4>Articles récents</h4>
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

    <div class="posts mt-5">
        <h4>Archives</h4>
        <hr>
        <ul class="list-group mt-3" style="list-style-type: none">

        <?php
        wp_get_archives(
            array(
                'type' => 'monthly',
                'limit' => 12
            )
        );
        ?>

        </ul>
    </div>
</div>
