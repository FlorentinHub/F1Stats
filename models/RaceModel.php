<?php
require_once '../MyApp/Framework/Modele.php';

class RaceModel {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "mysql", "FormulaOne2023");
        if ($this->conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $this->conn->connect_error);
        }
    }

    public function getAllRaces() {
        $sql = "SELECT * FROM races";
        $result = $this->conn->query($sql);
        $races = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $races[] = $row;
            }
        }

        $this->conn->close();
        return $races;
    }
}
