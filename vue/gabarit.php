<!DOCTYPE html>
<html lang="fr"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="http://getbootstrap.com/favicon.ico">

        <title><?= $titre ?></title>

        <!-- Feuille de Style Boostrap principale -->
        <link href="contenu/css/bootstrap.css" rel="stylesheet">

        <!-- Feuille de Style persos -->
        <link href="contenu/css/blogBillet.css" rel="stylesheet">

    </head>

    <body>

        <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- Appels des morceaux constituant le gabarit de page -->
        <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <?php
        // --------- Navigation du haut :
        
        //require 'element/navHautSimple.php';
        //require 'element/navHautDeroulant.php';
        require 'element/blogNav.php';
        
        // --------- Navigation Gauche :

        //require 'element/navGaucheSimple.php';
        //require 'element/navGaucheSimpleSecondaire.php';
        
        // --------- Footer :
        
        //require 'element/footerSticky.php';
        ?>

        <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- Contenu -->
        <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
            <?php $contenu ?>
        </main> 

        <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- Scripts -->
        <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <script src="Contenu/js/jquery-3.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="Contenu/js/popper.js"></script>
        <script src="Contenu/js/bootstrap.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="Contenu/js/ie10-viewport-bug-workaround.js"></script>


    </body>
</html>