<?php
/**
 * Main theme functions file
 *
 * Contains all initialization functions for the theme.
 *
 * @package Sagatown
 */

/* FUNCTIONS -------------------------------------------------- */
require_once('functions/jobs.php');
require_once('functions/leadership.php');
require_once('functions/news.php');
require_once('functions/partners.php');
require_once('functions/portfolio.php');

/**
 * Nav menu classes
 *
 * Add nav-item class to nav menu items
 */
function sagatown_nav_menu_css_class($classes) {
    array_push($classes, 'nav-link');
    return $classes;
}
add_filter('nav_menu_css_class', 'sagatown_nav_menu_css_class');

/**
 * Search form classes
 *
 * Add several bootstrap classes to search form
 */
function sagatown_search_form_css_class($search_form) {
    // Form element
    $exp_search = explode('class="search-form"', $search_form);
    $imp_search = implode('class="search-form form-inline flex-column py-5 py-lg-2"', $exp_search);
    // Hide screen reader text
    $exp_search = explode('class="screen-reader-text"', $imp_search);
    $imp_search = implode('class="screen-reader-text invisible position-absolute"', $exp_search);
    // Text field input
    $exp_search = explode('class="search-field"', $imp_search);
    $imp_search = implode('class="search-field form-control mb-2 mx-auto mr-lg-0"', $exp_search);
    // Submit button
    $exp_search = explode('class="search-submit"', $imp_search);
    $new_search = implode('class="search-submit btn btn-outline-success mx-auto mr-lg-0"', $exp_search);

    return $new_search;
}
add_filter('get_search_form', 'sagatown_search_form_css_class');

/* MENUS ------------------------------------------------- */

/**
 * Register menus
 *
 * Register theme menus.
 */
function sagatown_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
    add_theme_support('html5', array('search-form'));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'sagatown'),
        'social'  => __('Social Media Menu', 'sagatown'),
        'contact' => __('Footer Contact Link', 'sagatown')
    ));
}
add_action('after_setup_theme', 'sagatown_theme_setup');

/* STYLES -------------------------------------------------- */

/**
 * Add theme styles
 *
 * Enqueues styles for the theme frontend.
 */
function sagatown_load_css() {
    wp_register_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap_css');

    wp_register_style('sagatown_css', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('sagatown_css');
}
add_action('wp_enqueue_scripts', 'sagatown_load_css');

/* SCRIPTS -------------------------------------------------- */

/**
 * Add theme scripts
 *
 * Enqueues scripts for the theme frontend.
 */
function sagatown_load_js() {
    wp_register_script('jquery_js', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', '', false, true);
    wp_enqueue_script('jquery_js');

    wp_register_script('popper_js', get_template_directory_uri() . '/js/popper.min.js', '', false, true);
    wp_enqueue_script('popper_js');

    wp_register_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', '', false, true);
    wp_enqueue_script('bootstrap_js');

    wp_register_script('sagatown_js', get_template_directory_uri() . '/js/_app.js', '', false, true);
    wp_enqueue_script('sagatown_js');
}
add_action('wp_enqueue_scripts', 'sagatown_load_js');