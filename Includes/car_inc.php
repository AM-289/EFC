<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $brand = $_POST['brand'];
    $car_color = $_POST['car_color'];
    $energy = $_POST['energy'];
    $registration = $_POST['registration'];
    $f_registration = $_POST['first_registration'];
    
    try {

        require_once 'DBlink.php';
        require_once 'car_model.php';
        require_once 'car_contr.php';

        $error = [];

        if ($error){

        }

        create_car($pdo, $brand, $energy, $car_color, $registration, $f_registration);

        header('Location: ../PHP Profile/profile-page.php');

        $pdo = null;
        $stmt = null;

        die();
        
    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }

} else {
    header("Location: ../PHP/index.php");
    die();
};