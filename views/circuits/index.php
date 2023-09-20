<?php $titre='Formula One 2023'; ?>
<section id="circuits">
<link rel="stylesheet" href="./Assets/css/circuits.css">
<link rel="stylesheet"href="./Assets/css/addCircuits.css">
    <?php foreach ($circuits as $circuit): ?>
        <div class="card" style="color:white"> 
            <div class="card-details">
                <p class="text-title"><?= $circuit['circuit_name']; ?></p>
                <p class="text-body"><?= $circuit['location']; ?></p>
            </div>
            <button class="card-button">Afficher [Unavaible]</button>
        </div>
    <?php endforeach; ?>
    <div href="CircuitsController/formAjout" class="cardAdd" >
            <a style="display:block;width:100%;height:100%;"href="CircuitsController/formAjout ">Ajouter un Circuits</a>
    </div>
</section>