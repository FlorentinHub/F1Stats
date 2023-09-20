<section id="teams">
    <?php foreach ($teams as $team): ?>
        <link rel="stylesheet" href="./Assets/css/teams.css">
        <div class="card"> 
            <div class="card-details">
                <p class="text-title"><?= $team['team_name']; ?></p>
                <p class="text-body"><?= $team['country']; ?></p>
            </div>
            <button class="card-button">Afficher [Unavaible]</button>
        </div>
    <?php endforeach; ?>
</section>
