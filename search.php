<?php get_header(); ?>

    <div id="primary" class="col-xs-12">

    <h1><?php echo "Sökresultat för: "; the_search_query(); ?></h1>

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?> <!--Start Loop-->

            <?php get_template_part('template-parts/article-excerpt', 'article-excerpt'); ?>

        <?php endwhile; endif; ?> <!--Slut Loop-->

        <?php get_template_part('template-parts/pagination', 'pagination'); ?>

    </div> <!--Stänger primary-->
   
<?php get_footer(); ?>