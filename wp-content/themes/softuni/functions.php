<?php

function load_assets_scripts( $hook )
{

    // Load scripts in footer and add defer property
    $args = array(
        'in_footer' => true,
        'strategy'  => 'defer',
    );

    // Error - Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 3
    // Error fix
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, null );
    wp_enqueue_script( 'jquery' );

    // Scripts
    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', $args );
    wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0.0', $args );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', $args );

    // Styles
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0' );
    wp_enqueue_style( 'ionicons_css', get_template_directory_uri() . '/assets/css/ionicons.css', array(), '1.0.0' );
    wp_enqueue_style( 'magnific_popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', $args );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );
    wp_enqueue_style( 'owl_carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.0' );
    wp_enqueue_style( 'owl_carousel_theme', get_template_directory_uri() . '/assets/css/owl.carousel.theme.min.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'load_assets_scripts' );
