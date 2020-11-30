<?php 

require "articles.php";



$article = $articlesT[$_GET["art"]];

?>

<p><a href="index.php?page=telescopes.php">Les Téléscopes</a> / <?= $article["titre"] ?></p>


<article id="vuearticle">
    <h1><?= $article["titre"] ?></h1>
    <p class=""><?= $article["description"] ?></p>
    <div class="images">
    <div class=""><img class="" src= <?= $article["image"] ?> alt=""></div>
    </div>
    <p class="reference"> Réference: <?= $article["reference"] ?></p>
    <p class="fabricant">Fabricant: <?= $article["fabricant"] ?></p>
    <p class="stock">Disponibilité: <?= $article["stock"] ?></p>
    <p class="prix"><strong>Prix : <?= $article["prix"] ?></strong></p>
</article>
