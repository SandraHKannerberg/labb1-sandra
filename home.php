<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">

                    <h1><?php the_title(); ?></h1>
                    
                    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

                        <article>
                            <?php the_post_thumbnail('large'); ?>
                            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                            <!--Här ska jag skapa innehåll som visar datum, författare och kategorier-->
                            <?php the_excerpt(); ?>
                        </article>

                    <?php endwhile; endif; ?>

                </div><!--Stänger div primary-->
            </div><!--Stänger div row-->
        </div><!--Stänger div container-->
    </section>

</main>

<?php get_footer(); ?>