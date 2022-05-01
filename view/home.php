<?php

use App\Model\Decks;
use App\Connection;

$title = 'Home Page';

$pdo = Connection::getPDO();

$query = $pdo->query("SELECT * FROM deck LIMIT 18");
$decks = $query->fetchAll(PDO::FETCH_CLASS, Decks::class);
?>



<h1 class="main-title">Flash Cards</h1>
<h2 class="subtitle">Encyclopaedia Prepa Digital</h2>
<h3>Optimisez votre apprentissage</h3>

<div class="decks">
    <?php foreach($decks as $deck): ?>
        
        <div class="deck">
            <a href="<?= $router->url('deck', ['id' => $deck->getId(), 'categorie' => $deck->getCategory(), 'slug' => $deck->getSlug()]) ?>">
                <h2><?= $deck->getTitle() ?></h2>
            </a>
        </div>
        
    <?php endforeach; ?>
</div>