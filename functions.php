<?php 

/** 
    *Max Ludwig Planck
    *@link 
    *@package WordPress
    *@subpackage Max Ludwig Planck
    *@since 1.0.0
    *@version 1.0.0
*/

define('URL',get_stylesheet_directory_uri());
define('IMG',URL.'/images');
define('JS',URL.'/libraries/js');
define('CSS',URL.'/libraries/css');

register_nav_menus( array(
    'menu-header-arriba' => 'Header Menu Arriba',
    'menu-header-abajo' => 'Header Menu Abajo'
));

if(!function_exists ('general_scripts')):
    function general_scripts(){
        wp_register_style('style', get_stylesheet_uri(),array(),'1.0.0','all');
        wp_register_style('maincss', get_template_directory_uri().'/public/css/app.css','1.0.0','all');
        wp_register_style('splidecss', get_template_directory_uri().'/libraries/css/splide.min.css','1.0.0','all');
        // wp_register_style('maincss2', get_template_directory_uri().'/libraries/css/main.css','1.0.0','all');

        wp_enqueue_style('style');
        wp_enqueue_style('maincss');
        // wp_enqueue_style('maincss2');
        wp_enqueue_style('splidecss');
            
        wp_register_script('splidejs', get_template_directory_uri().'/libraries/js/splide.min.js',array(),'1.0.0',true);
        wp_register_script('splideautoscrolljs', get_template_directory_uri().'/libraries/js/splide-extension-auto-scroll.min.js',array(),'1.0.0',true);
        wp_register_script('mainjs', get_template_directory_uri().'/public/js/main.min.js',array(),'1.0.0',true);

        wp_enqueue_script('splidejs');
        wp_enqueue_script('splideautoscrolljs');
        wp_enqueue_script('mainjs');
    }
endif;
add_action('wp_enqueue_scripts', 'general_scripts');

//add postthumbnail function
if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

//excerpt 30 word
function my_excerpt_length($length){return 30;}
add_filter('excerpt_length', 'my_excerpt_length');

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'En la cabecera' )
        )
    );
}

add_action( 'init', 'register_my_menus' );