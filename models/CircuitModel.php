<?php
require_once './MyApp/Framework/Modele.php';

class CircuitModel {
    private $conn;
    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "mysql", "FormulaOne2023");
        if ($this->conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $this->conn->connect_error);
        }
    }

    public function getAllCircuits() {
        $sql = "SELECT * FROM circuits";
        $result = $this->conn->query($sql);
        $circuits = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $circuits[] = $row;
            }
        }

        $this->conn->close();
        return $circuits;
    }
}
