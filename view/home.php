<h1 class="main-title">Flash Cards</h1>
<h2 class="subtitle">Encyclopaedia Prepa Digital</h2>
<h3>Optimisez votre apprentissage</h3>

<div class="decks">
    <?php for($i = 0; $i < 18; $i++): ?>
        <div class="deck">
            <h2>Deck <?= $i ?></h2>
        </div>
    <?php endfor; ?>
</div>