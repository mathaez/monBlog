<?php
require 'Modele/Modele.php';

function accueil()
{
    $billets = getBillets();
    $contenu = 'Vue/vueAccueil.php';
    require 'Vue/gabarit.php';
}

function unBillet($idBillet)
{
    $billet = getBillet($idBillet);
    $commentaires = getCommentaires($idBillet);
    $contenu = 'Vue/vueBillet.php';
    require 'Vue/gabarit.php';
}

function erreur($msgErreur)
{
    $contenu = 'Vue/vueErreur.php';
    require 'Vue/gabarit.php';
}