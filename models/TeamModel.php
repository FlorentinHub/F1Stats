<?php
require_once '../MyApp/Framework/Modele.php';

class TeamModel extends Modele{
    public function getAllTeams() {
        $sql = "SELECT * FROM teams";
        $resultat = $this->executerRequete($sql);
        $teams = $resultat->fetchAll(PDO::FETCH_ASSOC);

        return $teams;
    }
}