<?php 

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

    //Lägger till support för temat
    add_theme_support('post-thumbnails'); //Stöd för utvalda bilder
    add_theme_support('menus'); //Stöd för menyer
    add_theme_support('widgets'); //Stöd för widgets

/*	-----------------------------------------------------------------------------------------------
	MENYER
--------------------------------------------------------------------------------------------------- */

    //Registrerar menyer
    add_action('after_setup_theme', 'registrera_meny');

    //Vilka menyer ska vara tillgängliga?
    function registrera_meny(){
        register_nav_menu('huvudmeny', 'Huvud meny');
        register_nav_menu('undersidor', 'Undersida meny');
    }

/*	-----------------------------------------------------------------------------------------------
	WIDGETS
--------------------------------------------------------------------------------------------------- */

    //Funktion för att kunna registrera flera widgets på ett smidigt sätt
    //Sätter mallen för vilka argument register_sidebar ska ta in
    function widget_registration($name, $id, $description, $beforeWidget, $afterWidget, $beforeTitle, $afterTitle) {
        register_sidebar( array(
            'name' => $name,
            'id' => $id,
            'description' => $description,
            'before_widget' => $beforeWidget,
            'after_widget' => $afterWidget,
            'before_title' => $beforeTitle,
            'after_title' => $afterTitle,
        ));
    }

    //Registrerar widgets områden i en gemensam funktion utifrån mallen ovan (function widget_registration)
    function multiple_widget_init(){
        widget_registration('Footer section 1', 'footer-section-1', 'Widgets som placeras här hamnar till vänster i footern', '', '', '<h4>', '</h4>');
        widget_registration('Footer section 2', 'footer-section-2', 'Widgets som placeras här hamnar i mitten i footern', '', '', '<h4>', '</h4>');
        widget_registration('Footer section 3', 'footer-section-3', 'Widgets som placeras här hamnar till höger i footern', '', '', '<h4>', '</h4>');
        widget_registration('Sidebar section 1', 'sidebar-section-1', 'Widgets som placeras här hamnar i sidebarområde 1', '', '<br>', '<h4>', '</h4>');
        widget_registration('Sidebar section 2', 'sidebar-section-2', 'Widgets som placeras här hamnar i sidebarområde 2', '<li class="pagenav %2$s">', '</li>', '<h4>', '</h4>');
        widget_registration('Sidebar section 3', 'sidebar-section-3', 'Widgets som placeras här hamnar i sidebarområde 3', '<li>', '</li>', '<h4>', '</h4>');
        widget_registration('Sidebar section 4', 'sidebar-section-4', 'Widgets som placeras här hamnar i sidebarområde 4', '<li class="categories %2$s">', '</li>', '<h4>', '</h4>');
    }

    //Kör funktionen för de widgets områden som skapas
    add_action('widgets_init', 'multiple_widget_init');

/*	-----------------------------------------------------------------------------------------------
	REGISTER & ENQUEUE STYLES OCH SCRIPT
--------------------------------------------------------------------------------------------------- */

    //Denna funktion laddar styles / css
    function load_styles(){

        $version = wp_get_theme() -> get('Version');

        //Bootstrap
        wp_register_style('labb1-bootstrap', get_template_directory_uri() . '/assets/css/labb1sandra-bootstrap.css', array(), '3.3.7', 'all');
        wp_enqueue_style('labb1-bootstrap');

        //Font Awesome
        wp_register_style('labb1-font', get_template_directory_uri() . '/assets/css/labb1sandra-fontawesome.css', array(), '4.6.3', 'all');
        wp_enqueue_style('labb1-font');

        //CSS Style
        wp_register_style('labb1-style', get_template_directory_uri() . '/assets/css/labb1sandra-style.css', array('labb1-bootstrap'), $version, 'all');
        wp_enqueue_style('labb1-style');

    }

    //Denna funktion laddar script och jquery / js
    function load_js(){
        //jquery
        wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), false, true);
        wp_enqueue_script('jquery');

        //script
        wp_register_script('labb1-script', get_template_directory_uri() . '/assets/js/labb1sandra-script.js', array('jquery'), true, true);
        wp_enqueue_script('labb1-script');
    }

    //Köar in css
    add_action('wp_enqueue_scripts', 'load_styles');

    //Köar in js
    add_action('wp_enqueue_scripts', 'load_js');

?>