<ul class="meta">
    <li>
        <i class="fa fa-calendar"></i>
        <?php echo get_the_date(); ?>
    </li>

    <li>
        <i class="fa fa-user"></i>
        <a href="<?php echo the_permalink();?>"><?php the_author(); ?></a> <!--TO DO: Fixa länken till författarsidan-->
    </li>

    <li>
        <i class="fa fa-tag"></i>
        <?php echo the_category(', '); ?>
    </li>
</ul>