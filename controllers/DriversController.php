<?php
class DriversController {
    public function showDrivers() {
        include_once '../MyApp/models/DriverModel.php';
        $driverModel = new DriverModel();
        $drivers = $driverModel->getAllDrivers();

        include_once '../MyApp/views/drivers.php';
    }
}
