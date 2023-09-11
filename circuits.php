<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "FormulaOne2023";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Requête pour récupérer les données des circuits
$sql = "SELECT * FROM circuits";
$result = $conn->query($sql);
?>

<section id="circuits">

    <?php
    // Afficher les données des circuits
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='circuit'>";
            echo "<h2>" . $row["circuit_name"] . "</h2>";
            echo "<p>Location: " . $row["location"] . "</p>";
            echo "<p>Last Race: " . $row["last_race"] . "</p>";
            echo "<p>Races: " . $row["races"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "Aucun circuit trouvé.";
    }

    $conn->close();
    ?>
</section>
