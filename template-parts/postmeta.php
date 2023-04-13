<ul class="meta">
    <li>
        <i class="fa fa-calender"></i> <!--TO DO: Denna ikon fungerar inte-->
        <?php echo the_date(); ?>
    </li>

    <li>
        <i class="fa fa-user"></i>
        <a href="<?php echo the_author();?>"><?php the_author(); ?></a>
    </li>

    <li>
        <i class="fa fa-tag"></i>
        <?php echo the_category(', '); ?>
    </li>
</ul>