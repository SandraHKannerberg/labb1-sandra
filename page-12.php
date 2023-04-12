<?php get_header(); ?>

    <div id="primary" class="col-xs-12 col-md-9"> <!--Div för sidans primära innehåll-->

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?> <!--Start Loop-->

            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>

        <?php endwhile; endif; ?> <!--Slut Loop-->
                    
    </div> <!--Stänger primary-->

    <aside id="secondary" class="col-xs-12 col-md-3"> <!--Aside med meny för undersidorna, placering till höger-->
        <?php
            $menuarray = [
            'theme_location' => 'undersidor',
            'container' => true,
            'menu_class' => 'side-menu',
            ];

            wp_nav_menu($menuarray);
        ?>
    </aside> <!--Stänger aside - Meny för undersidorna-->

<?php get_footer(); ?>