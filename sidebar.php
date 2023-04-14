<aside id="secondary" class="col-xs-12 col-md-3">
        <div id="sidebar">
            <ul>
                <li>
                    <h2>Sök efter: </h2>
                    <?php get_search_form(); ?>
                </li>
            </ul>

            <ul role="navigation">

            <h2>Sidor</h2>
            <?php dynamic_sidebar('sidebarone')?>

            <h2>Arkiv</h2>
            <?php dynamic_sidebar('sidebartwo')?>

            <h2>Kategorier</h2>
            <?php dynamic_sidebar('sidebarthree')?>

            </ul>
        </div>
</aside>