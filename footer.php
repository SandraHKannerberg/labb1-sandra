<!--Stänger div row, div container, section och main som öppnas i header och är gemensamt för samtliga sidor-->           
            </div> <!--Stänger row-->
		</div> <!--Stänger container-->
	</section>
</main>

<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">

                <?php dynamic_sidebar('footer-section-1')?>

            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">

                <?php dynamic_sidebar('footer-section-2')?>

            </div>

            

           <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">

                <?php dynamic_sidebar('footer-section-3')?>

			</div>

        </div>

        <div class="row bottom">
            <div class="col-xs-12">
                <p>Copyright &copy; Sandra Höst Kannerberg, 2023</p>
            </div>
        </div>

    </div>

</footer>
</div> <!--Stänger div med #wrap som öppnas i header-->

<?php wp_footer(); ?>
</body>

</html>