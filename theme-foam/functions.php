<?php
    function load_style_foam(){
    wp_enqueue_style( 'main-css', get_template_directory_uri().'/css/foam.css');
    }
add_action( 'wp_enqueue_scripts', 'load_style_foam' );

function theme_foam_menu() {
    register_nav_menu('main-menu', __('Hoofdmenu'));
}
add_action( 'init', 'theme_foam_menu' );