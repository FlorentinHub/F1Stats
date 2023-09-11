<?php
class RacesController {
    public function showRaces() {
        include_once '../MyApp/models/RaceModel.php';
        $raceModel = new RaceModel();
        $races = $raceModel->getAllRaces();

        include_once '../MyApp/views/races.php';
    }
}
