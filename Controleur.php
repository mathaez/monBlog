<?php
require 'Modele.php';

function accueil(){
    $billets = getBillets();
    $contenu = 'vueAccueil.php';
    require 'gabarit.php';
}

function unBillet($idBillet){
    $billet = getBillet($idBillet);
    $commentaires = getCommentaires($idBillet);
    $contenu = 'vueBillet.php';
    require 'gabarit.php';
}

function erreur($msgErreur){
    $contenu = 'vueErreur.php';
    require 'gabarit.php';
}