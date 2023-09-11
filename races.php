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

// Requête pour récupérer les données des courses
$sql = "SELECT * FROM races";
$result = $conn->query($sql);
?>

<section id="races">
    <?php
    // Afficher les données des courses
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='race'>";
            echo "<h2>" . $row["race_name"] . "</h2>";
            echo "<p>Date: " . $row["race_date"] . "</p>";
            echo "<p>Circuit: " . $row["Circuit"] . "</p>";
            // Ajoutez les autres informations nécessaires ici
            echo "</div>";
        }
    } else {
        echo "Aucune course trouvée.";
    }

    $conn->close();
    ?>
</section>
