<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="css/foam1.css.css" rel="stylesheet">

    <?php wp_head() ?>
</head>
<header class="logo-menu">

    <img src="<?php echo get_template_directory_uri() ?>/img/foam-logo.svg">
    <div class="icon-positie">
        <a class="btn-winkelmand btn-header" href='/winkelwagen/'> <img class="icon icon1" src="<?php echo get_template_directory_uri() ?>/img/icon-winkelmand.png"></a>
        <button class="btn-wereldbol btn-header"><img class="icon icon2" src="<?php echo get_template_directory_uri() ?>/img/icon-wereldbol2.png"></button>
       <button class="btn-search btn-header"> <img class="icon icon3 " src="<?php echo get_template_directory_uri() ?>/img/icon-search.png"></button>

    </div>
</header>

<body <?php body_class(); ?>>


