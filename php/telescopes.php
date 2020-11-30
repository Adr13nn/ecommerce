<?php
    require_once "articles.php"
?>

<?php foreach($articlesT as $index => $article) : ?>


<article id="article">
    <h1><a href="index.php?page=vuearticle&art=<?= $index ?>"><?= $article["titre"] ?></a></h1>
    <p class="description"><?= substr($article["description"], 0, 100) ?>..<a href="index.php?page=vuearticle&art=<?= $index ?>"><br><strong>Lire la suite...</a></strong></p>
    <div class="images">
    <div class=""><img class="" src= <?= $article["image"] ?> alt=""></div>
    </div>
    <p class="fabricant">Fabricant: <?= $article["fabricant"] ?></p>
    <p class="stock">Disponibilité: <strong> <?= $article["stock"] ?></strong></p>
    <p class="prix"><strong>Prix : <?= $article["prix"] ?></strong></p>
</article>


<?php endforeach ?>