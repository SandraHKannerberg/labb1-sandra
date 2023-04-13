<?php get_header(); ?>

    <div id="primary" class="col-xs-12 col-md-9">

        <h1><?php the_title(); ?></h1>
                    
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

                <article>
                    <?php the_post_thumbnail('archive'); ?>
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

                        <!--Här ska jag skapa innehåll som visar datum, författare och kategorier-->

                    <?php the_excerpt(); ?>
                </article>

            <?php endwhile; endif; ?>

            <nav class="navigation pagination">
                <span><?php the_posts_pagination() ?></span>
            </nav>

            



    </div><!--Stänger div primary-->


<?php get_footer(); ?>