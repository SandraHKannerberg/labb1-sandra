<?php
/* Mallfil för att visa sidan Undersida 3 enligt page-$slug.php */
?>

<?php get_header(); //Visar header ?>

<main>
	<section>
		<div class="container">
			<div class="row"> 
                <div id="primary" class="col-xs-12">

                    <?php 
                    //Startar loopen för att få ut innehåll på Undersida 3
                    if (have_posts()) : while(have_posts()) : the_post(); ?>

                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>

                    <?php endwhile; endif; //Stänger loopen ?>

                </div> <!--Stänger primary-->
            </div> <!--Stänger div row-->
		</div> <!--Stänger div container-->
	</section>
</main>
   
<?php get_footer(); //Visar footer ?>