<?php
/* Mallfil för att visa innehållet på en sida om det inte finns en mallfil enligt page-$id.php eller page-$slug.php */
?>

<?php get_header(); //Visar header ?>

<main>
	<section>
		<div class="container">
			<div class="row"> 
                <div id="primary" class="col-xs-12">

                    <?php
                    //Startar loopen
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