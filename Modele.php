
<?php
function getBillets() {                
    $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','testblog', '12345');
    $billets = $bdd->query('select idBillet as id, dateBillet as date,'
            . ' titreBillet as titre, contenuBillet as contenu from BILLET'
            . ' order by idBillet desc');
    foreach ($billets as $billet):
        ?>
        <article>
            <header>
                <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
                <time><?= $billet['date'] ?></time>
            </header>
            <p><?= $billet['contenu'] ?></p>
    <div id="commentaires">
            <em><a href="#">Commentaires</a></em>
    </div>
        </article>
        <hr />
    
    <?php endforeach; ?>
    ?>
}
               