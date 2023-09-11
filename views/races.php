<section id="races">
    <?php foreach ($races as $race): ?>
        <link rel="stylesheet" href="./Assets/css/races.css">
        <div class="card"> 
            <div class="card-details">
                <p class="text-title"><?= $race['race_name']; ?></p>
                <p class="text-body"><?= $race['race_date']; ?></p>
                <p class="text-body"><?= $race['Circuit']; ?></p>
            </div>
            <button class="card-button">Afficher [Unavaible]</button>
        </div>
        <!-- <div class="race">
            <h2><?= $race['race_name']; ?></h2>
            <p>Date: <?= $race['race_date']; ?></p>
            <p>Circuit: <?= $race['Circuit']; ?></p>
        </div> -->
    <?php endforeach; ?>
</section>
