<?php require 'Modele.php';
try {
    $idBillet = $_GET['id'];
    $billet = getBillet($idBillet);
    $commentaires = getCommentaires($idBillet);
    $contenu = 'vueBillet.php';

    require 'gabarit.php';
} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    $contenu = 'vueErreur.php';
    require 'gabarit.php';
}
?>