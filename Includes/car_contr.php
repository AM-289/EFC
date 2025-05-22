<?php

declare(strict_types=1);

function create_car($pdo, $brand, $energy, $car_color, $registration, $f_registration, $seats_num) {
    set_car($pdo, $brand, $energy, $car_color, $registration, $f_registration, $seats_num);
}

function link_cars_to_username($pdo, $username) {
    set_username_in_car($pdo, $username);
}