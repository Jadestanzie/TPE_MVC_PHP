<?php

$titre = "Erreur !";

ob_start(); ?>
<h1 style='color:red;'>Erreur !</h1>
<p>Une erreur est survenue : <?= $messageErreur ?> </p>

<?php $contenu = ob_get_contents();

 require '../vue/gabarit.php';