<?php $titre='Formula One 2023'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= $racineWeb ?>" >
    <link rel="stylesheet" href="./Assets/css/index.css">
    <title><?= $titre ?></title>
</head>
<body>
    <header>
        <img class="LogoHome" src="../MyApp/URL1jpg.jpg" alt="Logo d'accueil">
        <h1 class="HeaderTitle">Formula 1 Data</h1>
    </header>
    <nav>
        <ul>
            <li><a href="<?= $racineWeb ?>CircuitsController">Circuits</a></li>
            <li><a href="<?= $racineWeb ?>RacesController">Courses</a></li>
            <li><a href="<?= $racineWeb ?>DriversController">Pilotes</a></li>
            <li><a href="<?= $racineWeb ?>TeamsController">Équipes</a></li>
        </ul>
    </nav>
    <div id="contenu">
        <?= $contenu ?>   <!-- Élément spécifique -->
    </div>
    <footer>
        <p>&copy; 2023 WorkForce. Tous droits réservés.</p>
    </footer>
</body>
</html> 