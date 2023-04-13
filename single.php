<?php get_header(); ?>
     
    <div id="primary" class="col-xs-12 col-md-9">
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <article>
   
            <h1><?php the_title(); ?></h1>

            <!--Här ska jag skapa innehåll som visar datum, författare och kategorier-->

            <?php the_content(); ?>
        </article>

        <?php endwhile; endif; ?>
    </div><!--Stänger div primary-->

    <aside id="secondary" class="col-xs-12 col-md-3">
        <div id="sidebar">
            <?php dynamic_sidebar('sidemenuwidget')?>
        </div>
    </aside>

<?php get_footer(); ?>