<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="row"> 
                <div id="primary" class="col-xs-12 col-md-9">

                    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

                        <?php get_template_part('template-parts/article-content', 'article-content'); ?>

                    <?php endwhile; endif; ?>

                </div><!--Stänger div primary-->

                <?php get_sidebar(); ?>
                
            </div> <!--Stänger div row-->
		</div> <!--Stänger div container-->
	</section>
</main>

<?php get_footer(); ?>