<?php 

function add_css()
{
    wp_register_style('style', get_template_directory_uri() . '/style.css', false,'1.1','all');
    wp_enqueue_style( 'style');

    wp_register_style('indexCss', get_template_directory_uri() . '/css/index.css', false,'1.1','all');
    wp_enqueue_style( 'indexCss');

    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', false,'1.1','all');
    wp_enqueue_style( 'responsive');

    wp_register_script( 'animation', get_template_directory_uri().'/js/animation.js', array(), '1.1', true );
    wp_enqueue_script( 'animation' );
}
add_action('wp_enqueue_scripts', 'add_css');

 function add_aos_animation() {
     wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);
     wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', false, null, true);
     wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/theme.js', array( 'AOS' ), null, true);
 }
 add_action( 'wp_enqueue_scripts', 'add_aos_animation' );


add_theme_support( 'menus' );

register_nav_menus( 
    array(
        'header-top-menu' => __('Header Top Menu', 'theme'),
        'header-bottom-menu' => __('Header Bottom Menu', 'theme'),
        'footer-top-menu' => __('Footer Top Menu', 'theme'),
        'footer-middle-menu' => __('Footer middle Menu', 'theme'),
        'footer-bottom-menu' => __('Footer Bottom Menu', 'theme'),
    ) 
);


function oneplat_custom_logo_setup() {
	$defaults = array(
		'height'               => 94,
		'width'                => 244,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'oneplat_custom_logo_setup' );


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => true
    ));
     
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
     
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
	
}