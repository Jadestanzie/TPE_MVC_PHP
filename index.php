<?php


require 'modele/modele.php';

try
{
    $billet = getListeBillet();
    require 'vue/vueBlogAccueil.php';
} 
catch (Exception $ex) 
{
    $messageErreur = $ex->getMessage();
    require 'vue/vueErreur.php';
}


