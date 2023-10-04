<?php
//Accès aux données
$bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8', 'testblog', '12345');
$billets = $bdd->query('select idBillet as id, dateBillet as date,'
    . ' titreBillet as titre, contenuBillet as contenu from BILLET'
    . ' order by idBillet desc');
//Affichage
require 'vueAccueil.php';
    ?>
    