<?php

declare(strict_types=1);

function create_car($pdo, $brand, $energy, $car_color, $registration, $f_registration) {
    set_car($pdo, $brand, $energy, $car_color, $registration, $f_registration);
}