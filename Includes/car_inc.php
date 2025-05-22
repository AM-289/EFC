<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $brand = $_POST['brand'];
    $car_color = $_POST['car_color'];
    $energy = $_POST['energy'];
    $registration = $_POST['registration'];
    $f_registration = $_POST['first_registration'];
    $seats_num = $_POST['seats_num'];
    $username=$_GET['username']??"";

    try {

        require_once 'DBlink.php';
        require_once 'car_model.php';
        require_once 'car_contr.php';

        $error = [];

        if ($error){

        }

        create_car($pdo, $brand, $energy, $car_color, $registration, $f_registration, $seats_num);
        link_cars_to_username($pdo, $username);



        header('Location: ../PHP Profile/driver_profile.php');

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

