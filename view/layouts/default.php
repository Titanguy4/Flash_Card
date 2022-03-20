<?php
use Htanguy\Router;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Flash_Cards</title>
</head>
<header>
    <nav>
        <div class="logo">
            <a href="<?= $router->url('home')?>"><p>logo</p></a>
        </div>
        <div class="nav">
            <p><a href="<?= $router->url('communautee')?>">Communautée</a></p>
            <p><a href="<?= $router->url('classe')?>">Classe</a></p>
            <p><a href="<?= $router->url('mydecks')?>">MyDecks</a></p>
            <p><a href="<?= $router->url('deconnexion')?>">Deconnexion</a></p>
        </div>
    </nav>
</header>
<body>
    
    <?php echo $content; ?>

</body>
<footer>
    <div class="name">
        <p>FLASHCARD@2022</p>
    </div>
    
    <div class="credits">
        <p>Credits</p>
        <p>copywriting</p>
        <p>design, develop</p>
    </div>
</footer>
</html>