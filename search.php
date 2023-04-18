<?php
/* Mallfil för att visa sökresultatet när man sökt efter innehåll via sökfälten */
?>

<?php get_header(); //Visar header ?>

<main>
	<section>
		<div class="container">
			<div class="row"> 
                <div id="primary" class="col-xs-12">

                    <h1>
                        <?php 
                        //Visar anpassad rubrik efter det som användaren sökt efter
                        echo "Sökresultat för: "; the_search_query(); ?>
                    </h1>

                    <div class="searchform-wrap"> <!--Visar sökfältet-->
                        <?php get_search_form(); ?>
					</div>

                    <?php 
                    //Startar loopen som visar sökresultatet
                    if (have_posts()) : while(have_posts()) : the_post(); ?>

                        <?php 
                        //Visar innehåll enligt mallen article-axcerpt i template-parts
                        get_template_part('template-parts/article-excerpt', 'article-excerpt'); ?>

                    <?php endwhile; endif; //Stänger loopen ?>

                    <?php 
                    //Navigering för sidorna. Aktiveras när det finns mer än 3 inlägg på aktuell sida
                    get_template_part('template-parts/pagination', 'pagination'); ?>

                </div> <!--Stänger primary-->
            </div> <!--Stänger div row-->
		</div> <!--Stänger div container-->
	</section>
</main>
   
<?php get_footer(); //Visar footer ?>