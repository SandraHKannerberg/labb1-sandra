<?php
/* Mallfil för att visa sidan Undersida 2 enligt page-$slug.php */
?>


<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="row"> 
                <div id="primary" class="col-xs-12 col-md-9 col-md-push-3"> <!--Div för sidans primära innehåll-->

                    <?php 
                    //Startar loopen för att få ut innehåll på Undersida 2
                    if (have_posts()) : while(have_posts()) : the_post(); ?>

                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>

                    <?php endwhile; endif; //Stänger loopen ?>
                    
                </div> <!--Stänger primary-->

                <!--Aside med meny för undersidorna, placering till vänster-->
                <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
                    <?php
                        $menuarray = [
                        'theme_location' => 'undersidor',
                        'container' => true,
                        'menu_class' => 'side-menu',
                        ];

                        wp_nav_menu($menuarray);
                    ?>
                </aside> <!--Stänger Aside / Meny för undersidor-->

            </div> <!--Stänger div row-->
		</div> <!--Stänger div container-->
	</section>
</main>

<?php get_footer(); ?>