<?php 

require "articlesT.php";



$article = $articlesT[$_GET["art"]];

?>

<p><a href="index.php?page=sience">Les Téléscopes</a> / <?php $article["titre"] ?></p>


<article>
    <h3><?= $article["titre"] ?></h3>
    <p class=""><?= $article["description"] ?></p>
    <div class="">
        <div class=""><img src= <?= $article["image"] ?> alt=""></div>
    </div>
    <p><?= $article["date"] ?></p>
</article>


<article>
    <h3><?= $article["titre"] ?></h3>
    <p class=""><?= $article["description"] ?></p>
    <div class="images">
    <div class=""><img class="" src= <?= $article["image"] ?> alt=""></div>
    </div>
    <p class="fabricant">Fabricant: <?= $article["fabricant"] ?></p>
    <p class="stock">Disponibilité: <?= $article["stock"] ?></p>
    <p class="prix">Prix : <?= $article["prix"] ?></p>
</article>