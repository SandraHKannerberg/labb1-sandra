<?php
/* Mallfil för att visa default index.php om ingen annan sidmall finns */
?>

<?php get_header(); //Visar header ?>

<main>
	<section>
		<div class="container">
			<div class="row"> 

				<?php 
				//Startar loopen för att få ut innehållet enligt default mall
				if (have_posts()) : while(have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>

				<?php endwhile; endif; //Stänger loopen ?>

            </div> <!--Stänger div row-->
		</div> <!--Stänger div container-->
	</section>
</main>

<?php get_footer(); //Visar footer ?>