<?php
require_once './Framework/Controleur.php';
require_once './models/TeamModel.php';
require_once './Framework/Configuration.php';
class TeamsController extends Controleur{

    public function index(){
        $teamModel = new TeamModel();
        $teams = $teamModel->getAllTeams();
        //Generer vue avec courses
        $vue = new Vue ('teams/index');
        $this->genererVue(array('teams' => $teams));
        }
    public function showTeams() {
        include_once './models/TeamModel.php';
        $teamModel = new TeamModel();
        $teams = $teamModel->getAllTeams();

        include_once '../MyApp/views/teams.php';
    }
}
