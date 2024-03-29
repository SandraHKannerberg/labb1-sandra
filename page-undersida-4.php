<?php
/* Mallfil för att visa sidan Undersida 4 enligt page-$slug.php */
?>

<?php get_header(); //Visar header ?>

<main>
	<section>
		<div class="container">
			<div class="row"> 

                <?php 
                //Startar loopen för att få ut innehåll på Undersida 4
                if (have_posts()) : while(have_posts()) : the_post(); ?>

                    <div class="col-xs-12 col-sm-8 col-md-6"> <!--Öppnar textbox-->

                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                    
                    </div> <!--Stänger textbox-->

                    <div class="col-xs-12 col-sm-4 col-md-6"> <!--Öppnar bildbox-->

                        <img src="<?php the_post_thumbnail_url(); ?>">

                    </div> <!--Stänger bildbox-->
            
                <?php endwhile; endif;//Stänger loopen ?>

            </div> <!--Stänger div row-->
		</div> <!--Stänger div container-->
	</section>
</main>

<?php get_footer(); //Visar footer ?>