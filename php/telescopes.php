<?php
    require_once "articles.php"
?>

<?php foreach($articlesT as $index => $article) : ?>


<article>
    <h3><?= $article["titre"] ?></h3>
    <p class=""><?= substr($article["description"], 0, 100) ?>...<a href="index.php?page=vuarticle&art=<?= $index ?>">Lire la suite...</a></p>
    <div class="images">
    <div class=""><img class="" src= <?= $article["image"] ?> alt=""></div>
    </div>
    <p class="fabricant">Fabricant: <?= $article["fabricant"] ?></p>
    <p class="stock">Disponibilité: <?= $article["stock"] ?></p>
    <p class="prix">Prix : <?= $article["prix"] ?></p>
</article>
  

<?php endforeach ?>