<?php
/* Mallfil för template-part article-content som visar allt innehåll */
?>


<article>
    <img src="<?php the_post_thumbnail_url(); ?>">

    <h2><?php the_title(); ?></h2>

    <?php get_template_part('template-parts/postmeta', 'postmeta'); ?>
                       
    <?php the_content(); ?>
</article>