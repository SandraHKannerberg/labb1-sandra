<?php 

    //Denna funktion ska ladda mina styles och scripts
    function mina_script(){
        //CSS general style
        wp_register_style('general', get_template_directory_uri() . '/css/general.css');
        wp_enqueue_style('general');

        //CSS header style
        wp_register_style('header', get_template_directory_uri() . '/css/header.css');
        wp_enqueue_style('header');

        //CSS header style
        wp_register_style('main', get_template_directory_uri() . '/css/main.css');
        wp_enqueue_style('main');

        //CSS header style
        wp_register_style('footer', get_template_directory_uri() . '/css/footer.css');
        wp_enqueue_style('footer');
    }

    //Köar in css
    add_action('wp_enqueue_scripts', 'mina_script');

?>