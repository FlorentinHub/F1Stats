<?php
require_once '../MyApp/Framework/Modele.php';

class DriverModel extends Modele {

    public function getAllDrivers() {
        $sql = "SELECT * FROM drivers";
        $resultat = $this->executerRequete($sql);
        $drivers = $resultat->fetchAll(PDO::FETCH_ASSOC);

        return $drivers;
    }
}