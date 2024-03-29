<?php
/* Mallfil för footer */
?>

<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">

                <?php 
                //Skapar plats för footer-section 1, där innehållet kan anpassas via widgets i Wordpress Adminpanel
                dynamic_sidebar('footer-section-1')?>

            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">

                <?php 
                //Skapar plats för footer-section 2, där innehållet kan anpassas via widgets i Wordpress Adminpanel
                dynamic_sidebar('footer-section-2')?>

            </div>

           <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">

                <?php 
                //Skapar plats för footer-section 3, där innehållet kan anpassas via widgets i Wordpress Adminpanel
                dynamic_sidebar('footer-section-3')?>

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