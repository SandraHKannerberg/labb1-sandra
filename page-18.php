<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">

            <?php if (have_posts()) : while(have_posts()) : the_post(); ?> <!--Öppnar loopen-->

                <div class="col-xs-12 col-sm-8 col-md-6"> <!--Öppnar textbox-->

                    <h1><?php the_title(); ?></h1>

                    <p><?php the_content(); ?></p>
                    
                </div> <!--Stänger textbox-->

                <div class="col-xs-12 col-sm-4 col-md-6"> <!--Öppnar bildbox-->

                    <?php the_post_thumbnail('large'); ?>

                </div> <!--Stänger bildbox-->
            
            <?php endwhile; endif; ?> <!--Stänger loopen-->

            </div> <!--Stänger row-->
        </div> <!--Stänger container-->
    </section>
</main>

<?php get_footer(); ?>