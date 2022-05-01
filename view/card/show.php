<?php

use App\Connection;
use App\Model\FlashCard;
use App\Model\Decks;


$deck_id = (int)$params['id'];
$slug = $params['slug'];

$pdo = Connection::getPDO();

$query3 = $pdo->query("SELECT title FROM deck WHERE id = $deck_id");
$deck = $query3->fetchAll(PDO::FETCH_CLASS, Decks::class);

$query = $pdo->query("SELECT card_id FROM deck_card WHERE deck_id = $deck_id");
$flashcards = $query->fetchAll();

$ids = array();
foreach($flashcards as $flashcard){
    $ids[] = $flashcard['card_id'];
}
$cards = array();
foreach($ids as $id) {
    $query2 = $pdo->query("SELECT * FROM card WHERE id = $id");
    $cards[] = $query2->fetchAll(PDO::FETCH_CLASS, FlashCard::class);
}

$session = new Session($cards);

$card = $session->pick();

if($_POST['level'] == 0) {
    $card->update('LOW');
}
if($_POST['level'] == 1) {
    $card->update('MEDIUM');
}
if($_POST['level'] == 2) {
    $card->update('HARD');
}


?>


<div class="container">
    <div class="container_title">
        <h1><?= $deck[0]->getTitle() ?></h1>
        <div class="button_edit">
            Editer
        </div>
        <div class="button_suppression">
            Supprimer
        </div>
    </div>

    <div class="card_page">
        <?php foreach($newcards as $newcard): ?>

            <div class="card <?=  $newcard[1] = 0 ? 'active' : '' ?>">
                <div class="card_face front">
                    <div class="contour">
                        <div class="contour_interieur">
                            <h2><?= $newcard[0][0]?></h2>
                        </div>
                    </div>
                    
                </div>
                <div class="card_face back">
                    <div class="contour">
                        <div class="contour_interieur">
                            <h2><?= $newcard[0][1] ?></h2>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach ?>
    </div>


    <div class="card_time">
        <form action="" method="post">

            <input type="radio" name="push" value="<?= $newcards[$counter][1]?>" checked>

            <div class="time_button">
                <input type="radio" id="3" name="time" value="3">
                <label for="3">3 minutes</label>
            </div>
            
            <div class="time_button">
                <input type="radio" id="6" name="time" value="6">
                <label for="6">6 minutes</label>
            </div>

            <div class="time_button">
                <input type="radio" id="10" name="time" value="10">
                <label for="10">10 minutes</label>
            </div>
            <button type="submit" class="time_button">Next</button>
            
        </form>
    </div>

    <script>
        const card = document.querySelector(".card");
        const cardTime = document.querySelector(".card_time");

        card.addEventListener("click", function (e) {
            card.classList.toggle('flip');
            cardTime.classList.toggle('show');
        });
    </script>

</div>