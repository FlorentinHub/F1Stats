<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formula 1 Data</title>
    <link rel="stylesheet" href="./Assets/css/index.css">
</head>
<body>
    <header>
        <img class="LogoHome" src="../MyApp/URL1jpg.jpg" alt="Logo d'accueil">
        <h1 class="HeaderTitle">Formula 1 Data</h1>
    </header>
    <nav>
        <ul>
            <li><a href="?section=circuits">Circuits</a></li>
            <li><a href="?section=races">Courses</a></li>
            <li><a href="?section=drivers">Pilotes</a></li>
            <li><a href="?section=teams">Équipes</a></li>
        </ul>
    </nav>
    <?php
    // Chargez le contrôleur approprié en fonction de la requête
    if (isset($_GET['section'])) {
        $section = $_GET['section'];
    } else {
        $section = 'home';
    }

    switch ($section) {
        case 'drivers':
            include './controllers/DriversController.php';
            $driversController = new DriversController();
            $driversController->showDrivers();
            break;
        case 'circuits':
            include './controllers/CircuitsController.php';
            $circuitsController = new CircuitsController();
            $circuitsController->showCircuits();
            break;
        case 'races':
            include './controllers/RacesController.php';
            $racesController = new RacesController();
            $racesController->showRaces();
            break;
        case 'teams':
            include './controllers/TeamsController.php';
            $teamsController = new TeamsController();
            $teamsController->showTeams();
            break;
        default:
             include 'home.php';
            break;
    }
    ?>
    <footer>
        <p>&copy; 2023 WorkForce. Tous droits réservés.</p>
    </footer>
</body>
</html>
