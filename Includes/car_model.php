<?php

declare(strict_types=1);

function set_car($pdo, $brand, $energy, $car_color, $registration, $f_registration) {
    $query = 'INSERT INTO cars (brand, energy, car_color, registration, f_registration) VALUES (:brand, :energy, :car_color, :registration, :f_registration);';
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':brand', $brand);
    $stmt->bindParam(':energy', $energy);
    $stmt->bindParam(':car_color', $car_color);
    $stmt->bindParam(':registration', $registration);
    $stmt->bindParam(':f_registration', $f_registration);
    $stmt->execute();
}