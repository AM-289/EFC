<?php

declare(strict_types=1);

function get_user(object $pdo, string $username) {
    $query = 'SELECT * FROM users WHERE username = :username;';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);//Fetch the row inside the database
    return $result;
}

/*
function get_user_role(object $pdo, $role_type) {
    $query = 'SELECT role_type FROM roles WHERE role_type = :role_type';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':role_type', $role_type);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}*/