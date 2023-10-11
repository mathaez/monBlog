<article>
    <header>
        <h1 class="titreBillet">
            <?= $billet['titre'] ?>
        </h1>
        <time>
            <?= $billet['date'] ?>
        </time>
    </header>
    <p>
        <?= $billet['contenu'] ?>
    </p>
</article>
<hr />
<h1>Les commentaires</h1>
<?php
foreach ($commentaires as $commentaire):
    $id = $commentaire['id'];
    ?>
    <article>
        <h3>
        <?= $commentaire['date'] ?>
        <br>
        <time>
            <?= $commentaire['auteur'] ?>
        </time>
</h3>
        </header>
        <p>
            <?= $commentaire['contenu'] ?>
        </p>
        <hr>
    <?php endforeach; ?>