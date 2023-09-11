<section id="teams">
    <?php foreach ($teams as $team): ?>
        <div class="team">
            <h2><?= $team['team_name']; ?></h2>
            <p>Country: <?= $team['country']; ?></p>
            <!-- Affichez d'autres informations spécifiques à l'équipe ici -->
        </div>
    <?php endforeach; ?>
</section>
