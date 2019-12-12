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
    add_theme_support( 'html5', array( 'comment-list', 'comment-form' ) );
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

add_action( 'wp_enqueue_scripts', 'theme_scripts' );
add_action( 'after_setup_theme', 'theme_setup' );
add_action( 'widgets_init', 'theme_widgets' );
add_filter( 'get_comment_date', 'custom_comment_date', 10, 3);

require get_template_directory() . '/inc/functions.php';
