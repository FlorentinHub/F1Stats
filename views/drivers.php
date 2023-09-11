<!-- views/drivers.php -->

<section id="drivers">
    <?php foreach ($drivers as $driver): ?>
        <link rel="stylesheet" href="./Assets/css/drivers.css">
        <div class="card"> 
            <div class="card-details">
                <p class="text-title"><?= $race['race_name']; ?></p>
                <p class="text-body"><?= $race['race_date']; ?></p>
                <p class="text-body"><?= $race['Circuit']; ?></p>
            </div>
            <button class="card-button">Afficher [Unavaible]</button>
        </div>
        <div class="driver">
            <h2><?= $driver['first_name'] . ' ' . $driver['last_name']; ?></h2>
            <p>Nationality: <?= $driver['nationality']; ?></p>
        </div>
    <?php endforeach; ?>
</section>
