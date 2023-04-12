<?php get_header(); ?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">

							<div class="hero"> <!--Öppnar hero-->

                                <?php the_post_thumbnail('large'); ?>

								<div class="text">
									<h1><?php the_title(); ?></h1>
									<p><?php the_content(); ?></p>
								</div>

							</div> <!--Stänger hero-->
						</div>
					</div> <!--Stänger row-->
				</div> <!--Stänger container-->
			</section>
		</main>

<?php get_footer(); ?>