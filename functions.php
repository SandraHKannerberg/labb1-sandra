<?php 

    //Lägger till support för temat
    add_theme_support('post-thumbnails'); //Stöd för utvalda bilder
    add_theme_support('menus'); //Stöd för menyer
    add_theme_support('widgets'); //Stöd för widgets

    //Adderar bildstorlekar
    add_image_size('front', 1140, false);
    add_image_size('archive', 790, false);
    add_image_size('page', 555, false);

    //Registrerar menyer
    add_action('after_setup_theme', 'registrera_meny');

    //Vilka menyer ska vara tillgängliga?
    function registrera_meny(){
        register_nav_menu('huvudmeny', 'Huvud meny');
        register_nav_menu('footermeny', 'Footer meny');
        register_nav_menu('undersidor', 'Undersida meny');
    }

    //Registerar widgetsområden
    register_sidebar(array(
        'name' => 'Aboutwidgetarea',
        'id' =>'aboutwidget',
        'description' =>'Widget for the about us section',
    ));

    register_sidebar(array(
        'name' => 'Contactwidgetarea',
        'id' =>'contactwidget',
        'description' =>'Widget for the contact us section',
    ));

    register_sidebar(array(
        'name' => 'Socialwidgetarea',
        'id' =>'socialwidget',
        'description' =>'Widget for the social media section',
    ));

    //Denna funktion laddar styles / css
    function load_styles(){

        //CSS Style
        wp_register_style('stylesheet', get_template_directory_uri() . '/assets/css/style.css');
        wp_enqueue_style('stylesheet');

        //Font Awesome
        wp_register_style('font', get_template_directory_uri() . '/assets/css/font-awesome.css');
        wp_enqueue_style('font');

        //Bootstrap
        wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
        wp_enqueue_style('bootstrap');

    }

    //Denna funktion laddar script och jquery / js
    function load_js(){
        //jquery
        wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), false, true);
        wp_enqueue_script('jquery');

        //script
        wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), false, true);
        wp_enqueue_script('script');
    }

    //Köar in css
    add_action('wp_enqueue_scripts', 'load_styles');

    //Köar in js
    add_action('wp_enqueue_scripts', 'load_js');

?>