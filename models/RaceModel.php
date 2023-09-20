<?php
require_once '../MyApp/Framework/Modele.php';

class RaceModel extends Modele {

    public function getAllRaces() {
        $sql = "SELECT * FROM races";
        $resultat = $this->executerRequete($sql);
        $races = $resultat->fetchAll(PDO::FETCH_ASSOC);

        return $races;
    }
}