<?php

function getBdD()
{
    $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8', 'testblog', '12345', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}
function getBillets()
{
    $bdd = getBdD();
    $billets = $bdd->query('select idBillet as id, dateBillet as date,'
        . ' titreBillet as titre, contenuBillet as contenu from BILLET'
        . ' order by idBillet desc');

    return $billets;
}

function getBillet($idBillet)
{
    $bdd = getBdD();
    $sql = "SELECT idBillet as id, dateBillet as date, titreBillet as titre, contenuBillet as contenu from BILLET where idBillet = :id";
    $stm = $bdd->prepare($sql);
    $stm->bindParam(':id', $idBillet, PDO::PARAM_INT);
    $stm->execute();
    $billet = $stm->fetch(PDO::FETCH_ASSOC);
    return $billet;
}

function getCommentaires($idBillet)
{
    $bdd = getBdD();
    $sql = "SELECT idBillet as id, dateCommentaire as date, auteurCommentaire as auteur, contenuCommentaire as contenu from COMMENTAIRE where idBillet = :id";
    $stm = $bdd->prepare($sql);
    $stm->bindParam(':id', $idBillet, PDO::PARAM_INT);
    $stm->execute();
    $commentaires = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $commentaires;
}

?>