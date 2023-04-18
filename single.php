<?php
/* Mallfil för varje enskilt blogginlägg i sin helhet */
?>

<?php get_header(); //Visar header ?>

<main>
	<section>
		<div class="container">
			<div class="row"> 
                <div id="primary" class="col-xs-12 col-md-9">

                    <?php 
                    //Startar loopen för att visa hela blogginlägget
                    if (have_posts()) : while(have_posts()) : the_post(); ?>

                        <?php 
                        //Visar innehåll enligt mallen article-content i template-parts
                        //Denna mall visar allt innehåll för inlägget
                        get_template_part('template-parts/article-content', 'article-content'); ?>

                    <?php endwhile; endif; //Stänger loopen ?>

                </div><!--Stänger div primary-->

                <?php 
                // Visar sidomeny
                get_sidebar(); ?>
                
            </div> <!--Stänger div row-->
		</div> <!--Stänger div container-->
	</section>
</main>

<?php get_footer(); //Visar footer ?>