<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="row"> 
                <div class="col-xs-12 col-md-8 col-md-offset-2">

                    <?php if (have_posts()) : while(have_posts()) : the_post(); ?> <!--Start Loop-->

                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>

                    <?php endwhile; endif; ?> <!--Slut Loop-->

                </div> <!--Stänger div col-xs-12 col-md-8 col-md-offset-2-->
             </div> <!--Stänger div row-->
		</div> <!--Stänger div container-->
	</section>
</main>

<?php get_footer(); ?>