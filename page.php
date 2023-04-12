<?php get_header(); ?>

    <div id="primary" class="col-xs-12">

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?> <!--Start Loop-->

            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>

        <?php endwhile; endif; ?> <!--Slut Loop-->

    </div> <!--Stänger primary-->
   
<?php get_footer(); ?>