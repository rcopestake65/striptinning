<?php
//load stylesheet
function load_css()
{
    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_css');

//load js
function load_js()
{

    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri() . '/js/app.js', false, true);
    wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts', 'load_js');


//Theme Options

add_theme_support('menus');

add_theme_support('widgets');


//Register Sidebar

function sidebar(){
register_sidebar(
    array(
        'name' => 'Menu Sidebar',
        'id' => 'page-sidebar',
        
    )
    );
}
add_action('widgets_init', 'sidebar');
?>