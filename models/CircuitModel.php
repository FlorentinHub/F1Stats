<?php
require_once '../MyApp/Framework/Modele.php';

class CircuitModel extends Modele {

    public function getAllCircuits() {
        $sql = "SELECT * FROM circuits";
        $resultat = $this->executerRequete($sql);
        $circuits = $resultat->fetchAll(PDO::FETCH_ASSOC);

        return $circuits;
    }
    public function setCircuit($circuit){
        $sql = "INSERT INTO circuits (circuit_name, location, last_race, races) VALUES (?, ?, ?, ?)";
        $result = $this->executerRequete($sql, [$circuit['circuit_name'], $circuit['location'], $circuit['last_race'], $circuit['races']]);
        return $result;
    }
}

