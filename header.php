<!DOCTYPE html>
<html>

<head>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
    
    <header id="header">
        <div class="container">
            <div class="row">

                <div class="col-xs-8 col-sm-6">
                    <a class="logo" href="">Labb 1</a>
                </div>

                <div class="col-sm-6 hidden-xs">
                    <form id="searchform" class="searchform">
                        <div>
                            <label class="screen-reader-text">Sök efter:</label>
                            <input type="text">
                            <input type="submit" value="Sök">
                        </div>
                    </form>
                </div>

                <div class="col-xs-4 text-right visible-xs">
                    <div class="mobile-menu-wrap">
                        <i class="fa fa-search"></i>
                        <i class="fa fa-bars menu-icon"></i>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <div class="mobile-search">
        <form id="searchform" class="searchform">
            <div>
                <label class="screen-reader-text">Sök efter:</label>
                <input type="text">
                <input type="submit" value="Sök">
            </div>
        </form>   
    </div>

    <nav id="nav">
        <div class="container">
            <div class="row">

            <!--Här ska menyn länkas in-->

            </div>
        </div>
    </nav>

