<!-- views/drivers.php -->

<section id="drivers">
    <?php foreach ($drivers as $driver): ?>
        <link rel="stylesheet" href="./Assets/css/drivers.css">
        <div class="card"> 
            <div class="card-details">
                <p class="text-title"><?= $driver['first_name'] . ' ' . $driver['last_name']; ?></p>
                <p class="text-body"><?= $driver['nationality']; ?></p>
                <!-- <p class="text-body"><?= $driver['Circuit']; ?></p> -->
            </div>
            <button class="card-button">Afficher [Unavaible]</button>
        </div>
    <?php endforeach; ?>
</section>
