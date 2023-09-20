<?php
require_once './Framework/Controleur.php';
require_once './models/CircuitModel.php';
require_once './Framework/Configuration.php';


class CircuitsController extends Controleur
{
    private $circuit;
    private $pdo; // Propriété pour stocker l'instance de PDO

    public function __construct()
    {
        $this->circuit = new CircuitModel();
        // Utilisez la classe Configuration pour obtenir les paramètres de dev.ini
        $dsn = Configuration::get('dsn');
        $username = Configuration::get('login');
        $password = Configuration::get('mdp');
        try {
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
            exit;
        }
    }
    public function index()
    {
        $circuitModel = new CircuitModel();
        $circuits = $circuitModel->getAllCircuits();
        // Générer vue avec les circuits
        $vue = new Vue('circuits/index');
        $vue->generer(array('circuits' => $circuits));
    }
    public function showCircuits()
    {
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
    public function ajouter()
    {
        // Vérifier si la requête est de type POST
        if ($this->requete->existeParametre('circuit_name')) {
            $circuit['circuit_name'] = $this->requete->getParametre('circuit_name');
            $circuit['location'] = $this->requete->getParametre('location');
            $circuit['last_race'] = $this->requete->getParametre('last_race');
            $circuit['races'] = $this->requete->getParametre('races');
            $this->circuit->setCircuit($circuit);
        }
    }
    
    public function formAjout()
    {
        $this->genererVue(array());
    }
}