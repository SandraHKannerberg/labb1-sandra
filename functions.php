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
        'name' => 'footerwidget1',
        'id' =>'aboutwidget',
        'description' =>'Widget for the about us section',
    ));

    register_sidebar(array(
        'name' => 'footerwidget2',
        'id' =>'contactwidget',
        'description' =>'Widget for the contact us section',
    ));

    register_sidebar(array(
        'name' => 'footerwidget3',
        'id' =>'socialwidget',
        'description' =>'Widget for the social media section',
    ));

    register_sidebar(array(
        'name' => 'sidebar1',
        'id' =>'sidebarone',
        'description' =>'Widget for the sidemenu page section',
        'class' => 'pagenav',
    ));

    register_sidebar(array(
        'name' => 'sidebar2',
        'id' =>'sidebartwo',
        'description' =>'Widget for the sidemenu archive section',
    ));

    register_sidebar(array(
        'name' => 'sidebar3',
        'id' =>'sidebarthree',
        'description' =>'Widget for the sidemenu category section',
        'class' => 'categories',
    ));

    //Denna funktion laddar styles / css
    function load_styles(){

        //Font Awesome
        wp_register_style('font', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), 'all');
        wp_enqueue_style('font');

        //Bootstrap
        wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 'all');
        wp_enqueue_style('bootstrap');

        //CSS Style
        wp_register_style('sandrastyle', get_template_directory_uri() . '/assets/css/sandra-style.css', array(), 'all');
        wp_enqueue_style('sandrastyle');

    }

    //Denna funktion laddar script och jquery / js
    function load_js(){
        //jquery
        wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), false, true);
        wp_enqueue_script('jquery');

        //script
        wp_register_script('sandrascript', get_template_directory_uri() . '/assets/js/sandra-script.js', array('jquery'), true, true);
        wp_enqueue_script('sandrascript');
    }

    //Köar in css
    add_action('wp_enqueue_scripts', 'load_styles');

    //Köar in js
    add_action('wp_enqueue_scripts', 'load_js');

?>