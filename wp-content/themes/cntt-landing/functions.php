<?php
/**
 * Khoa KTQT Landing Theme functions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function ktqt_landing_enqueue_assets() {
    wp_enqueue_style(
        'cntt-landing-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@500;600;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'cntt-landing-style',
        get_stylesheet_uri(),
        array( 'cntt-landing-google-fonts' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'ktqt_landing_enqueue_assets' );

function cntt_landing_body_classes( $classes ) {
    $classes[] = 'cntt-landing';
    return $classes;
}
add_filter( 'body_class', 'cntt_landing_body_classes' );
