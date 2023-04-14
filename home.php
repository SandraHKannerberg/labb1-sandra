<?php get_header(); ?>

    <div id="primary" class="col-xs-12 col-md-9">

    <h1><?php wp_title(""); ?></h1>
                    
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/article-excerpt', 'article-excerpt'); ?>

            <?php endwhile; endif; ?>

            <?php the_posts_pagination(); ?>

    </div><!--Stänger div primary-->

<?php get_sidebar(); ?>


<?php get_footer(); ?>