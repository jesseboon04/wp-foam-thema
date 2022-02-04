<?php
    function load_style_foam(){
    wp_enqueue_style( 'main-css', get_template_directory_uri().'/css/foam1.css');
    }
add_action( 'wp_enqueue_scripts', 'load_style_foam' );

function theme_foam_menu() {
    register_nav_menu('main-menu', __('Hoofdmenu'));
}
add_action( 'init', 'theme_foam_menu' );

function foam_setup_theme(){

    add_theme_support( 'post-thumbnails' );
}

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
add_action('after_setup_theme','foam_setup_theme');


function mytheme_add_woocommerce_() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 2,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );