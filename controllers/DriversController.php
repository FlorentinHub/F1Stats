<?php
require_once './Framework/Controleur.php';
require_once './models/DriverModel.php';
require_once './Framework/Configuration.php';
class DriversController extends Controleur {
    public function index(){
        $driverModel = new DriverModel();
        $drivers = $driverModel->getAllDrivers();
        //Generer vue avec courses
        $vue = new Vue ('drivers/index');
        $this->genererVue(array('drivers' => $drivers));
        }
    public function showDrivers() {
        include_once '../MyApp/models/DriverModel.php';
        $driverModel = new DriverModel();
        $drivers = $driverModel->getAllDrivers();

        include_once '../MyApp/views/drivers.php';
    }
}
