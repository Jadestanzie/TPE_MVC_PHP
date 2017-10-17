<?php

require '../modele/modele.php';

try {
    if (isset($_GET['id']))
    {
        $billet = getBillet($_GET['id']);
        $commentaire = getCommentaire($_GET['id']);
        require 'vueBlogBillet.php';
    }
    else
    {
        throw new Exception("Identifiant du billet non valide !");
    }
}
catch (Exception $e)
{
    $messageErreur = $e->getMessage();
    require '../vue/vueErreur.php';
}
