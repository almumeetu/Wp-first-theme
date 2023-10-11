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





//Google Fonts Enqueue
function saikat_add_google_fonts(){
    wp_enqueue_style('saikat_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
}

add_action('wp_enqueue_scripts', 'saikat_add_google_fonts');




//Theme Function 
function saikat_customizar_register($wp_customize) {
    

    // Header Area

    $wp_customize->add_section('saikat_header_area', array( 
        'title' =>__('Header Area', 'almumeetu'),
        'description' => 'If you interested to update your header area, You can do it here.'
    ));

    $wp_customize->add_setting('saikat_logo', array( 
        'default' => get_bloginfo('template_directory') . '/img/Saikat.png',
    ));

    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'saikat_logo', array( 
        'label' => 'Logo Upload',
        'description' => 'If you interested change or upload your logo, You can do it here.',
        'setting' => 'saikat_logo',
        'section' => 'saikat_header_area',
    ) ));

    //Menu Position Option
    $wp_customize->add_section('saikat_menu_option', array( 
        'title' => __('Menu Position Option', 'almumeetu'),
        'description' => 'If you interested to change your menu position you can do it.'
    ));

    $wp_customize->add_setting('saikat_menu_position', array( 
        'default' => 'right_menu',
    ));

    $wp_customize-> add_control('saikat_menu_position', array( 
        'label' => 'Menu Position',
        'description' => 'Select Your Menu Position',
        'setting' => 'saikat_menu_position',
        'section' => 'saikat_menu_option',
        'type' => 'radio',
        'choices' => array( 
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),
        
        
    ));
}

add_action('customize_register', 'saikat_customizar_register');


// WordPress Menu Register
register_nav_menu( 'main_menu', __('Main Menu', 'almumeetu') );


// Walker Menu properties
function saikat_nav_description($item_output, $item, $args){
    if(!empty ($item->description)){
        $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . 
        $item->description . '<span>' . $args->link_after . '</a>', $item_output);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'saikat_nav_description', 10, 3);
