<link href="Contenu/css/blogBillet.css" rel="stylesheet">

<?php

$titre = 'Accueil du blog';

ob_start();?>

<h1>Bienvenue sur ce blog !</h1>

<?php
echo ("<div class='billet'>");
echo ("<h2>" . $billet['titre'] . "</h2>");
echo ("<p>" . $billet['contenu'] . "</p>");
echo ("<time>" . $billet['date'] . "</time>");
echo ("</div><br><br>");

foreach ($commentaire as $com)
{
    echo ("<div class='billet'>");
    echo ("<p><b></b></p>");
    echo ("<time>".$commentaire['date']."</time>");
    echo ("</div>");
}

$contenu = ob_get_clean();

require 'gabarit.php';
?>