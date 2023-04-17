<!DOCTYPE html>
<html>

<head>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>

    <div id="wrap"> <!--Öppnar div med #wrap. Stänger i footer-->
    
        <header id="header">
            <div class="container">
                <div class="row">

                    <div class="col-xs-8 col-sm-6">
                        <a class="logo" href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a><!--Ändra namnet "loggan" dynamiskt-->
                    </div>

                    <div class="col-sm-6 hidden-xs">
                        <?php get_search_form(); ?>
                    </div>

                    <div class="col-xs-4 text-right visible-xs">
                        <div class="mobile-menu-wrap">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-bars menu-icon"></i>
                        </div>
                    </div>

                </div> <!--Stänger row i Header-->
            </div> <!--Stänger container i Header-->
        </header>

        <div class="mobile-search">
            <?php get_search_form(); ?> 
        </div>

        <!--Navigering huvudmeny-->
        <nav id="nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <?php
                        $menuarray = [
                        'theme_location' => 'huvudmeny',
                        'container' => true,
                        'menu_class' => 'menu',
                        ];

                        wp_nav_menu($menuarray);
                        ?>
                    
                    </div> <!--ger col-xs-12-->
                </div> <!--Stänger row i Header-->
            </div> <!--Stänger container i Header-->
        </nav> <!--Stänger nav-->
