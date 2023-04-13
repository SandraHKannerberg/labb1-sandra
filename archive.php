<?php get_header(); ?>

    <div id="primary" class="col-xs-12 col-md-9">

        <h1><?php single_cat_title(); ?></h1>
                    
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/article', 'article'); ?>

            <?php endwhile; endif; ?>

    </div><!--Stänger div primary-->

    <aside id="secondary" class="col-xs-12 col-md-3">


   
    </aside>


<?php get_footer(); ?>