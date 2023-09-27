<?php 
/*
*  My Theme Function
*/


//Theme Title
add_theme_support('title-tag');


//Theme css and jQuery File calling
function saikat_css_js_file_calling() {

    //css
    wp_enqueue_style('wl-style',get_stylesheet_uri());
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom');


    //jQuery
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), '5.0.2', 'true');
}
add_action('wp_enqueue_scripts', 'saikat_css_js_file_calling');


//Theme Function 
function saikat_customizar_register($wp_customize) {
    $wp_customize->add_section('saikat_header_area', array( 
        'title' =>__('Header Area', 'almumeetu'),
        'description' => 'If you interested to update your header area, You can do it here.'
    ));

    $wp_customize->add_setting('saikat_logo')
}