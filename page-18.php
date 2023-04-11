<?php get_header(); ?>

<?php if (have_posts()) : while(have_posts()) : the_post(); ?> <!--Öppnar loopen-->

<main>
    <section>
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-8 col-md-6"> <!--Box för texten-->

                    <h1><?php the_title(); ?></h1>

                    <p><?php the_content(); ?></p>
                    
                </div> <!--Stänger box för texten-->

                <div class="col-xs-12 col-sm-4 col-md-6"> <!--Box för bilden-->

                    <?php the_post_thumbnail('medium'); ?>

                </div> <!--Stänger box för texten-->

            </div>
        </div>
    </section>
</main>

<?php endwhile; endif; ?> <!--Stänger loopen-->

<?php get_footer(); ?>