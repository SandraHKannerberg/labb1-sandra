<?php 

    //Lägger till tema support
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    //Registrerar menyer
    add_action('after_setup_theme', 'registrera_meny');

    //Vilka menyer ska vara tillgängliga?
    function registrera_meny(){
        register_nav_menu('huvudmeny', 'Huvud meny');
        register_nav_menu('footermeny', 'Footer meny');
        register_nav_menu('undersidor', 'Undersida meny');
    }

    //Denna funktion ska ladda mina styles
    function load_styles(){
        //Bootstrap
        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
        wp_enqueue_style('bootstrap');

        //Font Awesome
        wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
        wp_enqueue_style('font-awesome');

        //CSS general style
        wp_register_style('general', get_template_directory_uri() . '/css/general.css');
        wp_enqueue_style('general');

        //CSS header style
        wp_register_style('header', get_template_directory_uri() . '/css/header.css');
        wp_enqueue_style('header');

        //CSS main style
        wp_register_style('main', get_template_directory_uri() . '/css/main.css');
        wp_enqueue_style('main');

        //CSS footer style
        wp_register_style('footer', get_template_directory_uri() . '/css/footer.css');
        wp_enqueue_style('footer');
    }

    //Köar in css
    add_action('wp_enqueue_scripts', 'load_styles');

?>