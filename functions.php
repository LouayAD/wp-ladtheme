<?php

function load_stylesheets()
{
    //loading bootsrap
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('ladstyle', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('ladstyle');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery()
{
    //loading jquery
    wp_deregister_script('jquery'); //we deregister first to make sure we are not registering twice incase wp registered somehow from another script
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', '', 1, true);

    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

function load_js()
{
    //loading js
    wp_register_script('ladjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('ladjs');
}
add_action('wp_enqueue_scripts', 'load_js');

//theme options
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

//adding different image sizes
add_image_size('smallest', 150, 150, true);
add_image_size('small', 300, 300, true);
add_image_size('large', 500, 500, true);
add_image_size('largest', 800, 800, true);