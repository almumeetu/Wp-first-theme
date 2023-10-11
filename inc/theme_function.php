<?php



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

    // Footer Option
    $wp_customize->add_section('saikat_footer_option', array( 
        'title' => __('Footer Option', 'almumeetu'),
        'description' => 'If you interested to change or update your footer 
         settings  you can do it.'
    ));

    $wp_customize->add_setting('saikat_copyright_section', array( 
        'default' => '&copy; Copyright 2023 | Al Mumeetu Saikat',
    ));

    $wp_customize-> add_control('saikat_copyright_section', array( 
        'label' => 'Copyright Text',
        'description' => 'If need you can update your copyright text from here',
        'setting' => 'saikat_copyright_section',
        'section' => 'saikat_footer_option',
       
    ));
}

add_action('customize_register', 'saikat_customizar_register');