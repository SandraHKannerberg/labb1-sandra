<!--Stänger div row, div container, section och main som öppnas i header och är gemensamt för samtliga sidor-->           
            </div> <!--Stänger row-->
		</div> <!--Stänger container-->
	</section>
</main>

<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">

                <h4>Kort om oss</h4>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, 
                efficitur vel fringilla quis, vehicula quis ex.</p>
                <p>Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis.</p>

            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">

                <h4>Kontaktuppgifter</h4>

                <p>
                    The Company <br>
                    Gatgatan 1 <br>
                    123 45 Någonstans <br>
                </p>

                <p>
                    Tel: 0123456789 <br>
                    E-post: info@thecompany.com <br>
                </p>

            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">

                    <h4>Social Media</h4>

                    <?php
                    $menuarray = [
                    'theme_location' => 'footermeny',
                    'container' => true,
                    'menu_class' => 'social',
                    ];

                    wp_nav_menu($menuarray);
                    ?>
                
            </div>
        </div>

        <div class="row bottom">
            <div class="col-xs-12">
                <p>Copyright &copy; Sandra Höst Kannerber, 2023</p>
            </div>
        </div>

    </div>

</footer>
</div> <!--Stänger div med #wrap som öppnas i header-->

<?php wp_footer(); ?>
</body>

</html>