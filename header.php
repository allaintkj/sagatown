<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand mr-3 mr-lg-5" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarsExampleDefault">
            <?php

                wp_nav_menu(array(
                    'menu'            => 'primary',
                    'menu_class'      => 'navbar-nav pl-lg-5',
                    'theme_location'  => 'primary',
                    'container'       => 'ul'
                ));

                get_search_form();

            ?>
        </div>
    </nav>

    <main role="main">
        <div class="jumbotron jumbotron-fluid d-flex flex-column justify-content-center" style="background-image: url(<?php header_image(); ?>);">
            <div class="container py-5 text-center" id="header-bg">
                <h1 class="display-3 text-light"><?php bloginfo('name'); ?></h1>
                <p class="text-light"><?php bloginfo('description'); ?></p>
            </div>
        </div>