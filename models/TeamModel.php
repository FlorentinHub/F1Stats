<?php
require_once './MyApp/Framework/Modele.php';

class TeamModel {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "mysql", "FormulaOne2023");
        if ($this->conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $this->conn->connect_error);
        }
    }

    public function getAllTeams() {
        $sql = "SELECT * FROM teams";
        $result = $this->conn->query($sql);
        $teams = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $teams[] = $row;
            }
        }

        $this->conn->close();
        return $teams;
    }
}