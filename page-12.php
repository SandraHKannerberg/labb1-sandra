<?php get_header(); ?>

<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">

                <div id="primary" class="col-xs-12 col-md-9">

                    <h1><?php the_title(); ?></h1>

                    <p><?php the_content(); ?></p>
                    
                </div>

                <aside id="secondary" class="col-xs-12 col-md-3">
                    <?php
                        $menuarray = [
                        'theme_location' => 'undersidor',
                        'container' => true,
                        'menu_class' => 'side-menu',
                        ];

                        wp_nav_menu($menuarray);
                    ?>
                </aside>

            </div>
        </div>
    </section>
</main>
<?php endwhile; endif; ?>


<?php get_footer(); ?>