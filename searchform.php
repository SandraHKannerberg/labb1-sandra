<?php
/* Mallfil för hur sökfältet ska visas när man använder get_search_form() */
?>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <div>
        <label class="screen-reader-text" for="search"><?php _x( 'Sök efter:', 'label' ); ?></label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="search" />

        <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x('Sök', 'submit button'); ?>" />
    </div>
</form>