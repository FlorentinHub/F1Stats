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

// Requête pour récupérer les données des équipes
$sql = "SELECT * FROM teams";
$result = $conn->query($sql);
?>

<section id="teams">
    <?php
    // Afficher les données des équipes
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='team'>";
            echo "<h2>" . $row["team_name"] . "</h2>";
            echo "<p>Country: " . $row["country"] . "</p>";
            // Ajoutez les autres informations nécessaires ici
            echo "</div>";
        }
    } else {
        echo "Aucune équipe trouvée.";
    }

    $conn->close();
    ?>
</section>
