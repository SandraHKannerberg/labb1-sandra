<article>
    <?php the_post_thumbnail('archive'); ?>

    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

    <?php get_template_part('template-parts/postmeta', 'postmeta'); ?>
                       
    <?php the_content(); ?>
</article>