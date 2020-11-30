<?php

    // var_dump($_GET);

    if(isset($_GET["page"])) {

        switch($_GET["page"]) {
            case "science" : $pageAINCLURE = "telescopes.php";
            break;
            case "acc" : $pageAINCLURE = "accessoires.php";
            break;
            case "vuearticle" : $pageAINCLURE = "vuearticle.php";
            break;
            default : $pageAINCLURE = "telescopes.php";
        }

    } else {
        $pageAINCLURE = "telescopes.php";
    }
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
    <div id="container">
        <ul id="menu">
            <li><a href="index.php?page=telescopes">Téléscopes</a></li>
            <li><a href="index.php?page=acc">Accessoires</a></li>
            </li>    
        </ul>
    </div> 
    

    

    <div id="content">
        <?php require "php/$pageAINCLURE" ?>
    </div>

</body>
</html>


