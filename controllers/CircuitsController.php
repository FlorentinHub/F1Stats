<?php
require_once './Framework/Controleur.php';
require_once './models/CircuitModel.php';
// require_once 'Modele/Billet.php';
class CircuitsController {
    public function showCircuits() {
            if (file_exists(__DIR__ . '/../models/CircuitModel.php')) {
                include_once __DIR__ . '/../models/CircuitModel.php';
                $circuitModel = new CircuitModel();
                $circuits = $circuitModel->getAllCircuits();
            } else {
                echo "CircuitModel.php not found!";
            }
        $circuitModel = new CircuitModel();
        $circuits = $circuitModel->getAllCircuits();

        include_once __DIR__ . '/../views/circuits.php';
    }
}
