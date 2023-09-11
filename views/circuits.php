<section id="circuits">
    <?php foreach ($circuits as $circuit): ?>
        <link rel="stylesheet" href="./Assets/css/circuits.css">
        <!--Card Circuit-->
        <div class="card"> 
            <div class="card-details">
                <p class="text-title"><?= $circuit['circuit_name']; ?></p>
                <p class="text-body"><?= $circuit['location']; ?></p>
            </div>
            <button class="card-button">Afficher [Unavaible]</button>
        </div>
    <?php endforeach; ?>
</section>