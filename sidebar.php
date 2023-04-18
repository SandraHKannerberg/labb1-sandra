<?php
/* Mallfil för sidebaren */
?>


<aside id="secondary" class="col-xs-12 col-md-3">
        <div id="sidebar">
            <ul>

                <?php 
                //Skapar plats för sidebar-section 1, där innehållet kan anpassas via widgets i Wordpress Adminpanel
                dynamic_sidebar('sidebar-section-1')?>
                
            </ul>

            <ul role="navigation">

                <?php 
                //Skapar plats för sidebar-section 2, där innehållet kan anpassas via widgets i Wordpress Adminpanel
                dynamic_sidebar('sidebar-section-2')?>

                <?php
                //Skapar plats för sidebar-section 3, där innehållet kan anpassas via widgets i Wordpress Adminpanel 
                dynamic_sidebar('sidebar-section-3')?>

                <?php
                //Skapar plats för sidebar-section 4, där innehållet kan anpassas via widgets i Wordpress Adminpanel 
                dynamic_sidebar('sidebar-section-4')?>

            </ul>
        </div>
</aside>