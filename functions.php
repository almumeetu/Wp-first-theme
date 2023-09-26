<?php 
/*
*  My Theme Function
*/


//Theme Title
add_theme_support('title-tag');


//Theme css and jQuery File calling
function saikat_css_js_file_calling() {
    wp_enqueue_style('wl-style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'saikat_css_js_file_calling');