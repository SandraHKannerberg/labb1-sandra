<article>
    <?php the_post_thumbnail('archive'); ?>

    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

    <ul class="meta">
        <li><i class="fa fa-calender"></i><?php the_time(); ?></li>
        <li><i class="fa fa-user"><?php the_author(); ?></i></li>
        <li><i class="fa fa-tag"></i><?php the_category(); ?></li>
    </ul>
                        
    <?php the_excerpt(); ?>
</article>