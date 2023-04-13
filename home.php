<?php get_header(); ?>

    <div id="primary" class="col-xs-12 col-md-9">

        <h1><?php the_title(); ?></h1>
                    
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/article', 'article'); ?>

            <?php endwhile; endif; ?>

            <nav class="navigation pagination">
                <span><?php the_posts_pagination() ?></span>
            </nav>

    </div><!--Stänger div primary-->

    <aside id="secondary" class="col-xs-12 col-md-3">
        <div id="sidebar">
            <?php dynamic_sidebar('sidemenuwidget')?>
        </div>
    </aside>


<?php get_footer(); ?>