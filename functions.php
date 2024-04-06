<?php 

function add_css()
{
    wp_register_style('style', get_template_directory_uri() . '/style.css', false,'1.1','all');
    wp_enqueue_style( 'style');

    wp_register_style('indexCss', get_template_directory_uri() . '/css/index.css', false,'1.1','all');
    wp_enqueue_style( 'indexCss');

    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', false,'1.1','all');
    wp_enqueue_style( 'responsive');
}
add_action('wp_enqueue_scripts', 'add_css');


add_theme_support( 'menus' );

register_nav_menus( 
    array(
        'header-top-menu' => __('Header Top Menu', 'theme'),
        'header-bottom-menu' => __('Header Bottom Menu', 'theme'),
        'footer-top-menu' => __('Footer Top Menu', 'theme'),
        'footer-bottom-menu' => __('Footer Bottom Menu', 'theme'),
    ) 
);