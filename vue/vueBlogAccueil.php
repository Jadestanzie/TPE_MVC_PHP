<?php

$titre = 'Accueil du blog';

ob_start(); ?>
<h1>Bienvenue sur ce blog !</h1>
<?php foreach ($billet as $billet) {
    echo ("<div class='billet'>");
    echo ("<h2>".$billet['titre']."</h2>");
    echo ("<p>".$billet['contenu']."</p>");
    echo ("<time>".$billet['date']."</time>");
    echo ("<a href='controleur/billet.php?id=".$billet['id']."'><small>     >>> voir contenu détaillé</small></a>");
    echo ("</div>");
}
$contenu = ob_get_contents();
require 'gabarit.php';
?>

