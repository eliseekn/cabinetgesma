<?php

function register_theme_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() .
        '/vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() .
        '/vendor/fontawesome-5.11.2/css/all.min.css' );
    wp_enqueue_style( 'leaflet', get_template_directory_uri() . '/vendor/leaflet/leaflet.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery-3.4.1.min.js',
        array(), null, true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/vendor/popper.min.js',
        array(), null, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() .
        '/vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js', array(), null, true );
    wp_enqueue_script( 'leaflet', get_template_directory_uri() .
        '/vendor/leaflet/leaflet.js', array(), null, true );
    wp_enqueue_style( 'script', get_template_directory_uri() . '/assets/js/script.js' );
}

add_action( 'wp_enqueue_scripts', 'register_theme_scripts' );

function theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'theme_setup' );

function custom_comment_date( $date, $d, $comment ) {
    return mysql2date( 'j F Y', $comment->comment_date );
}

add_filter( 'get_comment_date', 'custom_comment_date', 10, 3);

require get_template_directory() . '/inc/functions.php';
