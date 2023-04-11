<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">

                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                
                <div id="primary" class="col-xs-12 col-md-9">
                    <article>
   
                        <h1><?php the_title(); ?></h1>

                        <!--Här ska jag skapa innehåll som visar datum, författare och kategorier-->

                        <?php the_content(); ?>
                    </article>
                </div><!--Stänger div primary-->

                <aside id="secondary" class="col-xs-12 col-md-3">

                    <!--Här ska jag skapa sidebaren-->

                </aside>

                <?php endwhile; endif; ?>

            </div>
        </div>
    </section>




</main>









<?php get_footer(); ?>