<?php

use App\Connection;
use App\Model\Decks;
use App\Organisation\Theme;

$pdo = Connection::getPDO();

$query = $pdo->query("SELECT * FROM deck WHERE category = 'mydecks' ");
$deckers = $query->fetchAll(PDO::FETCH_CLASS, Decks::class);

$decks = Theme::nettoyage($deckers);

$listes_unique = Theme::unique($deckers);

?>



<div class="container">

    <div class="container_title">
        <h1>MyDecks</h1>
    </div>

    <?php foreach($listes_unique as $liste_unique): ?>
    <div class="theme">
        <div class="theme_title">
            <div class="title_img">
            <img src="/image/trombonne.svg" alt="trombonne" width="35px" height="35px">
            </div>
            <h1><?= ucwords($liste_unique) ?></h1>
        </div>
        <?php foreach($decks as $deck): ?>
            <?php if(in_array($liste_unique, $deck[0])): ?>
                <a href="<?= $router->url('deck', ['id' => $deck[1], 'categorie' => $deck[3], 'slug' => $deck[4]]) ?>" class="categorie_decks"> 
                    <div class="decks_box">
                        <div class="decks_time">
                            <p>18:00:4</p>
                        </div>
                        <div class="decks_title">
                            <p><?= $deck[2] ?></p>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <?php endforeach; ?>

</div>