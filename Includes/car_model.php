<?php

declare(strict_types=1);

function set_car($pdo, $brand, $energy, $car_color, $registration, $f_registration, $seats_num) {
    $query = 'INSERT INTO cars (brand, energy, car_color, registration, f_registration, seats_num) VALUES (:brand, :energy, :car_color, :registration, :f_registration, :seats_num);';
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':brand', $brand);
    $stmt->bindParam(':energy', $energy);
    $stmt->bindParam(':car_color', $car_color);
    $stmt->bindParam(':registration', $registration);
    $stmt->bindParam(':f_registration', $f_registration);
    $stmt->bindParam(':seats_num', $seats_num);
    $stmt->execute();
}