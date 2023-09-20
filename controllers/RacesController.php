<?php
require_once './Framework/Controleur.php';
require_once './models/RaceModel.php';
require_once './Framework/Configuration.php';

class RacesController extends Controleur {
    public function index(){
    $raceModel = new RaceModel();
    $races = $raceModel->getAllRaces();
    //Generer vue avec courses
    $vue = new Vue ('races/index');
    $this->genererVue(array('races' => $races));
    }
    public function showRaces() {
        include_once '../MyApp/models/RaceModel.php';
        $raceModel = new RaceModel();
        $races = $raceModel->getAllRaces();

        include_once '../MyApp/views/races.php';
    }
}