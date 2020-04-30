<!-- About this file: 
Here, you can add hooks into and configure your theme however you want to! 

<?php

// Calling stylesheets
function load_stylesheets()
{
    // Note: The order in which you load your style sheets matters!
    // wp_register_style('style file name', style file location, optionally identify version)
    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    // Always put your own style at the end, so the others don't override them
    wp_register_style('style',get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

}
// Load the function
add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery()
{

    // Deregister in case there is a jquery somewhere
    wp_deregister_script('jquery');
    
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.3.min.js');
    add_action('wp_enqueue_scripts', 'jquery');

}
add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs()
{

    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js');
    wp_enqueue_script('customjs');

}
// Load the function
add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');

add_theme_support('post-thumbnails');

register_nav_menus(

    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )

);

// True if you want it cropped to the exact specification, false if you don't want it cropped
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);