<?php

function theme_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() .
        '/vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() .
        '/vendor/fontawesome-5.11.2/css/all.min.css' );
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/vendor/aos/aos.css' );
    wp_enqueue_style( 'mapbox', 'https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery-3.4.1.min.js',
        array(), null, true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/vendor/popper.min.js',
        array(), null, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() .
        '/vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js', array(), null, true );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/vendor/aos/aos.js',
        array(), null, true );
    wp_enqueue_script( 'mapbox', 'https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js',
        array(), null, false );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js',
        array(), null, true );
}

function theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );
}

function custom_comment_date( $date, $d, $comment ) {
    return mysql2date( 'j F Y', $comment->comment_date );
}

function theme_widgets() {
	register_sidebars( 2,
        array(
            'name' => 'Gallery sidebar %d',
            'id' => 'gallery_sidebar',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        )
    );
}

function theme_custom_post_type() {
    register_post_type('emploi',
        array(
            'rewrite' => array( 'slug' => 'emploi' ),
            'labels' => array(
                'name' => "Offres d'emploi",
                'singular_name' => "Offre d'emploi",
                'add_new_item' => "Ajouter une offre d'emploi",
                'edit_item' => "Modifier l'offre d'emploi"
            ),
            'menu-icon' => 'dashboard-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor'
            )
        )
    );
}

function custom_comment_fields_order( $fields ) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];

    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );

    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
    $fields['comment'] = $comment_field;

    return $fields;
}

function filter_the_content( $content ) {
    if ( !is_single() ) {
        return mb_strimwidth($content, 0, 180, '...');
    }

    return $content;
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );
add_action( 'after_setup_theme', 'theme_setup' );
add_action( 'widgets_init', 'theme_widgets' );
add_action( 'init', 'theme_custom_post_type');
add_filter( 'get_comment_date', 'custom_comment_date', 10, 3);
add_filter( 'the_content', 'filter_the_content' );
add_filter( 'comment_form_fields', 'custom_comment_fields_order' );

require get_template_directory() . '/inc/functions.php';
