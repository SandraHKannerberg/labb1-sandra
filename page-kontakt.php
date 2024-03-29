<?php
/* Mallfil för att visa sidan Kontakt enligt page-$slug.php */
?>


<?php get_header(); //Visar header ?>

<main>
	<section>
		<div class="container">
			<div class="row"> 
                <div class="col-xs-12 col-md-8 col-md-offset-2">

                    <?php 
                    //Startar loopen för att få ut kontaktsidans innehåll
                    if (have_posts()) : while(have_posts()) : the_post(); ?>

                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>

                    <?php endwhile; endif; //Stänger loopen ?>

                </div> <!--Stänger div col-xs-12 col-md-8 col-md-offset-2-->
             </div> <!--Stänger div row-->
		</div> <!--Stänger div container-->
	</section>
</main>

<?php get_footer(); //Visar footer ?>