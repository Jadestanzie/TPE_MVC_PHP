<?php
/**
 * Se connecte à la bdd tpe et renvoie la PDO bdd
 * Sinon, renvoie une erreur sous forma d'exception
 * 
 * @return bdd \PDO Connexion à la base de données 'tpe'
 */
function getBdd() 
{
    $bdd = new PDO('mysql:host=localhost;dbname=tpe;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
    return $bdd;
}

/**
 * Fonction qui cherche et renvoie tous les tuples de la relation 'table' de la bdd
 * 
 * @return donnees le résutat de la requête
 */
function getListeBillet()
{
    $bdd = getBdd();
    $billet = $bdd->query('select * from billet order by date desc;');
    return $billet;
}

/**
 * Fonction qui renvoie les informations d'un seul billet
 * @param idBillet 
 * @return billet
 */
function getBillet($idBillet)
{
    $bdd = getBdd();
    $billet = $bdd->query("select * from billet where id=$idBillet;");
    return $billet;
}

/**
 * Fonction qui retourne la liste des commentaires associés à un billet
 * @param idBillet  
 * @return commentaire
 */
function getCommentaire($idBillet)
{
    $bdd = getBdd();
    $commentaire = $bdd->query("select * from commentaire where id=$idBillet;");
    return $commentaire;
}