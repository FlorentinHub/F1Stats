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

// Requête pour récupérer les données des pilotes
$sql = "SELECT * FROM drivers";
$result = $conn->query($sql);
?>

<section id="drivers">
    <?php
    // Afficher les données des pilotes
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='driver'>";
            echo "<h2>" . $row["first_name"] . " " . $row["last_name"] . "</h2>";
            echo "<p>Nationality: " . $row["nationality"] . "</p>";
            // Ajoutez les autres informations nécessaires ici
            echo "</div>";
        }
    } else {
        echo "Aucun pilote trouvé.";
    }

    $conn->close();
    ?>
</section>
