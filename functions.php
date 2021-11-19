<?php
//load stylesheets
function load_css()
{
    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.2.0/css/all.css' );
}

add_action('wp_enqueue_scripts', 'load_css');

//load js
function loadjs()
{


    wp_register_script('app', get_template_directory_uri() . '/js/app.js', '', 1, true);
    wp_enqueue_script('app');
    

    wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', null, null, false );
    wp_enqueue_script('jQuery');

}
add_action('wp_enqueue_scripts', 'loadjs');


//Theme Options

add_theme_support('menus');
add_theme_support('widgets');
add_theme_support( 'post-thumbnails' );

//Menus

register_nav_menus(
array(
    'main-menu' => 'Main Menu',
    'mobile-menu' => 'Mobile Menu'
)
);
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

<?php
//custom post type

function directors()
{
$args = array(
    'label' => 'Directors',
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor','thumbnail'),
    'menu_icon'   => 'dashicons-businesswoman',
    //'taxonomies' => array('board_taxonomy'),
);

register_post_type('directors', $args);
}
add_action('init', 'directors');


?>