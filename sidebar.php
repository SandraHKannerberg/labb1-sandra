<aside id="secondary" class="col-xs-12 col-md-3">
        <div id="sidebar">
            <ul>
                <li>
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