<?php
    require_once "articles.php"
?>

<?php foreach($articlesT as $index => $article) : ?>


<article id="article">
    <h1><?= $article["titre"] ?></h1>
    <p class=""><?= substr($article["description"], 0, 100) ?>..<a href="index.php?page=vuearticle&art=<?= $index ?>"><br>Lire la suite...</a></p>
    <div class="images">
    <div class=""><img class="" src= <?= $article["image"] ?> alt=""></div>
    </div>
    <p class="fabricant">Fabricant: <?= $article["fabricant"] ?></p>
    <p class="stock">Disponibilité: <?= $article["stock"] ?></p>
    <p class="prix">Prix : <?= $article["prix"] ?></p>
</article>


<?php endforeach ?>