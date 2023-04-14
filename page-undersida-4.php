<?php get_header(); ?>

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?> <!--Öppnar loopen-->

        <div class="col-xs-12 col-sm-8 col-md-6"> <!--Öppnar textbox-->

            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
                    
        </div> <!--Stänger textbox-->

        <div class="col-xs-12 col-sm-4 col-md-6"> <!--Öppnar bildbox-->

            <img src="<?php the_post_thumbnail_url(); ?>">

        </div> <!--Stänger bildbox-->
            
    <?php endwhile; endif; ?> <!--Stänger loopen-->

<?php get_footer(); ?>