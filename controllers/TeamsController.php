<?php
class TeamsController {
    public function showTeams() {
        include_once './models/TeamModel.php';
        $teamModel = new TeamModel();
        $teams = $teamModel->getAllTeams();

        include_once '../MyApp/views/teams.php';
    }
}
