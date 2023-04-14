<?php get_header(); ?>

	<div class="col-xs-12">

		<div class="hero"> <!--Öppnar hero-->

            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

			<img src="<?php the_post_thumbnail_url(); ?>">

				<div class="text">
					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
				</div>

            <?php endwhile; endif; ?>

		</div> <!--Stänger hero-->
	</div> <!--Stänger col-xs-12-->
					
<?php get_footer(); ?>