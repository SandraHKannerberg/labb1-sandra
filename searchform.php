<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <div>

        <label class="screen-reader-text">Sök efter:</label><!--TO DO denna text syns inte på sidbaren-->
        <input type="text" value="<?php echo get_search_query(); ?> . " name="s" /><!--TO DO Blir . i sökfältet-->

        <input type="submit" value="<?php echo esc_attr_x('Sök', 'submit button'); ?>" />

    </div>
</form>