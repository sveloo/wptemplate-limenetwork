<?php

    // ENQUEUE STYLES
    function lime_theme_styles() {

        wp_enqueue_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
        wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Montserrat|Muli');
        wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css');
        wp_enqueue_style( 'lime-css', get_template_directory_uri() . '/css/styles.min.css');
    }
    add_action('wp_enqueue_scripts', 'lime_theme_styles');


    // REPLACE DEFAULT JQUERY WITH GOOGLE JQUERY
    function lime_jquery() {
       wp_deregister_script('jquery');
       wp_register_script('jquery', 'https://code.jquery.com/jquery-2.1.1.min.js', '', false);
       wp_enqueue_script('jquery');
    }
    add_action('wp_enqueue_scripts', 'lime_jquery');


    // ENQUEUE SCRIPTS
    function lime_theme_scripts() {
        wp_enqueue_script('materialise-js', get_template_directory_uri() . '/js/materialize.min.js', array('jquery'), '', true );
        wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
        wp_enqueue_script('lime-js', get_template_directory_uri() . '/js/scripts.min.js', array('slick'), '', true );
    }
    add_action('wp_enqueue_scripts', 'lime_theme_scripts');

?>