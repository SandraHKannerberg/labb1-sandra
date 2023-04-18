<?php
/* Mallfil för att visa Arkiv sida för bloggen */
?>

<?php get_header(); //Visar header ?>
   
<main>
	<section>
		<div class="container">
			<div class="row">  
                <div id="primary" class="col-xs-12 col-md-9">

                    <h1>Arkiv: 
                        <?php 
                        // Denna rubrik visar arkivets rubrik användaren har klickat på. Exempelvis månad.
                        wp_title(""); 
                        ?>
                    </h1>

                    <?php 
                    //Startar loopen för att få ut arkivets poster
                    if (have_posts()) : while(have_posts()) : the_post(); ?>

                        <?php 
                        //Visar innehåll enligt mallen article-excerpt i template-parts
                        //Visar utvalda delar av innehållet
                        get_template_part('template-parts/article-excerpt', 'article-excerpt'); ?>

                    <?php 
                    //Stänger loopen
                    endwhile; endif; ?>

                    <?php 
                    //Navigering för sidorna. Aktiveras när det finns mer än 3 inlägg på aktuell sida
                    get_template_part('template-parts/pagination', 'pagination'); ?>

                </div><!--Stänger div primary-->

                <?php 
                //Visar en sidomeny
                get_sidebar(); ?>

            </div> <!--Stänger div row-->
		</div> <!--Stänger div container-->
	</section>
</main>

<?php get_footer(); //Visar footer ?>