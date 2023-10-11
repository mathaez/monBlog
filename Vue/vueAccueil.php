<?php
foreach ($billets as $billet):
    $id = $billet['id'];
    ?>
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
        <div id="commentaires">
            <em><a href="index.php?action=billet&id=<?= $id ?>">Commentaires</a></em>
        </div>
    </article>
    <hr />
<?php endforeach; ?>