<?php
/* Mallfil för att visa innehåll på startsidan */
?>


<?php get_header(); //Visar header?>

<main>
	<section>
		<div class="container">
			<div class="row"> 
				<div class="col-xs-12">
					<div class="hero"> <!--Öppnar hero-->

            			<?php 
						//Startar loopen för att få ut startsidans innehåll
						if (have_posts()) : while(have_posts()) : the_post(); ?>

							<img src="<?php the_post_thumbnail_url(); ?>">

							<div class="text">
								<h1><?php the_title(); ?></h1>
								<p><?php the_content(); ?></p>
							</div>

            			<?php endwhile; endif; //Stänger loopen ?>

					</div> <!--Stänger hero-->
				</div> <!--Stänger col-xs-12-->
			</div> <!--Stänger div row-->
		</div> <!--Stänger div container-->
	</section>
</main>
					
<?php get_footer(); //Visar footer?>